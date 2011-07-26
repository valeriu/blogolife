<?php
/**
 * WPLOOK functions and definitions
 *
 * @package wplook
 * @subpackage vip
 * @since vip 1.0
 */
 error_reporting(E_ALL & ~E_NOTICE);
 
// VARIABLES
$themename = "Vip";									//Theme Name
$themever = "1.0";											//Theme version
$fwver = "1.0";												//Framework version
$shortname = "wpl";											//Shortname 
$manualurl = get_template_directory_uri() . '/docs/documentation.pdf';	//Manual Url


// Set path to WPLOOK Framework and theme specific functions

$be_path = TEMPLATEPATH . '/functions/be/';									//BackEnd Path
$fe_path = TEMPLATEPATH . '/functions/fe/';									//FrontEnd Path
$be_pathimages = get_template_directory_uri() . '/functions/be/images';		//BackEnd Path
$fe_pathimages = get_template_directory_uri() . '';							//FrontEnd Path




//Include Framework [BE]
require_once ($be_path . 'fw-setup.php');					// Init
require_once ($be_path . 'fw-options.php');					// Framework Init

// Include Theme specific functionality [FE] 
require_once ($fe_path . 'setup.php');						// Base Init
require_once ($fe_path . 'widgets-init.php');				// Init widget FE
//require_once ($fe_path . 'excerpt.php');					// Trim Text
require_once ($fe_path . 'headerdata.php');					// Include css and js
require_once ($fe_path . 'comment.php');						// Comments
//require_once ($fe_path . 'tab-widget.php');					// Tab widget FE
//require_once ($fe_path . 'advertising.php');				// Advertising
?>