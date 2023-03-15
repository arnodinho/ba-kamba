<?php
/**
 * Easy Digital Downloads Theme Updater
 *
 * @package EDD Sample Theme
 */

// Includes the files needed for the theme updater
if ( !class_exists( 'EDD_Theme_Updater_Admin' ) ) {
	include( dirname( __FILE__ ) . '/theme-updater-admin.php' );
}

// Loads the updater classes
$updater = new EDD_Theme_Updater_Admin(

	// Config settings
	$config = array(
		'remote_api_url' => 'https://evisionthemes.com', // Site where EDD is hosted
		'item_name'      => 'Business Click Pro', // Name of theme
		'theme_slug'     => 'business-click-pro', // Theme slug
		'version'        => '1.0.3', // The current version of this theme
		'author'         => 'evisiontheme', // The author of this theme
		'download_id'    => '', // Optional, used for generating a license renewal link
		'renew_url'      => 'https://evisionthemes.com/my-account' // Optional, allows for a custom license renewal link
	),

	// Strings
	$strings = array(
		'theme-license'             => __( 'Theme License', 'business-click' ),
		'enter-key'                 => __( 'Enter your theme license key.', 'business-click' ),
		'license-key'               => __( 'License Key', 'business-click' ),
		'license-action'            => __( 'License Action', 'business-click' ),
		'deactivate-license'        => __( 'Deactivate License', 'business-click' ),
		'activate-license'          => __( 'Activate License', 'business-click' ),
		'status-unknown'            => __( 'License status is unknown.', 'business-click' ),
		'renew'                     => __( 'Renew?', 'business-click' ),
		'unlimited'                 => __( 'unlimited', 'business-click' ),
		'license-key-is-active'     => __( 'License key is active.', 'business-click' ),
		'expires%s'                 => __( 'Expires %s.', 'business-click' ),
		'%1$s/%2$-sites'            => __( 'You have %1$s / %2$s sites activated.', 'business-click' ),
		'license-key-expired-%s'    => __( 'License key expired %s.', 'business-click' ),
		'license-key-expired'       => __( 'License key has expired.', 'business-click' ),
		'license-keys-do-not-match' => __( 'License keys do not match.', 'business-click' ),
		'license-is-inactive'       => __( 'License is inactive.', 'business-click' ),
		'license-key-is-disabled'   => __( 'License key is disabled.', 'business-click' ),
		'site-is-inactive'          => __( 'Site is inactive.', 'business-click' ),
		'license-status-unknown'    => __( 'License status is unknown.', 'business-click' ),
		'update-notice'             => __( "Updating this theme will lose any customizations you have made. 'Cancel' to stop, 'OK' to update.", 'business-click' ),
		'update-available'          => __('<strong>%1$s %2$s</strong> is available. <a href="%3$s" class="thickbox" title="%4s">Check out what\'s new</a> or <a href="%5$s"%6$s>update now</a>.', 'business-click' )
	)

);
