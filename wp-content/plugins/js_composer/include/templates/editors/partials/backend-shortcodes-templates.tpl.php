<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

global $current_user;
wp_get_current_user();
require_once vc_path_dir( 'AUTOLOAD_DIR', 'class-vc-settings-presets.php' );

if ( vc_user_access()->part( 'presets' )->can()->get() ) {
	$vc_vendor_settings_presets = Vc_Settings_Preset::listDefaultVendorSettingsPresets();
	$vc_all_presets = Vc_Settings_Preset::listAllPresets();
} else {
	$vc_vendor_settings_presets = array();
	$vc_all_presets = array();
}
$custom_tag = 'script'; // TODO: Use HTML Shadow dom or ajax response for templates
?>
<<?php echo esc_attr( $custom_tag ); ?>>
	/*** Tambahan JNews **/
	<?php
		echo "var user_shortcode = [];\n";

	foreach ( WPBMap::getUserShortCodes() as $key => $value ) {
		echo "\tuser_shortcode.push(" . json_encode( array( $key => $value ) ) . ");\n";
	}

		echo "\t\nvar shortcode_mapper = [];\n";

	foreach ( WPBMap::getShortCodes() as $key => $value ) {
		echo "\tshortcode_mapper.push(" . json_encode( array( $key => $value ) ) . ");\n";
	}
	?>

	var vc_user_mapper = {};
	for(var i = 0; i < user_shortcode.length; i++)
	{
		for(var key in user_shortcode[i]) {
			vc_user_mapper[key] = user_shortcode[i][key];
		}
	}

	var vc_mapper = {};
	for(var i = 0; i < shortcode_mapper.length; i++)
	{
		for(var key in shortcode_mapper[i]) {
			vc_mapper[key] = shortcode_mapper[i][key];
		}
	}
	/*** End Tambahan JNews **/

	var vc_vendor_settings_presets = <?php echo wp_json_encode( $vc_vendor_settings_presets ); ?>,
		vc_roles = [],
		vc_frontend_enabled = <?php echo vc_enabled_frontend() ? 'true' : 'false'; ?>,
		vc_all_presets = <?php echo wp_json_encode( $vc_all_presets ); ?>,
		vc_mode = '<?php echo esc_js( vc_mode() ); ?>',
		vcAdminNonce = '<?php echo esc_js( vc_generate_nonce( 'vc-admin-nonce' ) ); ?>';
</<?php echo esc_attr( $custom_tag ); ?>>

<?php vc_include_template( 'editors/partials/vc_settings-image-block.tpl.php' ); ?>

<?php foreach ( WPBMap::getShortCodes() as $sc_base => $el ) : ?>
	<<?php echo esc_attr( $custom_tag ); ?> type="text/html" id="vc_shortcode-template-<?php echo esc_attr( $sc_base ); ?>">
		<?php
		// @codingStandardsIgnoreLine
		print wpbakery()->getShortCode( $sc_base )->template();
		?>
	</<?php echo esc_attr( $custom_tag ); ?>>
<?php endforeach ?>
<<?php echo esc_attr( $custom_tag ); ?> type="text/html" id="vc_row-inner-element-template">
	<?php
	// @codingStandardsIgnoreLine
	print wpbakery()->getShortCode( 'vc_row_inner' )->template();
	?>
</<?php echo esc_attr( $custom_tag ); ?>>
<<?php echo esc_attr( $custom_tag ); ?> type="text/html" id="vc_settings-page-param-block">
	<div class="row-fluid wpb_el_type_<%= type %>">
		<div class="wpb_element_label"><%= heading %></div>
		<div class="edit_form_line">
			<%= form_element %>
		</div>
	</div>
</<?php echo esc_attr( $custom_tag ); ?>>
