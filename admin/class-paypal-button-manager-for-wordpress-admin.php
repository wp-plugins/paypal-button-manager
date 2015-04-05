<?php

/**
 * @class       MBJ_PayPal_Button_Manager_For_WordPress_Admin
 * @version	1.0.0
 * @package	paypal-button-manager-for-wordpress
 * @category	Class
 * @author      plugingexperts <plugingexperts@gmail.com>
 */
class MBJ_PayPal_Button_Manager_For_WordPress_Admin {

    /**
     * The ID of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $plugin_name    The ID of this plugin.
     */
    private $plugin_name;

    /**
     * The version of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $version    The current version of this plugin.
     */
    private $version;

    /**
     * Initialize the class and set its properties.
     *
     * @since    1.0.0
     * @param      string    $plugin_name       The name of this plugin.
     * @param      string    $version    The version of this plugin.
     */
    public function __construct($plugin_name, $version) {

        $this->plugin_name = $plugin_name;
        $this->version = $version;
        $this->load_dependencies();
    }

    private function load_dependencies() {
        /**
         * The class responsible for defining all actions that occur in the Dashboard
         */
        require_once plugin_dir_path(dirname(__FILE__)) . 'admin/partials/paypal-button-manager-for-wordpress-general-setting.php';
        require_once plugin_dir_path(dirname(__FILE__)) . 'admin/partials/paypal-button-manager-for-wordpress-html-output.php';
        require_once plugin_dir_path(dirname(__FILE__)) . 'admin/partials/paypal-button-manager-for-wordpress-admin-display.php';
    }

    public function button_manage_for_woocommerce_standard_parameters($paypal_args) {
        $paypal_args['bn'] = 'mbjtechnolabs_SP';
        return $paypal_args;
    }

}
