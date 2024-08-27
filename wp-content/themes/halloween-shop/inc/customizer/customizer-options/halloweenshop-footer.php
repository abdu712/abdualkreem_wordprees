<?php
function halloweenshop_footer( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	// Footer Panel // 
	$wp_customize->add_panel( 
		'footer_section', 
		array(
			'priority'      => 34,
			'capability'    => 'edit_theme_options',
			'title'			=> __('Footer', 'halloween-shop'),
		) 
	);

    

	// Footer Bottom // 
	$wp_customize->add_section(
        'footer_bottom',
        array(
            'title' 		=> __('Footer','halloween-shop'),
			'panel'  		=> 'footer_section',
			'priority'      => 3,
		)
    );
	
	// Footer Copyright Head
	$wp_customize->add_setting(
		'footer_btm_copy_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'halloweenshop_sanitize_text',
			'priority'  => 3,
		)
	);
	
	// Footer Copyright 
	$halloweenshop_foo_copy = esc_html__('Copyright &copy; [current_year] [site_title] | Powered by [theme_author]', 'halloween-shop' );
	$wp_customize->add_setting(
    	'footer_copyright',
    	array(
			'default' => $halloweenshop_foo_copy,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'footer_copyright',
		array(
		    'label'   		=> __('CopyRight','halloween-shop'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'textarea',
			'transport'         => $selective_refresh,
		)  
	);	


	// footer fb link
	$footerfblink = esc_html__('', 'halloween-shop' );
	$wp_customize->add_setting(
    	'footer_fblink',
    	array(
			'default' => $footerfblink,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'footer_fblink',
		array(
		    'label'   		=> __('Facebook Link','halloween-shop'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	// footer instagram link
	$footerinstagramlink = esc_html__('', 'halloween-shop' );
	$wp_customize->add_setting(
    	'footer_instagramlink',
    	array(
			'default' => $footerinstagramlink,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'footer_instagramlink',
		array(
		    'label'   		=> __('Instagram Link','halloween-shop'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	// footer fb link
	$footertwitterlink = esc_html__('', 'halloween-shop' );
	$wp_customize->add_setting(
    	'footer_twitterlink',
    	array(
			'default' => $footertwitterlink,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'footer_twitterlink',
		array(
		    'label'   		=> __('Twitter Link','halloween-shop'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);


	// footer linkedin link
	$footerlinkedinlink = esc_html__('', 'halloween-shop' );
	$wp_customize->add_setting(
    	'footer_linkedinlink',
    	array(
			'default' => $footerlinkedinlink,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'footer_linkedinlink',
		array(
		    'label'   		=> __('Linkedin Link','halloween-shop'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);


	// footer socialicons color
	$footersocialiconscolor = esc_html__('#000', 'halloween-shop' );
	$wp_customize->add_setting(
    	'footer_socialiconscolor',
    	array(
			'default' => $footersocialiconscolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'footer_socialiconscolor',
		array(
		    'label'   		=> __('Social Icon Color','halloween-shop'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// footer socialiconbg color
	$footersocialiconbgcolor = esc_html__('#fff', 'halloween-shop' );
	$wp_customize->add_setting(
    	'footer_socialiconbgcolor',
    	array(
			'default' => $footersocialiconbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'footer_socialiconbgcolor',
		array(
		    'label'   		=> __('Social Icon BG Color','halloween-shop'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// footer copyrightbg color
	$footercopyrightbgcolor = esc_html__('#F97B22', 'halloween-shop' );
	$wp_customize->add_setting(
    	'footer_copyrightbgcolor',
    	array(
			'default' => $footercopyrightbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'footer_copyrightbgcolor',
		array(
		    'label'   		=> __('Copyright BG Color','halloween-shop'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// footer copyright color
	$footercopyrightcolor = esc_html__('#fff', 'halloween-shop' );
	$wp_customize->add_setting(
    	'footer_copyrightcolor',
    	array(
			'default' => $footercopyrightcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'footer_copyrightcolor',
		array(
		    'label'   		=> __('Copyright Color','halloween-shop'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// footer text color
	$footertextcolor = esc_html__('#fff', 'halloween-shop' );
	$wp_customize->add_setting(
    	'footer_textcolor',
    	array(
			'default' => $footertextcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'footer_textcolor',
		array(
		    'label'   		=> __('Text Color','halloween-shop'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// footer icon color
	$footericoncolor = esc_html__('#fff', 'halloween-shop' );
	$wp_customize->add_setting(
    	'footer_iconcolor',
    	array(
			'default' => $footericoncolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'footer_iconcolor',
		array(
		    'label'   		=> __('Icon Color','halloween-shop'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// footer listhover color
	$footerlisthovercolor = esc_html__('#fff', 'halloween-shop' );
	$wp_customize->add_setting(
    	'footer_listhovercolor',
    	array(
			'default' => $footerlisthovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'footer_listhovercolor',
		array(
		    'label'   		=> __('List Hover Color','halloween-shop'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);




}
add_action( 'customize_register', 'halloweenshop_footer' );
// Footer selective refresh
function halloweenshop_footer_partials( $wp_customize ){	
	// footer_copyright
	$wp_customize->selective_refresh->add_partial( 'footer_copyright', array(
		'selector'            => '.copy-right .copyright-text',
		'settings'            => 'footer_copyright',
		'render_callback'  => 'halloweenshop_footer_copyright_render_callback',
	) );
	
	}
add_action( 'customize_register', 'halloweenshop_footer_partials' );


// copyright_content
function halloweenshop_footer_copyright_render_callback() {
	return get_theme_mod( 'footer_copyright' );
}