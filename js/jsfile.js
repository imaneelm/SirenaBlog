
	
	$(document).ready(function(){

         $(".bar").click(function(){
			 var $list=$('nav ul');
			 $list.toggle(100);

             
        });
		$("#l span").click(function(){
			
			 var $list1=$('#l span:hover+ul');
			 var $calendar=$('#l span:hover+#calendar_wrap');
			 var $tags=$('#l span:hover+.tagcloud');
			 var $social=$('#l span:hover+.social-media-icons');
			 var $menu=$('#l span:hover+.menu-navigation-container');
			 var $contact=$('#l span:hover+.textwidget');
			 var $gallery=$('#l span:hover~#gallery-1');
			 var $img=$('#l span:hover+a .image');
			 var $audio=$('#l span:hover~.mejs-container');
			 var $video=$('#l span:hover~.wp-video');
			 $list1.toggle(100);
			 $calendar.toggle(100);
             $tags.toggle(100);
             $social.toggle(100);
			 $menu.toggle(100);
			 $contact.toggle(100);
			 $gallery.toggle(100)
			 $img.toggle(100);
			 $audio.toggle(100);
			 $video.toggle(100);
        });
		
			/* contact form submission */
	$('#SirenaContactForm').on('submit', function(e){

		e.preventDefault();
        
		$('.js-form-success').hide();
		$('.js-form-error').hide();
		$('.error_form').removeClass('error_form');

		
		var form = $(this),
				name = form.find('#name').val(),
				email = form.find('#email').val(),
				message = form.find('#message').val(),
				ajaxurl = form.data('url');

		if( name === '' ){
			$('#name').addClass('error_form');
			$('.message-error-form-email').hide();
			$('.message-error-form-message').hide();
			$('.message-error-form-name').toggle(100);
			
			return;
		}
		if( email === '' ){
			$('#email').addClass('error_form');
			$('.message-error-form-name').hide();
			$('.message-error-form-message').hide();
			$('.message-error-form-email').toggle(100);
			return;
		}
		if( message === '' ){
			$('#message').addClass('error_form');
			$('.message-error-form-name').hide();
			$('.message-error-form-email').hide();
			$('.message-error-form-message').toggle(100);
			return;
		}
		
		form.find('input, textarea').attr('disabled','disabled');
		$('.js-form-submission').slideDown(300);


		$.ajax({
			
			url : ajaxurl,
			type : 'post',
			data : {
				
				name : name,
				email : email,
				message : message,
				action: 'sirena_save_user_contact_form'
				
			},
			error : function( response ){
				console.log(response);
			},
			success : function( response ){
				if( response ==0 ){
					$('.js-form-submission').hide();					
					$('.js-form-error').slideDown(300);
					form.find('input, textarea').removeAttr('disabled');
				}else {
					$('.js-form-submission').hide();
					$('.message-error-form-name').hide();
					$('.message-error-form-email').hide();
					$('.message-error-form-message').hide();
					$('.js-form-success').slideDown(300);
					form.find('input[type="text"],input[type="email"], textarea').removeAttr('disabled').val('');
					form.find('input[type="submit"],input[type="email"], textarea').removeAttr('disabled');
				}
			}
			
		});

	});

});


	   $('.owl-carousel').owlCarousel({
       loop:true,
       margin:10,
       responsiveClass:true,
      responsive:{
        0:{
            items:1,
            nav:false
        },
        600:{
            items:1,
            nav:false
        },
        1000:{
            items:2,
            nav:false,
        }
    }
     })
	 
var slideIndex = 0;
showSlides();
function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1; }
   slides[slideIndex-1].style.display = "block";  
   s= setTimeout(showSlides, 3000); // Change image every 2 seconds
}

//contact form submission


