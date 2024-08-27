<?php
function halloweenshop_blog_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	$wp_customize->add_panel(
		'halloweenshop_frontpage_sections', array(
			'priority' => 32,
			'title' => esc_html__( 'Frontpage Sections', 'halloween-shop' ),
		)
	);
	


	/*=========================================
	Slider Section
	=========================================*/
	$wp_customize->add_section(
		'slider_setting', array(
			'title' => esc_html__( 'Slider Section', 'halloween-shop' ),
			'description'=> __('<a>Note :</a> Image Size Should Be 1500*800','halloween-shop'),
			'priority' => 1,
			'panel' => 'halloweenshop_frontpage_sections',
		)
	);



	$wp_customize->add_setting('halloweenshop_slider_tabs', array(
	   'sanitize_callback' => 'wp_kses_post',
	));

	$wp_customize->add_control(new halloweenshop_Tab_Control($wp_customize, 'halloweenshop_slider_tabs', array(
	   'section' => 'slider_setting',
	   'priority' => 2,
	   'buttons' => array(
	      array(
         	'name' => esc_html__('General', 'halloween-shop'),
            'icon' => 'dashicons dashicons-welcome-write-blog',
            'fields' => array(
            	'slider1',
            	'slider2',
            	'slider3',
            	'slider4',
            	'slider5',
            	'slider6',
				'sliderbtnlink'
            ),
            'active' => true,
         ), 
	      array(
            'name' => esc_html__('Style', 'halloween-shop'),
        	'icon' => 'dashicons dashicons-art',
            'fields' => array(
                'slider_titlecolor',
                'slider_descriptioncolor',
                'slider_btntxt1color',
				'slider_btnbgcolor1',
				'slider_btnbgcolor2',
				'slider_btntxthovercolor'

            ),
     	)
	    
    	),
	))); 


	

	// General Tab

	// Slider 1
	$wp_customize->add_setting( 
    	'slider1',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider1',
		array(
		    'label'   		=> __('Slider 1','halloween-shop'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);		



	// Slider 2
	$wp_customize->add_setting(
    	'slider2',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'slider2',
		array(
		    'label'   		=> __('Slider 2','halloween-shop'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);	


	// Slider 3
	$wp_customize->add_setting(
    	'slider3',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 5,
		)
	);	

	$wp_customize->add_control( 
		'slider3',
		array(
		    'label'   		=> __('Slider 3','halloween-shop'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);	


	// Slider 4
	$wp_customize->add_setting(
    	'slider4',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'slider4',
		array(
		    'label'   		=> __('Slider 4','halloween-shop'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);



	// Slider 5
	$wp_customize->add_setting(
    	'slider5',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'slider5',
		array(
		    'label'   		=> __('Slider 5','halloween-shop'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);

	// Slider 6
	$wp_customize->add_setting(
    	'slider6',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'slider6',
		array(
		    'label'   		=> __('Slider 6','halloween-shop'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);

	// Sliderbtnlink
	$wp_customize->add_setting(
		'sliderbtnlink',
		array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 8,
		)
	);	

	$wp_customize->add_control( 
		'sliderbtnlink',
		array(
			'label'   		=> __('Button Link','halloween-shop'),
			'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);


	// Style setting

	// slider title Color
	$slidertitlecolor = esc_html__('#fff', 'halloween-shop' );
	$wp_customize->add_setting(
    	'slider_titlecolor',
    	array(
			'default' => $slidertitlecolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_titlecolor',
		array(
		    'label'   		=> __('Title Color','halloween-shop'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// slider description Color
	$sliderdescriptioncolor = esc_html__('#fff', 'halloween-shop' );
	$wp_customize->add_setting(
    	'slider_descriptioncolor',
    	array(
			'default' => $sliderdescriptioncolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_descriptioncolor',
		array(
		    'label'   		=> __('Description Color','halloween-shop'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// slider btntxt1 Color
	$sliderbtntxt1color = esc_html__('#261550', 'halloween-shop' );
	$wp_customize->add_setting(
    	'slider_btntxt1color',
    	array(
			'default' => $sliderbtntxt1color,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_btntxt1color',
		array(
		    'label'   		=> __('Button Text Color','halloween-shop'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// slider btnbg Color1
	$sliderbtnbgcolor1 = esc_html__('#F97B22', 'halloween-shop' );
	$wp_customize->add_setting(
    	'slider_btnbgcolor1',
    	array(
			'default' => $sliderbtnbgcolor1,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_btnbgcolor1',
		array(
		    'label'   		=> __('Button BG Color 1','halloween-shop'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// slider btnbg Color2
	$sliderbtnbgcolor2 = esc_html__('#FFAA00', 'halloween-shop' );
	$wp_customize->add_setting(
    	'slider_btnbgcolor2',
    	array(
			'default' => $sliderbtnbgcolor2,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_btnbgcolor2',
		array(
		    'label'   		=> __('Button BG Color 2','halloween-shop'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	

	// slider btntxthover Color
	$sliderbtntxthovercolor = esc_html__('#fff', 'halloween-shop' );
	$wp_customize->add_setting(
    	'slider_btntxthovercolor',
    	array(
			'default' => $sliderbtntxthovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_btntxthovercolor',
		array(
		    'label'   		=> __('Button Text Hover Color','halloween-shop'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	/*=========================================
	bestseller Section
	=========================================*/
	$wp_customize->add_section(
		'bestseller_setting', array(
			'title' => esc_html__( 'Best Seller Section', 'halloween-shop' ),
			'priority' => 2,
			'panel' => 'halloweenshop_frontpage_sections',
		)
	);

	$wp_customize->add_setting('halloweenshop_bestseller_tabs', array(
		'sanitize_callback' => 'wp_kses_post',
	 ));
 
	 $wp_customize->add_control(new halloweenshop_Tab_Control($wp_customize, 'halloweenshop_bestseller_tabs', array(
		'section' => 'bestseller_setting',
		'priority' => 2,
		'buttons' => array(
		   array(
			  'name' => esc_html__('General', 'halloween-shop'),
			 'icon' => 'dashicons dashicons-welcome-write-blog',
			 'fields' => array(
				 'bestseller_disable_section',
				 'bestseller_heading',
				 'bestseller_subheading'
			 ),
			 'active' => true,
		  ),
		   array(
			 'name' => esc_html__('Style', 'halloween-shop'),
			 'icon' => 'dashicons dashicons-art',
			 'fields' => array(
				 'bestseller_headingcolor',
				 'bestseller_subheadingcolor',
				 'bestseller_boxbgcolor',
				 'bestseller_titlecolor',
				 'bestseller_pricecolor',
				 'bestseller_btntxtcolor',
				 'bestseller_btnbgcolor1',
				 'bestseller_btnbgcolor2',
				 'bestseller_btntxthovercolor'
			 ),
		  ),
		array(
            'name' => esc_html__('Layout', 'halloween-shop'),
            'icon' => 'dashicons dashicons-layout',
            'fields' => array(
                'halloweenshop_bestseller_section_width',
				'halloweenshop_bestseller_margin',
				'halloweenshop_bestseller_section_topmargin',
				'halloweenshop_bestseller_section_bottommargin'
            ),
         )
		 
		 ),
	 ))); 


	//  Genral Settings

	// hide show bestseller section
	$wp_customize->add_setting(
        'bestseller_disable_section',
        array(
            'sanitize_callback' => 'wp_kses_post',
        )
    ); 
    $wp_customize->add_control(
        new halloweenshop_Toggle_Switch_Custom_Control(
            $wp_customize,
            'bestseller_disable_section',
            array(
                'settings'      => 'bestseller_disable_section',
                'section'       => 'bestseller_setting',
                'label'         => __( 'Disable Section', 'halloween-shop' ),
                'on_off_label'  => array(
                    'on' => __( 'Yes', 'halloween-shop' ),
                    'off' => __( 'No', 'halloween-shop' )
                ),
            )
        )
    );


	// bestseller title
	$bestsellerheading = esc_html__('EXPLORE OUR', 'halloween-shop' );
	$wp_customize->add_setting(
    	'bestseller_heading',
    	array(
			'default' => $bestsellerheading,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'bestseller_heading',
		array(
		    'label'   		=> __('Heading','halloween-shop'),
		    'section'		=> 'bestseller_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// bestseller sub title
	$bestsellersubheading = esc_html__('Best Seller', 'halloween-shop' );
	$wp_customize->add_setting(
    	'bestseller_subheading',
    	array(
			'default' => $bestsellersubheading,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'bestseller_subheading',
		array(
		    'label'   		=> __('Sub Heading','halloween-shop'),
		    'section'		=> 'bestseller_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// Style setting

	// bestseller heading Color
	$bestsellerheadingcolor = esc_html__('#F97924', 'halloween-shop' );
	$wp_customize->add_setting(
    	'bestseller_headingcolor',
    	array(
			'default' => $bestsellerheadingcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'bestseller_headingcolor',
		array(
		    'label'   		=> __('Heading Color','halloween-shop'),
		    'section'		=> 'bestseller_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// bestseller subheading Color
	$bestsellersubheadingcolor = esc_html__('#000', 'halloween-shop' );
	$wp_customize->add_setting(
    	'bestseller_subheadingcolor',
    	array(
			'default' => $bestsellersubheadingcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'bestseller_subheadingcolor',
		array(
		    'label'   		=> __('Sub Heading Color','halloween-shop'),
		    'section'		=> 'bestseller_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// bestseller boxbg Color
	$bestsellerboxbgcolor = esc_html__('#312848', 'halloween-shop' );
	$wp_customize->add_setting(
    	'bestseller_boxbgcolor',
    	array(
			'default' => $bestsellerboxbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'bestseller_boxbgcolor',
		array(
		    'label'   		=> __('Box Bg Color','halloween-shop'),
		    'section'		=> 'bestseller_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// bestseller title Color
	$bestsellertitlecolor = esc_html__('#fff', 'halloween-shop' );
	$wp_customize->add_setting(
    	'bestseller_titlecolor',
    	array(
			'default' => $bestsellertitlecolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'bestseller_titlecolor',
		array(
		    'label'   		=> __('Title Color','halloween-shop'),
		    'section'		=> 'bestseller_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// bestseller price Color
	$bestsellerpricecolor = esc_html__('#FFD47F', 'halloween-shop' );
	$wp_customize->add_setting(
    	'bestseller_pricecolor',
    	array(
			'default' => $bestsellerpricecolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'bestseller_pricecolor',
		array(
		    'label'   		=> __('Price Color','halloween-shop'),
		    'section'		=> 'bestseller_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// bestseller btntxt Color
	$bestsellerbtntxtcolor = esc_html__('#fff', 'halloween-shop' );
	$wp_customize->add_setting(
    	'bestseller_btntxtcolor',
    	array(
			'default' => $bestsellerbtntxtcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'bestseller_btntxtcolor',
		array(
		    'label'   		=> __('Button Text Color','halloween-shop'),
		    'section'		=> 'bestseller_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// bestseller btnbg Color1
	$bestsellerbtnbgcolor1 = esc_html__('#F97B22', 'halloween-shop' );
	$wp_customize->add_setting(
    	'bestseller_btnbgcolor1',
    	array(
			'default' => $bestsellerbtnbgcolor1,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'bestseller_btnbgcolor1',
		array(
		    'label'   		=> __('Button BG Color 1','halloween-shop'),
		    'section'		=> 'bestseller_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// bestseller btnbg Color2
	$bestsellerbtnbgcolor2 = esc_html__('#FFAA00', 'halloween-shop' );
	$wp_customize->add_setting(
    	'bestseller_btnbgcolor2',
    	array(
			'default' => $bestsellerbtnbgcolor2,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'bestseller_btnbgcolor2',
		array(
		    'label'   		=> __('Button BG Color 2','halloween-shop'),
		    'section'		=> 'bestseller_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	

	// bestseller btntxthover Color
	$bestsellerbtntxthovercolor = esc_html__('#000', 'halloween-shop' );
	$wp_customize->add_setting(
    	'bestseller_btntxthovercolor',
    	array(
			'default' => $bestsellerbtntxthovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'bestseller_btntxthovercolor',
		array(
		    'label'   		=> __('Button Text Hover Color','halloween-shop'),
		    'section'		=> 'bestseller_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	
	// layout setting
	$wp_customize->add_setting('halloweenshop_bestseller_section_width',array(
        'default' => 'Box Width',
        'sanitize_callback' => 'halloweenshop_sanitize_choices',
    ));
    $wp_customize->add_control('halloweenshop_bestseller_section_width',array(
        'type' => 'select',
        'label' => __('Section Width','halloween-shop'),
        'choices' => array (
            'Box Width' => __('Box Width','halloween-shop'),
            'Full Width' => __('Full Width','halloween-shop')
        ),
        'section' => 'bestseller_setting',
    ));


	// bestseller section margin 
	$wp_customize->add_setting('halloweenshop_bestseller_margin',array(
		'sanitize_callback'   => 'esc_html'
	));
	$wp_customize->add_control('halloweenshop_bestseller_margin',array(
		'label' => __('Section margin','halloween-shop'),
		'section' => 'bestseller_setting'
	));

	$wp_customize->add_setting('halloweenshop_bestseller_section_topmargin',array(
		'default' => '0',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('halloweenshop_bestseller_section_topmargin',array(
		'type' => 'number',
		'label' => __('Top','halloween-shop'),
		'section' => 'bestseller_setting',
	));

	$wp_customize->add_setting('halloweenshop_bestseller_section_bottommargin',array(
		'default' => '0',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('halloweenshop_bestseller_section_bottommargin',array(
		'type' => 'number',
		'label' => __('Bottom','halloween-shop'),
		'section' => 'bestseller_setting',
	));
	


	/*=========================================
	collection Section
	=========================================*/
	$wp_customize->add_section(
		'collection_setting', array(
			'title' => esc_html__( 'Collection Section', 'halloween-shop' ),
			'priority' => 2,
			'panel' => 'halloweenshop_frontpage_sections',
		)
	);

	$wp_customize->add_setting('halloweenshop_collection_tabs', array(
		'sanitize_callback' => 'wp_kses_post',
	 ));
 
	 $wp_customize->add_control(new halloweenshop_Tab_Control($wp_customize, 'halloweenshop_collection_tabs', array(
		'section' => 'collection_setting',
		'priority' => 2,
		'buttons' => array(
		   array(
			  'name' => esc_html__('General', 'halloween-shop'),
			 'icon' => 'dashicons dashicons-welcome-write-blog',
			 'fields' => array(
				'collection_disable_section',
				 'collection_heading',
				 'collection_subheading'
			 ),
			 'active' => true,
		  ),
		   array(
			 'name' => esc_html__('Style', 'halloween-shop'),
			 'icon' => 'dashicons dashicons-art',
			 'fields' => array(
				 'collection_headingcolor',
				 'collection_subheadingcolor',
				 'collection_boxbgcolor',
				 'collection_titlecolor'
			 ),
		  ),
		  array(
			  'name' => esc_html__('Layout', 'halloween-shop'),
			  'icon' => 'dashicons dashicons-layout',
			  'fields' => array(
				  'halloweenshop_collection_section_width'
			  ),
		   )
		   
		 
		 ),
	 ))); 


	// General

	// hide show collection section
	$wp_customize->add_setting(
        'collection_disable_section',
        array(
            'sanitize_callback' => 'wp_kses_post',
        )
    ); 
    $wp_customize->add_control(
        new halloweenshop_Toggle_Switch_Custom_Control(
            $wp_customize,
            'collection_disable_section',
            array(
                'settings'      => 'collection_disable_section',
                'section'       => 'collection_setting',
                'label'         => __( 'Disable Section', 'halloween-shop' ),
                'on_off_label'  => array(
                    'on' => __( 'Yes', 'halloween-shop' ),
                    'off' => __( 'No', 'halloween-shop' )
                ),
            )
        )
    );

	// collection title
	$collectionheading = esc_html__('HELLOWEEN PARTY', 'halloween-shop' );
	$wp_customize->add_setting(
    	'collection_heading',
    	array(
			'default' => $collectionheading,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'collection_heading',
		array(
		    'label'   		=> __('Heading','halloween-shop'),
		    'section'		=> 'collection_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// collection sub title
	$collectionsubheading = esc_html__('Collection', 'halloween-shop' );
	$wp_customize->add_setting(
    	'collection_subheading',
    	array(
			'default' => $collectionsubheading,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'collection_subheading',
		array(
		    'label'   		=> __('Sub Heading','halloween-shop'),
		    'section'		=> 'collection_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	


	// Style setting

	// collection heading Color
	$collectionheadingcolor = esc_html__('#F97924', 'halloween-shop' );
	$wp_customize->add_setting(
    	'collection_headingcolor',
    	array(
			'default' => $collectionheadingcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'collection_headingcolor',
		array(
		    'label'   		=> __('Heading Color','halloween-shop'),
		    'section'		=> 'collection_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// collection subheading Color
	$collectionsubheadingcolor = esc_html__('#000', 'halloween-shop' );
	$wp_customize->add_setting(
    	'collection_subheadingcolor',
    	array(
			'default' => $collectionsubheadingcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'collection_subheadingcolor',
		array(
		    'label'   		=> __('Sub Heading Color','halloween-shop'),
		    'section'		=> 'collection_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// collection boxbg Color
	$collectionboxbgcolor = esc_html__('#312848', 'halloween-shop' );
	$wp_customize->add_setting(
    	'collection_boxbgcolor',
    	array(
			'default' => $collectionboxbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'collection_boxbgcolor',
		array(
		    'label'   		=> __('Box BG Color','halloween-shop'),
		    'section'		=> 'collection_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// collection title Color
	$collectiontitlecolor = esc_html__('#fff', 'halloween-shop' );
	$wp_customize->add_setting(
    	'collection_titlecolor',
    	array(
			'default' => $collectiontitlecolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'collection_titlecolor',
		array(
		    'label'   		=> __('Title Color','halloween-shop'),
		    'section'		=> 'collection_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// layout setting
	$wp_customize->add_setting('halloweenshop_collection_section_width',array(
        'default' => 'Box Width',
        'sanitize_callback' => 'halloweenshop_sanitize_choices',
    ));
    $wp_customize->add_control('halloweenshop_collection_section_width',array(
        'type' => 'select',
        'label' => __('Section Width','halloween-shop'),
        'choices' => array (
            'Box Width' => __('Box Width','halloween-shop'),
            'Full Width' => __('Full Width','halloween-shop')
        ),
        'section' => 'collection_setting',
    ));



	$wp_customize->register_control_type('halloweenshop_Tab_Control');

}

add_action( 'customize_register', 'halloweenshop_blog_setting' );

// service selective refresh
function halloweenshop_blog_section_partials( $wp_customize ){	
	// blog_title
	$wp_customize->selective_refresh->add_partial( 'blog_title', array(
		'selector'            => '.home-blog .title h6',
		'settings'            => 'blog_title',
		'render_callback'  => 'halloweenshop_blog_title_render_callback',
	
	) );
	
	// blog_subtitle
	$wp_customize->selective_refresh->add_partial( 'blog_subtitle', array(
		'selector'            => '.home-blog .title h2',
		'settings'            => 'blog_subtitle',
		'render_callback'  => 'halloweenshop_blog_subtitle_render_callback',
	
	) );
	
	// blog_description
	$wp_customize->selective_refresh->add_partial( 'blog_description', array(
		'selector'            => '.home-blog .title p',
		'settings'            => 'blog_description',
		'render_callback'  => 'halloweenshop_blog_description_render_callback',
	
	) );	
	}

add_action( 'customize_register', 'halloweenshop_blog_section_partials' );

// blog_title
function halloweenshop_blog_title_render_callback() {
	return get_theme_mod( 'blog_title' );
}

// blog_subtitle
function halloweenshop_blog_subtitle_render_callback() {
	return get_theme_mod( 'blog_subtitle' );
}

// service description
function halloweenshop_blog_description_render_callback() {
	return get_theme_mod( 'blog_description' );
}


