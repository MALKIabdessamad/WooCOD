<?php
    if(!defined('ABSPATH')){
        exit ;
    }

    class WooCOD_Order_Form extends \Elementor\Widget_Base{
        /**
	 * Get widget name.
	 *
	 * Retrieve oEmbed widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'WooCOD_instant_order';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve oEmbed widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return string Widget title.
	 */
	public function get_title() {
		return esc_html__( 'WooCOD Instant Order', 'WooCOD_text' );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve oEmbed widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-checkout';
	}

	/**
	 * Get custom help URL.
	 *
	 * Retrieve a URL where the user can get more information about the widget.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return string Widget help URL.
	 */
	public function get_custom_help_url() {
		return 'https://developers.elementor.com/docs/widgets/';
	}

	/**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the oEmbed widget belongs to.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return array Widget categories.
	 */
	public function get_categories() {
		return [ 'general' ];
	}

	/**
	 * Get widget keywords.
	 *
	 * Retrieve the list of keywords the oEmbed widget belongs to.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return array Widget keywords.
	 */
	public function get_keywords() {
		return [ 'oembed', 'url', 'link' ];
	}

	/**
	 * Register oEmbed widget controls.
	 *
	 * Add input fields to allow the user to customize the widget settings.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function register_controls() {

		$this->start_controls_section(
			'content_section',
			[
				'label' => esc_html__( 'Content', 'WooCOD_text' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $products = get_posts(
            [
                'post_type' => 'product',
                'posts_per_page' => -1, 
                'post_status' => array('publish', 'draft')
            ]
        );

        $options = [] ;
        $options[''] = esc_html__('Select a product', 'WooCOD_text'); 
        if(!empty($products)){
            foreach($products as $product){
                $options[$product->ID] = esc_html__(get_the_title($product->ID), 'WooCOD_text'); 
            }
        }

		$this->add_control(
			'WooCOD_product',
			[
				'label' => esc_html__( 'Products', 'WooCOD_text' ),
				'type' => \Elementor\Controls_Manager::SELECT2,
                'multiple' => false, 
				'options' => $options,
			]
		);

		$this->end_controls_section();

	}

	/**
	 * Render oEmbed widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function render() {

		$settings = $this->get_settings_for_display();
		$html = wp_oembed_get( $settings['WooCOD_product'] );

        echo do_shortcode( '[WooCOD_instant_order product_id="'.$settings['WooCOD_product'].'"]' );

	}
    }
?>