<?php
/**
 * Settings Library
 *
 * @version 1.0.0
**/
class XXX_Settings {

	public $page = '';

	/**
	 * Constructor.
	 *
	 * @since 1.0.0
	 */
	public function __construct( $hookname ) {
		$this->page = $hookname;
		add_action( $this->page, array( $this, 'settings' ) );
	}

	/**
	 * Settings
	 *
	 * @since 1.0.o
	 */
	public function settings() {
		echo "<h1>Batman</h1>";
	}

	
	
	
	
	
}







