jQuery.noConflict();
jQuery(document).ready(function($){
	
	// Upload
	jQuery('.sa-upload-button').click(function() {
		window.sa_current_upload = jQuery(this).attr('rel');
		tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true');
		return false;
	});

	window.send_to_editor = function(html) {
		var url = jQuery('img',html).attr('src');
		jQuery('input.sa-upload-field[name="' + window.sa_current_upload + '"]').val(url);
		tb_remove();
	}
	
	//Tabs
	jQuery(".tabs .tab[id^=tab_menu]").click(function() {
		var curMenu=jQuery(this);
		jQuery(".tabs .tab[id^=tab_menu]").removeClass("selected");
		curMenu.addClass("selected");

		var index=curMenu.attr("id").split("tab_menu_")[1];
		jQuery(".curvedContainer .tabcontent").css("display","none");
		jQuery(".curvedContainer #tab_content_"+index).css("display","block");
	});
	
});