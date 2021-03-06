<?php

class Orbis_Products_Plugin extends Orbis_Plugin {
	public function __construct( $file ) {
		parent::__construct( $file );

		$this->set_name( 'orbis_products' );
		$this->set_db_version( '1.0.0' );

		$this->plugin_include( 'includes/post.php' );
		$this->plugin_include( 'includes/product-template.php' );
		$this->plugin_include( 'includes/template.php' );
	}

	public function loaded() {
		$this->load_textdomain( 'orbis_products', '/languages/' );
	}
}
