<?php
	
	// Register the radio image control class as a JS control type.
	$wp_customize->register_control_type( 'complete_Control_Radio_Image' );


//----------------------SITE LAYOUT SECTION----------------------------------

//DROP SHADOW FIELD
$wp_customize->add_setting('complete[converted]', array(
	'type' => 'option',
	'default' => '',
	'sanitize_callback' => 'complete_sanitize_checkbox',
	//'transport' => 'postMessage',
) );

			$wp_customize->add_control( 'converted', array(
				'type' => 'text',
				'label' => __('Converted to Latest Version','complete'),
				'section' => 'layout_section',
				'settings' => 'complete[converted]',
			) );
			



// Add the layout setting.
$wp_customize->add_setting('complete[site_layout_id]', array(
		'type' => 'option',
		'default'           => 'site_full',
		'sanitize_callback' => 'sanitize_key',
	)
);

		  // Add the layout control.
		  $wp_customize->add_control('site_layout_id',array(
						'type' => 'select',
						'label'    => esc_html__( 'Site Layout *', 'complete' ),
						'section'  => 'layout_section',
						'settings' => 'complete[site_layout_id]',
						'choices'  => array(
							'site_full' => __('Full Width', 'complete'), 
							'site_boxed' => __('Boxed', 'complete'), 
					  )
			  ) );
			  
//CONTENT BACKGOURND WIDTH
$wp_customize->add_setting( 'complete[center_width]', array(
		'type' => 'option',
        'default' => '85',
		'sanitize_callback' => 'complete_sanitize_number',
		//'transport' => 'postMessage',
) );
 
			$wp_customize->add_control('center_width', array(
					'type' => 'range',
					'label' => __('Box Width *','complete'),
					'section' => 'layout_section',
					'input_attrs' => array(
						'min' => 30,
						'max' => 100,
						'step' => 10,
						'class' => 'range-textbox_width',
						'style' => 'color: #0a0',
					),
					'settings'    => 'complete[center_width]',
					'active_callback' => 'complete_layout_callback',
			) );
 
//---------General Color SETTINGS---------------------	

//Fixed Background Image
$wp_customize->add_setting('complete[background_fixed]', array(
	'type' => 'option',
	'default' => '',
	'sanitize_callback' => 'complete_sanitize_checkbox',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control( new complete_Controls_Toggle_Control( $wp_customize, 'background_fixed', array(
				'label' => __('Fixed Background Image','complete'),
				'section' => 'general_color_section',
				'settings' => 'complete[background_fixed]',
			)) );



//Site content Text Color
$wp_customize->add_setting( 'complete[primtxt_color_id]', array(
	'type' => 'option',
	'default' => '#515151',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'primtxt_color_id', array(
				'label' => __('Site content Text Color','complete'),
				'section' => 'general_color_section',
				'settings' => 'complete[primtxt_color_id]',
			) ) );

//BASE COLOR
$wp_customize->add_setting( 'complete[sec_color_id]', array(
	'type' => 'option',
	'default' => '#ffc63b',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sec_color_id', array(
				'label' => __('Other Elements Background','complete'),
				'description' => __( 'Affects Posts hover color, Search button background Color, Widget Title border color, Comments Submit button color.', 'complete' ),
				'section' => 'general_color_section',
				'settings' => 'complete[sec_color_id]',
			) ) );


//TEXT COLOR ON BASE COLOR
$wp_customize->add_setting( 'complete[sectxt_color_id]', array(
	'type' => 'option',
	'default' => '#FFFFFF',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sectxt_color_id', array(
				'label' => __('Other Elements Text Color','complete'),
				'description' => __( 'Affects Front page post hover text color, Search button text color.', 'complete' ),
				'section' => 'general_color_section',
				'settings' => 'complete[sectxt_color_id]',
			) ) );
			
// Link Color
$wp_customize->add_setting( 'complete[global_link_color_id]', array(
	'type' => 'option',
	'default' => '#ffc63b',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'global_link_color_id', array(
				'label' => __('Default Anchor Color','complete'),
				'section' => 'general_color_section',
				'settings' => 'complete[global_link_color_id]',
			) ) );
			
// Link Hover Color
$wp_customize->add_setting( 'complete[global_link_hvcolor_id]', array(
	'type' => 'option',
	'default' => '#999999',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'global_link_hvcolor_id', array(
				'label' => __('Default Anchor Hover Color','complete'),
				'section' => 'general_color_section',
				'settings' => 'complete[global_link_hvcolor_id]',
			) ) );		
			
// H1 Color
$wp_customize->add_setting( 'complete[global_h1_color_id]', array(
	'type' => 'option',
	'default' => '#393939',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'global_h1_color_id', array(
				'label' => __('H1 Color','complete'),
				'section' => 'general_color_section',
				'settings' => 'complete[global_h1_color_id]',
			) ) );
			
// H1 Hover Color
$wp_customize->add_setting( 'complete[global_h1_hvcolor_id]', array(
	'type' => 'option',
	'default' => '#ffc63b',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'global_h1_hvcolor_id', array(
				'label' => __('H1 Hover Color','complete'),
				'section' => 'general_color_section',
				'settings' => 'complete[global_h1_hvcolor_id]',
			) ) );

// H2 Color
$wp_customize->add_setting( 'complete[global_h2_color_id]', array(
	'type' => 'option',
	'default' => '#393939',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'global_h2_color_id', array(
				'label' => __('H2 Color','complete'),
				'section' => 'general_color_section',
				'settings' => 'complete[global_h2_color_id]',
			) ) );
			
// H2 Hover Color
$wp_customize->add_setting( 'complete[global_h2_hvcolor_id]', array(
	'type' => 'option',
	'default' => '#ffc63b',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'global_h2_hvcolor_id', array(
				'label' => __('H2 Hover Color','complete'),
				'section' => 'general_color_section',
				'settings' => 'complete[global_h2_hvcolor_id]',
			) ) );
			
// H3 Color
$wp_customize->add_setting( 'complete[global_h3_color_id]', array(
	'type' => 'option',
	'default' => '#393939',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'global_h3_color_id', array(
				'label' => __('H3 Color','complete'),
				'section' => 'general_color_section',
				'settings' => 'complete[global_h3_color_id]',
			) ) );
			
// H3 Hover Color
$wp_customize->add_setting( 'complete[global_h3_hvcolor_id]', array(
	'type' => 'option',
	'default' => '#ffc63b',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'global_h3_hvcolor_id', array(
				'label' => __('H3 Hover Color','complete'),
				'section' => 'general_color_section',
				'settings' => 'complete[global_h3_hvcolor_id]',
			) ) );
			
// H4 Color
$wp_customize->add_setting( 'complete[global_h4_color_id]', array(
	'type' => 'option',
	'default' => '#393939',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'global_h4_color_id', array(
				'label' => __('H4 Color','complete'),
				'section' => 'general_color_section',
				'settings' => 'complete[global_h4_color_id]',
			) ) );
			
// H4 Hover Color
$wp_customize->add_setting( 'complete[global_h4_hvcolor_id]', array(
	'type' => 'option',
	'default' => '#ffc63b',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'global_h4_hvcolor_id', array(
				'label' => __('H4 Hover Color','complete'),
				'section' => 'general_color_section',
				'settings' => 'complete[global_h4_hvcolor_id]',
			) ) );	
			
// H5 Color
$wp_customize->add_setting( 'complete[global_h5_color_id]', array(
	'type' => 'option',
	'default' => '#393939',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'global_h5_color_id', array(
				'label' => __('H5 Color','complete'),
				'section' => 'general_color_section',
				'settings' => 'complete[global_h5_color_id]',
			) ) );
			
// H5 Hover Color
$wp_customize->add_setting( 'complete[global_h5_hvcolor_id]', array(
	'type' => 'option',
	'default' => '#ffc63b',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'global_h5_hvcolor_id', array(
				'label' => __('H5 Hover Color','complete'),
				'section' => 'general_color_section',
				'settings' => 'complete[global_h5_hvcolor_id]',
			) ) );								
// H6 Color
$wp_customize->add_setting( 'complete[global_h6_color_id]', array(
	'type' => 'option',
	'default' => '#393939',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'global_h6_color_id', array(
				'label' => __('H6 Color','complete'),
				'section' => 'general_color_section',
				'settings' => 'complete[global_h6_color_id]',
			) ) );
			
// H6 Hover Color
$wp_customize->add_setting( 'complete[global_h6_hvcolor_id]', array(
	'type' => 'option',
	'default' => '#ffc63b',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'global_h6_hvcolor_id', array(
	'label' => __('H6 Hover Color','complete'),
	'section' => 'general_color_section',
	'settings' => 'complete[global_h6_hvcolor_id]',
) ) );
			
// Post Meta Color
$wp_customize->add_setting( 'complete[post_meta_color_id]', array(
	'type' => 'option',
	'default' => '#6a6a6a',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'post_meta_color_id', array(
	'label' => __('Post Meta Color','complete'),
	'section' => 'general_color_section',
	'settings' => 'complete[post_meta_color_id]',
) ) );		

// Social Icon Color
$wp_customize->add_setting( 'complete[social_text_color_id]', array(
	'type' => 'option',
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'social_text_color_id', array(
	'label' => __('Social Icon Color','complete'),
	'section' => 'general_color_section',
	'settings' => 'complete[social_text_color_id]',
) ) );
///

// Social Icon Background Color
$wp_customize->add_setting( 'complete[social_icon_color_id]', array(
	'type' => 'option',
	'default' => '#151515',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'social_icon_color_id', array(
	'label' => __('Social Icon Bgcolor','complete'),
	'section' => 'general_color_section',
	'settings' => 'complete[social_icon_color_id]',
) ) );

// Social Icon Hover Color
$wp_customize->add_setting( 'complete[social_icon_hvrcolor_id]', array(
	'type' => 'option',
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'social_icon_hvrcolor_id', array(
	'label' => __('Social Icon Hover color','complete'),
	'section' => 'general_color_section',
	'settings' => 'complete[social_icon_hvrcolor_id]',
) ) );

// Social Icon Hover Background Color
$wp_customize->add_setting( 'complete[social_hover_icon_color_id]', array(
	'type' => 'option',
	'default' => '#ffc63b',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'social_hover_icon_color_id', array(
	'label' => __('Social Icon Hover Bgcolor','complete'),
	'section' => 'general_color_section',
	'settings' => 'complete[social_hover_icon_color_id]',
) ) );

// Benefit Box Hover Overlay Color
$wp_customize->add_setting( 'complete[benefitbox_overlaycolor_id]', array(
	'type' => 'option',
	'default' => '#ffc63b',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'benefitbox_overlaycolor_id', array(
	'label' => __('Benefit Box Hover Overlay Color','complete'),
	'section' => 'general_color_section',
	'settings' => 'complete[benefitbox_overlaycolor_id]',
) ) );

// Benefit Box Title BG Color
$wp_customize->add_setting( 'complete[benefitbox_titlebg_color_id]', array(
	'type' => 'option',
	'default' => '#f6f5f5',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'benefitbox_titlebg_color_id', array(
	'label' => __('Benefit Box Title Backgroung Color','complete'),
	'section' => 'general_color_section',
	'settings' => 'complete[benefitbox_titlebg_color_id]',
) ) );

// Benefit Box Title Hover BG Color
$wp_customize->add_setting( 'complete[benefitbox_hvrtitlebg_color_id]', array(
	'type' => 'option',
	'default' => '#ffc63b',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'benefitbox_hvrtitlebg_color_id', array(
	'label' => __('Benefit Box Title Hover Backgroung Color','complete'),
	'section' => 'general_color_section',
	'settings' => 'complete[benefitbox_hvrtitlebg_color_id]',
) ) );

// Benefit Box Title Hover Color
$wp_customize->add_setting( 'complete[benefitbox_hvrtitle_color_id]', array(
	'type' => 'option',
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'benefitbox_hvrtitle_color_id', array(
	'label' => __('Benefit Box Title Hover Color','complete'),
	'section' => 'general_color_section',
	'settings' => 'complete[benefitbox_hvrtitle_color_id]',
) ) );

// Products Title Color
$wp_customize->add_setting( 'complete[products_titlecolor_id]', array(
	'type' => 'option',
	'default' => '#222425',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'products_titlecolor_id', array(
	'label' => __('Products Title Color','complete'),
	'section' => 'general_color_section',
	'settings' => 'complete[products_titlecolor_id]',
) ) );

// Products Description Color
$wp_customize->add_setting( 'complete[products_desccolor_id]', array(
	'type' => 'option',
	'default' => '#4c4b4b',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'products_desccolor_id', array(
	'label' => __('Products Description Color','complete'),
	'section' => 'general_color_section',
	'settings' => 'complete[products_desccolor_id]',
) ) );

// Products Price Color
$wp_customize->add_setting( 'complete[products_priceccolor_id]', array(
	'type' => 'option',
	'default' => '#0a97ff',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'products_priceccolor_id', array(
	'label' => __('Products Price Color','complete'),
	'section' => 'general_color_section',
	'settings' => 'complete[products_priceccolor_id]',
) ) );

// Products Hover Overlay Color
$wp_customize->add_setting( 'complete[products_overlaycolor_id]', array(
	'type' => 'option',
	'default' => '#0a97ff',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'products_overlaycolor_id', array(
	'label' => __('Products Hover Overlay Color','complete'),
	'section' => 'general_color_section',
	'settings' => 'complete[products_overlaycolor_id]',
) ) );

// Products Cart Button Text Color
$wp_customize->add_setting( 'complete[products_btntext_color_id]', array(
	'type' => 'option',
	'default' => '#373737',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'products_btntext_color_id', array(
	'label' => __('Products Cart Button Text Color','complete'),
	'section' => 'general_color_section',
	'settings' => 'complete[products_btntext_color_id]',
) ) );

// Products Cart Button BG Color
$wp_customize->add_setting( 'complete[products_btnbg_color_id]', array(
	'type' => 'option',
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'products_btnbg_color_id', array(
	'label' => __('Products Cart Button BG Color','complete'),
	'section' => 'general_color_section',
	'settings' => 'complete[products_btnbg_color_id]',
) ) );

// Team Box Background Color
$wp_customize->add_setting( 'complete[teambox_color_id]', array(
	'type' => 'option',
	'default' => '#efefef',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'teambox_color_id', array(
	'label' => __('Team Box Bgcolor','complete'),
	'section' => 'general_color_section',
	'settings' => 'complete[teambox_color_id]',
) ) );

// Team Box Hover Background Color
$wp_customize->add_setting( 'complete[teambox_hvrcolor_id]', array(
	'type' => 'option',
	'default' => '#ffc63b',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'teambox_hvrcolor_id', array(
	'label' => __('Team Box Bg Hover color','complete'),
	'section' => 'general_color_section',
	'settings' => 'complete[teambox_hvrcolor_id]',
) ) );

// Team Box Text Color
$wp_customize->add_setting( 'complete[teambox_txt_color]', array(
	'type' => 'option',
	'default' => '#282828',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'teambox_txt_color', array(
	'label' => __('Team Box Text Color','complete'),
	'section' => 'general_color_section',
	'settings' => 'complete[teambox_txt_color]',
) ) );

// Team Box Text Hover Color
$wp_customize->add_setting( 'complete[teambox_txt_hvrcolor]', array(
	'type' => 'option',
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'teambox_txt_hvrcolor', array(
	'label' => __('Team Box Text Hover Color','complete'),
	'section' => 'general_color_section',
	'settings' => 'complete[teambox_txt_hvrcolor]',
) ) );

// Testimonial Box Background Color
$wp_customize->add_setting( 'complete[testimonialbox_bg_color]', array(
	'type' => 'option',
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'testimonialbox_bg_color', array(
	'label' => __('Testimonial Box Background Color','complete'),
	'section' => 'general_color_section',
	'settings' => 'complete[testimonialbox_bg_color]',
) ) );

// Testimonial Box Text Color
$wp_customize->add_setting( 'complete[testimonialbox_txt_color]', array(
	'type' => 'option',
	'default' => '#5e5e5e',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'testimonialbox_txt_color', array(
	'label' => __('Testimonial Box Text Color','complete'),
	'section' => 'general_color_section',
	'settings' => 'complete[testimonialbox_txt_color]',
) ) );

// Testimonial Box Name Color
$wp_customize->add_setting( 'complete[testimonialbox_name_color]', array(
	'type' => 'option',
	'default' => '#242424',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'testimonialbox_name_color', array(
	'label' => __('Testimonial Box Name Color','complete'),
	'section' => 'general_color_section',
	'settings' => 'complete[testimonialbox_name_color]',
) ) );

// Testimonial Box Profile Color
$wp_customize->add_setting( 'complete[testimonialbox_profile_color]', array(
	'type' => 'option',
	'default' => '#a5a5a5',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'testimonialbox_profile_color', array(
	'label' => __('Testimonial Box Profile Color','complete'),
	'section' => 'general_color_section',
	'settings' => 'complete[testimonialbox_profile_color]',
) ) );


///////////////////////////////////////////////

// Testimonial Pager Background Color
$wp_customize->add_setting( 'complete[testimonial_pager_color_id]', array(
	'type' => 'option',
	'default' => '#1f1f1f',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'testimonial_pager_color_id', array(
	'label' => __('Testimonial Pager Color','complete'),
	'section' => 'general_color_section',
	'settings' => 'complete[testimonial_pager_color_id]',
) ) );

// Testimonial Active Pager Background Color
$wp_customize->add_setting( 'complete[testimonial_activepager_color_id]', array(
	'type' => 'option',
	'default' => '#ffc63b',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'testimonial_activepager_color_id', array(
	'label' => __('Testimonial Hover Pager Color','complete'),
	'section' => 'general_color_section',
	'settings' => 'complete[testimonial_activepager_color_id]',
) ) );

// Gallery Filter Color
$wp_customize->add_setting( 'complete[gallery_filtertxt_color_id]', array(
	'type' => 'option',
	'default' => '#909090',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gallery_filtertxt_color_id', array(
	'label' => __('Gallery Filter Text Color','complete'),
	'section' => 'general_color_section',
	'settings' => 'complete[gallery_filtertxt_color_id]',
) ) );


// Gallery Filter Color
$wp_customize->add_setting( 'complete[gallery_activefiltertxt_color_id]', array(
	'type' => 'option',
	'default' => '#f1b500',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gallery_activefiltertxt_color_id', array(
	'label' => __('Gallery Filter Active Text Color','complete'),
	'section' => 'general_color_section',
	'settings' => 'complete[gallery_activefiltertxt_color_id]',
) ) );

// Gallery Title Color
$wp_customize->add_setting( 'complete[gallery_title_color_id]', array(
	'type' => 'option',
	'default' => '#fff',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gallery_title_color_id', array(
	'label' => __('Gallery Title Color','complete'),
	'section' => 'general_color_section',
	'settings' => 'complete[gallery_title_color_id]',
) ) );

// Gallery Title Background Color
$wp_customize->add_setting( 'complete[gallery_title_bg_color_id]', array(
	'type' => 'option',
	'default' => '#ffc63b',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gallery_title_bg_color_id', array(
	'label' => __('Gallery Title Background Color','complete'),
	'section' => 'general_color_section',
	'settings' => 'complete[gallery_title_bg_color_id]',
) ) );

// Skills Bar Background Color
$wp_customize->add_setting( 'complete[skillsbar_bgcolor_id]', array(
	'type' => 'option',
	'default' => '#f8f8f8',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'skillsbar_bgcolor_id', array(
	'label' => __('Skills Bar Background Color','complete'),
	'section' => 'general_color_section',
	'settings' => 'complete[skillsbar_bgcolor_id]',
) ) );

// Skills Bar Text Color
$wp_customize->add_setting( 'complete[skillsbar_text_color_id]', array(
	'type' => 'option',
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'skillsbar_text_color_id', array(
	'label' => __('Skills Bar Text Color','complete'),
	'section' => 'general_color_section',
	'settings' => 'complete[skillsbar_text_color_id]',
) ) );

//---------TYPOGRAPHY SETTINGS---------------------	

// Site Content Font Family
$wp_customize->add_setting( 'complete[content_font_id][font-family]', array(
	'type' => 'option',
	'default' => 'Poppins',
	'transport' => 'postMessage',
	'sanitize_callback' => 'esc_attr',
	
) );
			$wp_customize->add_control('content_font_family', array(
					'type' => 'select',
					'label' => __('Family','complete'),
					'section' => 'basic_typography',
					'settings' => 'complete[content_font_id][font-family]',
					'choices' => customizer_library_get_font_choices(),
			) );

// Site Content Font Subsets
$wp_customize->add_setting( 'complete[content_font_id][subsets]', array(
	'type' => 'option',
	'default' => 'latin',
	'sanitize_callback' => 'esc_attr',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('content_font_subsets', array(
					'type' => 'select',
					'label' => __('Subsets','complete'),
					'section' => 'basic_typography',
					'settings' => 'complete[content_font_id][subsets]',
					'choices' => customizer_library_get_google_font_subsets(),
			) );


//Site Content Font Size
$wp_customize->add_setting('complete[content_font_id][font-size]', array(
	'type' => 'option',
	'default' => '16px',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('content_font_size', array(
				'type' => 'text',
				'label' => __('Font Size','complete'),
				'section' => 'basic_typography',
				'settings' => 'complete[content_font_id][font-size]',
							'input_attrs'	=> array(
								'class'	=> 'mini_control',
							)
			) );
//--------------------All Headings Fonts Family And Size----------------------			
// H1 Font Family
$wp_customize->add_setting( 'complete[global_h1_font_id][font-family]', array(
	'type' => 'option',
	'default' => 'Poppins',
	'sanitize_callback' => 'esc_attr',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('global_h1_font_family', array(
					'type' => 'select',
					'label' => __('Family','complete'),
					'section' => 'basic_typography',
					'settings' => 'complete[global_h1_font_id][font-family]',
					'choices' => customizer_library_get_font_choices(),
			) );

// H1 Font Subsets
$wp_customize->add_setting( 'complete[global_h1_font_id][subsets]', array(
	'type' => 'option',
	'default' => 'latin',
	'sanitize_callback' => 'esc_attr',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('global_h1_font_subsets', array(
					'type' => 'select',
					'label' => __('Subsets','complete'),
					'section' => 'basic_typography',
					'settings' => 'complete[global_h1_font_id][subsets]',
					'choices' => customizer_library_get_google_font_subsets(),
			) );

// H1 Font Size
$wp_customize->add_setting('complete[global_h1_font_id][font-size]', array(
	'type' => 'option',
	'default' => '70px',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('global_h1_font_size', array(
				'type' => 'text',
				'label' => __('Font Size','complete'),
				'section' => 'basic_typography',
				'settings' => 'complete[global_h1_font_id][font-size]',
						'input_attrs'	=> array(
							'class'	=> 'mini_control',
						)
			) );	
			
// H2 Font Family
$wp_customize->add_setting( 'complete[global_h2_font_id][font-family]', array(
	'type' => 'option',
	'default' => 'Poppins',
	'sanitize_callback' => 'esc_attr',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('global_h2_font_family', array(
					'type' => 'select',
					'label' => __('Family','complete'),
					'section' => 'basic_typography',
					'settings' => 'complete[global_h2_font_id][font-family]',
					'choices' => customizer_library_get_font_choices(),
			) );

// H2 Font Subsets
$wp_customize->add_setting( 'complete[global_h2_font_id][subsets]', array(
	'type' => 'option',
	'default' => 'latin',
	'sanitize_callback' => 'esc_attr',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('global_h2_font_subsets', array(
					'type' => 'select',
					'label' => __('Subsets','complete'),
					'section' => 'basic_typography',
					'settings' => 'complete[global_h2_font_id][subsets]',
					'choices' => customizer_library_get_google_font_subsets(),
			) );

// H2 Font Size
$wp_customize->add_setting('complete[global_h2_font_id][font-size]', array(
	'type' => 'option',
	'default' => '50px',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('global_h2_font_size', array(
				'type' => 'text',
				'label' => __('Font Size','complete'),
				'section' => 'basic_typography',
				'settings' => 'complete[global_h2_font_id][font-size]',
						'input_attrs'	=> array(
							'class'	=> 'mini_control',
						)
			) );
			
// H3 Font Family
$wp_customize->add_setting( 'complete[global_h3_font_id][font-family]', array(
	'type' => 'option',
	'default' => 'Poppins',
	'sanitize_callback' => 'esc_attr',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('global_h3_font_family', array(
					'type' => 'select',
					'label' => __('Family','complete'),
					'section' => 'basic_typography',
					'settings' => 'complete[global_h3_font_id][font-family]',
					'choices' => customizer_library_get_font_choices(),
			) );

// H3 Font Subsets
$wp_customize->add_setting( 'complete[global_h3_font_id][subsets]', array(
	'type' => 'option',
	'default' => 'latin',
	'sanitize_callback' => 'esc_attr',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('global_h3_font_subsets', array(
					'type' => 'select',
					'label' => __('Subsets','complete'),
					'section' => 'basic_typography',
					'settings' => 'complete[global_h3_font_id][subsets]',
					'choices' => customizer_library_get_google_font_subsets(),
			) );

// H3 Font Size
$wp_customize->add_setting('complete[global_h3_font_id][font-size]', array(
	'type' => 'option',
	'default' => '38px',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('global_h3_font_size', array(
				'type' => 'text',
				'label' => __('Font Size','complete'),
				'section' => 'basic_typography',
				'settings' => 'complete[global_h3_font_id][font-size]',
						'input_attrs'	=> array(
							'class'	=> 'mini_control',
						)
			) );
			
// H4 Font Family
$wp_customize->add_setting( 'complete[global_h4_font_id][font-family]', array(
	'type' => 'option',
	'default' => 'Poppins',
	'sanitize_callback' => 'esc_attr',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('global_h4_font_family', array(
					'type' => 'select',
					'label' => __('Family','complete'),
					'section' => 'basic_typography',
					'settings' => 'complete[global_h4_font_id][font-family]',
					'choices' => customizer_library_get_font_choices(),
			) );

// H4 Font Subsets
$wp_customize->add_setting( 'complete[global_h4_font_id][subsets]', array(
	'type' => 'option',
	'default' => 'latin',
	'sanitize_callback' => 'esc_attr',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('global_h4_font_subsets', array(
					'type' => 'select',
					'label' => __('Subsets','complete'),
					'section' => 'basic_typography',
					'settings' => 'complete[global_h4_font_id][subsets]',
					'choices' => customizer_library_get_google_font_subsets(),
			) );

// H4 Font Size
$wp_customize->add_setting('complete[global_h4_font_id][font-size]', array(
	'type' => 'option',
	'default' => '30px',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('global_h4_font_size', array(
				'type' => 'text',
				'label' => __('Font Size','complete'),
				'section' => 'basic_typography',
				'settings' => 'complete[global_h4_font_id][font-size]',
						'input_attrs'	=> array(
							'class'	=> 'mini_control',
						)
			) );
			
// H5 Font Family
$wp_customize->add_setting( 'complete[global_h5_font_id][font-family]', array(
	'type' => 'option',
	'default' => 'Poppins',
	'sanitize_callback' => 'esc_attr',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('global_h5_font_family', array(
					'type' => 'select',
					'label' => __('Family','complete'),
					'section' => 'basic_typography',
					'settings' => 'complete[global_h5_font_id][font-family]',
					'choices' => customizer_library_get_font_choices(),
			) );

// H5 Font Subsets
$wp_customize->add_setting( 'complete[global_h5_font_id][subsets]', array(
	'type' => 'option',
	'default' => 'latin',
	'sanitize_callback' => 'esc_attr',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('global_h5_font_subsets', array(
					'type' => 'select',
					'label' => __('Subsets','complete'),
					'section' => 'basic_typography',
					'settings' => 'complete[global_h5_font_id][subsets]',
					'choices' => customizer_library_get_google_font_subsets(),
			) );

// H5 Font Size
$wp_customize->add_setting('complete[global_h5_font_id][font-size]', array(
	'type' => 'option',
	'default' => '24px',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('global_h5_font_size', array(
				'type' => 'text',
				'label' => __('Font Size','complete'),
				'section' => 'basic_typography',
				'settings' => 'complete[global_h5_font_id][font-size]',
						'input_attrs'	=> array(
							'class'	=> 'mini_control',
						)
			) );
			
// H6 Font Family
$wp_customize->add_setting( 'complete[global_h6_font_id][font-family]', array(
	'type' => 'option',
	'default' => 'Poppins',
	'sanitize_callback' => 'esc_attr',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('global_h6_font_family', array(
					'type' => 'select',
					'label' => __('Family','complete'),
					'section' => 'basic_typography',
					'settings' => 'complete[global_h6_font_id][font-family]',
					'choices' => customizer_library_get_font_choices(),
			) );

// H6 Font Subsets
$wp_customize->add_setting( 'complete[global_h6_font_id][subsets]', array(
	'type' => 'option',
	'default' => 'latin',
	'sanitize_callback' => 'esc_attr',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('global_h6_font_subsets', array(
					'type' => 'select',
					'label' => __('Subsets','complete'),
					'section' => 'basic_typography',
					'settings' => 'complete[global_h6_font_id][subsets]',
					'choices' => customizer_library_get_google_font_subsets(),
			) );

// H6 Font Size
$wp_customize->add_setting('complete[global_h6_font_id][font-size]', array(
	'type' => 'option',
	'default' => '20px',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('global_h6_font_size', array(
				'type' => 'text',
				'label' => __('Font Size','complete'),
				'section' => 'basic_typography',
				'settings' => 'complete[global_h6_font_id][font-size]',
						'input_attrs'	=> array(
							'class'	=> 'mini_control',
						)
			) );																		

//Turn All Headings to Uppercase
$wp_customize->add_setting('complete[txt_upcase_id]', array(
	'type' => 'option',
	'default' => '',
	'sanitize_callback' => 'complete_sanitize_checkbox',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control( new complete_Controls_Toggle_Control( $wp_customize, 'txt_upcase_id', array(
				'label' => __('Turn All Headings to Uppercase','complete'),
				'section' => 'basic_typography',
				'settings' => 'complete[txt_upcase_id]',
			)) );



//---------------LAYOUT CALLBACK-------------------//
function complete_layout_callback( $control ) {
    $layout_setting = $control->manager->get_setting('complete[site_layout_id]')->value();
     
    if ( $layout_setting == 'site_boxed' ) return true;
     
    return false;
}


//---------------HEADER CALLBACK-------------------//
function complete_transparent_header_callback( $control ) {
    $header_setting = $control->manager->get_setting('complete[head_transparent]')->value();
     
    if ( $header_setting == 1 ) return true;
     
    return false;
}
