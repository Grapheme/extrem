<?php

$json_request['status'] = FALSE;
$json_request['downloadPhotoSrc'] = '';

if(isset($_FILES['file']['tmp_name']) && $_FILES['file']['error'] == 0):
	$json_request = manupulationWithPhotoUpload();
endif;


function manupulationWithPhotoUpload(){
	
	$uploaddir  = getcwd().'/temporary/';
	$uploadfile = $uploaddir.basename($_FILES['file']['name']);
	
	$result['status'] = FALSE;
	$result['downloadPhotoSrc'] = '';
	
	if(move_uploaded_file($_FILES['file']['tmp_name'],$uploadfile)):
	    $result['status'] = TRUE;
	    $result['downloadPhotoSrc'] = basename($_FILES['file']['name']);
	endif;
	return $result;
}

$request = "";
if (isset($_POST['logo-extreme']) && $_POST['logo-extreme'] !== 'no') {
	$request .= '&logo-extreme=1';
}
if (isset($_POST['logo-hours']) && $_POST['logo-hours'] !== 'no') {
	$request .= '&logo-hours=1';
}
if (isset($_POST['filter']) && $_POST['filter'] !== 'no') {
	switch($_POST['filter']){
	    case 'yamberi': $request .= '&filter=filter-yamberi.png'; break;
	    case 'tropic': $request .= '&filter=filter-tropic.png'; break;
	    case 'strawberry': $request .= '&filter=filter-strawberry.png'; break;
	    case 'pistachio': $request .= '&filter=filter-pistachio.png'; break;
	    case 'whitechokolate': $request .= '&filter=filter-whitechokolate.png'; break;
	    case 'blackcurrant': $request .= '&filter=filter-blackcurrant.png'; break;
	}
}

$json_request['req'] = $request;

echo json_encode($json_request);






