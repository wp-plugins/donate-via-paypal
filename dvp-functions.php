<?php
/*************************************************************
*This file contains function for donate via paypal plugins*******
*************************************************************/
function dvp_add_content($content) {
global $dvp_options;
if ($dvp_options['dvp_display_options'] == 1 ) {
$content_type=is_single(); 
} elseif ($dvp_options['dvp_display_options'] == 2 ) {
$content_type=is_page(); 
} elseif ($dvp_options['dvp_display_options'] == 3 ) {
$content_type=is_singular(); }



if ($content_type) {

$extra_content= '  

<center><b>' . $dvp_options['paypal_widget_textarea'] . ' </b></center>
<div align="center"><form method="post" action="https://www.paypal.com/cgi-bin/webscr">
<div class="paypal-donations">
<input type="hidden" value="_donations" name="cmd"/>
<input type="hidden" value="' . $dvp_options['paypal_id'] . '" name="business"/>
<input type="hidden" name="currency_code" value="' . $dvp_options['dvp_seller_country'] . '">
<input type="hidden" name="return" value="' . $dvp_options['dvp_return_url'] . '">
<input type="hidden" value="You found the information helpful and want to say thanks? Your donation is enough to inspire us to do more. Thanks a bunch!" name="item_name"/>
<input type="hidden" value="USD" name="currency_code"/>
<input type="image" alt="PayPal – The safer, easier way to pay online." name="submit" src="https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif"/><img width="1" height="1" src="https://www.paypal.com/en_US/i/scr/pixel.gif" alt=""/></div></form></div>

';
$content .= $extra_content;
}

return $content;
}

add_filter('the_content','dvp_add_content');



?>