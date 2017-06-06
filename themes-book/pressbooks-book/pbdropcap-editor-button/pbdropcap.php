<?php
add_action( 'init', 'pbdropcap_button' );
function pbdropcap_button() {
	add_filter("mce_external_plugins", "pbdropcap_add_button");
    add_filter('mce_buttons', 'pbdropcap_register_button');
}	
function pbdropcap_add_button($plugin_array) {
	$plugin_array['pbdropcap'] = get_template_directory_uri() . '/pbdropcap-editor-button/pbdropcap-plugin.js';
	return $plugin_array;
}
function pbdropcap_register_button($button) {
	array_push( $button, 'dropcap' ); // dropcap'
	return $button;
}
?>