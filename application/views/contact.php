
        <div id="main" class="content">
            <div class="contact-container">
	            <h3>Get in Touch</h3>
                <div class="contact-info-wrap">
				<div class="contact-info"><span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-mobile fa-stack-1x fa-inverse"></i>
                </span> Abyssal 1 : - </div>
                <div class="contact-info"><span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-mobile fa-stack-1x fa-inverse"></i>
                </span> Abyssal 2 : - </div>
                </div>

                <p>If you have something in mind about us or our product, feel free to drop me a mail or directly message us. Happily if you are just passing by and simply want to say hello, then you are more than welcome.  </p>
				<h5>Thanks for your visit!!</h5>
            	<?php echo form_open("contact/post_message"); ?>
                	<input type="text" placeholder="name" name='name'>
                    <input type="text" placeholder="email" name='email'>
                    <input type="text" placeholder="phone" name='phone'>
                    <textarea name='message' placeholder="send u a message"></textarea>
                    <input type="submit" value="send" class="button button-mid button-red">
                <?php echo form_close(); ?>
            </div>
            <div class="clearfix"></div>
        </div>
    