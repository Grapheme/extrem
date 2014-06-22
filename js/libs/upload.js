/*  Author: Grapheme Group
 *  http://grapheme.ru/
 */

var uploadImage = uploadImage || {};

uploadImage.minSize = 640;
uploadImage.half_resolution = 1;

var acceptedTypes = {'image/png': true,'image/jpeg': true,'image/gif': true};
var maxFileSize = 15728640;

uploadImage.changeMiniature = function(file_path){
	
	var miniature = new Image();
	miniature.src = file_path;
	miniature.onload = function(){
		uploadImage.half_resolution = 1;
		var img_width = miniature.width/uploadImage.half_resolution;
		var img_height = miniature.height/uploadImage.half_resolution;
		$("#HolderAvatar").append(miniature).css({width:img_width,height:img_height});
		uploadImage.center_x = Math.round(img_width/2);
		uploadImage.center_y = Math.round(img_height/2);
		$("#HolderAvatar img").Jcrop({
			setSelect: [uploadImage.center_x-200,uploadImage.center_y-200,uploadImage.center_x+200,uploadImage.center_y+200],
			onChange: updatePreview,
			onSelect: updatePreview,
			bgOpacity: 0.5,
			aspectRatio:xsize/ysize,
		},function(){
			var bounds = this.getBounds();
			boundx = bounds[0];
			boundy = bounds[1];
			uploadImage.jcrop_api = this;
			$(preview).appendTo(uploadImage.jcrop_api.ui.holder);
			$(preview).find("div.preview-container").empty().append(miniature);
			$(preview).find("div.preview-container img").css({display:'block',visibility:'visible'});
			$(".crop-change-avatar").removeClass('invisible');
			uploadImage.jcrop_api.animateTo([uploadImage.center_x-200,uploadImage.center_y-200,uploadImage.center_x+200,uploadImage.center_y+200]);
		})
	}
}


uploadImage.singlePhotoOption = {
	target: null, type: 'post', dataType:'json',
	beforeSubmit: function(formData,jqForm,options){
		if($("input.input-select-avatar").emptyValue() == false || uploadImage.changeStatus == true){
			$("div.div-select-uploading-image").addClass('hidden')
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
		$("button.btn-loading").removeClass('loading');
		uploadImage.setProgress(100,false);
		$("div.div-select-uploading-image").removeClass('hidden');
		if(response.status == true){
			$("img.destination-photo").attr('src',response.responsePhotoSrc);
			$("a.a-select-uploading-image").html('Изменить фотографию');
			if($("a.a-remove-user-avatar").exists() == true && $("a.a-remove-user-avatar").hasClass('hidden')){
				$("a.a-remove-user-avatar").removeClass('hidden');
			}
			if($("a.a-change-uploading-image").exists() == true && $("a.a-change-uploading-image").hasClass('hidden')){
				$("a.a-change-uploading-image").removeClass('hidden');
			}
		}else{
			uploadImage.setProgress(0,false);
			showMessage.constructor('Загрузка изображения',response.responseText);
			showMessage.smallError();
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
						$("#HolderPhoto").append(img);
						$("#load-overlay").removeClass('hidden');
						$("#load-photo").removeClass('hidden');
						var img_width = img.width;
						var img_height = img.height;

						if(img_height < img_width) {
							$('#HolderPhoto img').css('height', '800px');
						} else {
							$('#HolderPhoto img').css('width', '600px');
						}

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
		$("#selectPhoto").click();
	});
	$("#form-photo-save button").click(function(event){
		$("#form-photo-save").ajaxSubmit(uploadImage.singlePhotoOption);
		return false;
	});
});