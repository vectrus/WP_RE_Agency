<?php

/**
 * @internal never define functions inside callbacks.
 * these functions could be run multiple times; this would result in a fatal error.
 */

/**
 * custom option and settings
 */
function reAgency_settings_init() {
	// Register a new setting for "reAgency" page.
	register_setting( 'reAgency', 'reAgency_options' );

	// Register a new section in the "reAgency" page.
	add_settings_section(
		'reAgency_section_developers',
		__( 'Custom templates.', 'reAgency' ), 'reAgency_section_developers_callback',
		'reAgency'
	);

	// Register a new field in the "reAgency_section_developers" section, inside the "reAgency" page.
	add_settings_field(
		'reAgency_field_template', // As of WP 4.6 this value is used only internally.
		                        // Use $args' label_for to populate the id inside the callback.
			__( 'Template', 'reAgency' ),
		'reAgency_field_template_cb',
		'reAgency',
		'reAgency_section_developers',
		array(
			'label_for'         => 'reAgency_field_template',
			'class'             => 'reAgency_row',
			'reAgency_custom_data' => 'custom',
		)
	);
    add_settings_field(
        'reAgency_field_domain', // As of WP 4.6 this value is used only internally.
        // Use $args' label_for to populate the id inside the callback.
        __('Domain', 'reAgency'),
        'reAgency_field_domain_cb',
        'reAgency',
        'reAgency_section_developers',
        array(
            'label_for' => 'reAgency_field_domain',
            'class' => 'reAgency_row',
            'reAgency_custom_data' => 'custom',
        )
    );
    add_settings_field(
        'reAgency_field_apiUrl', // As of WP 4.6 this value is used only internally.
        // Use $args' label_for to populate the id inside the callback.
        __('API url', 'reAgency'),
        'reAgency_field_apiUrl_cb',
        'reAgency',
        'reAgency_section_developers',
        array(
            'label_for' => 'reAgency_field_apiUrl',
            'class' => 'reAgency_row',
            'reAgency_custom_data' => 'custom',
        )
    );
    add_settings_field(
        'reAgency_field_bootstrap', // As of WP 4.6 this value is used only internally.
        // Use $args' label_for to populate the id inside the callback.
        __('Bootstrap', 'reAgency'),
        'reAgency_field_bootstrap_cb',
        'reAgency',
        'reAgency_section_developers',
        array(
            'label_for' => 'reAgency_field_bootstrap',
            'class' => 'reAgency_row',
            'reAgency_custom_data' => 'custom',
        )
    );
    add_settings_field(
        'reAgency_field_sandbox', // As of WP 4.6 this value is used only internally.
        // Use $args' label_for to populate the id inside the callback.
        __('Sandbox', 'reAgency'),
        'reAgency_field_sandbox_cb',
        'reAgency',
        'reAgency_section_developers',
        array(
            'label_for' => 'reAgency_field_sandbox',
            'class' => 'reAgency_row',
            'reAgency_custom_data' => 'custom',
        )
    );
}

/**
 * Register our reAgency_settings_init to the admin_init action hook.
 */
add_action( 'admin_init', 'reAgency_settings_init' );


/**
 * Custom option and settings:
 *  - callback functions
 */


/**
 * Developers section callback function.
 *
 * @param array $args  The settings array, defining title, id, callback.
 */
function reAgency_section_developers_callback( $args ) {
	?>
	<p id="<?php echo esc_attr( $args['id'] ); ?>"><?php esc_html_e( 'Adjust settings for RE-Agency.', 'reAgency' ); ?></p>
	<?php
}

/**
 * template field callbakc function.
 *
 * WordPress has magic interaction with the following keys: label_for, class.
 * - the "label_for" key value is used for the "for" attribute of the <label>.
 * - the "class" key value is used for the "class" attribute of the <tr> containing the field.
 * Note: you can add custom key value pairs to be used inside your callbacks.
 *
 * @param array $args
 */
function reAgency_field_template_cb( $args ) {
	// Get the value of the setting we've registered with register_setting()
	$options = get_option( 'reAgency_options' );
	?>
	<select
			id="<?php echo esc_attr( $args['label_for'] ); ?>"
			data-custom="<?php echo esc_attr( $args['reAgency_custom_data'] ); ?>"
			name="reAgency_options[<?php echo esc_attr( $args['label_for'] ); ?>]">
		<option value="default" <?php echo isset( $options[ $args['label_for'] ] ) ? ( selected( $options[ $args['label_for'] ], 'default', false ) ) : ( '' ); ?>>
			<?php esc_html_e( 'default template', 'reAgency' ); ?>
		</option>
 		<option value="custom" <?php echo isset( $options[ $args['label_for'] ] ) ? ( selected( $options[ $args['label_for'] ], 'custom', false ) ) : ( '' ); ?>>
			<?php esc_html_e( 'custom template', 'reAgency' ); ?>
		</option>
	</select>
	<p class="description">
		<?php esc_html_e( 'Default uses the default re-agency template.', 'reAgency' ); ?>
	</p>
	<p class="description">
		<?php esc_html_e( 'Make a directory called "re-agency" in your theme directory and copy the "template-register-user.php" file into that directory to customize the form template. ', 'reAgency' ); ?>
	</p>
	<?php
}

function reAgency_field_bootstrap_cb($args)
{
    // Get the value of the setting we've registered with register_setting()
    $options = get_option('reAgency_options');
    ?>
    <select
            id="<?php echo esc_attr($args['label_for']); ?>"
            data-custom="<?php echo esc_attr($args['reAgency_custom_data']); ?>"
            name="reAgency_options[<?php echo esc_attr($args['label_for']); ?>]">
        <option value="enabled" <?php echo isset($options[$args['label_for']]) ? (selected($options[$args['label_for']], 'enabled', false)) : (''); ?>>
            <?php esc_html_e('enable bootstrap', 'reAgency'); ?>
        </option>
        <option value="disabled" <?php echo isset($options[$args['label_for']]) ? (selected($options[$args['label_for']], 'disabled', false)) : (''); ?>>
            <?php esc_html_e('disable bootstrap', 'reAgency'); ?>
        </option>
    </select>
    <p class="description">
        <?php esc_html_e('Enable or disable bootstrap.js/css.', 'reAgency'); ?>
    </p>

    <?php
}
function reAgency_field_domain_cb($args)
{
    // Get the value of the setting we've registered with register_setting()
    $options = get_option('reAgency_options');
    ?>
    <select
            id="<?php echo esc_attr($args['label_for']); ?>"
            data-custom="<?php echo esc_attr($args['reAgency_custom_data']); ?>"
            name="reAgency_options[<?php echo esc_attr($args['label_for']); ?>]">
        <option value="same domain" <?php echo isset($options[$args['label_for']]) ? (selected($options[$args['label_for']], 'same domain', false)) : (''); ?>>
            <?php esc_html_e('same domain', 'reAgency'); ?>
        </option>
        <option value="other domain" <?php echo isset($options[$args['label_for']]) ? (selected($options[$args['label_for']], 'other domain', false)) : (''); ?>>
            <?php esc_html_e('other domain', 'reAgency'); ?>
        </option>
    </select>
    <p class="description">
        <?php esc_html_e('Use local if wordpress is on the same server and domain as as RE-Agency.', 'reAgency'); ?>
    </p>
    <p class="description">
        <?php esc_html_e('Fill in the API url in the field below. ', 'reAgency'); ?>
    </p>
    <?php
}

function reAgency_field_apiUrl_cb($args)
{
    // Get the value of the setting we've registered with register_setting()
    $options = get_option('reAgency_options');
    ?>
        <input id="<?php echo esc_attr($args['label_for']); ?>"
               data-custom="<?php echo esc_attr($args['reAgency_custom_data']); ?>"
               name="reAgency_options[<?php echo esc_attr($args['label_for']); ?>]"
        value="<?php echo isset($options[$args['label_for']]) ? $options[$args['label_for']] : '';  ?>">
   <!-- <select
            id="<?php /*echo esc_attr($args['label_for']); */?>"
            data-custom="<?php /*echo esc_attr($args['reAgency_custom_data']); */?>"
            name="reAgency_options[<?php /*echo esc_attr($args['label_for']); */?>]">
        <option value="red" <?php /*echo isset($options[$args['label_for']]) ? (selected($options[$args['label_for']], 'local-domain', false)) : (''); */?>>
            <?php /*esc_html_e('same domain', 'reAgency'); */?>
        </option>
        <option value="blue" <?php /*echo isset($options[$args['label_for']]) ? (selected($options[$args['label_for']], 'custom-domain', false)) : (''); */?>>
            <?php /*esc_html_e('other domain', 'reAgency'); */?>
        </option>
    </select>
    <p class="description">
        <?php /*esc_html_e('Use local if wordpress is on the same server and domain as as RE-Agency.', 'reAgency'); */?>
    </p>-->
    <p class="description">
        <?php esc_html_e('Fill in the API url if you chose a custom domain. ', 'reAgency'); ?>
    </p>
    <?php
}

function reAgency_field_sandbox_cb($args)
{
    // Get the value of the setting we've registered with register_setting()
    $options = get_option('reAgency_options');
    ?>
    <select
            id="<?php echo esc_attr($args['label_for']); ?>"
            data-custom="<?php echo esc_attr($args['reAgency_custom_data']); ?>"
            name="reAgency_options[<?php echo esc_attr($args['label_for']); ?>]">
        <option value="enabled" <?php echo isset($options[$args['label_for']]) ? (selected($options[$args['label_for']], 'enabled', false)) : (''); ?>>
            <?php esc_html_e('enable', 'reAgency'); ?>
        </option>
        <option value="disabled" <?php echo isset($options[$args['label_for']]) ? (selected($options[$args['label_for']], 'disabled', false)) : (''); ?>>
            <?php esc_html_e('disable', 'reAgency'); ?>
        </option>
    </select>
    <p class="description">
        <?php esc_html_e('Enable or disable the sandbox mode. In sandbox mode the plugin validates but doesn\'t create the user. Start with this to prevent clutter', 'reAgency'); ?>
    </p>

    <?php
}
/**
 * Add the top level menu page.
 */
function reAgency_options_page() {
	add_menu_page(
		'RE-Agency settings',
		'RE-Agency settings',
		'manage_options',
		'reAgency',
		'reAgency_options_page_html'
	);
}


/**
 * Register our reAgency_options_page to the admin_menu action hook.
 */
add_action( 'admin_menu', 'reAgency_options_page' );


/**
 * Top level menu callback function
 */
function reAgency_options_page_html() {
	// check user capabilities
	if ( ! current_user_can( 'manage_options' ) ) {
		return;
	}

	// add error/update messages

	// check if the user have submitted the settings
	// WordPress will add the "settings-updated" $_GET parameter to the url
	if ( isset( $_GET['settings-updated'] ) ) {
		// add settings saved message with the class of "updated"
		add_settings_error( 'reAgency_messages', 'reAgency_message', __( 'Settings Saved', 'reAgency' ), 'updated' );
	}

	// show error/update messages
	settings_errors( 'reAgency_messages' );
	?>
	<div class="wrap">
		<h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
		<form action="options.php" method="post">
			<?php
			// output security fields for the registered setting "reAgency"
			settings_fields( 'reAgency' );
			// output setting sections and their fields
			// (sections are registered for "reAgency", each field is registered to a specific section)
			do_settings_sections( 'reAgency' );
			// output save settings button
			submit_button( 'Save Settings' );
			?>
		</form>
	</div>
	<?php
}