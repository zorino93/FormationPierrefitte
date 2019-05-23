/** Ads Image Banner Widget scripts 
Plugin Name: Ads Image Banner Widget Plugin
Plugin URI: http://skmukhiya.com.np/ads-image-banner-widget-plugin
*/
jQuery(document).ready(function()
{   jQuery(".ibw-overlay").hide();
	jQuery(".ibw-thumb").hover(function(){
	jQuery(this).find(".ibw-overlay").fadeIn();
	}, function(){
	jQuery(this).find(".ibw-overlay").fadeOut();
	});
	jQuery("div[id*='_banner-']").addClass('image-banner-widget-set');
});
