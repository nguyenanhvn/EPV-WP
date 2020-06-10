<?php
// SLIDER METABOX
add_filter( 'rwmb_meta_boxes', 'slider_meta_boxes' );
function slider_meta_boxes( $meta_boxes ) {
	$prefix = "prefix_slider_";
	$meta_boxes[] = array(
		'title'      => 'Slider Option',
		'desc'       => 'Add Slide Item Into Slider',
		'post_types' => 'slider',
		'fields' => array(
			array(
				'name'       => 'Slider List',
				'id'         => $prefix . 'group',
				'type'       => 'group',
				'clone'      => true,
				'collapsible' => true,
				'default_state' => 'collapsed',
				'group_title' => 'Slide',
				'sort_clone' => true,
				'fields' => array(
					array(
						'name'             => 'Slider Image',
						'id'               => $prefix . 'image',
						'type'             => 'single_image',
					),
					array(
						'name'             => 'Slider hyperlink',
						'id'               => $prefix . 'hyperlink',
						'type'             => 'text',
					),
					array(
						'name'             => 'Main Logo',
						'id'               => $prefix . 'main_logo',
						'type'             => 'single_image',
					),
					array(
						'name'       => 'Banner Start',
						'id'         => $prefix . 'banner_start',
						'type'       => 'date',
						'js_options' => array(
							'dateFormat'      => 'dd-mm-yy',
							'showButtonPanel' => false,
						),
						'inline' => false,
						'timestamp' => true,
					),
					array(
						'name'       => 'Banner End',
						'id'         => $prefix . 'banner_end',
						'type'       => 'date',
						'js_options' => array(
							'dateFormat'      => 'dd-mm-yy',
							'showButtonPanel' => false,
						),
						'inline' => false,
						'timestamp' => true,
					),
					array(
						'name'             => 'Heading tag 1',
						'id'               => $prefix . 'heading_tag_1',
						'type'             => 'text',
					),
					array(
						'name'             => 'Heading tag 2',
						'id'               => $prefix . 'heading_tag_2',
						'type'             => 'text',
					),
					array(
						'name'             => 'Heading tag 3',
						'id'               => $prefix . 'heading_tag_3',
						'type'             => 'text',
					),
					array(
						'name'             => 'Group Logo',
						'id'               => $prefix . 'logo_group',
						'type'             => 'group',
						'clone'      => true,
						'collapsible' => true,
						'default_state' => 'collapsed',
						'group_title' => 'Item',
						'sort_clone' => true,
						'fields' => array(
							array(
								'name'             => 'Other Logo',
								'id'               => $prefix . 'other_logo',
								'type'             => 'single_image',
							),
							array(
								'name'             => 'Url',
								'id'               => $prefix . 'other_logo_url',
								'type'             => 'text',
							),
						),
					),
				),
			),
		)
	);
	return $meta_boxes;
}
// HOME METABOX
add_filter( 'rwmb_meta_boxes', 'home_meta_boxes' );
function home_meta_boxes( $meta_boxes ) {
	$prefix = "prefix_homepage_";
	$meta_boxes[] = array(
		'title'      => 'HomePage Option',
		'post_types' => 'page',
		'include'   => array(
			'template'    => array( 'template-home.php'),
		),
		'context' => 'after_title',
		'fields' => array(
			array(
				'name'       => 'Announcement',
				'type'       => 'post',
				'id'		 => $prefix . 'announcement',
				'post_type'	 => 'post',
				'ajax'		 => true,
				'multiple'	 => true,
			),
			array(
				'name'       => 'Why Exhibit',
				'id'         => $prefix . 'exhibit_h_group',
				'type'       => 'group',
				'clone'      => true,
				'sort_clone' => true,
				'max_clone' => 2,
				'fields' => array(
					array(
						'name'             => 'Exhibit Image',
						'id'               => $prefix . 'exhibit_h_image',
						'type'             => 'single_image',
					),
					array(
						'name'             => 'Exhibit Tag',
						'id'               => $prefix . 'exhibit_h_tag',
						'type'             => 'text',
					),
					array(
						'name'             => 'Exhibit title',
						'id'               => $prefix . 'exhibit_h_title',
						'type'             => 'text',
					),
					array(
						'name'             => 'Exhibit Link',
						'id'               => $prefix . 'exhibit_h_link',
						'type'    => 'text',
					),
				),
			),
			array(
				'name'       => 'Box Catalogue',
				'type'       => 'heading',
			),
			array(
				'name'		=> 'Catalogue 1',
				'type'		=> 'group',
				'id'		=> $prefix . 'catalogue_group_1',
				'fields'	=> array(
					array(
						'name'             => 'Catalogue Image',
						'id'               => $prefix . 'catalogue1_image',
						'type'             => 'single_image',
					),
					array(
						'name'             => 'Catalogue Title',
						'id'               => $prefix . 'catalogue1_title',
						'type'             => 'text',
					),
					array(
						'name'             => 'Catalogue Button Text',
						'id'               => $prefix . 'catalogue1_btn_text',
						'type'             => 'text',
					),
					array(
						'name'             => 'Catalogue Link',
						'id'               => $prefix . 'catalogue1_link',
						'type'             => 'text',
					),
				),
			),
			array(
				'name'		=> 'Catalogue 2',
				'type'		=> 'group',
				'id'		=> $prefix . 'catalogue_group_2',
				'fields'	=> array(
					array(
						'name'             => 'Catalogue Title',
						'id'               => $prefix . 'catalogue2_title',
						'type'             => 'text',
					),
					array(
						'name'             	=> 'Catalogue Description',
						'id'               	=> $prefix . 'catalogue2_des',
						'type'				=> 'wysiwyg',
						'raw'     			=> false,
						'options' 			=> array(
							'textarea_rows' => 4,
							'teeny'         => true,
						),
					),
					array(
						'name'             => 'Catalogue Button Text 1',
						'id'               => $prefix . 'catalogue2_btn_text1',
						'type'             => 'text',
					),
					array(
						'name'             => 'Catalogue Link 1',
						'id'               => $prefix . 'catalogue2_link1',
						'type'             => 'text',
					),
					array(
						'name'             => 'Catalogue Button Text 2',
						'id'               => $prefix . 'catalogue2_btn_text2',
						'type'             => 'text',
					),
					array(
						'name'             => 'Catalogue Link 2',
						'id'               => $prefix . 'catalogue2_link2',
						'type'             => 'text',
					),
				),
			),
			array(
				'name'		=> 'Catalogue 3',
				'type'		=> 'group',
				'id'		=> $prefix . 'catalogue_group_3',
				'fields'	=> array(
					array(
						'name'             => 'Catalogue Image',
						'id'               => $prefix . 'catalogue3_image',
						'type'             => 'single_image',
					),
					array(
						'name'             => 'Catalogue Title',
						'id'               => $prefix . 'catalogue3_title',
						'type'             => 'text',
					),
					array(
						'name'             => 'Catalogue Button Text',
						'id'               => $prefix . 'catalogue3_btn_text',
						'type'             => 'text',
					),
					array(
						'name'             => 'Catalogue Link',
						'id'               => $prefix . 'catalogue3_link',
						'type'             => 'text',
					),
				),
			),
		)
);
return $meta_boxes;
}
// EVENT METABOX
add_filter( 'rwmb_meta_boxes', 'event_meta_boxes' );
function event_meta_boxes( $meta_boxes ) {
	$prefix = "prefix_event-";
	$meta_boxes[] = array(
		'title'      => 'Event Option',
		'post_types' => 'post',
		'cat'	=> array(15,17),
		'fields' => array(
			array(
				'name'       => 'Locate',
				'id'         => $prefix . 'locate',
				'type'       => 'text',
			),
		)
	);
	return $meta_boxes;
}
// PARTNER METABOX
add_filter( 'rwmb_meta_boxes', 'partner_meta_boxes' );
function partner_meta_boxes( $meta_boxes ) {
	$prefix = "prefix_partner_";
	$meta_boxes[] = array(
		'title'      => 'Partner Option',
		'desc'       => 'Add Partner Logo',
		'post_types' => 'partner',
		'fields' => array(
			array(
				'name'       => 'List',
				'id'         => $prefix . 'group',
				'type'       => 'group',
				'clone'      => true,
				'collapsible' => true,
				'default_state' => 'collapsed',
				'group_title' => 'Item',
				'sort_clone' => true,
				'fields' => array(
					array(
						'name'             => 'Logo',
						'id'               => $prefix . 'image',
						'type'             => 'single_image',
					),
					array(
						'name'             => 'Url',
						'id'               => $prefix . 'logo_url',
						'type'             => 'text',
					),						
				),
			),
		)
	);
	return $meta_boxes;
}
// SPONSOR METABOX
add_filter( 'rwmb_meta_boxes', 'sponsor_meta_boxes' );
function sponsor_meta_boxes( $meta_boxes ) {
	$prefix = "prefix_sponsor_";
	$meta_boxes[] = array(
		'title'      => 'Sponsor Option',
		'desc'       => 'Add Sponsor Logo',
		'post_types' => 'sponsor',
		'fields' => array(
			array(
				'name'       => 'List',
				'id'         => $prefix . 'group',
				'type'       => 'group',
				'clone'      => true,
				'collapsible' => true,
				'default_state' => 'collapsed',
				'group_title' => 'Item',
				'sort_clone' => true,
				'fields' => array(
					array(
						'name'             => 'Logo',
						'id'               => $prefix . 'image',
						'type'             => 'single_image',
					),
					array(
						'name'             => 'Url',
						'id'               => $prefix . 'logo_url',
						'type'             => 'text',
					),						
				),
			),
		)
	);
	return $meta_boxes;
}
// E-BROCHURES METABOX
add_filter( 'rwmb_meta_boxes', 'brochure_meta_boxes' );
function brochure_meta_boxes( $meta_boxes ) {
	$prefix = "prefix_brochure-";
	$meta_boxes[] = array(
		'title'      => 'E-Brochures Option',
		'post_types' => 'e-brochures',
		'context' => 'after_title',
		'fields' => array(
			array(
				'id'               => $prefix . 'file-type',
				'name'             => 'File Type',
				'type'             => 'text',
			),
			array(
				'id'               => $prefix . 'file-size',
				'name'             => 'File Size',
				'type'             => 'text',
			),
			array(
				'name'    => 'Content',
				'id'      => $prefix . 'paragraph',
				'type'    => 'wysiwyg',
				'raw'     => true,
				'options' => array(
					'textarea_rows' => 4,
					'teeny'         => true,
				),
			),
		)
	);
	return $meta_boxes;
}
// BOOK A STAND METABOX
add_filter( 'rwmb_meta_boxes', 'bookastand_meta_boxes' );
function bookastand_meta_boxes( $meta_boxes ) {
	$prefix = "prefix_bookastand-";
	$meta_boxes[] = array(
		'title'      => 'Book A Stand Option',
		'post_types' => 'bookastand',
		'context' => 'after_title',
		'fields' => array(
			array(
				'name'    => 'Content',
				'id'      => $prefix . 'paragraph',
				'type'    => 'wysiwyg',
				'raw'     => true,
				'options' => array(
					'textarea_rows' => 4,
					'teeny'         => true,
				),
			),
		)
	);
	return $meta_boxes;
}
// VISITOR METABOX
add_filter( 'rwmb_meta_boxes', 'visitor_meta_boxes' );
function visitor_meta_boxes( $meta_boxes ) {
	$prefix = "prefix_visitor-";
	$meta_boxes[] = array(
		'title'      => 'Visitor Profile',
		'post_types' => 'visitor',
		'context' => 'after_title',
		'fields' => array(
			
		)
	);
	return $meta_boxes;
}
// TESTIMONIAL METABOX
add_filter( 'rwmb_meta_boxes', 'testimonial_meta_boxes' );
function testimonial_meta_boxes( $meta_boxes ) {
	$prefix = "prefix_testimonial-";
	$meta_boxes[] = array(
		'title'      => 'Testimonial Profile',
		'post_types' => 'testimonial',
		'context' => 'after_title',
		'fields' => array(
			array(
				'name'       => 'Group List',
				'id'         => $prefix . 'group',
				'type'       => 'group',
				'clone'      => true,
				'collapsible' => true,
				'default_state' => 'collapsed',
				'group_title' => 'Item',
				'sort_clone' => true,
				'max_clone' => 10,
				'fields' => array(
					array(
						'name'             => 'Avatar',
						'id'               => $prefix . 'avt',
						'type'             => 'single_image',
					),
					array(
						'name'             => 'Title',
						'id'               => $prefix . 'title',
						'type'             => 'text',
					),
					array(
						'name'             => 'Position',
						'id'               => $prefix . 'pos',
						'type'             => 'text',
					),
					array(
						'name'    => 'Information',
						'id'      => $prefix . 'paragraph',
						'type'    => 'wysiwyg',
						'raw'     => true,
						'options' => array(
							'textarea_rows' => 4,
							'teeny'         => true,
						),
					),
				),
			)
		)
	);
	return $meta_boxes;
}
// EXHIBIT TEMPLATE METABOX
add_filter( 'rwmb_meta_boxes', 'exhibit_meta_boxes' );
function exhibit_meta_boxes( $meta_boxes ) {
	$prefix = "prefix_exhibit-";
	$meta_boxes[] = array(
		'title'      => 'Template Option',
		'post_types' => 'page',
		'context' => 'after_title',
		'include'   => array(
			'template'    => array( 'template-exhibiting.php'),
		),
		'fields' => array(
			array(
				'name'       => 'Box Static',
				'type'       => 'heading',
			),
			array(
				'name'		=> 'Static Heading White',
				'id'		=> $prefix . 'static_heading_white',
				'type'		=> 'text',
			),
			array(
				'name'		=> 'Static Heading Blue',
				'id'		=> $prefix . 'static_heading_blue',
				'type'		=> 'text',
			),
			array(
				'name'       => 'Static Groups',
				'id'         => $prefix . 'static_groups',
				'type'       => 'group',
				'clone'      => true,
				'collapsible' => true,
				'default_state' => 'collapsed',
				'group_title' => 'Item',
				'sort_clone' => true,
				'max_clone' => 5,
				'fields' => array(
					array(
						'name'    => 'Image',
						'id'      => $prefix . 'static_image',
						'type'    => 'single_image',
					),
					array(
						'name'    => 'Number',
						'id'      => $prefix . 'static_number',
						'type'    => 'text',
					),
					array(
						'name'    => 'Sub Number',
						'id'      => $prefix . 'static_sub_number',
						'type'    => 'text',
					),
					array(
						'name'    => 'Text',
						'id'      => $prefix . 'static_text',
						'type'    => 'text',
					),
				),
			),
			array(
				'name'       => 'Box Exhibit',
				'type'       => 'heading',
			),
			array(
				'name'		=> 'Exhibit Heading White',
				'id'		=> $prefix . 'exhibit_heading_white',
				'type'		=> 'text',
			),
			array(
				'name'		=> 'Exhibit Heading Blue',
				'id'		=> $prefix . 'exhibit_heading_blue',
				'type'		=> 'text',
			),
			array(
				'name'       => 'Group List',
				'id'         => $prefix . 'group',
				'type'       => 'group',
				'clone'      => true,
				'collapsible' => true,
				'default_state' => 'collapsed',
				'group_title' => 'Item',
				'sort_clone' => true,
				'fields' => array(
					array(
						'name'             => 'Image',
						'id'               => $prefix . 'image',
						'type'             => 'single_image',
					),
					array(
						'name'             => 'Title',
						'id'               => $prefix . 'title',
						'type'             => 'text',
					),
					array(
						'name'             => 'Tag Title',
						'id'               => $prefix . 'tag_title',
						'type'             => 'text',
					),
					array(
						'name'    => 'Content',
						'id'      => $prefix . 'paragraph',
						'type'    => 'wysiwyg',
						'raw'     => true,
						'options' => array(
							'textarea_rows' => 4,
							'teeny'         => true,
						),
					),
				),
			),
			array(
				'name'       => 'Exhibit Ads',
				'id'         => $prefix . 'exhibit_ads',
				'type'       => 'group',
				'clone'      => true,
				'collapsible' => true,
				'default_state' => 'collapsed',
				'group_title' => 'Item',
				'sort_clone' => true,
				'max_clone' => 10,
				'fields' => array(
					array(
						'name'             => 'Image',
						'id'               => $prefix . 'image',
						'type'             => 'single_image',
					),
					array(
						'name'    => 'Link',
						'id'      => $prefix . 'link',
						'type'    => 'text',
					),
				),
			),
			array(
				'name'       => 'Box Catalogue',
				'type'       => 'heading',
			),
			array(
				'name'		=> 'Catalogue 1',
				'type'		=> 'group',
				'id'		=> $prefix . 'catalogue_group_1',
				'fields'	=> array(
					array(
						'name'             => 'Catalogue Image',
						'id'               => $prefix . 'catalogue1_image',
						'type'             => 'single_image',
					),
					array(
						'name'             => 'Catalogue Title',
						'id'               => $prefix . 'catalogue1_title',
						'type'             => 'text',
					),
					array(
						'name'             => 'Catalogue Button Text',
						'id'               => $prefix . 'catalogue1_btn_text',
						'type'             => 'text',
					),
					array(
						'name'             => 'Catalogue Link',
						'id'               => $prefix . 'catalogue1_link',
						'type'             => 'text',
					),
				),
			),
			array(
				'name'		=> 'Catalogue 2',
				'type'		=> 'group',
				'id'		=> $prefix . 'catalogue_group_2',
				'fields'	=> array(
					array(
						'name'             => 'Catalogue Title',
						'id'               => $prefix . 'catalogue2_title',
						'type'             => 'text',
					),
					array(
						'name'             	=> 'Catalogue Description',
						'id'               	=> $prefix . 'catalogue2_des',
						'type'				=> 'wysiwyg',
						'raw'     			=> false,
						'options' 			=> array(
							'textarea_rows' => 4,
							'teeny'         => true,
						),
					),
					array(
						'name'             => 'Catalogue Button Text 1',
						'id'               => $prefix . 'catalogue2_btn_text1',
						'type'             => 'text',
					),
					array(
						'name'             => 'Catalogue Link 1',
						'id'               => $prefix . 'catalogue2_link1',
						'type'             => 'text',
					),
					array(
						'name'             => 'Catalogue Button Text 2',
						'id'               => $prefix . 'catalogue2_btn_text2',
						'type'             => 'text',
					),
					array(
						'name'             => 'Catalogue Link 2',
						'id'               => $prefix . 'catalogue2_link2',
						'type'             => 'text',
					),
				),
			),
			array(
				'name'		=> 'Catalogue 3',
				'type'		=> 'group',
				'id'		=> $prefix . 'catalogue_group_3',
				'fields'	=> array(
					array(
						'name'             => 'Catalogue Image',
						'id'               => $prefix . 'catalogue3_image',
						'type'             => 'single_image',
					),
					array(
						'name'             => 'Catalogue Title',
						'id'               => $prefix . 'catalogue3_title',
						'type'             => 'text',
					),
					array(
						'name'             => 'Catalogue Button Text',
						'id'               => $prefix . 'catalogue3_btn_text',
						'type'             => 'text',
					),
					array(
						'name'             => 'Catalogue Link',
						'id'               => $prefix . 'catalogue3_link',
						'type'             => 'text',
					),
				),
			),
			array(
				'name'       => 'Box Visitor',
				'type'       => 'heading',
			),
			array(
				'name'       => 'Visitor Ads',
				'id'         => $prefix . 'visitor_ads',
				'type'       => 'group',
				'clone'      => true,
				'collapsible' => true,
				'default_state' => 'collapsed',
				'group_title' => 'Item',
				'sort_clone' => true,
				'max_clone' => 10,
				'fields' => array(
					array(
						'name'             => 'Image',
						'id'               => $prefix . 'visitor_image',
						'type'             => 'single_image',
					),
					array(
						'name'    => 'Link',
						'id'      => $prefix . 'visitor_link',
						'type'    => 'text',
					),
				),
			),
			array(
				'name'		=> 'Visitor Heading White',
				'id'		=> $prefix . 'visitor_heading_white',
				'type'		=> 'text',
			),
			array(
				'name'		=> 'Visitor Heading Blue',
				'id'		=> $prefix . 'visitor_heading_blue',
				'type'		=> 'text',
			),
			array(
				'name'       => 'Visitor List',
				'id'         => $prefix . 'visitor_group',
				'type'       => 'group',
				'clone'      => true,
				'collapsible' => true,
				'default_state' => 'collapsed',
				'group_title' => 'Item',
				'sort_clone' => true,
				'max_clone' => 10,
				'fields' => array(
					array(
						'name'             => 'Icon',
						'id'               => $prefix . 'icon',
						'type'             => 'single_image',
					),
					array(
						'name'             => 'Icon Hover',
						'id'               => $prefix . 'icon_hover',
						'type'             => 'single_image',
					),
					array(
						'name'    => 'Content',
						'id'      => $prefix . 'visitor_title',
						'type'    => 'text',
					),
				),
			),
			array(
				'name'		=> 'Visitor Text Button',
				'id'		=> $prefix . 'visitor_text_button',
				'type'		=> 'text',
			),
			array(
				'name'		=> 'Visitor Link Button',
				'id'		=> $prefix . 'visitor_link_button',
				'type'		=> 'text',
			),
			array(
				'name'       => 'Box Testimonial',
				'type'       => 'heading',
			),
			array(
				'name'		=> 'Testimonial Heading White',
				'id'		=> $prefix . 'testimonial_heading_white',
				'type'		=> 'text',
			),
			array(
				'name'		=> 'Testimonial Heading Blue',
				'id'		=> $prefix . 'testimonial_heading_blue',
				'type'		=> 'text',
			),
			array(
				'name'       => 'Group List',
				'id'         => $prefix . 'testimonial_group',
				'type'       => 'group',
				'clone'      => true,
				'collapsible' => true,
				'default_state' => 'collapsed',
				'group_title' => 'Item',
				'sort_clone' => true,
				'max_clone' => 10,
				'fields' => array(
					array(
						'name'             => 'Avatar',
						'id'               => $prefix . 'testimonial_avt',
						'type'             => 'single_image',
					),
					array(
						'name'             => 'Title',
						'id'               => $prefix . 'testimonial_title',
						'type'             => 'text',
					),
					array(
						'name'             => 'Position',
						'id'               => $prefix . 'testimonial_pos',
						'type'             => 'text',
					),
					array(
						'name'    => 'Information',
						'id'      => $prefix . 'testimonial_paragraph',
						'type'    => 'textarea',
						'raw'     => true,
						'limit'   => 200,
						'limit_type' => 'word',
					),
				),
			),		
			array(
				'name'       => 'Testimonial Ads',
				'id'         => $prefix . 'testimonial_ads',
				'type'       => 'group',
				'clone'      => true,
				'collapsible' => true,
				'default_state' => 'collapsed',
				'group_title' => 'Item',
				'sort_clone' => true,
				'max_clone' => 10,
				'fields' => array(
					array(
						'name'             => 'Image',
						'id'               => $prefix . 'testimonial_image',
						'type'             => 'single_image',
					),
					array(
						'name'    => 'Link',
						'id'      => $prefix . 'testimonial_link',
						'type'    => 'text',
					),
				),
			),
			array(
				'name'       => 'Box Upcoming',
				'type'       => 'heading',
			),		
			array(
				'name'       => 'Upcoming Ads',
				'id'         => $prefix . 'upcoming_ads',
				'type'       => 'group',
				'clone'      => true,
				'collapsible' => true,
				'default_state' => 'collapsed',
				'group_title' => 'Item',
				'sort_clone' => true,
				'max_clone' => 10,
				'fields' => array(
					array(
						'name'             => 'Image',
						'id'               => $prefix . 'upcoming_image',
						'type'             => 'single_image',
					),
					array(
						'name'    => 'Link',
						'id'      => $prefix . 'upcoming_link',
						'type'    => 'text',
					),
				),
			),
			array(
				'name'		=> 'Upcoming Heading White',
				'id'		=> $prefix . 'upcoming_heading_white',
				'type'		=> 'text',
			),
			array(
				'name'		=> 'Upcoming Heading Blue',
				'id'		=> $prefix . 'upcoming_heading_blue',
				'type'		=> 'text',
			),	
			array(
				'name'		=> 'Upcoming Text Button',
				'id'		=> $prefix . 'upcoming_text_button',
				'type'		=> 'text',
			),
			array(
				'name'		=> 'Upcoming Link Button',
				'id'		=> $prefix . 'upcoming_link_button',
				'type'		=> 'text',
			),
			array(
				'name'		=> 'Upcoming Text EVENT FEATURES',
				'id'		=> $prefix . 'upcoming_event',
				'type'		=> 'text',
			),
		)
	);
	return $meta_boxes;
}
// APPLICATION FORM E-BROCHURE TEMPLATE METABOX
add_filter( 'rwmb_meta_boxes', 'appEBrochure_meta_boxes' );
function appEBrochure_meta_boxes( $meta_boxes ) {
	$prefix = "prefix_appEBrochure-";
	$meta_boxes[] = array(
		'title'      => 'Template EB Option',
		'post_types' => 'page',
		'context' => 'after_title',
		'include'   => array(
			'template'    => array( 'template-applicationFormEB.php'),
		),
		'fields' => array(
			array(
				'name'             => 'Blue Text',
				'id'               => $prefix . 'blue_title',
				'type'             => 'text',
			),
			array(
				'name'             => 'White Text',
				'id'               => $prefix . 'white_title',
				'type'             => 'text',
			),
			array(
				'name'             => 'Agree Text',
				'id'               => $prefix . 'agree_text',
				'type'    => 'wysiwyg',
				'raw'     => true,
				'options' => array(
					'textarea_rows' => 4,
					'teeny'         => true,
				),
			),
		)
	);
	return $meta_boxes;
}
// APPLICATION FORM BOOK A STAND TEMPLATE METABOX
add_filter( 'rwmb_meta_boxes', 'appBookAStand_meta_boxes' );
function appBookAStand_meta_boxes( $meta_boxes ) {
	$prefix = "prefix_appBookAStand-";
	$meta_boxes[] = array(
		'title'      => 'Template BAS Option',
		'post_types' => 'page',
		'context' => 'after_title',
		'include'   => array(
			'template'    => array( 'template-applicationFormBAS.php'),
		),
		'fields' => array(
			array(
				'name'             => 'Blue Text',
				'id'               => $prefix . 'blue_title',
				'type'             => 'text',
			),
			array(
				'name'             => 'White Text',
				'id'               => $prefix . 'white_title',
				'type'             => 'text',
			),
			array(
				'name'             => 'Agree Text',
				'id'               => $prefix . 'agree_text',
				'type'    => 'wysiwyg',
				'raw'     => true,
				'options' => array(
					'textarea_rows' => 4,
					'teeny'         => true,
				),
			),
		)
	);
	return $meta_boxes;
}
// ABOUT TEMPLATE METABOX
add_filter( 'rwmb_meta_boxes', 'about_meta_boxes' );
function about_meta_boxes( $meta_boxes ) {
	$prefix = "prefix_about_";
	$meta_boxes[] = array(
		'title'      => 'Page Option',
		'post_types' => 'page',
		'include'   => array(
			'template'    => array( 'template-about.php'),
		),
		'context' => 'after_title',
		'fields' => array(
			array(
				'name'		=> 'Top Head Title',
				'id'		=> $prefix . 'top_head_title',
				'type'		=> 'text',
			),
			array(
				'name'		=> 'Bottom Head Title',
				'id'		=> $prefix . 'bot_head_title',
				'type'		=> 'text',
			),
			array(
				'name'       => 'Collapse List',
				'id'         => $prefix . 'group',
				'type'       => 'group',
				'clone'      => true,
				'collapsible' => true,
				'default_state' => 'collapsed',
				'group_title' => 'Item',
				'sort_clone' => true,
				'fields' => array(
					array(
						'name'             => 'Image',
						'id'               => $prefix . 'image',
						'type'             => 'single_image',
					),
					array(
						'name'             => 'Title',
						'id'               => $prefix . 'title',
						'type'             => 'text',
					),						
					array(
						'name'    => 'Content',
						'id'      => $prefix . 'paragraph',
						'type'    => 'wysiwyg',
						'raw'     => true,
						'options' => array(
							'textarea_rows' => 4,
							'teeny'         => true,
						),
					),
				),
			),
		)
	);
	return $meta_boxes;
}