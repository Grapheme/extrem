<?php


$filePath = getcwd().'/temporary/'.$_GET['file'];
if(file_exists($filePath)):
	header('Pragma: public');
	header('Expires: 0');
	header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
	header('Last-Modified: '.gmdate ('D, d M Y H:i:s', filemtime($filePath)).' GMT');
	header('Cache-Control: private',false);
	if($FileSize = getimagesize($filePath)) :
		header('Content-type: '.$FileSize['mime']);
	else:
		header('Content-type: image/png');
	endif;
	header('Content-Disposition: attachment; filename="'.basename($filePath).'"');
	header('Content-Transfer-Encoding: binary');
	header('Content-Length: '.filesize($filePath));
	header('Connection: close');
	readfile($filePath);
	exit();
else:
	header("HTTP/1.1 404 Not Found");      
	header("Status: 404 Not Found");
	echo "Ошибка 404";
endif;