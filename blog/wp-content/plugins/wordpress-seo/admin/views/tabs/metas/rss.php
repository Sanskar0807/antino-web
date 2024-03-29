<?php
/**
 * WPSEO plugin file.
 *
 * @package WPSEO\Admin
 */

if ( ! defined( 'WPSEO_VERSION' ) ) {
	header( 'Status: 403 Forbidden' );
	header( ' 403 Forbidden' );
	exit();
}

$wpseo_rss_presenter = new WPSEO_Paper_Presenter(
	esc_html__( 'RSS feed settings', 'wordpress-seo' ),
	__DIR__ . '/paper-content/rss-content.php',
	[
		'help_text' => new WPSEO_Admin_Help_Panel(
			'search-appearance-rss',
			__( 'Learn more about the RSS feed setting', 'wordpress-seo' ),
			__( 'This feature is used to automatically add content to your RSS, more specifically, it\'s meant to add links back to your blog and your blog posts, so dumb scrapers will automatically add these links too, helping search engines identify you as the original source of the content.', 'wordpress-seo' ),
			'has-wrapper'
		),
		'paper_id'  => 'settings-rss-feed',
		'class'     => 'search-appearance',
	]
);

// phpcs:ignore WordPress.Security.EscapeOutput -- get_output() output is properly escaped.
echo $wpseo_rss_presenter->get_output();
