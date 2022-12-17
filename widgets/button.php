<?php
// use Elementor\Controls_Manager;
class Elementor_Button_zufaa extends \Elementor\Widget_Base {

    // public function __construct(){
    //     parent::__construct();
    //     wp_register_style( 'style-css', plugin_dir_url( __FILE__ ) . '/includes/style.css' );

      // wp_register_script( 'demo-elementor-widget-js',  plugin_dir_url( __FILE__ ) . '/assets/js/demo-elementor-widget.js', ['elementor-frontend'],'1.0.0', true );
        
    // }
    

    public function get_name(){
        return 'elementor_button_zufaa';
    }

    public function get_title(){
        return esc_html__('Elementor Button Zufaa', 'elementor_button_zufaa');
    }

    public function get_icon() {
        return 'eicon-button';
    }

    public function get_categories(){
        return ['basic'];
    }

    public function get_keywords(){
        return ['button', 'elementor-button', 'custom-elementor-button', 'free-elementor-button'];
    }

    public function get_script_depends() {
        wp_register_script("bootstrap-js", "https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js", array(), false, true);
         
        return [
            'bootstrap-js'
        ];
    }

    public function get_style_depends() {
        wp_register_style( "bootstrap-css", "https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css", array(), false, "all" );
        return [
            'bootstrap-css'
        ];
    }


    // Controls Register
    // Options that will be available on widget customization
    protected function register_controls() {
        // Button Text Control
        $this->start_controls_section(
            'section-button',
            [
                'label' => esc_html('Button Customization', 'elementor-button-zufaa'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'section-button-text',
            [
                'label' => 'Button Text',
                'tab' => \Elementor\Controls_Manager::TEXT,
                'placeholder' => __('Enter Button Text', 'elementor-button-zufaa' ),
            ]
        );
        $this->add_control(
            'section-button-ID',
            [
                'label' => 'Custom Button ID',
                'tab' => \Elementor\Controls_Manager::TEXT,
                'placeholder' => __('Enter Button ID', 'elementor-button-zufaa' ),
            ]
        );

        $this->add_control(
            'section-button-link',
            [
                'label' => __('URL', 'elementor-button-zufaa'),
                'tab' => \Elementor\Controls_Manager::TEXT,
                'placeholder' => __('https://zufaa.com', 'elementor-button-zufaa'),
            ]
        );
        $this->add_control(
            'section-button-alignment',
            [
                'label' => __('Alignment' , 'elementor-button-zufaa'),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'options' => [
                    'left' =>[
                        'title' => __('Left', 'elementor-button-zufaa'),
                        'icon' => 'eicon-h-align-left',
                    ],
                    'center' => [
                        'title' => __('Center', 'elementor-button-zufaa'),
                        'icon' => 'eicon-h-align-center',
                    ],
                    'right' => [
                        'title' => __('Right', 'elementor-button-zufaa'),
                        'icon' => 'eicon-h-align-right',
                    ],
                ],
                'default' => 'center',
                'toggle' => true,
				'selectors' => [
					'{{WRAPPER}} .button-alignment' => 'text-align: {{VALUE}};',
            ]
            ]
        );

        // Media Control - Button Icon
        $this->add_control(
            'section-button-icon',
            [
                'type' => \Elementor\Controls_Manager::ICON,
                'label' => esc_html__('Choose Font Awesome Icon', 'elementor-button-zufaa'),
            ]
        );

        // Typography Control Below
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'content_typography',
				'selector' => '{{WRAPPER}} .button-typo',
			]
		);

        $this->end_controls_section();
        // Button Style Tab Control
        $this->start_controls_section(
            'section-style',
            [
                'label' => esc_html__('Button', 'elementor-button-zufaa'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'section-button-color',
            [
                'type' => \Elementor\Controls_Manager::COLOR,
                'label' => esc_html__( 'Button Color', 'elementor-button-zufaa'),
                'selectors' => [
                    '{{WRAPPER}} .button-color'        => 'background-color:{{VALUE}}'
                ],
                'default' => '#c36',
            ]
        );

        $this->add_control(
            'section-button-border-color',
            [
                'type' => \Elementor\Controls_Manager::COLOR,
                'label' => esc_html__( 'Button Border Color', 'elementor-button-zufaa'),
                'selectors' => [
                    '{{WRAPPER}} .button-border-color'        => 'border-color:{{VALUE}}'
                ],
                'default' => '#c36',
            ]
        );
        // Width Doesn't Work on Elementor
        // $this->add_responsive_control(
        //     'button-width-control',
        //     [
        //         'type' => \Elementor\Controls_Manager::SLIDER,
        //         'label' => esc_html__('Button Width', 'elementor-button-zufaa'),
        //         'size_units' => ['px', 'em', '%'],
        //         'selectors' => [
        //             '{{WRAPPER}} .button-width-custom' =>'width:{{VALUE}}'
        //         ],

        //     ]
        // );

        // Text color
        $this->add_control(
            'section-button-text-color',
            [
                'type' => \Elementor\Controls_Manager::COLOR,
                'label' => esc_html__( 'Button Text Color', 'elementor-button-zufaa'),
                'selectors' => [
                    '{{WRAPPER}} .button-text-color'  => 'color:{{VALUE}}' //Applid to <a/> tag
                ],
                'default' => '#c36',
            ]
        );

        $this->add_responsive_control(
			'section-button-padding',
			[
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'label' => esc_html__( 'Padding', 'elementor-button-zufaa' ),
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} .widget-padding' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

        $this->add_control(
            'section-border-radius',
            [
                'type' => \ELementor\Controls_Manager::DIMENSIONS,
                'label' => esc_html__('Border Radius', 'elementro-button-zufaa'),
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .widget-border-radius' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
                ]
            ]
        );


        $this->add_responsive_control(
			'section-button-margin',
			[
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'label' => esc_html__( 'Margin', 'elementor-button-zufaa' ),
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} .widget-margin' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
        $this->end_controls_section();
    }

    // Visual Output
    protected function render(){

        $showval = $this->get_settings_for_display();


        ?>
        <div id="<?php echo $showval['section-button-ID'] ?>">
    <div class="button-alignment button-typo">
        <a href="<?php echo $showval['section-button-link'] ?>">
            <button type="button" class="button-color widget-padding widget-margin button-width-custom button-border-color widget-border-radius">
                <p class="button-text-color mb-0" ><?php echo $showval['section-button-text'] ?> <i class="<?php echo esc_attr( $showval['section-button-icon'] ); ?>" aria-hidden="true"></i></p>
            </button>
        </a>
    </div>
</div>
        <?php

    }

}