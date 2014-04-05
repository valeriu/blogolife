jQuery = jQuery.noConflict();

jQuery(document).ready(function(){

	jQuery(function(){
		//Main menu
		jQuery("<select />").appendTo("nav");
		jQuery("<option />", {
			"selected": "selected",
			"value"   : "",
			"text"    : "Go to..."
		}).appendTo("nav select");

		// Populate dropdown with menu items
		jQuery("nav a").each(function() {
			var el = jQuery(this);
			jQuery("<option />", {
				"value"   : el.attr("href"),
				"text"    : el.text()
			}).appendTo("nav select");
		});

		jQuery("nav select").change(function() {
			window.location = jQuery(this).find("option:selected").val();
		});
		 
	});

	/* Scroll top button */
	jQuery('.scrollup').click(function () {
			jQuery('body,html').animate({
				scrollTop: 0
			}, 600);
			return false;
		});
});