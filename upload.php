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

echo json_encode($json_request);