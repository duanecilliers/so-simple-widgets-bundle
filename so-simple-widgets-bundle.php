<?php

/*
Plugin Name: SiteOrigin Simple Widgets Bundle
Description: Removes certain design options from widgets SiteOrigin's Widgets Bundle. Useful when designing sites for clients and you don't want to allow complete control over widgets.
Version: 1.0.0
Author: Duane Cilliers
Author URI: http://duane.co.za
Plugin URI: http://duane.co.za/plugins/so-simple-widgets-bundle/
License: GPL3
License URI: https://www.gnu.org/licenses/gpl-3.0.txt
*/

if ( ! class_exists( 'SO_Simple_Widget_Bundle' ) ) {

	class SO_Simple_Widget_Bundle {

		function __construct() {
			add_filter( 'siteorigin_widgets_form_options_sow-button', array( $this, 'extend_button_form' ), 10, 2 );
			add_filter( 'siteorigin_widgets_form_options_sow-cta', array( $this, 'extend_cta_form' ), 10, 2 );
			add_filter( 'siteorigin_widgets_form_options_sow-features', array( $this, 'extend_features_form' ), 10, 2 );
			add_filter( 'siteorigin_widgets_form_options_sow-headline', array( $this, 'extend_headline_form' ), 10, 2 );
			add_filter( 'siteorigin_widgets_form_options_sow-price-table', array( $this, 'extend_price_table_form' ), 10, 2 );
			add_filter( 'siteorigin_widgets_form_options_sow-slider', array( $this, 'extend_slider_form' ), 10, 2 );
			add_filter( 'siteorigin_widgets_form_options_sow-social-media-buttons', array( $this, 'extend_social_media_form' ), 10, 2 );
		}

		function extend_button_form( $form_options, $widget ) {
			if ( isset( $form_options['design']['fields'] ) ) {
				unset( $form_options['design']['fields']['theme'] );
				unset( $form_options['design']['fields']['button_color'] );
				unset( $form_options['design']['fields']['text_color'] );
				unset( $form_options['design']['fields']['hover'] );
				unset( $form_options['design']['fields']['rounding'] );
			}
			return $form_options;
		}

		function extend_cta_form( $form_options, $widget ) {
			if ( isset( $form_options['design']['fields'] ) ) {
				unset( $form_options['design']['fields']['background_color'] );
				unset( $form_options['design']['fields']['border_color'] );
			}
			return $form_options;
		}

		function extend_features_form( $form_options, $widget ) {
			if ( isset( $form_options['features']['fields'] ) ) {
				unset( $form_options['features']['fields']['container_color'] );
			}
			if ( isset( $form_options['container_shape'] ) ) {
				unset( $form_options['container_shape'] );
			}
			return $form_options;
		}

		function extend_headline_form( $form_options, $widget ) {
			if ( isset( $form_options['headline']['fields'] ) ) {
				unset( $form_options['headline']['fields']['font'] );
				unset( $form_options['headline']['fields']['color'] );
			}
			if ( isset( $form_options['sub_headline']['fields'] ) ) {
				unset( $form_options['sub_headline']['fields']['font'] );
				unset( $form_options['sub_headline']['fields']['color'] );
			}
			if ( isset( $form_options['divider']['fields'] ) ) {
				unset( $form_options['divider']['fields']['color'] );
			}
			return $form_options;
		}

		function extend_price_table_form( $form_options, $widget ) {
			if ( isset( $form_options['theme'] ) ) {
				unset( $form_options['theme'] );
			}
			if ( isset( $form_options['header_color'] ) ) {
				unset( $form_options['header_color'] );
			}
			if ( isset( $form_options['featured_header_color'] ) ) {
				unset( $form_options['featured_header_color'] );
			}
			if ( isset( $form_options['button_color'] ) ) {
				unset( $form_options['button_color'] );
			}
			if ( isset( $form_options['featured_button_color'] ) ) {
				unset( $form_options['featured_button_color'] );
			}
			return $form_options;
		}

		function extend_slider_form( $form_options, $widget ) {
			if ( isset( $form_options['nav_color_hex'] ) ) {
				unset( $form_options['nav_color_hex'] );
			}
			if ( isset( $form_options['nav_style'] ) ) {
				unset( $form_options['nav_style'] );
			}
			if ( isset( $form_options['nav_size'] ) ) {
				unset( $form_options['nav_size'] );
			}
			return $form_options;
		}

		function extend_social_media_form( $form_options, $widget ) {
			if ( isset( $form_options['design']['fields'] ) ) {
				unset( $form_options['design']['fields']['hover'] );
				unset( $form_options['design']['fields']['rounding'] );
			}
			return $form_options;
		}
	}
}

new SO_Simple_Widget_Bundle();
