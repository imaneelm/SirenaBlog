jQuery(document).ready( function(){
	
	var mediaUploader;
	
	$('#upload-button').on('click',function(e) {
		e.preventDefault();
		if( mediaUploader ){
			mediaUploader.open();
			return;
		}
		
		mediaUploader = wp.media.frames.file_frame = wp.media({
			title: 'Choose a Profile Picture',
			button: {
				text: 'Choose Picture'
			},
			multiple: false
		});
		
		mediaUploader.on('select', function(){
			attachment = mediaUploader.state().get('selection').first().toJSON();
			$('#logo').val(attachment.url);
			$('#header-logo-preview').css('background-image','url(' + attachment.url + ')');			
			$('#photo').val(attachment.url);
			$('#about-blog-photo-preview').css('background-image','url(' + attachment.url + ')');
        });
		mediaUploader.open();
		
	});
	$('#remove-picture').on('click',function(e) {
	    e.preventDefault();
        var answer = confirm("Are you sure you want to delete your logo");
		if( answer==true ){
			$('#logo').val('');	
			$('.sirena-general-form').submit();	
			
		}
		else{
			console.log('oh, No!');
			
		}
		
	});
	
});