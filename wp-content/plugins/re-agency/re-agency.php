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



    }

    function prefix_enqueue()
    {
        // Set some local global vars for jQuery
        wp_enqueue_script('localvars');
        wp_localize_script('localvars', 'localvar', array('siteurl' => get_option('siteurl')));

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