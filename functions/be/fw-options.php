<?php
/**
 * Framework Options
 *
 * @package wplook
 * @subpackage BlogoLife
 * @since BlogoLife 1.0
*/
$options = array (

array( "name" => $themename ." Options",
	"type" => "title"),

array( "type" => "open"),

// Start Tabs
array( "name" => "Start Tabs",
		"type" => "tabs-open",
		"icon" => "layout"),

	// Home
	array( "name" => "Welcome",
			"id" => "tab_menu_0",
			"type" => "tab",
			"icon" => "layout",
			"class" => " selected first"),
	
	// General Settings
	array( "name" => "General Settings",
			"id" => "tab_menu_1",
			"type" => "tab",
			"icon" => "layout",
			"class" => ""),
	
	// Social Networking Tab
	array( "name" => "Social Networking",
			"id" => "tab_menu_2",
			"type" => "tab",
			"icon" => "layout",
			"class" => ""),
	
	// Other settings Tab
	array( "name" => "Other Settings",
			"type" => "tab",
			"id" => "tab_menu_3",
			"class" => ""),
	
	// SEO Tab
	array( "name" => "SEO",
			"type" => "tab",
			"id" => "tab_menu_4",
			"class" => ""),
	

// General setting Tab
array( "name" => "Close Tabs",
		"type" => "tabs-close",
		"icon" => "layout"),


array( "name" => "Start Container",
		"type" => "container-open",
		"icon" => "layout"),

// Home Container 0
array( "name" => "tab_content_0",
		"type" => "tabcontent-open",
		"display" => "block",
		"icon" => "layout"),

	// Home
	array( "name" => "Dear blogger,",
		"type" => "heading",
		"icon" => "layout"),
	
	array("name" => "
		 <div class=\"buy-message\"><p>First of all thank you for choosing one of Wplook Themes namely <strong>BlogoLife</strong>, your choice is greatly appreciated!</p>

<p>If you are satisfied with this theme (but not enough) we recommend you to get <a href=\"http://wplook.com/blogolifebuy\" title=\"BlogoLife PRO\">BlogoLife PRO</a> with nice and attractive features as:</p> 
<ul>
<li><strong>Integration with Nivo Slider</strong> - the world's most awesome jQuery image slider which makes it super easy to create and manage multiple sliders on your blog. You can create as many sliders as you need and include them in your posts and pages using a simple shortcode.</li>
<li><strong>Author Widget</strong> - an interesting module to get yourself  known.</li>
<li><strong>Easy to navigate between posts</strong> - with this new feature you and your visitors will navigate easier and with pleasure through the blog.</li>
<li><strong>Tabs widget</strong> - an attractive widget for your blog. 3 in 1 is the perfect match to make your blog more comfortable and more efficient in using your sidebar's space.</li>
<li><strong>Stylished post formats and post status</strong> - a great eye catching of Post Formats and post status enclosed in the dashboard and stylized with care for you.</li>
<li><strong>Share your content and analyze it in Google Analytics</strong> - this feature will give you the possibility to suit your needs in terms of social marketing.</li> 
</ul>


<p>Moreover, you will always receive timely and prompt answers at our <a href=\"http://wplook.com/support\">Support Forum</a>. </p>

<p>We remain at your disposal for any further information you may need.</p>

<p>Hope you will enjoy it.</p></div>
		  
		  
		  ",
		"type" => "infotext"),
	
	array( "name" => "Recommend us:",
		"type" => "subheader"),
	
	array("name" => " <script src=\"http://platform.twitter.com/widgets.js\" type=\"text/javascript\"></script> <a href=\"http://twitter.com/share\" class=\"twitter-share-button\" data-via=\"wplook\" data-url=\"http://wplook.com/blogolife\" data-text=\"I use BlogoLife - It is Free, simple and perfect theme for personal blogging.\" >Tweet</a><p></p>",
		"type" => "infotext"),
	
	array("name" => "<div id=\"fb-root\"></div><script src=\"http://connect.facebook.net/en_US/all.js?ver=3.2.1#xfbml=1\"></script><fb:like href=\"http://wplook.com/blogolife\" send=\"true\" width=\"580\" show_faces=\"true\" action=\"recommend\" ></fb:like>",
		"type" => "infotext"),

array( "name" => "tab_content_0",
		"type" => "tabcontent-close",
		"icon" => "layout"),
// Close Home

// General setting Tab Container 1
array( "name" => "tab_content_1",
		"type" => "tabcontent-open",
		"display" => "none",
		"icon" => "layout"),

	// General settings
	array( "name" => "General Settings",
		"type" => "heading",
		"icon" => "layout"),
	
	array( "name" => "Color scheme",
		"desc" => "Select your theme color.",
		"id" => $shortname."_css",
		"std" => "",
		"class" => "hidden",
		"options" => array(	'a' => 'Red',
							'b' => 'Pink',
							'c' => 'Blue',
							'd' => 'Black',
							'e' => 'Orange',
							'f' => 'Green'),
		"type" => "select"),
	
	array( "name" => "Main Navigation",
		"desc" => "Set the main navigation to be visible or not",
		"id" => $shortname."_menu",
		"std" => "",
		"class" => "hidden",
		"options" => array(	'a' => 'Display',
							'b' => 'Hide'),
		"type" => "select"),
		
	array( "name" => "<img src='$be_pathimages/icons/rss.png' width='16' />RSS",
		"desc" => "Url of your RSS. You may include your RSS from Feedburner",
		"id" => $shortname."_rss",
		"std" => "",
		"type" => "text"),	

	array( "name" => "Favicon URL",
		"desc" => "Upload your own favicon image (16x16px) via <a href='media-new.php' target='_blank'>Media Uploader</a>. Leave this field blank if you want to display the default favicon or you can create one by acceding <a title='Online Favicon Generator' href='http://www.favicon.cc/' target='_blank'>Favicon generator</a>.",
		"id" => $shortname."_favicon_url",
		"type" => "text",
		"std" => "$fe_pathimages/images/favicon.ico"),
	
	array( "name" => "<img src='$be_pathimages/icons/analytics.png' />Google Analytics Tracking Code",
		"desc" => "Insert the complete tracking script. Where can I <a title='Where can I find my tracking code from within my Google Analytics account?' href='http://www.google.com/support/googleanalytics/bin/answer.py?answer=55603' target='_blank'>find my tracking code</a> from within my Google Analytics account?",
		"id" => $shortname."_ga_code",
		"std" => "",
		"type" => "textarea"),
	
array( "name" => "Header Description",
		"desc" => "Insert the header description, or a banner (468x60) code.",
		"id" => $shortname."_header_desc",
		"std" => "",
		"type" => "textarea"),


array( "name" => "tab_content_1",
		"type" => "tabcontent-close",
		"icon" => "layout"),
// Close General settings


// Open Social Networking
array( "name" => "tab_content_2",
		"type" => "tabcontent-open",
		"display" => "none",
		"icon" => "layout"),

	array( "name" => "Social Networking",
		"type" => "heading",
		"icon" => "layout"),
		
array( "name" => "<img src='$be_pathimages/icons/twitter.png' width='16'  />Twitter",
		"desc" => "Insert the full URL of your <a href='http://twitter.com/wplook' target='_blank'>Twitter</a> profile.",
		"id" => $shortname."_twitter",
		"std" => "",
		"type" => "text"),

array( "name" => "<img src='$be_pathimages/icons/google-plus.png' width='16' />Google +",
		"desc" => "Insert the full URL of your <a href='https://plus.google.com/103223108676176192383/posts' target='_blank'>Google +</a> profile.",
		"id" => $shortname."_google_plus",
		"std" => "",
		"type" => "text"),
	
	array( "name" => "<img src='$be_pathimages/icons/facebook.png' width='16' />Facebook",
		"desc" => "Insert the full URL of your <a href='http://facebook.com' target='_blank'>Facebook</a> profile, page or group.",
		"id" => $shortname."_facebook",
		"std" => "",
		"type" => "text"),	
	
array( "name" => "<img src='$be_pathimages/icons/linkedin.png' width='16' />Linkedin",
		"desc" => "Insert the full URL of your <a href='http://linkedin.com/' target='_blank'>Linkedin</a> profile.",
		"id" => $shortname."_linkedin",
		"std" => "",
		"type" => "text"),

array( "name" => "<img src='$be_pathimages/icons/tumblr.png' width='16' />Tumblr",
		"desc" => "Insert the full URL of your <a href='http://www.tumblr.com' target='_blank'>Tumblr</a> profile.",
		"id" => $shortname."_tumblr",
		"std" => "",
		"type" => "text"),

array( "name" => "<img src='$be_pathimages/icons/delicious.png' width='16' />Delicious",
		"desc" => "Insert the full URL of your <a href='http://www.delicious.com/' target='_blank'>Delicious</a> profile.",
		"id" => $shortname."_delicious",
		"std" => "",
		"type" => "text"),

array( "name" => "<img src='$be_pathimages/icons/digg.png' width='16' />Digg",
		"desc" => "Insert the full URL of your <a href='http://digg.com/' target='_blank'>Digg</a> profile.",
		"id" => $shortname."_digg",
		"std" => "",
		"type" => "text"),

array( "name" => "<img src='$be_pathimages/icons/stumbleupon.png' width='16' />StumbleUpon",
		"desc" => "Insert the full URL of your <a href='http://www.stumbleupon.com/' target='_blank'>StumbleUpon</a> profile.",
		"id" => $shortname."_stumbleupon",
		"std" => "",
		"type" => "text"),

array( "name" => "<img src='$be_pathimages/icons/flickr.png' width='16' />Flickr",
		"desc" => "Insert the full URL of your <a href='http://www.flickr.com/' target='_blank'>Flickr</a> profile.",
		"id" => $shortname."_flickr",
		"std" => "",
		"type" => "text"),

array( "name" => "<img src='$be_pathimages/icons/picasa.png' width='16' />Picasa",
		"desc" => "Insert the full URL of your <a href='http://picasaweb.google.com/' target='_blank'>Picasa</a> profile.",
		"id" => $shortname."_picasa",
		"std" => "",
		"type" => "text"),

array( "name" => "<img src='$be_pathimages/icons/youtube.png' width='16' />YouTube",
		"desc" => "Insert the full URL of your <a href='http://www.youtube.com/' target='_blank'>YouTube</a> profile.",
		"id" => $shortname."_youtube",
		"std" => "",
		"type" => "text"),	

array( "name" => "<img src='$be_pathimages/icons/dribbble.png' width='16' />Dribbble",
		"desc" => "Insert the full URL of your <a href='http://dribbble.com/' target='_blank'>Dribbble</a> profile.",
		"id" => $shortname."_dribbble",
		"std" => "",
		"type" => "text"),

array( "name" => "<img src='$be_pathimages/icons/pinterest.png' width='16' />Pinterest",
		"desc" => "Insert the full URL of your <a href='http://pinterest.com/' target='_blank'>Pinterest</a> profile.",
		"id" => $shortname."_pinterest",
		"std" => "",
		"type" => "text"),
		
array( "name" => "tab_content_2",
		"type" => "tabcontent-close",
		"icon" => "layout"),
// Close Social Networking


// Open Other settings
array( "name" => "tab_content_3",
		"type" => "tabcontent-open",
		"display" => "none",
		"icon" => "layout"),

	array( "name" => "Other settings",
		"type" => "heading",
		"icon" => "layout"),
		

array( "type" => "infotext",
		"name" => "OPTIONS: <a href='widgets.php'>Widgets</a> | <a href='nav-menus.php'>Menus</a> | <a href='themes.php?page=custom-background'>Background</a> | <a href='themes.php?page=custom-header'>Header</a>"),
		

array( "name" => "tab_content_3",
		"type" => "tabcontent-close",
		"icon" => "layout"),
// Close Home page Settings

// Open SEO
array( "name" => "tab_content_4",
		"type" => "tabcontent-open",
		"display" => "none",
		"icon" => "layout"),

	// All info here
	array( "name" => "Search Engine Optimisation",
		"type" => "heading",
		"icon" => "layout"),
		
		
	array( "name" => "Meta Description",
		"desc" => "Add a custom meta description to your homepage.",
		"id" => $shortname."_meta_description",
		"std" => "",
		"type" => "textarea"),
	
	array( "name" => "Meta Keywords",
		"desc" => "Add a (comma separated) list of keywords to your homepage.",
		"id" => $shortname."_meta_keywords",
		"std" => "",
		"type" => "text"),
	
array( "name" => "tab_content_4",
		"type" => "tabcontent-close",
		"icon" => "layout"),
// Close SEO

array("name" => "Close Container",
		"type" => "container-close",
		"icon" => "layout"),

array( "type" => "close")
);


add_action('admin_head', 'wplook_admin_css');

function wplook_admin_css() {

	echo ' <link rel="stylesheet" type="text/css" media="screen" href="'.get_bloginfo('template_directory').'/functions/be/css.css" /> ';
	
	?>
	<script language="JavaScript">
		jQuery.noConflict();
		jQuery(document).ready(function($) {
	
		$(".tabs .tab[id^=tab_menu]").click(function() {
			var curMenu=$(this);
			$(".tabs .tab[id^=tab_menu]").removeClass("selected");
			curMenu.addClass("selected");
	
			var index=curMenu.attr("id").split("tab_menu_")[1];
			$(".curvedContainer .tabcontent").css("display","none");
			$(".curvedContainer #tab_content_"+index).css("display","block");
		});
	});
	</script>

<?php }
function wpl_add_admin() {
	global $options; global $themename; global $shortname;
	if ( isset ( $_GET['page'] ) && ( $_GET['page'] == basename(__FILE__) ) ) {
		if ( isset ($_REQUEST['action']) && ( 'save' == $_REQUEST['action'] ) ){
			foreach ( $options as $value ) {
				if ( array_key_exists('id', $value) ) {
					if ( isset( $_REQUEST[ $value['id'] ] ) ) {
						update_option( $value['id'], $_REQUEST[ $value['id'] ]  );
					}
					else {
						delete_option( $value['id'] );
					}
				}
			}
			header("Location: themes.php?page=".basename(__FILE__)."&saved=true");
		}else if ( isset ($_REQUEST['action']) && ( 'reset' == $_REQUEST['action'] ) ) {
			foreach ($options as $value) {
				if ( array_key_exists('id', $value) ) {
					delete_option( $value['id'] );
				}
			}
			header("Location: themes.php?page=".basename(__FILE__)."&reset=true");
		}
	}
	add_theme_page($themename." Options", 'Wplook Panel', 'edit_theme_options', 'fw-options.php', 'wpl_admin', 'http://i.wplook.com/fw-icon.jpg', '1');
}



function wpl_admin() {
	global $themename, $shortname, $options, $themever, $fwver, $manualurl;
	if (isset($_REQUEST["saved"]) && !empty($_REQUEST["saved"])) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings saved.</strong></p></div>';
	if (isset($_REQUEST["reset"]) && !empty($_REQUEST["reset"])) echo '<div id="message" class="error fade"><p><strong>'.$themename.' '.__( 'settings reset.', 'wplook' ).'</strong></p></div>';
?>

	<div id="wrap_fm"><!-- [ Header ]-->
		<div class="header_fm">
			<div class="logo_fm">wplook</div>
			<div class="frame_vers_fm">
				<div class="theme_version_fm"><?php echo $themename;?> <strong><?php echo $themever;?></strong></div>
				<div class="clear"></div>
			</div>
		</div>

		<!-- [ Top Menu ]-->
		<div class="top_menu_fm">
			<a title="BlogoLife PRO" target="_blank" class="blogolife-pro" href="http://wplook.com/blogolifebuy">BlogoLife PRO</a>
            <a title="Product help and support center" target="_blank" class="support_fm" href="http://wplook.com/support">Support</a>
		</div>
        


	<form method="post">
	<?php
	foreach ($options as $value) {
	switch ( $value['type'] ) {
	case "open":
	?> 
	<?php break; case "title": ?> 

	<!-- [ Body ]-->
	<div id="wrap_body_fm">
	<div class="tabscontainer">


	<?php break; case "close": ?> 

	<!-- start form -->
	<div class="col_100">
		<div class="col_50">
			<input id="submit" class="button-primary" name="save" type="submit" value="Save All changes" /> <input type="hidden" name="action" value="save" />
			</form>
		</div>
	 	<div class="col_50">
		 	<form method="post">
				<input class="reset" name="reset" type="submit" value="Reset to Default Settings" />
				<input type="hidden" name="action" value="reset" />
			</form>
		</div>	
		<div class="clear"></div>
	</div>
	<!-- end form -->
</div></div>



<?php break;case 'text': ?>
	<div class="name_fm"><?php echo $value['name']; ?></div>
	<div class="input_fm"><input name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_option( $value['id'] ) != "") { echo stripslashes(get_option( $value['id'] )); } else { echo $value['std']; } ?>" /></div>
	<div class="desc_fm"><small><?php echo $value['desc']; ?></small></div>

<?php break; case 'textarea':?>
	<div class="name_fm"><?php echo $value['name']; ?></div>
	<div class="input_fm"><textarea name="<?php echo $value['id']; ?>" style="height: 100px;" type="<?php echo $value['type']; ?>" cols="" rows=""><?php if ( get_option( $value['id'] ) != "") { echo stripslashes(get_option( $value['id'] )); } else { echo $value['std']; } ?></textarea></div>
	<div class="desc_fm"><small><?php echo $value['desc']; ?></small></div>

<?php break; case 'select': ?>
	<div class="name_fm"><?php echo $value['name']; ?></div>
	<div class="input_fm"><select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>"><?php foreach ($value['options'] as $option) { ?>
	<option <?php if ( get_option( $value['id'] ) == $option) { echo ' selected="selected"'; } elseif ($option == $value['std']) { echo ' selected="selected"'; } ?>><?php echo $option; ?></option>
	<?php } ?>
	</select></div>
	<div class="desc_fm"><small><?php echo $value['desc']; ?></small></div>

<?php break; case 'select-category': ?>
	<div class="name_fm"><?php echo $value['name']; ?></div>
	<div class="input_fm">
	
	<select name="<?php echo $value['id']; ?>"><option value="0">- not selected -</option><?php foreach ($value['categoryids'] as $key => $val) { ?><option value="<?php echo"$val";?>"<?php if ( get_option( $value['id'] ) == $val) { echo ' selected="selected"'; } ?>><?php echo $value['categorynames'][$key]; ?></option><?php } ?></select>
	
</select>
	
	</div>
	<div class="desc_fm"><small><?php echo $value['desc']; ?></small></div>

	<?php break; case "checkbox": ?>
	<div class="name_fm"><?php echo $value['name']; ?></div>
	<div class="input_fm"><?php if(get_option($value['id'])){ $checked = "checked=\"checked\""; }else{ $checked = "";} ?>
	<input type="checkbox" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="true" <?php echo $checked; ?> /></div>
	<div class="desc_fm"><small><?php echo $value['desc']; ?></small></div>
	
	<?php break; case "heading":?>
	<h1><?php echo $value['name']; ?></h1>
	
	<?php break; case "subheader":?>
	<h2><?php echo $value['name']; ?></h2>
	
<?php break; case "infotext":?>
	<div><?php echo $value['name']; ?></div>
	
		
	<?php break; case "tabs-open":?>	
	<div class="tabs">
	
	<?php break; case "tabs-close":?>	
	</div>	
	
	<?php break; case "tab":?>	
	<div class="tab<?php echo $value['class']; ?>" id="<?php echo $value['id']; ?>">
	<div class="link"><?php echo $value['name']; ?></div>
	<div class="arrow"></div>
	</div>
 	
 	<?php break; case "container-open":?>	
	<div class="curvedContainer">
 	
 	<?php break; case "container-close":?>	
	</div>	
 	
	<?php break; case "tabcontent-open":?>	
	<div class="tabcontent" id="<?php echo $value['name']; ?>" style="display:<?php echo $value['display']; ?>" >
	
	<?php break; case "tabcontent-close":?>	
	</div>
	
 	
<?php break;

}
}
?>

<?php
}

add_action('admin_menu', 'wpl_add_admin');
?>