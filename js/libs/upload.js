/*  Author: Grapheme Group
 *  http://grapheme.ru/
 */

var uploadImage = uploadImage || {};

uploadImage.changeStatus = false;
var acceptedTypes = {'image/png': true,'image/jpeg': true,'image/gif': true};
var maxFileSize = 15728640;
var flag = 'save';
var path;

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
			if(response.hasOwnProperty('req') && response.req.length > 3){
				if( flag === 'share' ) {
					path = window.location.protocol + '//' + window.location.host + '/download.php?file='+response.downloadPhotoSrc+response.req;
					$('.app-share-btns').addClass('active');
					var $vk = $('.app-share-vk');
					var $fb = $('.app-share-fb');
					var $od = $('.app-share-od');
					var vkHref = $vk.attr('href').replace('URL', window.location.protocol + '//' + window.location.host).replace('IMG_PATH', path);
					var fbHref = $fb.attr('href').replace('URL', window.location.protocol + '//' + window.location.host).replace('IMG_PATH', path);
					var odHref = $od.attr('href').replace('URL', path);
					$vk.attr('href', vkHref);
					$fb.attr('href', fbHref);
					$od.attr('href', odHref);

					return;
				}
				var hiddenIFrameID = 'hiddenDownloader',
			        iframe = document.getElementById(hiddenIFrameID);
			    if (iframe === null) {
			        iframe = document.createElement('iframe');
			        iframe.id = hiddenIFrameID;
			        iframe.style.display = 'none';
			        document.body.appendChild(iframe);
			    }
			    iframe.src = 'download.php?file='+response.downloadPhotoSrc+response.req;
			    console.log(response.downloadPhotoSrc+response.req);
			} else {
				//only upload files to the server and show message
				$('#load-photo').addClass('uploaded');
				$('button.photo-save').html('Отправить').removeClass('disabled');
				window.scrollTo(0, 0);
			}
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
						$('.logo-ext, .logo-hou').addClass('active');
						$("#HolderPhoto").html(img);
						$("#HolderPhoto").parent().css('z-index', '3');
						$("#load-overlay").removeClass('hidden').height($('.main-wrapper').height() + 100);
						$("#load-photo").removeClass('hidden');
						var img_width = img.width;
						var img_height = img.height;

						if(img_height < img_width) {
							$('#HolderPhoto img').css('height', '100%');
						} else {
							$('#HolderPhoto img').css('width', '100%');
						}
						$( "#HolderPhoto img" ).draggable({
							cursor: "move",
							drag: function( event, ui ) {
								var parentPos = $('#HolderPhoto').offset();
								var childPos = $('#HolderPhoto img').offset();
								var posInput = $('input[name="position"]');

								if (ui.position.top >= '0') {
									ui.position.top = '0';
								}
								if (-ui.position.top >= $('#HolderPhoto img').height() - $('#HolderPhoto').height()) {
									ui.position.top = -($('#HolderPhoto img').height() - $('#HolderPhoto').height());
								}
								if (ui.position.left >= '0') {
									ui.position.left = '0';
								}
								if (-ui.position.left >= $('#HolderPhoto img').width() - $('#HolderPhoto').width()){
									ui.position.left = -($('#HolderPhoto img').width() - $('#HolderPhoto').width());
								}
								posInput.val(ui.position.top + ', ' + ui.position.left);
							}
						});

						$('input[name=width]').val(parseInt($('#HolderPhoto img').css('width')));
						$('input[name=height]').val(parseInt($('#HolderPhoto img').css('height')));
					}
				};
				reader.readAsDataURL(file);
				return false;
			}
		}
	};
}
$(function(){
	$(".select-image, .upload-zone, .new-photo span").click(function(){
		uploadImage.changeStatus = false;
		$("#selectPhoto").click();
	});
	$("#form-photo-save button").click(function(event){
		if( !$(this).hasClass('disabled') ) {
			$(this).addClass('disabled');
			flag = 'save';
			$("#form-photo-save").ajaxSubmit(uploadImage.singlePhotoOption);
			return false;
		}
	});
	$("#appShare").click(function(event){
		flag = 'share';
		event.preventDefault();
		$("#form-photo-save").ajaxSubmit(uploadImage.singlePhotoOption);

    	$.ajax({
    		url: "/ajax/increasecounter",
    		type: 'post'
    	});

		return false;
	});
	$('.logo-ext .add').click( function(){
		var $parent = $(this).parent();		
		$parent.removeClass('not-vis');
		$('input[name="logo-extreme"]').val("yes");
	});
	$('.logo-ext .remove').click( function(){
		var $parent = $(this).parent();		
		$parent.addClass('not-vis');
		$('input[name="logo-extreme"]').val("no");
	});
	$('.logo-hou .add').click( function(){
		var $parent = $(this).parent();		
		$parent.removeClass('not-vis');
		$('input[name="logo-hours"]').val("yes");
	});
	$('.logo-hou .remove').click( function(){
		var $parent = $(this).parent();		
		$parent.addClass('not-vis');
		$('input[name="logo-hours"]').val("no");
	});

});