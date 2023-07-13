<?php
function complete_option_defaults() {
	$defaults = array(
		'converted' => '',
		'site_layout_id' => 'site_full',
		'woo_shop_page_layout_id' => 'wooshop_layout3',
		'woo_single_product_layout_id' => 'woosingle_layout3',
		'single_post_layout_id' => 'single_layout1',
		'header_layout_id' => 'header_layout1',
		'center_width' => 83.50,
		'content_bg_color' => '#ffffff',
		'divider_icon' => 'fa-stop',
		'head_transparent' => '1',
		'trans_header_color' => '#fff',
		'totop_id' => '1',
		'footer_text_id' => __('<div class="copyright-left">&copy; Copyright 2020 <span>Grocery Store</span>. All Rights Reserved.</div><div class="copyright-right">Design by <span>SKT Themes</span></div>', 'complete'),
		'phntp_text_id' => __('<i class="fa fa-phone" aria-hidden="true"></i> Call : +1 234 567 890', 'complete'),
		'emltp_text' => __('<i class="fa fa-envelope" aria-hidden="true"></i> info@sitename.com', 'complete'),
		'sintp_text' => __('[social_area][social icon="facebook" link="#"][social icon="google-plus" link="#"][social icon="twitter" link="#"][social icon="linkedin" link="#"][/social_area]', 'complete'),
		'suptp_text' => __('', 'complete'),
		'footmenu_id' => '1',
		'copyright_center' => '',
		
		'custom_slider' => '',
		
		'slider_type_id' => 'static',
		
		'slideefect' => 'fade',
		'slideanim' => '700',
		'slidepause' => '4000',
		'slidenav' => 'true',
		'slidepage' => 'false',
		
		'n_slide_time_id' => '6000',
		'slide_height' => '500px',
		'slidefont_size_id' => '36px',
		'slider_txt_hide' => '',
		
		'slide_image1' => ''.get_template_directory_uri().'/images/slides/slider1.jpg',
        'slide_title1' => 'Grocery',
        'slide_desc1' => 'A morning without Coffee is like sleep',
        'slide_link1' => '',
        'slide_btn1' => '',
        
        'slide_image2' => ''.get_template_directory_uri().'/images/slides/slider2.jpg',
        'slide_title2' => 'Grocery',
        'slide_desc2' => 'A morning without Coffee is like sleep',
        'slide_link2' => '',
        'slide_btn2' => '',
        
        'slide_image3' => ''.get_template_directory_uri().'/images/slides/slider3.jpg',
        'slide_title3' => 'Grocery',
        'slide_desc3' => 'A morning without Coffee is like sleep',
        'slide_link3' => '',
        'slide_btn3' => '',

		'post_info_id' => '1',
		'post_nextprev_id' => '1',
		'post_comments_id' => '1',
		'page_header_color' => '#545556',
		'pageheader_bg_image' => ''.get_template_directory_uri().'/images/default-header-img.jpg',
		'hide_pageheader' => '',
		'page_header_txtcolor' => '#555555',
		
		'post_header_color' => '#545556',
		'postheader_bg_image' => ''.get_template_directory_uri().'/images/default-header-img.jpg',
		'hide_postheader' => '',		

		'blog_cat_id' => '',
		'blog_num_id' => '9',
		'blog_layout_id' => '',
		'show_blog_thumb' => '1',
		
		'sec_color_id' => '#ffc63b',
		'submnu_textcolor_id' => '#282828',
		'submnbg_color_id' => '#ffffff',
		'mnshvr_color_id' => '#282828',
		'mobbg_color_id' => '#282828',
		'mobbgtop_color_id' => '#ffc63b',
		'mobmenutxt_color_id' => '#ffffff',
		'mobmenutxt_active_color_id' => '#ffc63b',
		
		'mobtoggle_color_id' => '#282828',
		'mobtoggleinner_color_id' => '#ffffff',
		
		'searchbox_bg_color_id' => '#ffc63b',
		
		'sectxt_color_id' => '#ffffff',
		'content_font_id' =>  array('font-family' => 'Poppins', 'font-size' => '16px'),
		'primtxt_color_id' => '#515151',
		'logo_image_id' => array('url'=>''.get_template_directory_uri().'/images/logo.png'),
		'logo_font_id' => array('font-family' => 'Poppins', 'font-size' => '47px'),
		'logo_color_id' => '#303030',
		
		'logo_image_height' => '48px;',
		'logo_image_width' => '162px;',
		'logo_margin_top' => '20px;',
		
		'tpbt_font_id' => array('font-family' => 'Roboto', 'font-size' => '15px'),
		'tpbt_color_id' => '#ffffff',
		'tpbt_hvcolor_id' => '#edecec',
		
		'sldtitle_font_id' => array('font-family' => 'Poppins', 'font-size' => '104px'),
		'slddesc_font_id' => array('font-family' => 'Poppins', 'font-size' => '22px'),
		'sldbtn_font_id' => array('font-family' => 'Roboto', 'font-size' => '14px'),
		
		'slidetitle_color_id' => '#ffffff',
		'slddesc_color_id' => '#ffffff',	
		'sldbtntext_color_id' => '#ffffff',
		'sldbtn_color_id' => '#ffc63b',
		'sldbtn_hvtextcolor_id' => '#393939',
		'sldbtn_hvcolor_id' => '#ffc63b',
		
		'slide_pager_color_id' => '#282828',	
		'slide_active_pager_color_id' => '#ffc63b',
		'nav_bg_color_id' => '#9be4c4',
			
		'global_link_color_id' => '#ffc63b',
		'global_link_hvcolor_id' => '#685031',		
		
		'global_h1_color_id' => '#393939',
		'global_h1_hvcolor_id' => '#ffc63b',	
		'global_h2_color_id' => '#393939',
		'global_h2_hvcolor_id' => '#ffc63b',
		'global_h3_color_id' => '#393939',
		'global_h3_hvcolor_id' => '#ffc63b',
		'global_h4_color_id' => '#393939',
		'global_h4_hvcolor_id' => '#ffc63b',
		'global_h5_color_id' => '#393939',
		'global_h5_hvcolor_id' => '#ffc63b',
		'global_h6_color_id' => '#393939',
		'global_h6_hvcolor_id' => '#ffc63b',	
		
		'post_meta_color_id' => '#6a6a6a',
		
		'social_text_color_id' => '#ffffff',
		'social_icon_color_id' => '#151515',
		'social_icon_hvrcolor_id' => '#ffffff',
		'social_hover_icon_color_id' => '#ffc63b',
		
		'benefitbox_overlaycolor_id' => '#ffc63b',
		'benefitbox_titlebg_color_id' => '#f6f5f5',
		'benefitbox_hvrtitlebg_color_id' => '#ffc63b',
		'benefitbox_hvrtitle_color_id' => '#ffffff',
		
		'products_titlecolor_id' => '#222425',
		'products_desccolor_id' => '#4c4b4b',
		'products_priceccolor_id' => '#0a97ff',
		'products_overlaycolor_id' => '#0a97ff',
		'products_btntext_color_id' => '#373737',
		'products_btnbg_color_id' => '#ffffff',
		
		'teambox_color_id' => '#efefef',
		'teambox_hvrcolor_id' => '#ffc63b',
		'teambox_txt_color' => '#282828',
		'teambox_txt_hvrcolor' => '#ffffff',	
		
		'testimonialbox_bg_color' => '#ffffff',
		'testimonialbox_txt_color' => '#5e5e5e',
		'testimonialbox_name_color' => '#242424',
		'testimonialbox_profile_color' => '#a5a5a5',
		'testimonial_pager_color_id' => '#1f1f1f',
		'testimonial_activepager_color_id' => '#ffc63b',
		
		'gallery_filtertxt_color_id' => '#909090',
		'gallery_activefiltertxt_color_id' => '#f1b500',
		'gallery_title_color_id' => '#fff',
		'gallery_title_bg_color_id' => '#ffc63b',
		'skillsbar_bgcolor_id' => '#f8f8f8',
		'skillsbar_text_color_id' => '#ffffff',								
		'global_h1_font_id' => array('font-family' => 'Poppins', 'font-size' => '70px'),
		'global_h2_font_id' => array('font-family' => 'Poppins', 'font-size' => '50px'),
		'global_h3_font_id' => array('font-family' => 'Poppins', 'font-size' => '38px'),
		'global_h4_font_id' => array('font-family' => 'Poppins', 'font-size' => '30px'),
		'global_h5_font_id' => array('font-family' => 'Poppins', 'font-size' => '24px'),
		'global_h6_font_id' => array('font-family' => 'Poppins', 'font-size' => '20px'),
		
		'contact_title' => 'Contact Info',
		'contact_address' => 'Donec ultricies mattis nulla Australia',
		'contact_phone' => '0789 256 321',
		'contact_email' => 'info@companyname.com',
		'contact_company_url' => 'http://demo.com',
		'contact_google_map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d336003.6066860609!2d2.349634820486094!3d48.8576730786213!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e1f06e2b70f%3A0x040b82c3688c9460!2sParis%2C+France!5e0!3m2!1sen!2sin!4v1433482358672',
		
		'head_bg_trans' => '1',
		'head_color_id' => '#ffffff',
		'head_info_color_id' => '#5aa987',
		'head_info_bg_trans' => '1',
		'header_border_color' => '#dddddd',
		'menutxt_color_id' => '#444444',
		'menutxt_color_hover' => '#ffc63b',
		'menutxt_color_active' => '#ffc63b',
		'menu_size_id' => '17px',
		'sidebar_color_id' => '#FFFFFF',
		'sidebarborder_color_id' => '#eeeff5',
		'sidebar_tt_color_id' => '#666666',
		'sidebartxt_color_id' => '#999999',
		'sidebarlink_color_id' => '#ffc63b',
		'sidebarlink_hover_color_id' => '#999999',
		'flipbg_front_color_id' => '#ffffff',
		'flipbg_back_color_id' => '#f7f7f7',
		'flipborder_front_color_id' => '#e0e0e0',
		'flipborder_back_color_id' => '#000000',
		'divider_color_id' => '#8c8b8b',
		'wgttitle_size_id' => '16px',
		'timebox_color_id' => '#ffffff',
		'timeboxborder_color_id' => '#dedede',
		'gridbox_color_id' => '#ffffff',
		'gridboxborder_color_id' => '#cccccc',
		
		'service_box_bg' => '#ffc63b',
		'service_box_bg_hover' => '#685031',
		'box_color_text' => '#ffffff',
		'go_bg_color' => '#ffffff',
		'box_right_border' => '#30a0fd',
		
		'expand_bg_color' => '#ffc63b',
		'expand_text_color' => '#000000',
		
		'h_seprator_color' => '#ffc63b',
		'h_seprator_text_color' => '#000000',
		
		'square_bg_color' => '#ffffff',
		'square_bg_hover_color' => '#79ab9f',
		'square_title_color' => '#000000',
		
		'post_bg_color' => '#ffffff',
		'post_meta_color' => '#606060',
		'post_title_color' => '#030305',
		'post_readmore_color' => '#7acca8',
		
		'style1_bg_color' => '#ffffff',
		'style1_title_color' => '#0c0c0a',
		'style1_text_color' => '#0c0c0a',
		
		'style2_bg_color' => '#ffffff',
		'style2_title_color' => '#282828 ',
		
		'style3_bg_color' => '#ffffff',
		'style3_hover_bg_color' => '#9f9f9f',
		'style3_border_color' => '#eaeaea',
		
		'perfect_bg_color' => '#ffffff',
		'perfect_border_color' => '#eaeaea',
		'perfect_hover_border_color' => '#ffc63b',
 
		'foot_layout_id' => '4',
		'footer_color_id' => '#1b1b1b',
		'footer_bg_image' => '',
		'footwdgtxt_color_id' => '#d9d9d9',
		'footer_title_color' => '#ffffff',
		'footer_title_border_color' => '#ffffff',
		'ptitle_font_id' =>  array('font-family' => 'Assistant', 'subsets'=>'latin'),
		'mnutitle_font_id' =>  array('font-family' => 'Poppins', 'subsets'=>'latin'),
		'title_txt_color_id' => '#666666',
		'link_color_id' => '#3590ea',
		'link_color_hover' => '#1e73be',
		'txt_upcase_id' => '',
		'mnutxt_upcase_id' => '',
		'copyright_bg_color' => '#222222',
		'copyright_txt_color' => '#ffffff',
		
		//Footer Info Box
		// Footer Info Box
		'footer_logo' => ''.get_template_directory_uri().'/images/footer-logo.png',
		'footer_infobox_content' => '
[social_area]
	[social icon="facebook" link="#"]
	[social icon="twitter" link="#"]
	[social icon="google-plus" link="#"]
	[social icon="linkedin" link="#"]
	[social icon="pinterest" link="#"]
	[social icon="skype" link="#"]
[/social_area]',
		'hide_foot_infobox' => '0',
		
		'footer_menu_color' => '#d9d9d9',
		'footer_menu_hover_color' => '#ffffff',
		
		//Featured Box
		'featured_section_title' => __('Featured Boxes', 'complete'),
		'homeblock_bg_setting' => '',
		'ftd_bg_video' => '',
		'homeblock_title_color' => '#000000',
		'homeblock_color_id' => '#f2f2f2',
		'featured_image_height' => '70px;',
		'featured_image_width' => '70px;',
		'featured_excerpt' => '35',
		'featured_block_bg' => '#ffffff',
		'featured_block_button' => __('Read More', 'complete'),
		'recentpost_block_button' => __('Read More', 'complete'),
		
		'featured_block_button_bg' => '#ffc63b',
		'featured_block_hover_button_bg' => '#393939',
				
		//Footer Column 1
		'foot_cols1_title' => __('ABOUT GROCERY', 'complete'),
		'foot_cols1_content' => '<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus condiintum mauris a quam sodales rutrum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus condiintum mauris a quam sodales</p>',
		//Footer Column 1
		
		//Footer Column 2
		'foot_cols2_title' => __('QUICK LINKS', 'complete'),
		'foot_cols2_content' => '[footermenu menu="footer"]',
		//Footer Column 2
		
		//Footer Column 3
		'foot_cols3_title' => __('LATEST NEWS', 'complete'),
		'foot_cols3_content' => '[footerposts show="2" catid=""]',
		//Footer Column 3
		
		//Footer Column 4
		'foot_cols4_title' => __('CONTACT INFO', 'complete'),
		'foot_cols4_content' => 'Street 238,52 tempor <br> Donec ultricies mattis nulla, suscipit risus tristique utmattis nulla.[space height="40"]<p style="margin-bottom: 5px;"><span style="margin-right: 30px;">Phone:</span> 1.800.555.6789</p><p style="margin-bottom: 5px;"><span style="margin-right: 34px;">E-mail:</span>info@sktthemes.org</a></p><p style="margin-bottom: 5px;"><span style="margin-right: 23px;">Website:</span>https://sktthemes.org</a></p>',
		//Footer Column 4
		
		'social_button_style' => 'simple',
		'social_show_color' => '',
		'social_bookmark_pos' => 'footer',
		'social_bookmark_size' => 'normal',
		'social_single_id' => '1',
		'social_page_id' => '',
		
		'post_lightbox_id' => '1',
		'post_gallery_id' => '1',
		'cat_layout_id' => '4',
		'hide_mob_slide' => '',
		'hide_mob_rightsdbr' => '',
		'hide_mob_page_header' => '1',
		'custom-css' => 'span.desc{display: none;}',
	);
	
      $options = get_option('complete',$defaults);

      //Parse defaults again - see comments
      $options = wp_parse_args( $options, $defaults );

	return $options;
}?>