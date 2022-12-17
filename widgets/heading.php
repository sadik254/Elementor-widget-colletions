<?php

class Elementor_Header_Zufaa extends \Elementor\Widget_Base {

    public function get_name(){
        return 'elementor_header_zufaa';
    }

    
    public function get_title(){
        return esc_html__('Elementor Header Zufaa', 'elementor-button-zufaa');
    }

    public function get_icon(){
        return 'eicon-header';
    }

    public function get_categories(){
        return ['basic'];
    }

    public function get_keywords(){
        return ['header', 'Animate-Header', 'Header-style', 'custom-header', 'Animation-header'];
    }

    // Controls Register Below

    protected function register_controls(){

        $this->start_controls_section(
            'section-header',
            [
                'label' => esc_html__('Header Customization', 'elementor-button-zufaa'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'section-header-text',
            [
                'label' => 'Header Text',
                'tab' => \Elementor\Controls_Manager::TEXT,
                'placeholder' => __('Enter Header Text', 'elementor-button-zufaa'),

            ]
            );

        $this->add_control(
            'section-header-url',
            [
                'label' => __('URL', 'elementor-button-zufaa'),
                'tab' => \Elementor\Controls_Manager::TEXT,
                'placeholder' => __('https://zufaa.com', 'elementor-button-zufaa'),
            ]
        );

        $this->add_control(
            'section-header-text-color',
            [
                'label' => esc_html__('Header Text Color', 'elementor-button-zufaa'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => 
                [
                    '{{WRAPPERS}} .header-text-color' => 'color: {{VALUE}}'
                ],
            ]
        );

        // Header Text Font Control
        $this->add_control(
			'header-font',
			[
				'label' => esc_html__( 'Font Family', 'elementor-button-zufaa' ),
				'type' => \Elementor\Controls_Manager::FONT,
				'default' => "'Open Sans', sans-serif",
				'selectors' => [
					'{{WRAPPER}} .header-font' => 'font-family: {{VALUE}}',
				],
			]
		);

        // Text Shadow Control
        $this->add_control(
			'header-text-shadow',
			[
				'label' => esc_html__( 'Text Shadow', 'elementor-button-zufaa' ),
				'type' => \Elementor\Controls_Manager::TEXT_SHADOW,
				'selectors' => [
					'{{SELECTOR}} .text-shadow-control' => 'text-shadow: {{HORIZONTAL}}px {{VERTICAL}}px {{BLUR}}px {{COLOR}};',
				],
			]
		);

        $this->add_control(
            'section-header-text-alignment',
            [
                'label' => __('Alignment' , 'elementor-button-zufaa'),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'options' => 
                [
                    'left' => 
                    [
                        'title' => __('Left', 'elementor-button-zufaa'),
                        'icon' => 'eicon-h-align-left',
                    ],
                    'center' =>
                    [
                        'title' => __('Center', 'elementor-button-zufaa'),
                        'icon' => 'eicon-h-align-center',
                    ],
                    'right' =>
                    [
                        'title' => __('Right', 'elementor-button-zufaa'),
                        'icon' => 'eicon-h-align-right',
                    ],
                ],
                'default' => 'center',
                'toggle' => true,
                'selectors'=> 
                [
                    '{{WRAPPER}} .header-text-alignment' => 'text-align: {{VALUE}}',
                ]
            ]
        );

        $this->add_control(
            'section-header-type',
            [
                'label' => __('Heading Type', 'elementor-button-zufaa'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'H1',
                'options' =>
                [
                    'H1' => __('H1', 'elementor-button-zufaa'),
                    'H2' => __('H2', 'elementor-button-zufaa'),
                    'H3' => __('H3', 'elementor-button-zufaa'),
                    'H4' => __('H4', 'elementor-button-zufaa'),
                    'H5' => __('H5', 'elementor-button-zufaa'),
                ],
            ]
        );

        //Additional Heading Control
        // $this->add_control(
		// 	'more_options',
		// 	[
		// 		'label' => esc_html__( 'Additional Options', 'elementor-button-zufaa' ),
		// 		'type' => \Elementor\Controls_Manager::HEADING,
		// 		'separator' => 'before',
		// 	]
		// );

        $this->add_group_control(
			\Elementor\Group_Control_Text_Stroke::get_type(),
			[
				'name' => 'text_stroke',
				'selector' => '{{WRAPPER}} .header-text-stroke',
			]
		);



        $this->end_controls_section();
    }



    // Displaying Output
    protected function render()
    {
        $showheader = $this->get_settings_for_display(); ?>

    <a href="<?php echo $showheader['section-header-url']; ?>">
    <div class = "header-text-alignment header-text-color header-font text-shadow-control header-text-stroke">
    <<?php echo $showheader['section-header-type']; ?>> <?php echo $showheader['section-header-text']; ?> <<?php echo $showheader['section-header-type']; ?>>

    </div> </a>

    <?php
    }





}