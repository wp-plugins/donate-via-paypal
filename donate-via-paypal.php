<?php
/*
Plugin Name: Donate via paypal
Plugin URI: http://coding.fastanswers.net/donate-via-paypal-wordpress-plugin/
Description: A wordpress plugins to add paypal donation button after each post content . It has been developed for not profiting organizations . 
Version: 1.1.0
Author: Parbat patel
Author URI: http://coding.fastanswers.net
Author admin@fastanswers.net
License: GPLv2
*/

/**********************
* Global variables  ***
**********************/
$dvp_prefix = 'dvp_';
$dvp_plugin_name="My First Plugin";
$dvp_options = get_option('dvp_settings'); // Retrive our plugins options from database

/**********************
*include scripts file*
**********************/

include ('includes/dvp-scripts.php');

/**********************
*include other files***
**********************/

include ('includes/dvp-widget.php');//it creates widget for plugin
include ('includes/dvp-adminsettings.php');

/**********************
*Create Plugin links***
**********************/

include ('includes/dvp-pluginlinks.php');

/**********************
*include function file*
**********************/

include ('includes/dvp-functions.php');

/**********************
*include plugin options page*
**********************/

include ('includes/dvp-plugin-options.php');


?>