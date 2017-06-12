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
	public function __construct( $page ) {

		// Set page ID/hook suffix/hook name.
		$this->page = $page;

		// Register settings.
		add_action( 'admin_init', array( $this, 'register_settings' ) );

		// Settings output.
		add_action( $this->page, array( $this, 'settings_output' ) );
	}

	/**
	 * Register Settings.
	 *
	 * @since 1.0.0
	 */
	public function register_settings() {
		// Eg.
		$settings = array(
			'tab1' => array(
				'label'  => 'Tab 1',
				'fields' => array(
					array(
						'label'        => 'Select label',
						'description'  => 'Select explanation.',
						'type'         => 'select',
						'value'        => get_option( 'xxx', 'default' ),
						'sanitize'     => get_option( 'xxx', 'default' ),
					),
					array(
						'label'        => 'Text label',
						'description'  => 'Text explanation.',
						'type'         => 'text',
						'value'        => '',
					),
				),
			),
			'tab2' => array(),
		);

		// Settings array.
		$settings = apply_filters( "{$this->page}_settings", array() );

		foreach ( $settings as $setting ) {
			
		}
	}

	/**
	 * Settings Page HTML Output. 
	 *
	 * @since 1.0.0
	 */
	public function settings_output() {
		
	}

	
	
	
	
	
}







