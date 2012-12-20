<?php
/*
Plugin Name: Donate via paypal
Plugin URI: http://phppoet.com/donate-via-paypal-wordpress-plugin/
Description: A wordpress plugins to add paypal donation button after each post content . It has been developed for not profiting organizations . 
Version: 1.1.9
Author: Parbat patel
Author URI: http://phppoet.com
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

include ('dvp-scripts.php');

/**********************
*include other files***
**********************/

include ('dvp-widget.php');//it creates widget for plugin
include ('dvp-adminsettings.php');

/**********************
*Create Plugin links***
**********************/

include ('dvp-pluginlinks.php');

/**********************
*include function file*
**********************/

include ('dvp-functions.php');

/**********************
*include plugin options page*
**********************/

include ('dvp-plugin-options.php');


?>