<?php

class TEEX_HelloWorld extends ET_Builder_Module {

	public $slug       = 'teex_hello_world';
	public $vb_support = 'on';

	protected $module_credits = array(
		'module_uri' => 'http://http://devdeeds.test.com/',
		'author'     => '',
		'author_uri' => '',
	);

	public function init() {
		$this->name = esc_html__( 'Hello World', 'teex-test-extension' );
	}

	public function get_fields() {
		return array(
			'content' => array(
				'label'           => esc_html__( 'Content', 'teex-test-extension' ),
				'type'            => 'tiny_mce',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Content entered here will appear inside the module.', 'teex-test-extension' ),
				'toggle_slug'     => 'main_content',
			),
		);
	}

	public function render( $attrs, $content = null, $render_slug ) {
		return sprintf( '<h1>%1$s</h1>', $this->props['content'] );
	}
}

new TEEX_HelloWorld;
