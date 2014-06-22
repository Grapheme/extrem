<?php

function image_resize($src, $dst, $width, $height, $crop = 0)
{

  if(!list($w, $h) = getimagesize($src)) return "Unsupported picture type!";

  $type = strtolower(substr(strrchr($src,"."),1));
  if($type == 'jpeg') $type = 'jpg';
  switch($type){
    case 'bmp': $img = imagecreatefromwbmp($src); break;
    case 'gif': $img = imagecreatefromgif($src); break;
    case 'jpg': $img = imagecreatefromjpeg($src); break;
    case 'png': $img = imagecreatefrompng($src); break;
    default : return "Unsupported picture type!";
  }

  // resize
  if($crop){
    if($w < $width or $h < $height) return "Picture is too small!";
    $ratio = max($width/$w, $height/$h);
    $h = $height / $ratio;
    $x = ($w - $width / $ratio) / 2;
    $w = $width / $ratio;
  }
  else{
    if($w < $width and $h < $height) return "Picture is too small!";
    $ratio = min($width/$w, $height/$h);
    $width = $w * $ratio;
    $height = $h * $ratio;
    $x = 0;
  }

  $new = imagecreatetruecolor($width, $height);

  // preserve transparency
  if($type == "gif" or $type == "png"){
    imagecolortransparent($new, imagecolorallocatealpha($new, 0, 0, 0, 127));
    imagealphablending($new, false);
    imagesavealpha($new, true);
  }

  imagecopyresampled($new, $img, 0, 0, $x, 0, $width, $height, $w, $h);

  switch($type){
    case 'bmp': imagewbmp($new, $dst); break;
    case 'gif': imagegif($new, $dst); break;
    case 'jpg': imagejpeg($new, $dst); break;
    case 'png': imagepng($new, $dst); break;
  }

  imageDestroy($img);
  imageDestroy($new);

  return true;
}

function createWatermark($sourceFile, $watermarkFile, $marginLeft = 5, $marginBottom = 5, $quality = 90, $transparency = 100, $right = 1)
{
    if (!file_exists($watermarkFile)) {
        $watermarkFile = dirname(__FILE__) . "/" . $watermarkFile;
    }
    if (!file_exists($watermarkFile)) {
        return false;
    }

    $watermarkImageAttr = @getimagesize($watermarkFile);
    $sourceImageAttr = @getimagesize($sourceFile);
    if ($sourceImageAttr === false || $watermarkImageAttr === false) {
        return false;
    }

    switch ($watermarkImageAttr['mime'])
    {
        case 'image/gif':
            {
                if (@imagetypes() & IMG_GIF) {
                    $oWatermarkImage = @imagecreatefromgif($watermarkFile);
                } else {
                    $ermsg = 'GIF images are not supported';
                }
            }
            break;
        case 'image/jpeg':
            {
                if (@imagetypes() & IMG_JPG) {
                    $oWatermarkImage = @imagecreatefromjpeg($watermarkFile) ;
                } else {
                    $ermsg = 'JPEG images are not supported';
                }
            }
            break;
        case 'image/png':
            {
                if (@imagetypes() & IMG_PNG) {
                    $oWatermarkImage = @imagecreatefrompng($watermarkFile) ;
                } else {
                    $ermsg = 'PNG images are not supported';
                }
            }
            break;
        case 'image/wbmp':
            {
                if (@imagetypes() & IMG_WBMP) {
                    $oWatermarkImage = @imagecreatefromwbmp($watermarkFile);
                } else {
                    $ermsg = 'WBMP images are not supported';
                }
            }
            break;
        default:
            $ermsg = $watermarkImageAttr['mime'].' images are not supported';
            break;
    }

    switch ($sourceImageAttr['mime'])
    {
        case 'image/gif':
            {
                if (@imagetypes() & IMG_GIF) {
                    $oImage = @imagecreatefromgif($sourceFile);
                } else {
                    $ermsg = 'GIF images are not supported';
                }
            }
            break;
        case 'image/jpeg':
            {
                if (@imagetypes() & IMG_JPG) {
                    $oImage = @imagecreatefromjpeg($sourceFile) ;
                } else {
                    $ermsg = 'JPEG images are not supported';
                }
            }
            break;
        case 'image/png':
            {
                if (@imagetypes() & IMG_PNG) {
                    $oImage = @imagecreatefrompng($sourceFile) ;
                } else {
                    $ermsg = 'PNG images are not supported';
                }
            }
            break;
        case 'image/wbmp':
            {
                if (@imagetypes() & IMG_WBMP) {
                    $oImage = @imagecreatefromwbmp($sourceFile);
                } else {
                    $ermsg = 'WBMP images are not supported';
                }
            }
            break;
        default:
            $ermsg = $sourceImageAttr['mime'].' images are not supported';
            break;
    }

    if (isset($ermsg) || false === $oImage || false === $oWatermarkImage) {
        return false;
    }

    $watermark_width = $watermarkImageAttr[0];
    $watermark_height = $watermarkImageAttr[1];
    if ($right === 1) {
    	$dest_x = $marginLeft;
    	$dest_y = $marginBottom;
    } elseif ($right === 2) {
    	$dest_x = $sourceImageAttr[0] - $watermark_width - $marginLeft;
    	$dest_y = $marginBottom;
    } elseif ($right === 3) {
    	$dest_x = $sourceImageAttr[0] - $watermark_width - $marginLeft;
    	$dest_y = $sourceImageAttr[1] - $watermark_height - $marginBottom;
    } else {
    	$dest_x = $marginLeft;
    	$dest_y = $sourceImageAttr[1] - $watermark_height - $marginBottom;
    }

    if ( $sourceImageAttr['mime'] == 'image/png')
    {
        if(function_exists('imagesavealpha') && function_exists('imagecolorallocatealpha') )
        {
             $bg = imagecolorallocatealpha($oImage, 255, 255, 255, 127); // (PHP 4 >= 4.3.2, PHP 5)
             imagefill($oImage, 0, 0 , $bg);
             imagealphablending($oImage, false);
             imagesavealpha($oImage, true);  // (PHP 4 >= 4.3.2, PHP 5)
        }
    }
    if ($watermarkImageAttr['mime'] == 'image/png') {
        imagecopy($oImage, $oWatermarkImage, $dest_x, $dest_y, 0, 0, $watermark_width, $watermark_height);
    }
    else {
        imagecopymerge($oImage, $oWatermarkImage, $dest_x, $dest_y, 0, 0, $watermark_width, $watermark_height, $transparency);
    }

    switch ($sourceImageAttr['mime'])
    {
        case 'image/gif':
            imagegif($oImage, $sourceFile);
            break;
        case 'image/jpeg':
            imagejpeg($oImage, $sourceFile, $quality);
            break;
        case 'image/png':
            imagepng($oImage, $sourceFile);
            break;
        case 'image/wbmp':
            imagewbmp($oImage, $sourceFile);
            break;
    }

    imageDestroy($oImage);
    imageDestroy($oWatermarkImage);
}


$sourceFile = getcwd().'/temporary/'.$_GET['file'];
$watermarkFile = getcwd().'/img/popups/logo.png';
$watermarkFile2 = getcwd().'/img/popups/logo2.png';
$watermarkFile3 = getcwd().'/img/application/overlays/';

$pic_type = strtolower(strrchr($_GET['file'],"."));
if (true !== ($pic_error = @image_resize($sourceFile, "resized$pic_type", 600, 600, 1))) {
    echo $pic_error;
    exit;
}

$src = "resized$pic_type";

if (isset($_GET['logo-extreme']) || isset($_GET['logo-hours']) || isset($_GET['filter'])) {
	if (isset($_GET['logo-extreme'])) {
		createWatermark($src, $watermarkFile2, 20, 20, 100, 100, 2);
	}
	if (isset($_GET['logo-hours'])) {
		createWatermark($src, $watermarkFile, 20, 20, 100, 100, 4);
	}
	if (isset($_GET['filter'])) {
		createWatermark($src, $watermarkFile3.$_GET['filter'], 0, 0, 100, 20, 1);
	}
} else {
	createWatermark($src, $watermarkFile, 20, 20, 100, 100, 1);
}

header('Pragma: public');
header('Expires: 0');
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
header('Last-Modified: '.gmdate ('D, d M Y H:i:s', filemtime($src)).' GMT');
header('Cache-Control: private',false);
if($FileSize = getimagesize($src)) :
	header('Content-type: '.$FileSize['mime']);
else:
	header('Content-type: image/png');
endif;
header('Content-Disposition: attachment; filename="'.basename($src).'"');
header('Content-Transfer-Encoding: binary');
header('Content-Length: '.filesize($src));
header('Connection: close');
readfile($src);

