<?php

/********************
* dvp plugin Options*
********************/


/********************
creates function*****
********************/

function dvp_options_page() {

     global $dvp_options;
     ob_start(); ?>
	 
	 <div class="wrap">
	 <h2> donate via paypal options</h2>
	 <p> Here You can change your settings for donate via paypal plugin </p>
	 
	 <form method="post" action="options.php">
	 
	 <?php settings_fields('dvp_settings_group'); ?>
	 
	 <h4> <?php _e('Enter Your Paypal Email Id','dvp_email') ?> </h4>
	 
	 <p> <label class="description" for="dvp_settings[paypal_id]"> <?php _e('Enter Your Paypal Email id on which you want to recieve donations','dvp_email')?> </label>
	 
	 <input id="dvp_settings[paypal_id]" name="dvp_settings[paypal_id]" type="email" value="<?php echo $dvp_options['paypal_id'] ?>" /> <br />
	 
	 <?php
	 
	 if ($dvp_options[dvp_display_options] == 1 ) 
	 { $ppdonate1_checked_status ='checked';} elseif ($dvp_options[dvp_display_options] == 2 ) 
	 { $ppdonate2_checked_status ='checked';} elseif ($dvp_options[dvp_display_options] == 3 ) 
	 { $ppdonate3_checked_status ='checked';} elseif ($dvp_options[dvp_display_options] == 4 ) 
	 { $ppdonate4_checked_status ='checked';} ?>
	 <tr>
		<center><td><b><?php _e('Where you want to display paypal donation banner ?','dvp_display_options') ?></b></td> </center>
		<td><br />  <center>
<label class="checkbox" for="dvp_settings[dvp_display_options]" > </label>
 <b>Posts</b><input type="radio" id="dvp_settings[dvp_display_options]" value="1" name="dvp_settings[dvp_display_options]" <?php echo $ppdonate1_checked_status?>/><br/> 
<b>Pages</b><input type="radio" id="dvp_settings[dvp_display_options]" value ="2" name="dvp_settings[dvp_display_options]" <?php echo $ppdonate2_checked_status?>/> <br/>
 <b>Posts and Pages</b><input type="radio"  id="dvp_settings[dvp_display_options]" value ="3" name="dvp_settings[dvp_display_options]" <?php echo $ppdonate3_checked_status?>/>
 <br /><b>Don't display it </b><input type="radio" id="dvp_settings[dvp_display_options]" value ="4" name="dvp_settings[dvp_display_options]" <?php echo $ppdonate4_checked_status?> /> </center>
 
             </td>
	</tr>
						
						
	 <br /><center><input type="submit" value="Update options" class="primary-button" /></center> </br />
     </form>
	 </p>
	 <p class="submit">
	
	 </p>
	 
	 </form>
	 <div align="center"><form method="post" action="https://www.paypal.com/cgi-bin/webscr">
<div class="paypal-donations">
<input type="hidden" value="_donations" name="cmd"/>
<input type="hidden" value="admin@fastanswers.net" name="business"/>
<input type="hidden" value="http://fastanswers.net/thank-you.html" name="return"/>
<input type="hidden" value="You found the information helpful and want to say thanks? Your donation is enough to inspire us to do more. Thanks a bunch!" name="item_name"/>
<input type="hidden" value="USD" name="currency_code"/>
<input type="image" alt="PayPal � The safer, easier way to pay online." name="submit" src="https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif"/><img width="1" height="1" src="https://www.paypal.com/en_US/i/scr/pixel.gif" alt=""/></div></form></div>
	 </div>
	 <?php
	 
	 echo ob_get_clean();
}  
     function dvp_add_options_link() {
	 
	 add_options_page('donate via paypal options','donate via paypal ','manage_options','dvp-options','dvp_options_page');
	 }
	 add_action('admin_menu','dvp_add_options_link');
	 
	 function dvp_register_settings() {
	   register_setting('dvp_settings_group','dvp_settings');
	 }
	 
	 add_action ('admin_init','dvp_register_settings');
	 
	 
	 
	 
?>