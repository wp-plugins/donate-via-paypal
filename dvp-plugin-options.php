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
	
	
	 
	 <form method="post" action="options.php">
	 <table class="widefat">
	 <?php settings_fields('dvp_settings_group'); ?>
	 
	<thead>
        <tr>
          <th scope="col" style="width: 40%;"><?php _e('donate via paypal options'); ?></th><th></th>
        </tr>
      </thead>
	 
	<tr><td> <p> <label class="description" for="dvp_settings[paypal_id]"> <?php _e('Enter Your Paypal Email id on which you want to recieve donations','dvp_email')?> </label> </td>
	 <td>
	 <input id="dvp_settings[paypal_id]" name="dvp_settings[paypal_id]" type="email" value="<?php echo $dvp_options['paypal_id'] ?>" /> <br />
	</td> </tr>
	<tr><td> <p> <label class="description" for="dvp_settings[paypal_widget_textarea]"> <?php _e('Enter the text you want to display above donation banner','paypal_widget_text')?></td> </label> 
	 
	<td> <textarea id="dvp_settings[paypal_widget_textarea]" name="dvp_settings[paypal_widget_textarea]" type="text" value="<?php echo $dvp_options['paypal_widget_textarea'] ?>" cols=30 rows=04> <?php echo $dvp_options['paypal_widget_textarea'] ?>  </textarea> </td>
	 
	 </tr>
	 
	 
	 

	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 <?php
	 
	 if ($dvp_options[dvp_display_options] == 1 ) 
	 { $ppdonate1_checked_status ='checked';} elseif ($dvp_options[dvp_display_options] == 2 ) 
	 { $ppdonate2_checked_status ='checked';} elseif ($dvp_options[dvp_display_options] == 3 ) 
	 { $ppdonate3_checked_status ='checked';} elseif ($dvp_options[dvp_display_options] == 4 ) 
	 { $ppdonate4_checked_status ='checked';} ?>
	 <tr>
		<td><b><?php _e('Where you want to display paypal donation banner ?','dvp_display_options') ?></b></td> </center>
		<td><br />  
<label class="checkbox" for="dvp_settings[dvp_display_options]" > </label>
 Posts<input type="radio" id="dvp_settings[dvp_display_options]" value="1" name="dvp_settings[dvp_display_options]" <?php echo $ppdonate1_checked_status?>/><br/> 
Pages<input type="radio" id="dvp_settings[dvp_display_options]" value ="2" name="dvp_settings[dvp_display_options]" <?php echo $ppdonate2_checked_status?>/> <br/>
Posts and Pages<input type="radio"  id="dvp_settings[dvp_display_options]" value ="3" name="dvp_settings[dvp_display_options]" <?php echo $ppdonate3_checked_status?>/>
 <br />Don't display it<input type="radio" id="dvp_settings[dvp_display_options]" value ="4" name="dvp_settings[dvp_display_options]" <?php echo $ppdonate4_checked_status?> /> 
 
             </td>
	</tr> <br /> <br /> <br />
			<tr>	<td> <b>Your Prefered currency to recieve payment</b> </td> <td> <select id="dvp_settings[dvp_seller_country]" name="dvp_settings[dvp_seller_country]"> 
<OPTION VALUE="USD" <?php if($dvp_options['dvp_seller_country'] == "USD") { echo 'selected';}?>>United states dollar
<OPTION VALUE="EUR" <?php if($dvp_options['dvp_seller_country'] == "EUR") { echo 'selected';}?>>Europian Euro
<OPTION VALUE="AUD" <?php if($dvp_options['dvp_seller_country'] == "AUD") { echo 'selected';}?>>Australian dollar
<OPTION VALUE="NZD" <?php if($dvp_options['dvp_seller_country'] == "NZD") { echo 'selected';}?>>New Zealand Dollar
<OPTION VALUE="BRL" <?php if($dvp_options['dvp_seller_country'] == "BRL") { echo 'selected';}?>>Brazilian Real
<OPTION VALUE="CAD" <?php if($dvp_options['dvp_seller_country'] == "CAD") { echo 'selected';}?>>Canadian Dollar
<OPTION VALUE="CZK" <?php if($dvp_options['dvp_seller_country'] == "CZK") { echo 'selected';}?>>Czech Koruna
<OPTION VALUE="DKK" <?php if($dvp_options['dvp_seller_country'] == "DKK") { echo 'selected';}?>>Danish Krone
<OPTION VALUE="HKD" <?php if($dvp_options['dvp_seller_country'] == "HKD") { echo 'selected';}?>>Hongkong Dollar
<OPTION VALUE="HUF" <?php if($dvp_options['dvp_seller_country'] == "HUF") { echo 'selected';}?>>Hungarian Forint
<OPTION VALUE="ILS" <?php if($dvp_options['dvp_seller_country'] == "ILS") { echo 'selected';}?>>Israeli New Sheqel
<OPTION VALUE="JPY" <?php if($dvp_options['dvp_seller_country'] == "JPY") { echo 'selected';}?>>Japanese Yen
<OPTION VALUE="SEK" <?php if($dvp_options['dvp_seller_country'] == "SEK") { echo 'selected';}?>>Swedish Krona
<OPTION VALUE="THB" <?php if($dvp_options['dvp_seller_country'] == "THB") { echo 'selected';}?>>Thai Baht
<OPTION VALUE="SGD" <?php if($dvp_options['dvp_seller_country'] == "SGD") { echo 'selected';}?>>Singapore Dollar
<OPTION VALUE="CHF" <?php if($dvp_options['dvp_seller_country'] == "CHF") { echo 'selected';}?>>Swiss Franc
<OPTION VALUE="GBP" <?php if($dvp_options['dvp_seller_country'] == "GBP") { echo 'selected';}?>>Pound Sterling
<OPTION VALUE="MYR" <?php if($dvp_options['dvp_seller_country'] == "MYR") { echo 'selected';}?>>Malaysian Ringgit
<OPTION VALUE="MXN" <?php if($dvp_options['dvp_seller_country'] == "MXN") { echo 'selected';}?>>Mexican Peso
<OPTION VALUE="NOK" <?php if($dvp_options['dvp_seller_country'] == "NOK") { echo 'selected';}?>>Norwegian Krone
<OPTION VALUE="PLN" <?php if($dvp_options['dvp_seller_country'] == "PLN") { echo 'selected';}?>>Polish Zloty
<OPTION VALUE="TWD" <?php if($dvp_options['dvp_seller_country'] == "TWD") { echo 'selected';}?>>Taiwan New Dollar
<OPTION VALUE="TRY" <?php if($dvp_options['dvp_seller_country'] == "TRY") { echo 'selected';}?>>Turkish Lira

</select>	</td>	</tr>
		<tr><td><label class="description" for="dvp_settings[dvp_return_url]"> <?php _e('<b>Your Paypal Return Url</b>','dvp_return_url')?> </td></label> 
 <td>
	 <input id="dvp_settings[dvp_return_url]" name="dvp_settings[dvp_return_url]" type="url" value="<?php echo $dvp_options['dvp_return_url'] ?>" size="80" /> <br />
</td> </tr>

</table>		
	 <br /><center><input type="submit" value="Update options" class="primary-button" /></center> </br />
     </form>
	 </p>  <br />

	
	 </p>
	 
	 </form>
	 <div align="center"><form method="post" action="https://www.paypal.com/cgi-bin/webscr">
<div class="paypal-donations">
<input type="hidden" value="_donations" name="cmd"/>
<input type="hidden" value="admin@fastanswers.net" name="business"/>
<input type="hidden" value="http://fastanswers.net/thank-you.html" name="return"/>
<input type="hidden" value="You found the information helpful and want to say thanks? Your donation is enough to inspire us to do more. Thanks a bunch!" name="item_name"/>
<input type="hidden" value="USD" name="currency_code"/>
<input type="image" alt="PayPal – The safer, easier way to pay online." name="submit" src="https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif"/><img width="1" height="1" src="https://www.paypal.com/en_US/i/scr/pixel.gif" alt=""/></div></form></div>
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
	 
	 function dvp_plugin_action_links( $links, $file ) {
	if ( $file == plugin_basename( dirname(__FILE__).'/donate-via-paypal.php' ) ) {
		$links[] = '<a href="admin.php?page=dvp-options">'.__('Settings').'</a>';
	}

	return $links;
}

add_filter( 'plugin_action_links', 'dvp_plugin_action_links', 10, 2 );
	 
	 
?>