<?php
function halloweenshop_header_settings( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Header Settings Panel
	=========================================*/
	$wp_customize->add_panel( 
		'header_section', 
		array(
			'priority'      => 2,
			'capability'    => 'edit_theme_options',
			'title'			=> __('Header', 'halloween-shop'),
		) 
	);

	
	/*=========================================
	Halloween Shop Site Identity
	=========================================*/
	$wp_customize->add_section(
        'title_tagline',
        array(
        	'priority'      => 1,
            'title' 		=> __('Site Identity','halloween-shop'),
			'panel'  		=> 'header_section',
		)
    );





    // top header Site Title Color
	$topheadersitetitlecol = esc_html__('#fff', 'halloween-shop' );
	$wp_customize->add_setting(
    	'topheader_sitetitlecol',
    	array(
			'default' => $topheadersitetitlecol,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'topheader_sitetitlecol',
		array(
		    'label'   		=> __('Site Title Color','halloween-shop'),
		    'section'		=> 'title_tagline',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// top header Tagline Color
	$topheadertaglinecol = esc_html__('#fff', 'halloween-shop' );
	$wp_customize->add_setting(
    	'topheader_taglinecol',
    	array(
			'default' => $topheadertaglinecol,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'topheader_taglinecol',
		array(
		    'label'   		=> __('Tagline Color','halloween-shop'),
		    'section'		=> 'title_tagline',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);
	
 
	/*=========================================
	Halloween Shop header
	=========================================*/
	$wp_customize->add_section(
        'top_header',
        array(
        	'priority'      => 6,
            'title' 		=> __('Header','halloween-shop'),
			'panel'  		=> 'header_section',
		)
    );	


    $wp_customize->add_setting('halloweenshop_reset_header_settings',array(
	  'sanitize_callback'   => 'sanitize_text_field'
	));
	$wp_customize->add_control(new halloweenshop_Reset_Custom_Control($wp_customize, 'halloween_shop_reset_header_settings',array(
	  'type' => 'reset_control',
	   'priority' => 1,
	  'label' => __('Reset Header Settings', 'halloween-shop'),
	  'description' => 'halloween_shop_header_reset_settings',
	  'section' => 'top_header'
	)));



    $wp_customize->add_setting('halloweenshop_top_header_tabs', array(
	   'sanitize_callback' => 'wp_kses_post',
	));

	$wp_customize->add_control(new halloweenshop_Tab_Control($wp_customize, 'halloweenshop_top_header_tabs', array(
	   'section' => 'top_header',
	   'priority' => 1,
	   'buttons' => array(
	      array(
     		'name' => esc_html__('General', 'halloween-shop'),
 			'icon' => 'dashicons dashicons-welcome-write-blog',
            'fields' => array(
            	'hide_show_sticky',
				'announcementbar_text'
            ),
            'active' => true,
         ),
	      array(
            'name' => esc_html__('Style', 'halloween-shop'),
            'icon' => 'dashicons dashicons-art',
            'fields' => array(
				'header_topheadbgcolor',
				'header_topheadtextcolor',
				'header_bgcolor',
            	'header_menuscolor',
            	'header_menushovercolor',
				'header_submenusiconcolor',
            	'header_submenusbgcolor',
            	'header_submenutextcolor',
            	'header_submenustxthovercolor',
				'header_mobilemenutogglebgcolor',
				'header_mobilemenutoggleiccolor',
            	'header_iconscolor',
            	'header_searchiconandnobgcolor'
            ),
         )
	    
    	),
	)));


	// general setting

	// sticky header
	$wp_customize->add_setting( 'hide_show_sticky',array(
        'default' => false,
        'sanitize_callback' => 'halloweenshop_switch_sanitization'
   	) );
   	$wp_customize->add_control( new halloweenshop_Toggle_Switch_Custom_Control( $wp_customize, 'hide_show_sticky',array(
        'label' => __( 'Show Sticky Header','halloween-shop' ),
        'section' => 'top_header'
   	)));


	// announcementbar text 1
	$announcementbartext = esc_html__('', 'halloween-shop' );
	$wp_customize->add_setting(
    	'announcementbar_text',
    	array(
			'default' => $announcementbartext,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'announcementbar_text',
		array(
		    'label'   		=> __('Top Head Text','halloween-shop'),
		    'section'		=> 'top_header',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);




	// Style setting

	// header topheadbg Color
	$headertopheadbgcolor = esc_html__('#F97B22', 'halloween-shop' );
	$wp_customize->add_setting(
    	'header_topheadbgcolor',
    	array(
			'default' => $headertopheadbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_topheadbgcolor',
		array(
		    'label'   		=> __('Top Head BG Color','halloween-shop'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header topheadtext Color
	$headertopheadtextcolor = esc_html__('#0D071D', 'halloween-shop' );
	$wp_customize->add_setting(
    	'header_topheadtextcolor',
    	array(
			'default' => $headertopheadtextcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_topheadtextcolor',
		array(
		    'label'   		=> __('Top Head Text Color','halloween-shop'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header bg Color
	$headerbgcolor = esc_html__('#10082A', 'halloween-shop' );
	$wp_customize->add_setting(
    	'header_bgcolor',
    	array(
			'default' => $headerbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_bgcolor',
		array(
		    'label'   		=> __('BG Color','halloween-shop'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header menus Color
	$headermenuscolor = esc_html__('#fff', 'halloween-shop' );
	$wp_customize->add_setting(
    	'header_menuscolor',
    	array(
			'default' => $headermenuscolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_menuscolor',
		array(
		    'label'   		=> __('Menus Color','halloween-shop'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header menushover Color
	$headermenushovercolor = esc_html__('#F97B22', 'halloween-shop' );
	$wp_customize->add_setting(
    	'header_menushovercolor',
    	array(
			'default' => $headermenushovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_menushovercolor',
		array(
		    'label'   		=> __('Menus Hover & Active Color','halloween-shop'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header submenusicon Color
	$headersubmenusiconcolor = esc_html__('#fff', 'halloween-shop' );
	$wp_customize->add_setting(
    	'header_submenusiconcolor',
    	array(
			'default' => $headersubmenusiconcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_submenusiconcolor',
		array(
		    'label'   		=> __('Sub Menu Icon Color','halloween-shop'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	$headersubmenusbgcolor = esc_html__('#000', 'halloween-shop' );
	$wp_customize->add_setting(
    	'header_submenusbgcolor',
    	array(
			'default' => $headersubmenusbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_submenusbgcolor',
		array(
		    'label'   		=> __('SubMenus BG Color','halloween-shop'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	

	// header submenutext Color
	$headersubmenutextcolor = esc_html__('#fff', 'halloween-shop' );
	$wp_customize->add_setting(
    	'header_submenutextcolor',
    	array(
			'default' => $headersubmenutextcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_submenutextcolor',
		array(
		    'label'   		=> __('SubMenus Text Color','halloween-shop'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// header submenustxthover Color
	$headersubmenustxthovercolor = esc_html__('#F97B22', 'halloween-shop' );
	$wp_customize->add_setting(
    	'header_submenustxthovercolor',
    	array(
			'default' => $headersubmenustxthovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_submenustxthovercolor',
		array(
		    'label'   		=> __('SubMenus txt Hover Color','halloween-shop'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header mobilemenutogglebg Color
	$headermobilemenutogglebgcolor = esc_html__('#F97B22', 'halloween-shop' );
	$wp_customize->add_setting(
    	'header_mobilemenutogglebgcolor',
    	array(
			'default' => $headermobilemenutogglebgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_mobilemenutogglebgcolor',
		array(
		    'label'   		=> __('Mobile Menu Toggle BG Color','halloween-shop'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header mobilemenutoggleic Color
	$headermobilemenutoggleiccolor = esc_html__('#fff', 'halloween-shop' );
	$wp_customize->add_setting(
    	'header_mobilemenutoggleiccolor',
    	array(
			'default' => $headermobilemenutoggleiccolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_mobilemenutoggleiccolor',
		array(
		    'label'   		=> __('Mobile Menu Toggle Icon Color','halloween-shop'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// header icons Color
	$headericonscolor = esc_html__('#fff', 'halloween-shop' );
	$wp_customize->add_setting(
    	'header_iconscolor',
    	array(
			'default' => $headericonscolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_iconscolor',
		array(
		    'label'   		=> __('Icons & Text Color','halloween-shop'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header searchiconandnobgcolor
	$headersearchiconandnobgcolor = esc_html__('#F97B22', 'halloween-shop' );
	$wp_customize->add_setting(
    	'header_searchiconandnobgcolor',
    	array(
			'default' => $headersearchiconandnobgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_searchiconandnobgcolor',
		array(
		    'label'   		=> __('Search Icon & Cart No Color','halloween-shop'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);



	$wp_customize->register_control_type('halloweenshop_Tab_Control');
	$wp_customize->register_panel_type( 'halloweenshop_WP_Customize_Panel' );
	$wp_customize->register_section_type( 'halloweenshop_WP_Customize_Section' );

}
add_action( 'customize_register', 'halloweenshop_header_settings' );



if ( class_exists( 'WP_Customize_Panel' ) ) {
  	class halloweenshop_WP_Customize_Panel extends WP_Customize_Panel {
	   public $panel;
	   public $type = 'halloweenshop_panel';
	   public function json() {

	      $array = wp_array_slice_assoc( (array) $this, array( 'id', 'description', 'priority', 'type', 'panel', ) );
	      $array['title'] = html_entity_decode( $this->title, ENT_QUOTES, get_bloginfo( 'charset' ) );
	      $array['content'] = $this->get_content();
	      $array['active'] = $this->active();
	      $array['instanceNumber'] = $this->instance_number;
	      return $array;
    	}
  	}
}

if ( class_exists( 'WP_Customize_Section' ) ) {
  	class halloweenshop_WP_Customize_Section extends WP_Customize_Section {
	   public $section;
	   public $type = 'halloweenshop_section';
	   public function json() {

	      $array = wp_array_slice_assoc( (array) $this, array( 'id', 'description', 'priority', 'panel', 'type', 'description_hidden', 'section', ) );
	      $array['title'] = html_entity_decode( $this->title, ENT_QUOTES, get_bloginfo( 'charset' ) );
	      $array['content'] = $this->get_content();
	      $array['active'] = $this->active();
	      $array['instanceNumber'] = $this->instance_number;

	      if ( $this->panel ) {
	        $array['customizeAction'] = sprintf( 'Customizing &#9656; %s', esc_html( $this->manager->get_panel( $this->panel )->title ) );
	      } else {
	        $array['customizeAction'] = 'Customizing';
	      }
	      return $array;
    	}
  	}
}






