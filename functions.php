<?php
/**
 * WPLOOK functions and definitions
 *
 * @package wplook
 * @subpackage BlogoLife
 * @since BlogoLife 1.0
 */
//error_reporting(E_ALL & ~E_NOTICE);

// VARIABLES
$themename = "BlogoLife";									//Theme Name
$themever = "1.8";											//Theme version
$fwver = "1.1";												//Framework version
$shortname = "wpl";											//Shortname 


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
require_once ($fe_path . 'headerdata.php');					// Include css and js
require_once ($fe_path . 'comment.php');						// Comments


// translation-ready
	load_theme_textdomain( 'wplook', TEMPLATEPATH . '/languages' );
	$locale = get_locale();
	$locale_file = TEMPLATEPATH . "/languages/$locale.php";
	if ( is_readable( $locale_file ) )
		require_once( $locale_file );	
?>