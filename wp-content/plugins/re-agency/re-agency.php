<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://vectrus.nl
 * @since             1.0.0
 * @package           Re_Agency
 *
 * @wordpress-plugin
 * Plugin Name:       re-ageny
 * Plugin URI:        https://vectrus.nl
 * Description:       Plugin for RE-Agency real estate software
 * Version:           1.0.0
 * Author:            julius keijzer
 * Author URI:        https://vectrus.nl/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       re-agency
 * Domain Path:       /languages
 */

require_once plugin_dir_path(__FILE__) . 'inc/reAgencySettings.php';


class reAgencyController {

    public function __construct()
    {
        $this->options = get_option('reAgency_options');
        $this->prefix_enqueue();

//       / print_r($options);
        if ($this->options['reAgency_field_sandbox'] == 'enabled') {

        }

      /*  if ($options['reAgency_field_apiUrl'] == 'enabled') {*/
        $localdata = array('siteUrl' => site_url(),
            'apiUrl' => $this->options['reAgency_field_apiUrl'],
            'imageUrl' => $this->options['reAgency_field_imageUrl'],
            'theme' => wp_get_theme(),
            'custom_domain' => $this->options['reAgency_field_domain'],
            'custom_offer_template' => $this->options['reAgency_field_offerings_template'],
            'custom_newuser_template' => $this->options['reAgency_field_template'],
            'custom_single_template' => $this->options['reAgency_field_single_offering']); // Data object to pass to jQueryscripts
        $localise = json_encode($localdata);
        add_action('wp_footer', function () use ($localise) {
            printf('<script type="text/javascript">var myData = %s</script>', $localise);
        });


    }

    function prefix_enqueue()
    {


        wp_enqueue_script('jquery');
        wp_register_script('jquery', '//code.jquery.com/jquery-3.7.1.min.js');
//       / print_r($options);
        if($this->options['reAgency_field_bootstrap'] == 'enabled') {
            wp_enqueue_script('prefix_bootstrap');
            wp_register_script('prefix_bootstrap', '//cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js');

            wp_enqueue_style('prefix_bootstrap');
            wp_register_style('prefix_bootstrap', '//cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css');
        }


        wp_enqueue_script('prefix_re-agency');
        wp_register_script('prefix_re-agency', '/wp-content/plugins/re-agency/js/reAgencyRegister.js');
    }
}



function userRegistration()
{
    ob_start();
    include dirname(__FILE__) . '/templates/template-register-user.php';
    return ob_get_clean();
}

add_shortcode('re-agency-registration', 'userRegistration');

function assetOffer()
{
    ob_start();
    include dirname(__FILE__) . '/templates/template-offerings.php';
    return ob_get_clean();
}

add_shortcode('re-agency-offers', 'assetOffer');




$reAgency = new reAgencyController();