<?php
/**
* Plugin Name: Social
* Plugin URI:  http://plugins.sygnoos.com/wordpress-social-buttons/
* Description: Social Buttons plugin provides you with many social buttons, effects, themes, popup and other awesome options to make your page more shareable.
* Version:     2.1.0
* Author:      Social Media Share Buttons By Sygnoos
* Author URI:  https://www.sygnoos.com
*/
if (!defined( 'ABSPATH' )) exit;
require_once(dirname(__FILE__).'/config.php');
require_once(SGMB_CLASSES.'SGMB.php');
$sgmb = new SGMB();
$sgmb->init();
