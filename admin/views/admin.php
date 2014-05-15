<?php
/**
 * Represents the view for the administration dashboard.
 *
 * This includes the header, options, and other information that should provide
 * The User Interface to the end user.
 *
 * @package   WPC_Insert_Codes
 * @author    Chris Baldelomar <chris@webplantmedia.com>
 * @license   GPL-2.0+
 * @link      http://webplantmedia.com
 * @copyright 2014 Chris Baldelomar
 */
?>
<?php
$option_name = $this->plugin->get_plugin_prefix() . '_google';
$group_name = $this->plugin->get_plugin_slug() . '-group';

// $this->plugin->helper->print_latest_font_array();
?>


<div id="wpc-insert-codes-plugin" class="wrap">

	<h2><?php echo esc_html( get_admin_page_title() ); ?></h2>

	<?php settings_errors(); ?>

	<form method="post" action="options.php">

		<?php settings_fields( $group_name ); ?>

		<div>

			<h3><?php echo __( 'Upload Custom Fonts', 'wpc_insert_codes' ); ?></h3>

			<div class="wpc-insert-codes-textarea-wrapper">
				<textarea name="<?php echo $option_name; ?>[]" class="wpc-insert-codes-textarea" rows="5" cols="30"></textarea>
			</div>

		</div>

		<?php submit_button(); ?>

	</form>

</div>
