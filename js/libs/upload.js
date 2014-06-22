/*  Author: Grapheme Group
 *  http://grapheme.ru/
 */

var uploadImage = uploadImage || {};

uploadImage.changeStatus = false;
var acceptedTypes = {'image/png': true,'image/jpeg': true,'image/gif': true};
var maxFileSize = 15728640;

uploadImage.singlePhotoOption = {
	target: null, type: 'post', dataType:'json',
	beforeSubmit: function(formData,jqForm,options){
		if(uploadImage.changeStatus){
			uploadImage.setProgress(0,true);
			return true;
		}else{
			return false;
		}
	},
	uploadProgress: function(event,position,total,percentComplete){
		uploadImage.setProgress(percentComplete,null);
	},
	success: function(response,statusText,xhr,jqForm){
		//uploadImage.setProgress(100,false);
		if(response.status == true){
			window.open('/download.php?file='+response.downloadPhotoSrc);
		}
	}
}
uploadImage.setProgress = function(value,show){
	$("#uploadprogressvalue").attr('aria-valuetransitiongoal',value).attr('aria-valuenow',value).css('width',value+'%').html(value+"%");
	if(show == true){
		$("#uploadprogressbar").removeClass('hidden');
	}else if(show == false){
		$("#uploadprogressbar").addClass('hidden');
	}
}
var upload = document.getElementById('selectPhoto');
if(upload !== null){
	upload.onchange = function(e){
		e.preventDefault();
		var file = upload.files[0],reader = new FileReader();
		if(acceptedTypes[file.type] === true){
			if(file.size <= maxFileSize){
				reader.onload = function(event){
					var img = new Image();
					img.src = event.target.result;
					img.onload = function(){
						uploadImage.changeStatus = true;
						$("#HolderPhoto").html(img);
						$("#load-overlay").removeClass('hidden');
						$("#load-photo").removeClass('hidden');
					}
				};
				reader.readAsDataURL(file);
				return false;
			}
		}
	};
}
$(function(){
	$(".select-image").click(function(){
		uploadImage.changeStatus = false;
		$("#selectPhoto").click();
	});
	$("#form-photo-save button").click(function(event){
		$("#form-photo-save").ajaxSubmit(uploadImage.singlePhotoOption);
		return false;
	});
});