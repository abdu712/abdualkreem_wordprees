<?php
function medicine_shop_post_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	$wp_customize->add_panel(
		'medicine_shop_post', array(
			'priority' => 31,
			'title' => esc_html__( 'Post Option', 'medicine-shop' ),
		)
	);

	/*=========================================
	Archive Post  Section
	=========================================*/
	$wp_customize->add_section(
		'medicine_shop_archive_post_setting', array(
			'title' => esc_html__( 'Archive Post', 'medicine-shop' ),
			'priority' => 1,
			'panel' => 'medicine_shop_post',
		)
	);
		
	// Post Heading Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'medicine_shop_post_heading_settings' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'medicine_shop_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
		'medicine_shop_post_heading_settings', 
		array(
			'label'	      => esc_html__( 'Hide / Show Post Heading', 'medicine-shop' ),
			'section'     => 'medicine_shop_archive_post_setting',
			'settings'    => 'medicine_shop_post_heading_settings',
			'type'        => 'checkbox'
		) 
	);

	// Post Content Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'medicine_shop_post_content_settings' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'medicine_shop_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'medicine_shop_post_content_settings', 
		array(
			'label'	      => esc_html__( 'Hide / Show Post Content', 'medicine-shop' ),
			'section'     => 'medicine_shop_archive_post_setting',
			'settings'    => 'medicine_shop_post_content_settings',
			'type'        => 'checkbox'
		) 
	);

	// Post Featured Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'medicine_shop_post_featured_image_settings' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'medicine_shop_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'medicine_shop_post_featured_image_settings', 
		array(
			'label'	      => esc_html__( 'Hide / Show Post Feature Image', 'medicine-shop' ),
			'section'     => 'medicine_shop_archive_post_setting',
			'settings'    => 'medicine_shop_post_featured_image_settings',
			'type'        => 'checkbox'
		) 
	);

	// Post Date Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'medicine_shop_post_date_settings' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'medicine_shop_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'medicine_shop_post_date_settings', 
		array(
			'label'	      => esc_html__( 'Hide / Show Post Date', 'medicine-shop' ),
			'section'     => 'medicine_shop_archive_post_setting',
			'settings'    => 'medicine_shop_post_date_settings',
			'type'        => 'checkbox'
		) 
	);

	// Post Date Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'medicine_shop_post_comments_settings' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'medicine_shop_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'medicine_shop_post_comments_settings', 
		array(
			'label'	      => esc_html__( 'Hide / Show Post Comment', 'medicine-shop' ),
			'section'     => 'medicine_shop_archive_post_setting',
			'settings'    => 'medicine_shop_post_comments_settings',
			'type'        => 'checkbox'
		) 
	);

	// Post Date Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'medicine_shop_post_author_settings' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'medicine_shop_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'medicine_shop_post_author_settings', 
		array(
			'label'	      => esc_html__( 'Hide / Show Post Author', 'medicine-shop' ),
			'section'     => 'medicine_shop_archive_post_setting',
			'settings'    => 'medicine_shop_post_author_settings',
			'type'        => 'checkbox'
		) 
	);

	// Post Tags Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'medicine_shop_post_tags_settings' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'medicine_shop_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'medicine_shop_post_tags_settings', 
		array(
			'label'	      => esc_html__( 'Hide / Show Post Tags', 'medicine-shop' ),
			'section'     => 'medicine_shop_archive_post_setting',
			'settings'    => 'medicine_shop_post_tags_settings',
			'type'        => 'checkbox'
		) 
	);

	$wp_customize->add_setting( 'medicine_shop_upgrade_page_settings_10',
        array(
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control( new Medicine_Shop_Control_Upgrade(
        $wp_customize, 'medicine_shop_upgrade_page_settings_10',
            array(
                'priority'      => 200,
                'section'       => 'medicine_shop_archive_post_setting',
                'settings'      => 'medicine_shop_upgrade_page_settings_10',
                'label'         => __( 'Medicine Shop Pro comes with additional features.', 'medicine-shop' ),
                'choices'       => array( __( '12+ Sections', 'medicine-shop' ), __( 'One Click Demo Importer', 'medicine-shop' ), __( 'Section Reordering Facility', 'medicine-shop' ),__( 'Advance Typography', 'medicine-shop' ),__( 'Easy Customization', 'medicine-shop' ),__( '24x7 Support', 'medicine-shop' ), )
            )
        )
    ); 

	/*=========================================
	Single Post  Section
	=========================================*/
	$wp_customize->add_section(
		'medicine_shop_single_post', array(
			'title' => esc_html__( 'Single Post', 'medicine-shop' ),
			'priority' => 3,
			'panel' => 'medicine_shop_post',
		)
	);
	
	// Post Heading Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'medicine_shop_single_post_heading_settings' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'medicine_shop_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'medicine_shop_single_post_heading_settings', 
		array(
			'label'	      => esc_html__( 'Hide / Show Post Heading', 'medicine-shop' ),
			'section'     => 'medicine_shop_single_post',
			'settings'    => 'medicine_shop_single_post_heading_settings',
			'type'        => 'checkbox'
		) 
	);

	// Post Content Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'medicine_shop_single_post_content_settings' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'medicine_shop_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'medicine_shop_single_post_content_settings', 
		array(
			'label'	      => esc_html__( 'Hide / Show Post Content', 'medicine-shop' ),
			'section'     => 'medicine_shop_single_post',
			'settings'    => 'medicine_shop_single_post_content_settings',
			'type'        => 'checkbox'
		) 
	);

	// Post Featured Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'medicine_shop_single_post_featured_image_settings' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'medicine_shop_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'medicine_shop_single_post_featured_image_settings', 
		array(
			'label'	      => esc_html__( 'Hide / Show Post Feature Image', 'medicine-shop' ),
			'section'     => 'medicine_shop_single_post',
			'settings'    => 'medicine_shop_single_post_featured_image_settings',
			'type'        => 'checkbox'
		) 
	);

	// Post Date Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'medicine_shop_single_post_date_settings' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'medicine_shop_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'medicine_shop_single_post_date_settings', 
		array(
			'label'	      => esc_html__( 'Hide / Show Post Date', 'medicine-shop' ),
			'section'     => 'medicine_shop_single_post',
			'settings'    => 'medicine_shop_single_post_date_settings',
			'type'        => 'checkbox'
		) 
	);

	// Post Date Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'medicine_shop_single_post_comments_settings' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'medicine_shop_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'medicine_shop_single_post_comments_settings', 
		array(
			'label'	      => esc_html__( 'Hide / Show Post Comment', 'medicine-shop' ),
			'section'     => 'medicine_shop_single_post',
			'settings'    => 'medicine_shop_single_post_comments_settings',
			'type'        => 'checkbox'
		) 
	);

	// Post Date Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'medicine_shop_single_post_author_settings' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'medicine_shop_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'medicine_shop_single_post_author_settings', 
		array(
			'label'	      => esc_html__( 'Hide / Show Post Author', 'medicine-shop' ),
			'section'     => 'medicine_shop_single_post',
			'settings'    => 'medicine_shop_single_post_author_settings',
			'type'        => 'checkbox'
		) 
	);
	// Post Tags Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'medicine_shop_single_post_tags_settings' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'medicine_shop_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'medicine_shop_single_post_tags_settings', 
		array(
			'label'	      => esc_html__( 'Hide / Show Post Tags', 'medicine-shop' ),
			'section'     => 'medicine_shop_single_post',
			'settings'    => 'medicine_shop_single_post_tags_settings',
			'type'        => 'checkbox'
		) 
	);

	$wp_customize->add_setting( 'medicine_shop_upgrade_page_settings_11',
        array(
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control( new Medicine_Shop_Control_Upgrade(
        $wp_customize, 'medicine_shop_upgrade_page_settings_11',
            array(
                'priority'      => 200,
                'section'       => 'medicine_shop_single_post',
                'settings'      => 'medicine_shop_upgrade_page_settings_11',
                'label'         => __( 'Medicine Shop Pro comes with additional features.', 'medicine-shop' ),
                'choices'       => array( __( '12+ Sections', 'medicine-shop' ), __( 'One Click Demo Importer', 'medicine-shop' ), __( 'Section Reordering Facility', 'medicine-shop' ),__( 'Advance Typography', 'medicine-shop' ),__( 'Easy Customization', 'medicine-shop' ),__( '24x7 Support', 'medicine-shop' ), )
            )
        )
    ); 
}

add_action( 'customize_register', 'medicine_shop_post_setting' );