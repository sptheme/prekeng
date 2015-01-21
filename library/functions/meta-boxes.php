<?php

/*  Initialize the meta boxes.
/* ------------------------------------ */
add_action( 'admin_init', '_custom_meta_boxes' );

function _custom_meta_boxes() {

	$prefix = 'sp_';
  
/*  Custom meta boxes
/* ------------------------------------ */
$page_layout_options = array(
	'id'          => 'page-options',
	'title'       => 'Page Options',
	'desc'        => '',
	'pages'       => array( 'page', 'post' ),
	'context'     => 'normal',
	'priority'    => 'default',
	'fields'      => array(
		array(
			'label'		=> 'Primary Sidebar',
			'id'		=> $prefix . 'sidebar_primary',
			'type'		=> 'sidebar-select',
			'desc'		=> 'Overrides default'
		),
		array(
			'label'		=> 'Layout',
			'id'		=> $prefix . 'layout',
			'type'		=> 'radio-image',
			'desc'		=> 'Overrides the default layout option',
			'std'		=> 'inherit',
			'choices'	=> array(
				array(
					'value'		=> 'inherit',
					'label'		=> 'Inherit Layout',
					'src'		=> SP_ASSETS . '/images/admin/layout-off.png'
				),
				array(
					'value'		=> 'col-1c',
					'label'		=> '1 Column',
					'src'		=> SP_ASSETS . '/images/admin/col-1c.png'
				),
				array(
					'value'		=> 'col-2cl',
					'label'		=> '2 Column Left',
					'src'		=> SP_ASSETS . '/images/admin/col-2cl.png'
				),
				array(
					'value'		=> 'col-2cr',
					'label'		=> '2 Column Right',
					'src'		=> SP_ASSETS . '/images/admin/col-2cr.png'
				)
			)
		)
	)
);

/* ---------------------------------------------------------------------- */
/*	Post Format: video
/* ---------------------------------------------------------------------- */
$post_format_video = array(
	'id'          => 'format-video',
	'title'       => 'Format: Video',
	'desc'        => 'These settings enable you to embed videos into your posts.',
	'pages'       => array( 'post' ),
	'context'     => 'normal',
	'priority'    => 'high',
	'fields'      => array(
		array(
			'label'		=> 'Video URL',
			'id'		=> $prefix . 'video_url',
			'type'		=> 'text',
			'desc'		=> 'Enter Video Embed URL from youtube, vimeo or dailymotion'
		)
	)
);

/* ---------------------------------------------------------------------- */
/*	Post Format: Audio
/* ---------------------------------------------------------------------- */
$post_format_audio = array(
	'id'          => 'format-audio',
	'title'       => 'Format: Audio',
	'desc'        => 'These settings enable you to embed audio into your posts. You must provide both .mp3 and .ogg/.oga file formats in order for self hosted audio to function accross all browsers.',
	'pages'       => array( 'post' ),
	'context'     => 'normal',
	'priority'    => 'high',
	'fields'      => array(
		array(
			'label'		=> 'Audio URL',
			'id'		=> $prefix . 'audio_url',
			'type'		=> 'upload',
			'desc'		=> 'You can get sound or audio URL from soundcloud'
		)
	)
);

/* ---------------------------------------------------------------------- */
/*	Post Format: Gallery
/* ---------------------------------------------------------------------- */
$post_format_gallery = array(
	'id'          => 'format-gallery',
	'title'       => 'Format: Gallery',
	'desc'        => 'Standard post galleries.</i>',
	'pages'       => array( 'post' ),
	'context'     => 'normal',
	'priority'    => 'high',
	'fields'      => array(
		array(
			'label'		=> 'Upload photo',
			'id'		=> $prefix . 'post_gallery',
			'type'		=> 'gallery',
			'desc'		=> 'Upload photos'
		)
	)
);

/* ---------------------------------------------------------------------- */
/*	Post Format: Chat
/* ---------------------------------------------------------------------- */
$post_format_chat = array(
	'id'          => 'format-chat',
	'title'       => 'Format: Chat',
	'desc'        => 'Input chat dialogue.',
	'pages'       => array( 'post' ),
	'context'     => 'normal',
	'priority'    => 'high',
	'fields'      => array(
		array(
			'label'		=> 'Chat Text',
			'id'		=> $prefix . 'chat',
			'type'		=> 'textarea',
			'rows'		=> '2'
		)
	)
);
/* ---------------------------------------------------------------------- */
/*	Post Format: Link
/* ---------------------------------------------------------------------- */
$post_format_link = array(
	'id'          => 'format-link',
	'title'       => 'Format: Link',
	'desc'        => 'Input your link.',
	'pages'       => array( 'post' ),
	'context'     => 'normal',
	'priority'    => 'high',
	'fields'      => array(
		array(
			'label'		=> 'Link Title',
			'id'		=> $prefix . 'link_title',
			'type'		=> 'text'
		),
		array(
			'label'		=> 'Link URL',
			'id'		=> $prefix . 'link_url',
			'type'		=> 'text'
		)
	)
);

/* ---------------------------------------------------------------------- */
/*	Post Format: quote
/* ---------------------------------------------------------------------- */
$post_format_quote = array(
	'id'          => 'format-quote',
	'title'       => 'Format: Quote',
	'desc'        => 'Input your quote.',
	'pages'       => array( 'post' ),
	'context'     => 'normal',
	'priority'    => 'high',
	'fields'      => array(
		array(
			'label'		=> 'Quote',
			'id'		=> $prefix . 'quote',
			'type'		=> 'textarea',
			'rows'		=> '2'
		),
		array(
			'label'		=> 'Quote Author',
			'id'		=> $prefix . 'quote_author',
			'type'		=> 'text'
		)
	)
);

/* ---------------------------------------------------------------------- */
/*	Home Sliders post type
/* ---------------------------------------------------------------------- */
$post_type_slideshow = array(
	'id'          => 'slideshow-setting',
	'title'       => 'Slideshow meta',
	'desc'        => '',
	'pages'       => array( 'slideshow' ),
	'context'     => 'normal',
	'priority'    => 'high',
	'fields'      => array(
		array(
			'label'		=> 'Link button',
			'id'		=> $prefix . 'slide_btn_name',
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> 'Name of button link e.g: Learn more'
		),
		array(
			'label'		=> 'Slide URL/Link',
			'id'		=> $prefix . 'slide_btn_url',
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> 'Enter slide URL'
		)
	)
);

/* ---------------------------------------------------------------------- */
/*	Client post type
/* ---------------------------------------------------------------------- */
$post_type_client = array(
	'id'          => 'client-setting',
	'title'       => 'Client meta',
	'desc'        => '',
	'pages'       => array( 'sp_client' ),
	'context'     => 'normal',
	'priority'    => 'high',
	'fields'      => array(
		array(
			'label'		=> 'Client Cite',
			'id'		=> $prefix . 'client_cite',
			'type'		=> 'text',
			'desc'		=> 'e.g: Manging Director'
		),
		array(
			'label'		=> 'Client Cite Subtext',
			'id'		=> $prefix . 'client_cite_subtext',
			'type'		=> 'text',
			'desc'		=> '(optional) Can be company/organization name e.g: Naga World Hotel'
		)
	)
);

/* ---------------------------------------------------------------------- */
/*	Branch
/* ---------------------------------------------------------------------- */
$post_type_branch = array(
	'id'          => 'branch-meta',
	'title'       => 'Branch meta',
	'desc'        => '',
	'pages'       => array( 'sp_branch' ),
	'context'     => 'normal',
	'priority'    => 'high',
	'fields'      => array(
		array(
			'label'		=> 'Latitude and Longitude',
			'id'		=> $prefix . 'lat_long',
			'type'		=> 'text',
			'desc'		=> 'e.g. 11.544873,104.892167. You can get this value from <a href="http://itouchmap.com/latlong.html" target="_blank">itouchmap</a>'
		),
		array(
			'label'		=> 'Adress',
			'id'		=> $prefix . 'branch_address',
			'type'		=> 'textarea',
			'rows'		=> '2'
		),
		array(
			'label'		=> 'Tel',
			'id'		=> $prefix . 'branch_tel',
			'type'		=> 'text',
			'desc'		=> 'e.g. (+855)-23-990 225 / 10 8888 76'
		),
		array(
			'label'		=> 'E-mail',
			'id'		=> $prefix . 'branch_email',
			'type'		=> 'text',
			'desc'		=> 'e.g. info@domainname.com'
		),
	)
);

/* ---------------------------------------------------------------------- */
/*	Metabox for Home template
/* ---------------------------------------------------------------------- */
/*$page_template_home = array(
	'id'          => 'home-settings',
	'title'       => 'Home settings',
	'desc'        => '',
	'pages'       => array( 'page' ),
	'context'     => 'normal',
	'priority'    => 'high',
	'fields'      => array(
		array(
			'label'		=> 'Slideshow',
			'id'		=> $prefix . 'slide_options',
			'type'		=> 'tab'
		),
		array(
			'label'		=> 'Number of Slide to show',
			'id'		=> $prefix . 'slide_num',
			'type'		=> 'text',
			'std'		=> '5',
			'desc'		=> 'Enter number of slide e.g. 5'
		),
		array(
			'label'		=> 'Slide Effect',
			'id'		=> $prefix . 'slide_effect',
			'type'		=> 'select',
			'std'		=> '',
			'desc'		=> '',
			'choices'     => array( 
	          array(
	            'value'       => 'fade',
	            'label'       => 'Fade',
	            'src'         => ''
	          ),
	          array(
	            'value'       => 'slide',
	            'label'       => 'Slide',
	            'src'         => ''
	          )
	        )
		),
		array(
			'label'		=> 'Facility',
			'id'		=> $prefix . 'facility_options',
			'type'		=> 'tab'
		), 
		array(
			'label'		=> 'Facility page',
			'id'		=> $prefix . 'facility_page_id',
			'type'		=> 'page-select',
			'std'		=> '',
			'desc'		=> 'Select Facility Page that containe each sub pages of all facilities'
		),
		array(
			'label'		=> 'Title',
			'id'		=> $prefix . 'facility_title',
			'type'		=> 'text',
			'std'		=> 'Explore Our Facilities'
		),
		array(
			'label'		=> 'Description',
			'id'		=> $prefix . 'facility_desc',
			'type'		=> 'textarea',
			'rows'      => '2',
			'std'		=> ''
		),
		array(
			'label'		=> 'Column item',
			'id'		=> $prefix . 'column_item',
			'type'		=> 'text',
			'std'		=> '3',
			'desc'		=> 'Present each facility pages in number of columns'
		),
		array(
			'label'		=> 'Number of sub facility page to show',
			'id'		=> $prefix . 'facility_num',
			'type'		=> 'text',
			'std'		=> '-1',
			'desc'		=> 'e.g. 5 (-1 show all sub page)'
		)
	)
);*/

/* ---------------------------------------------------------------------- */
/*	Meta box for Apartment template
/* ---------------------------------------------------------------------- */
$page_template_slideshow = array(
	'id'          => 'photo-settings',
	'title'       => 'Photo settings',
	'desc'        => '',
	'pages'       => array( 'page' ),
	'context'     => 'normal',
	'priority'    => 'high',
	'fields'      => array(
		array(
			'label'		=> 'Photo style',
			'id'		=> $prefix . 'photo_options',
			'type'		=> 'radio-image',
			'desc'		=> 'Choose Slideshow or Gallery for page header',
			'std'		=> 'slideshow',
			'choices'	=> array(
				array(
					'value'		=> 'slideshow',
					'label'		=> 'Slideshow',
					'src'		=> SP_ASSETS . '/images/admin/slideshow.png'
				),
				array(
					'value'		=> 'gallery',
					'label'		=> 'Gallery',
					'src'		=> SP_ASSETS . '/images/admin/gallery.png'
				)
			)
		),
		array(
			'label'		=> 'Upload photo',
			'id'		=> $prefix . 'page_gallery',
			'type'		=> 'gallery',
			'desc'		=> ''
		),
		array(
			'label'		=> 'Slide Effect',
			'id'		=> $prefix . 'slide_effect',
			'type'		=> 'select',
			'std'		=> '',
			'desc'		=> '',
			'choices'     => array( 
	          array(
	            'value'       => 'fade',
	            'label'       => 'Fade',
	            'src'         => ''
	          ),
	          array(
	            'value'       => 'slide',
	            'label'       => 'Slide',
	            'src'         => ''
	          )
	        )
		),
	)
);

/* ---------------------------------------------------------------------- */
/*	Meta box for Contact template
/* ---------------------------------------------------------------------- */
$page_template_contact_info = array(
	'id'          => 'contact-settings',
	'title'       => 'Contact infomation',
	'desc'        => '',
	'pages'       => array( 'page' ),
	'context'     => 'normal',
	'priority'    => 'high',
	'fields'      => array(
		array(
			'label'		=> 'Introduction text',
			'id'		=> $prefix . 'intro_text',
			'type'		=> 'textarea',
			'rows'		=> '2',
			'std'		=> 'Cousy and affordable accomodation in a nice contest'
		),
		array(
			'label'		=> 'Address',
			'id'		=> $prefix . 'address',
			'type'		=> 'text',
			'desc'		=> 'e.g: # A27-A28 , National Road No 1, Boeung Snoa Village, Pnom Penh, Cambodia',
		),
		array(
			'label'		=> 'Marker location',
			'id'		=> $prefix . 'lat_long_map',
			'type'		=> 'text',
			'desc'		=> 'Enter Latitute and longitute of google map. You can get it from <a href="http://itouchmap.com/latlong.html" target="_blank">iTouchMap</a>'
		),
		array(
			'label'		=> 'Email',
			'id'		=> $prefix . 'email',
			'type'		=> 'text',
			'desc'		=> '',
		),
		array(
			'label'		=> 'Phone',
			'id'		=> $prefix . 'phone',
			'type'		=> 'text',
			'desc'		=> 'e.g: +855 012 840 056',
		)
	)
);

$page_template_contact_distance = array(
	'id'          => 'distance-settings',
	'title'       => 'Distance settings',
	'desc'        => 'Upload distance name and photo',
	'pages'       => array( 'page' ),
	'context'     => 'normal',
	'priority'    => 'high',
	'fields'      => array(
		array(
			'label'		=> 'Distance Table',
			'id'		=> $prefix . 'map_gallery',
			'type'		=> 'list-item',
			'desc'		=> 'Add distance map to see how many distance direct to your place',
			'settings'    => array( 
	          array(
	            'id'          => 'distance_map_photo',
	            'label'       => 'Distance photo',
	            'std'         => '',
	            'type'        => 'upload',
	          )
	        )
		)
	)
);

/* ---------------------------------------------------------------------- */
/*	Return meta box option base on page template selected
/* ---------------------------------------------------------------------- */
function rw_maybe_include() {
	// Include in back-end only
	if ( ! defined( 'WP_ADMIN' ) || ! WP_ADMIN ) {
		return false;
	}

	// Always include for ajax
	if ( defined( 'DOING_AJAX' ) && DOING_AJAX ) {
		return true;
	}

	if ( isset( $_GET['post'] ) ) {
		$post_id = $_GET['post'];
	}
	elseif ( isset( $_POST['post_ID'] ) ) {
		$post_id = $_POST['post_ID'];
	}
	else {
		$post_id = false;
	}

	$post_id = (int) $post_id;
	$post    = get_post( $post_id );

	$template = get_post_meta( $post_id, '_wp_page_template', true );

	return $template;
}

/*  Register meta boxes
/* ------------------------------------ */
	ot_register_meta_box( $post_format_audio );
	ot_register_meta_box( $post_format_chat );
	ot_register_meta_box( $post_format_gallery );
	ot_register_meta_box( $post_format_link );
	ot_register_meta_box( $post_format_quote );
	ot_register_meta_box( $post_format_video );
	ot_register_meta_box( $post_type_slideshow );
	ot_register_meta_box( $post_type_client );
	ot_register_meta_box( $post_type_branch );
	ot_register_meta_box( $page_layout_options );

	$template_file = rw_maybe_include();
	if ( $template_file == 'templates/template-slideshow.php' ) {
		ot_register_meta_box( $page_template_slideshow ); 
	}
	if ( $template_file == 'templates/template-contact.php' ) {
		ot_register_meta_box( $page_template_contact_info );
		ot_register_meta_box( $page_template_contact_distance ); 	
	} 
}