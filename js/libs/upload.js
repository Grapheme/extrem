/*  Author: Grapheme Group
 *  http://grapheme.ru/
 */

var uploadImage = uploadImage || {};

uploadImage.minSize = 640;
uploadImage.half_resolution = 1;
uploadImage.changeStatus = false;

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
var upload = document.getElementById('selectAvatar');
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
						var img_width = img.width;
						var img_height = img.height;
						uploadImage.half_resolution = 1;
						if(img_width >= img_height){
								uploadImage.half_resolution = Math.round(img_width/uploadImage.minSize);
						}else{
							uploadImage.half_resolution = Math.round(img_height/uploadImage.minSize);
						}
						img_width = Math.round(img_width/uploadImage.half_resolution);
						img_height = Math.round(img_height/uploadImage.half_resolution);
						$("#HolderAvatar").append(img).css({width:img_width,height:img_height});
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
							$(preview).find("div.preview-container").empty().append(img);
							$(preview).find("div.preview-container img").css({display:'block',visibility:'visible'});
							$(".crop-change-avatar").removeClass('invisible');
							uploadImage.jcrop_api.animateTo([uploadImage.center_x-200,uploadImage.center_y-200,uploadImage.center_x+200,uploadImage.center_y+200]);
						})
					}
				};
				reader.readAsDataURL(file);
				return false;
			}else{
				$("#uploadprogress").addClass('hidden').html(0);
				$("div.div-select-uploading-image").removeClass('hidden').after('<div class="msg-alert error">Размер более 15Мб</div>');
			}
		}else{
			$("#uploadprogress").addClass('hidden').html(0);
			$("div.div-select-uploading-image").removeClass('hidden').after('<div class="msg-alert error">Формат файла не поддерживается</div>');
		}
	};
}
$(function(){
	$("#select-image").click(function(){
		uploadImage.changeStatus = false;
		$("form.form-save-avatar").find("input:hidden").val('');
		$("form.form-save-avatar").find('input.input-select-avatar').click();
	});
	$("a.a-change-uploading-image").click(function(){
		if($("div.msg-alert").exists() == true){
			$("div.msg-alert").remove();
		}
		refreshCropBox();
		uploadImage.changeStatus = true;
		var file = $(".destination-photo").attr('src');
		uploadImage.changeMiniature(file.replace(/thumbnail/,'photo'));
	})
	$(".cancel-crop-avatar").click(function(){$("form.form-save-avatar").find("input:hidden").val('');refreshCropBox();})
	function refreshCropBox(){
		$("div.msg-alert").remove();
		$("#HolderAvatar").empty();
		if(uploadImage.changeStatus == true){
			$("input.input-select-avatar").val('');
		}
		$(".crop-change-avatar").addClass('invisible');
	}
	$("form.form-save-avatar .btn-submit").click(function(event){
		$(this).addClass('loading');
		refreshCropBox();
		$("form.form-save-avatar").ajaxSubmit(uploadImage.singlePhotoOption);
		return false;
	});
	$(".a-remove-user-avatar").click(function(){
		if(confirm('Вы уверены, что хотите удалить фотографию?') == false){return false;}
		var _this = this;
		$.ajax({
			url: $(_this).attr('data-action'),
			type: 'POST',dataType: 'json',
			beforeSend: function(){
				$(".div-select-uploading-image").addClass('hidden');
				$(".div-select-uploading-image a").addClass('hidden');
				$(".div-select-uploading-image").before('<span class="btn-loading" style="margin: 29px; display:block" type="button"><i class="fa fa-refresh fa-spin"></i> Удаление</span>');
			},
			success: function(data,textStatus,xhr){
				setTimeout(function(){
					if(data.status == true){
						$("img.destination-photo").attr('src',data.responsePhotoSrc);
						$(".a-select-uploading-image").html('Загрузить фотографию').removeClass('hidden');
						$(".div-select-uploading-image").removeClass('hidden');
						$(".btn-loading").remove();
					}
				},1000);
			},
			error: function(xhr,textStatus,errorThrown){
				$(".div-select-uploading-image").removeClass('hidden');
			}
		});
	});
});