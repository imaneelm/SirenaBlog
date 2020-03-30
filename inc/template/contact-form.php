		   <div class="contact-me">
		  <!-- <div id="contact-title"> Contact Me </div>-->
			  <form  id="SirenaContactForm" action="#" method="post" data-url="<?php echo admin_url('admin-ajax.php');?>">
					   <small class="message-error-form-message js-form-submission"> Submission in process, please wait ...</small>
					   <small class="message-error-form-message js-form-success"> message Successfully submitted, thank you!</small>
					   <small class="message-error-form-message js-form-error"> There was a problem with the contact form, please try again!</small>
					   
					  
					   	 <div class="form-element">

					      <input type="text" id="name" name="Name" placeholder="Your name ..." >
						  <small class="message-error-form-name"> Your Name is REQUIRED!</small>
						</div>
					
						 <div class="form-element">

					       <input type="email" id="email" name="e-mail" placeholder="your e-mail..." >
						  <small class="message-error-form-email"> Your email is REQUIRED!</small>
						   
						  </div>
				
						
						 <div class="form-element">

					  
						   <textarea cols=50 rows=5 id="message" name="message" ></textarea>
						  <small class="message-error-form-message"> Your message is REQUIRED!</small>
						   
						</div>
						  <div class="form-submission">
						 
					   <input type="submit" value="send">
					   
					    </div>
					   
					   
			  </form>
			</div>