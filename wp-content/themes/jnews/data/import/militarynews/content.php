<?php
return array(
	'image'           =>
	array(
		'logo'          => 'https://jegtheme.com/asset/jnews/demo/militarynews/logo-militarynews.png',
		'logo2x'        => 'https://jegtheme.com/asset/jnews/demo/militarynews/logo-militarynews@2x.png',
		'logo-dark'     => 'https://jegtheme.com/asset/jnews/demo/militarynews/logo-militarynews-dark.jpg',
		'logo-dark2x'   => 'https://jegtheme.com/asset/jnews/demo/militarynews/logo-militarynews-dark@2x.jpg',
		'favicon'       => 'https://jegtheme.com/asset/jnews/demo/default/favicon.png',

		'militarynews1' => 'https://jegtheme.com/asset/jnews/demo/default/travel1.jpg',
		'militarynews2' => 'https://jegtheme.com/asset/jnews/demo/default/fashion2.jpg',
		'militarynews3' => 'https://jegtheme.com/asset/jnews/demo/default/fashion3.jpg',
		'militarynews4' => 'https://jegtheme.com/asset/jnews/demo/default/fashion4.jpg',
		'militarynews5' => 'https://jegtheme.com/asset/jnews/demo/default/fashion5.jpg',
		'militarynews6' => 'https://jegtheme.com/asset/jnews/demo/default/fashion6.jpg',
		'militarynews7' => 'https://jegtheme.com/asset/jnews/demo/default/fashion1.jpg',
		'militarynews8' => 'https://jegtheme.com/asset/jnews/demo/default/travel2.jpg',
		'militarynews9' => 'https://jegtheme.com/asset/jnews/demo/default/travel3.jpg',

		'ad_970x90'     => 'https://jegtheme.com/asset/jnews/demo/militarynews/ad-970x90-1.jpg',
		'ad_728x90'     => 'https://jegtheme.com/asset/jnews/demo/militarynews/ad-728x90-1.jpg',
		'ad_728x902x'   => 'https://jegtheme.com/asset/jnews/demo/militarynews/ad-728x90@2x.jpg',
		'ad_sidebar'    => 'https://jegtheme.com/asset/jnews/demo/militarynews/ad-sidebar-1.jpg',
	),
	'taxonomy'        =>
	array(
		'category' =>
		array(
			'defense'   =>
			array(
				'title'       => 'Defense',
				'description' => 'You can change the description on each category from the WordPress administration panel.',
			),
			'education' =>
			array(
				'title'       => 'Education',
				'description' => 'You can change the description on each category from the WordPress administration panel.',
			),
			'news'      =>
			array(
				'title'       => 'News',
				'description' => 'You can change the description on each category from the WordPress administration panel.',
			),
			'operation' =>
			array(
				'title'       => 'Operation',
				'description' => 'You can change the description on each category from the WordPress administration panel.',
			),
			'opinion'   =>
			array(
				'title'       => 'Opinion',
				'description' => 'You can change the description on each category from the WordPress administration panel.',
			),
			'politic'   =>
			array(
				'title'       => 'Politic',
				'description' => 'You can change the description on each category from the WordPress administration panel.',
			),
			'training'  =>
			array(
				'title'       => 'Training',
				'description' => 'You can change the description on each category from the WordPress administration panel.',
			),
			'veteran'   =>
			array(
				'title'       => 'Veteran',
				'description' => 'You can change the description on each category from the WordPress administration panel.',
			),
		),
		'post_tag' =>
		array(
			'air-force'      =>
			array(
				'title' => 'Air Force',
			),
			'army'           =>
			array(
				'title' => 'Army',
			),
			'congress'       =>
			array(
				'title' => 'Congress',
			),
			'flashpoint'     =>
			array(
				'title' => 'Flashpoint',
			),
			'marine-corps'   =>
			array(
				'title' => 'Marine Corps',
			),
			'navy'           =>
			array(
				'title' => 'Navy',
			),
			'off-duty'       =>
			array(
				'title' => 'Off Duty',
			),
			'pentagon'       =>
			array(
				'title' => 'Pentagon',
			),
			'special-forces' =>
			array(
				'title' => 'Special Forces',
			),
			'submarine'      =>
			array(
				'title' => 'Submarine',
			),
		),
	),
	'post'            =>
	array(
		'indonesia-deploys-400-battle-hardened-troops-to-troubled-papua' =>
		array(
			'title'          => 'Indonesia deploys 400 battle-hardened troops to troubled Papua',
			'content'        => 'post1.txt',
			'featured_image' => 'militarynews4',
			'post_type'      => 'post',
			'taxonomy'       =>
			array(
				'category' => 'operation',
				'post_tag' => 'air-force,army,marine-corps,navy,special-forces',
			),
			'metabox'        =>
			array(
				'jnews_primary_category' =>
				array(
					'id' => '{{category:operation:id}}',
				),
				'jnews_single_post'      =>
				array(
					'source_name'                => '',
					'source_url'                 => '',
					'via_name'                   => '',
					'via_url'                    => '',
					'override_template'          => '0',
					'override'                   =>
					array(

						array(
							'single_blog_custom'       => '',
							'parallax'                 => '0',
							'fullscreen'               => '0',
							'sidebar'                  => '',
							'second_sidebar'           => '',
							'sticky_sidebar'           => '0',
							'share_position'           => '',
							'share_float_style'        => '',
							'show_share_counter'       => '0',
							'show_view_counter'        => '0',
							'show_featured'            => '0',
							'show_post_meta'           => '0',
							'show_post_author'         => '0',
							'show_post_author_image'   => '0',
							'show_post_date'           => '0',
							'post_date_format'         => '',
							'post_date_format_custom'  => '',
							'show_post_category'       => '0',
							'show_post_reading_time'   => '0',
							'post_reading_time_wpm'    => '',
							'show_zoom_button'         => '0',
							'zoom_button_out_step'     => '1',
							'zoom_button_in_step'      => '1',
							'show_post_tag'            => '0',
							'show_prev_next_post'      => '0',
							'show_popup_post'          => '0',
							'number_popup_post'        => '1',
							'show_author_box'          => '0',
							'show_post_related'        => '0',
							'show_inline_post_related' => '0',
						),
					),
					'override_image_size'        => '0',
					'image_override'             =>
					array(

						array(
							'single_post_thumbnail_size' => '',
							'single_post_gallery_size'   => '',
						),
					),
					'trending_post'              => '0',
					'trending_post_position'     => '',
					'trending_post_label'        => '',
					'sponsored_post'             => '0',
					'sponsored_post_label'       => '',
					'sponsored_post_name'        => '',
					'sponsored_post_url'         => '',
					'sponsored_post_logo_enable' => '0',
					'sponsored_post_logo'        => '',
					'sponsored_post_desc'        => '',
				),
			),
		),
		'us-navy-army-joint-physical-training-exercises-sports-competition' =>
		array(
			'title'          => 'US Navy & Army Joint Physical Training Exercises & Sports Competition',
			'content'        => 'post2.txt',
			'featured_image' => 'militarynews9',
			'post_type'      => 'post',
			'taxonomy'       =>
			array(
				'category' => 'training',
				'post_tag' => 'air-force,army,marine-corps,navy,special-forces',
			),
			'metabox'        =>
			array(
				'jnews_primary_category' =>
				array(
					'id' => '{{category:training:id}}',
				),
				'jnews_single_post'      =>
				array(
					'source_name'                => '',
					'source_url'                 => '',
					'via_name'                   => '',
					'via_url'                    => '',
					'override_template'          => '0',
					'override'                   =>
					array(

						array(
							'single_blog_custom'       => '',
							'parallax'                 => '0',
							'fullscreen'               => '0',
							'sidebar'                  => '',
							'second_sidebar'           => '',
							'sticky_sidebar'           => '0',
							'share_position'           => '',
							'share_float_style'        => '',
							'show_share_counter'       => '0',
							'show_view_counter'        => '0',
							'show_featured'            => '0',
							'show_post_meta'           => '0',
							'show_post_author'         => '0',
							'show_post_author_image'   => '0',
							'show_post_date'           => '0',
							'post_date_format'         => '',
							'post_date_format_custom'  => '',
							'show_post_category'       => '0',
							'show_post_reading_time'   => '0',
							'post_reading_time_wpm'    => '',
							'show_zoom_button'         => '0',
							'zoom_button_out_step'     => '1',
							'zoom_button_in_step'      => '1',
							'show_post_tag'            => '0',
							'show_prev_next_post'      => '0',
							'show_popup_post'          => '0',
							'number_popup_post'        => '1',
							'show_author_box'          => '0',
							'show_post_related'        => '0',
							'show_inline_post_related' => '0',
						),
					),
					'override_image_size'        => '0',
					'image_override'             =>
					array(

						array(
							'single_post_thumbnail_size' => '',
							'single_post_gallery_size'   => '',
						),
					),
					'trending_post'              => '0',
					'trending_post_position'     => '',
					'trending_post_label'        => '',
					'sponsored_post'             => '0',
					'sponsored_post_label'       => '',
					'sponsored_post_name'        => '',
					'sponsored_post_url'         => '',
					'sponsored_post_logo_enable' => '0',
					'sponsored_post_logo'        => '',
					'sponsored_post_desc'        => '',
				),
			),
		),
		'everything-a-fighter-pilot-wears-in-the-cockpit-2' =>
		array(
			'title'          => 'Everything a Fighter Pilot Wears in the Cockpit',
			'content'        => 'post1.txt',
			'featured_image' => 'militarynews7',
			'post_type'      => 'post',
			'taxonomy'       =>
			array(
				'category' => 'veteran',
				'post_tag' => 'air-force,congress,flashpoint,off-duty,special-forces,submarine',
			),
			'metabox'        =>
			array(
				'jnews_primary_category' =>
				array(
					'id' => '{{category:veteran:id}}',
				),
				'jnews_single_post'      =>
				array(
					'source_name'                => '',
					'source_url'                 => '',
					'via_name'                   => '',
					'via_url'                    => '',
					'override_template'          => '0',
					'override'                   =>
					array(

						array(
							'single_blog_custom'       => '',
							'parallax'                 => '0',
							'fullscreen'               => '0',
							'sidebar'                  => '',
							'second_sidebar'           => '',
							'sticky_sidebar'           => '0',
							'share_position'           => '',
							'share_float_style'        => '',
							'show_share_counter'       => '0',
							'show_view_counter'        => '0',
							'show_featured'            => '0',
							'show_post_meta'           => '0',
							'show_post_author'         => '0',
							'show_post_author_image'   => '0',
							'show_post_date'           => '0',
							'post_date_format'         => '',
							'post_date_format_custom'  => '',
							'show_post_category'       => '0',
							'show_post_reading_time'   => '0',
							'post_reading_time_wpm'    => '',
							'show_zoom_button'         => '0',
							'zoom_button_out_step'     => '1',
							'zoom_button_in_step'      => '1',
							'show_post_tag'            => '0',
							'show_prev_next_post'      => '0',
							'show_popup_post'          => '0',
							'number_popup_post'        => '1',
							'show_author_box'          => '0',
							'show_post_related'        => '0',
							'show_inline_post_related' => '0',
						),
					),
					'override_image_size'        => '0',
					'image_override'             =>
					array(

						array(
							'single_post_thumbnail_size' => '',
							'single_post_gallery_size'   => '',
						),
					),
					'trending_post'              => '0',
					'trending_post_position'     => '',
					'trending_post_label'        => '',
					'sponsored_post'             => '0',
					'sponsored_post_label'       => '',
					'sponsored_post_name'        => '',
					'sponsored_post_url'         => '',
					'sponsored_post_logo_enable' => '0',
					'sponsored_post_logo'        => '',
					'sponsored_post_desc'        => '',
				),
			),
		),
		'everything-a-fighter-pilot-wears-in-the-cockpit'  =>
		array(
			'title'          => 'Everything a Fighter Pilot Wears in the Cockpit',
			'content'        => 'post2.txt',
			'featured_image' => 'militarynews8',
			'post_type'      => 'post',
			'taxonomy'       =>
			array(
				'category' => 'defense,education,veteran',
				'post_tag' => 'air-force,congress,flashpoint,off-duty,special-forces,submarine',
			),
			'metabox'        =>
			array(
				'jnews_primary_category' =>
				array(
					'id' => '{{category:veteran:id}}',
				),
				'jnews_single_post'      =>
				array(
					'source_name'                => '',
					'source_url'                 => '',
					'via_name'                   => '',
					'via_url'                    => '',
					'override_template'          => '0',
					'override'                   =>
					array(

						array(
							'single_blog_custom'       => '',
							'parallax'                 => '0',
							'fullscreen'               => '0',
							'sidebar'                  => '',
							'second_sidebar'           => '',
							'sticky_sidebar'           => '0',
							'share_position'           => '',
							'share_float_style'        => '',
							'show_share_counter'       => '0',
							'show_view_counter'        => '0',
							'show_featured'            => '0',
							'show_post_meta'           => '0',
							'show_post_author'         => '0',
							'show_post_author_image'   => '0',
							'show_post_date'           => '0',
							'post_date_format'         => '',
							'post_date_format_custom'  => '',
							'show_post_category'       => '0',
							'show_post_reading_time'   => '0',
							'post_reading_time_wpm'    => '',
							'show_zoom_button'         => '0',
							'zoom_button_out_step'     => '1',
							'zoom_button_in_step'      => '1',
							'show_post_tag'            => '0',
							'show_prev_next_post'      => '0',
							'show_popup_post'          => '0',
							'number_popup_post'        => '1',
							'show_author_box'          => '0',
							'show_post_related'        => '0',
							'show_inline_post_related' => '0',
						),
					),
					'override_image_size'        => '0',
					'image_override'             =>
					array(

						array(
							'single_post_thumbnail_size' => '',
							'single_post_gallery_size'   => '',
						),
					),
					'trending_post'              => '0',
					'trending_post_position'     => '',
					'trending_post_label'        => '',
					'sponsored_post'             => '0',
					'sponsored_post_label'       => '',
					'sponsored_post_name'        => '',
					'sponsored_post_url'         => '',
					'sponsored_post_logo_enable' => '0',
					'sponsored_post_logo'        => '',
					'sponsored_post_desc'        => '',
				),
			),
		),
		'the-marine-corps-is-drastically-reinventing-itself' =>
		array(
			'title'          => 'The Marine Corps Is Drastically Reinventing Itself',
			'content'        => 'post1.txt',
			'featured_image' => 'militarynews1',
			'post_type'      => 'post',
			'taxonomy'       =>
			array(
				'category' => 'education,operation,opinion,veteran',
				'post_tag' => 'army,marine-corps,navy,off-duty,pentagon',
			),
			'metabox'        =>
			array(
				'jnews_primary_category' =>
				array(
					'id' => '{{category:opinion:id}}',
				),
				'jnews_single_post'      =>
				array(
					'source_name'                => '',
					'source_url'                 => '',
					'via_name'                   => '',
					'via_url'                    => '',
					'override_template'          => '0',
					'override'                   =>
					array(

						array(
							'single_blog_custom'       => '',
							'parallax'                 => '0',
							'fullscreen'               => '0',
							'sidebar'                  => '',
							'second_sidebar'           => '',
							'sticky_sidebar'           => '0',
							'share_position'           => '',
							'share_float_style'        => '',
							'show_share_counter'       => '0',
							'show_view_counter'        => '0',
							'show_featured'            => '0',
							'show_post_meta'           => '0',
							'show_post_author'         => '0',
							'show_post_author_image'   => '0',
							'show_post_date'           => '0',
							'post_date_format'         => '',
							'post_date_format_custom'  => '',
							'show_post_category'       => '0',
							'show_post_reading_time'   => '0',
							'post_reading_time_wpm'    => '',
							'show_zoom_button'         => '0',
							'zoom_button_out_step'     => '1',
							'zoom_button_in_step'      => '1',
							'show_post_tag'            => '0',
							'show_prev_next_post'      => '0',
							'show_popup_post'          => '0',
							'number_popup_post'        => '1',
							'show_author_box'          => '0',
							'show_post_related'        => '0',
							'show_inline_post_related' => '0',
						),
					),
					'override_image_size'        => '0',
					'image_override'             =>
					array(

						array(
							'single_post_thumbnail_size' => '',
							'single_post_gallery_size'   => '',
						),
					),
					'trending_post'              => '0',
					'trending_post_position'     => '',
					'trending_post_label'        => '',
					'sponsored_post'             => '0',
					'sponsored_post_label'       => '',
					'sponsored_post_name'        => '',
					'sponsored_post_url'         => '',
					'sponsored_post_logo_enable' => '0',
					'sponsored_post_logo'        => '',
					'sponsored_post_desc'        => '',
				),
			),
		),
		'why-this-vintage-paint-job-is-an-air-force-classic' =>
		array(
			'title'          => 'Why This Vintage Paint Job Is an Air Force Classic',
			'content'        => 'post2.txt',
			'featured_image' => 'militarynews9',
			'post_type'      => 'post',
			'taxonomy'       =>
			array(
				'category' => 'defense,news,politic',
				'post_tag' => 'army,marine-corps,navy,off-duty,pentagon',
			),
			'metabox'        =>
			array(
				'jnews_primary_category' =>
				array(
					'id' => '{{category:defense:id}}',
				),
				'jnews_single_post'      =>
				array(
					'source_name'                => '',
					'source_url'                 => '',
					'via_name'                   => '',
					'via_url'                    => '',
					'override_template'          => '0',
					'override'                   =>
					array(

						array(
							'single_blog_custom'       => '',
							'parallax'                 => '0',
							'fullscreen'               => '0',
							'sidebar'                  => '',
							'second_sidebar'           => '',
							'sticky_sidebar'           => '0',
							'share_position'           => '',
							'share_float_style'        => '',
							'show_share_counter'       => '0',
							'show_view_counter'        => '0',
							'show_featured'            => '0',
							'show_post_meta'           => '0',
							'show_post_author'         => '0',
							'show_post_author_image'   => '0',
							'show_post_date'           => '0',
							'post_date_format'         => '',
							'post_date_format_custom'  => '',
							'show_post_category'       => '0',
							'show_post_reading_time'   => '0',
							'post_reading_time_wpm'    => '',
							'show_zoom_button'         => '0',
							'zoom_button_out_step'     => '1',
							'zoom_button_in_step'      => '1',
							'show_post_tag'            => '0',
							'show_prev_next_post'      => '0',
							'show_popup_post'          => '0',
							'number_popup_post'        => '1',
							'show_author_box'          => '0',
							'show_post_related'        => '0',
							'show_inline_post_related' => '0',
						),
					),
					'override_image_size'        => '0',
					'image_override'             =>
					array(

						array(
							'single_post_thumbnail_size' => '',
							'single_post_gallery_size'   => '',
						),
					),
					'trending_post'              => '0',
					'trending_post_position'     => '',
					'trending_post_label'        => '',
					'sponsored_post'             => '0',
					'sponsored_post_label'       => '',
					'sponsored_post_name'        => '',
					'sponsored_post_url'         => '',
					'sponsored_post_logo_enable' => '0',
					'sponsored_post_logo'        => '',
					'sponsored_post_desc'        => '',
				),
			),
		),
		'one-of-these-vehicles-could-replace-the-m2-bradley' =>
		array(
			'title'          => 'One of these Vehicles Could Replace the M2 Bradley',
			'content'        => 'post1.txt',
			'featured_image' => 'militarynews7',
			'post_type'      => 'post',
			'taxonomy'       =>
			array(
				'category' => 'education,opinion,politic',
				'post_tag' => 'army,marine-corps,navy,off-duty,pentagon',
			),
			'metabox'        =>
			array(
				'jnews_primary_category' =>
				array(
					'id' => '{{category:opinion:id}}',
				),
				'jnews_single_post'      =>
				array(
					'source_name'                => '',
					'source_url'                 => '',
					'via_name'                   => '',
					'via_url'                    => '',
					'override_template'          => '0',
					'override'                   =>
					array(

						array(
							'single_blog_custom'       => '',
							'parallax'                 => '0',
							'fullscreen'               => '0',
							'sidebar'                  => '',
							'second_sidebar'           => '',
							'sticky_sidebar'           => '0',
							'share_position'           => '',
							'share_float_style'        => '',
							'show_share_counter'       => '0',
							'show_view_counter'        => '0',
							'show_featured'            => '0',
							'show_post_meta'           => '0',
							'show_post_author'         => '0',
							'show_post_author_image'   => '0',
							'show_post_date'           => '0',
							'post_date_format'         => '',
							'post_date_format_custom'  => '',
							'show_post_category'       => '0',
							'show_post_reading_time'   => '0',
							'post_reading_time_wpm'    => '',
							'show_zoom_button'         => '0',
							'zoom_button_out_step'     => '1',
							'zoom_button_in_step'      => '1',
							'show_post_tag'            => '0',
							'show_prev_next_post'      => '0',
							'show_popup_post'          => '0',
							'number_popup_post'        => '1',
							'show_author_box'          => '0',
							'show_post_related'        => '0',
							'show_inline_post_related' => '0',
						),
					),
					'override_image_size'        => '0',
					'image_override'             =>
					array(

						array(
							'single_post_thumbnail_size' => '',
							'single_post_gallery_size'   => '',
						),
					),
					'trending_post'              => '0',
					'trending_post_position'     => '',
					'trending_post_label'        => '',
					'sponsored_post'             => '0',
					'sponsored_post_label'       => '',
					'sponsored_post_name'        => '',
					'sponsored_post_url'         => '',
					'sponsored_post_logo_enable' => '0',
					'sponsored_post_logo'        => '',
					'sponsored_post_desc'        => '',
				),
			),
		),
		'why-u-s-bombers-might-have-to-go-back-on-nuclear-alert' =>
		array(
			'title'          => 'Why U.S. Bombers Might Have to Go Back on Nuclear Alert',
			'content'        => 'post2.txt',
			'featured_image' => 'militarynews2',
			'post_type'      => 'post',
			'taxonomy'       =>
			array(
				'category' => 'news,operation,opinion,veteran',
				'post_tag' => 'flashpoint,marine-corps,off-duty,pentagon,submarine',
			),
			'metabox'        =>
			array(
				'jnews_primary_category' =>
				array(
					'id' => '{{category:news:id}}',
				),
				'jnews_single_post'      =>
				array(
					'source_name'                => '',
					'source_url'                 => '',
					'via_name'                   => '',
					'via_url'                    => '',
					'override_template'          => '0',
					'override'                   =>
					array(

						array(
							'single_blog_custom'       => '',
							'parallax'                 => '0',
							'fullscreen'               => '0',
							'sidebar'                  => '',
							'second_sidebar'           => '',
							'sticky_sidebar'           => '0',
							'share_position'           => '',
							'share_float_style'        => '',
							'show_share_counter'       => '0',
							'show_view_counter'        => '0',
							'show_featured'            => '0',
							'show_post_meta'           => '0',
							'show_post_author'         => '0',
							'show_post_author_image'   => '0',
							'show_post_date'           => '0',
							'post_date_format'         => '',
							'post_date_format_custom'  => '',
							'show_post_category'       => '0',
							'show_post_reading_time'   => '0',
							'post_reading_time_wpm'    => '',
							'show_zoom_button'         => '0',
							'zoom_button_out_step'     => '1',
							'zoom_button_in_step'      => '1',
							'show_post_tag'            => '0',
							'show_prev_next_post'      => '0',
							'show_popup_post'          => '0',
							'number_popup_post'        => '1',
							'show_author_box'          => '0',
							'show_post_related'        => '0',
							'show_inline_post_related' => '0',
						),
					),
					'override_image_size'        => '0',
					'image_override'             =>
					array(

						array(
							'single_post_thumbnail_size' => '',
							'single_post_gallery_size'   => '',
						),
					),
					'trending_post'              => '0',
					'trending_post_position'     => '',
					'trending_post_label'        => '',
					'sponsored_post'             => '0',
					'sponsored_post_label'       => '',
					'sponsored_post_name'        => '',
					'sponsored_post_url'         => '',
					'sponsored_post_logo_enable' => '0',
					'sponsored_post_logo'        => '',
					'sponsored_post_desc'        => '',
				),
			),
		),
		'this-is-our-first-look-at-the-air-forces-secret-new-fighter-jet' =>
		array(
			'title'          => 'This Is Our First Look at the Air Force’s Secret New Fighter Jet',
			'content'        => 'post1.txt',
			'featured_image' => 'militarynews2',
			'post_type'      => 'post',
			'taxonomy'       =>
			array(
				'category' => 'education,opinion,training',
				'post_tag' => 'air-force,congress,navy,pentagon',
			),
			'metabox'        =>
			array(
				'jnews_primary_category' =>
				array(
					'id' => '{{category:education:id}}',
				),
				'jnews_single_post'      =>
				array(
					'source_name'                => '',
					'source_url'                 => '',
					'via_name'                   => '',
					'via_url'                    => '',
					'override_template'          => '0',
					'override'                   =>
					array(

						array(
							'single_blog_custom'       => '',
							'parallax'                 => '0',
							'fullscreen'               => '0',
							'sidebar'                  => '',
							'second_sidebar'           => '',
							'sticky_sidebar'           => '0',
							'share_position'           => '',
							'share_float_style'        => '',
							'show_share_counter'       => '0',
							'show_view_counter'        => '0',
							'show_featured'            => '0',
							'show_post_meta'           => '0',
							'show_post_author'         => '0',
							'show_post_author_image'   => '0',
							'show_post_date'           => '0',
							'post_date_format'         => '',
							'post_date_format_custom'  => '',
							'show_post_category'       => '0',
							'show_post_reading_time'   => '0',
							'post_reading_time_wpm'    => '',
							'show_zoom_button'         => '0',
							'zoom_button_out_step'     => '1',
							'zoom_button_in_step'      => '1',
							'show_post_tag'            => '0',
							'show_prev_next_post'      => '0',
							'show_popup_post'          => '0',
							'number_popup_post'        => '1',
							'show_author_box'          => '0',
							'show_post_related'        => '0',
							'show_inline_post_related' => '0',
						),
					),
					'override_image_size'        => '0',
					'image_override'             =>
					array(

						array(
							'single_post_thumbnail_size' => '',
							'single_post_gallery_size'   => '',
						),
					),
					'trending_post'              => '0',
					'trending_post_position'     => '',
					'trending_post_label'        => '',
					'sponsored_post'             => '0',
					'sponsored_post_label'       => '',
					'sponsored_post_name'        => '',
					'sponsored_post_url'         => '',
					'sponsored_post_logo_enable' => '0',
					'sponsored_post_logo'        => '',
					'sponsored_post_desc'        => '',
				),
			),
		),
		'biden-says-us-withdrawal-from-afghanistan-shows-american-leadership' =>
		array(
			'title'          => 'Biden says US withdrawal from Afghanistan shows ‘American leadership’',
			'content'        => 'post2.txt',
			'featured_image' => 'militarynews2',
			'post_type'      => 'post',
			'taxonomy'       =>
			array(
				'category' => 'defense,news,operation,politic',
				'post_tag' => 'air-force,army,congress,pentagon,special-forces',
			),
			'metabox'        =>
			array(
				'post_subtitle'          => 'A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.',
				'jnews_primary_category' =>
				array(
					'id' => '{{category:politic:id}}',
				),
				'jnews_single_post'      =>
				array(
					'source_name'                => '',
					'source_url'                 => '',
					'via_name'                   => '',
					'via_url'                    => '',
					'override_template'          => '0',
					'override'                   =>
					array(

						array(
							'single_blog_custom'       => '',
							'parallax'                 => '0',
							'fullscreen'               => '0',
							'sidebar'                  => '',
							'second_sidebar'           => '',
							'sticky_sidebar'           => '0',
							'share_position'           => '',
							'share_float_style'        => '',
							'show_share_counter'       => '0',
							'show_view_counter'        => '0',
							'show_featured'            => '0',
							'show_post_meta'           => '0',
							'show_post_author'         => '0',
							'show_post_author_image'   => '0',
							'show_post_date'           => '0',
							'post_date_format'         => '',
							'post_date_format_custom'  => '',
							'show_post_category'       => '0',
							'show_post_reading_time'   => '0',
							'post_reading_time_wpm'    => '',
							'show_zoom_button'         => '0',
							'zoom_button_out_step'     => '1',
							'zoom_button_in_step'      => '1',
							'show_post_tag'            => '0',
							'show_prev_next_post'      => '0',
							'show_popup_post'          => '0',
							'number_popup_post'        => '1',
							'show_author_box'          => '0',
							'show_post_related'        => '0',
							'show_inline_post_related' => '0',
						),
					),
					'override_image_size'        => '0',
					'image_override'             =>
					array(

						array(
							'single_post_thumbnail_size' => '',
							'single_post_gallery_size'   => '',
						),
					),
					'trending_post'              => '0',
					'trending_post_position'     => '',
					'trending_post_label'        => '',
					'sponsored_post'             => '0',
					'sponsored_post_label'       => '',
					'sponsored_post_name'        => '',
					'sponsored_post_url'         => '',
					'sponsored_post_logo_enable' => '0',
					'sponsored_post_logo'        => '',
					'sponsored_post_desc'        => '',
				),
			),
		),
		'china-says-us-increasing-military-activity-directed-at-it' =>
		array(
			'title'          => 'China says US increasing military activity directed at it',
			'content'        => 'post1.txt',
			'featured_image' => 'militarynews5',
			'post_type'      => 'post',
			'taxonomy'       =>
			array(
				'category' => 'defense,news,politic',
				'post_tag' => 'air-force,flashpoint,marine-corps,off-duty,submarine',
			),
			'metabox'        =>
			array(
				'jnews_primary_category' =>
				array(
					'id' => '{{category:news:id}}',
				),
				'jnews_single_post'      =>
				array(
					'source_name'                => '',
					'source_url'                 => '',
					'via_name'                   => '',
					'via_url'                    => '',
					'override_template'          => '0',
					'override'                   =>
					array(

						array(
							'single_blog_custom'       => '',
							'parallax'                 => '0',
							'fullscreen'               => '0',
							'sidebar'                  => '',
							'second_sidebar'           => '',
							'sticky_sidebar'           => '0',
							'share_position'           => '',
							'share_float_style'        => '',
							'show_share_counter'       => '0',
							'show_view_counter'        => '0',
							'show_featured'            => '0',
							'show_post_meta'           => '0',
							'show_post_author'         => '0',
							'show_post_author_image'   => '0',
							'show_post_date'           => '0',
							'post_date_format'         => '',
							'post_date_format_custom'  => '',
							'show_post_category'       => '0',
							'show_post_reading_time'   => '0',
							'post_reading_time_wpm'    => '',
							'show_zoom_button'         => '0',
							'zoom_button_out_step'     => '1',
							'zoom_button_in_step'      => '1',
							'show_post_tag'            => '0',
							'show_prev_next_post'      => '0',
							'show_popup_post'          => '0',
							'number_popup_post'        => '1',
							'show_author_box'          => '0',
							'show_post_related'        => '0',
							'show_inline_post_related' => '0',
						),
					),
					'override_image_size'        => '0',
					'image_override'             =>
					array(

						array(
							'single_post_thumbnail_size' => '',
							'single_post_gallery_size'   => '',
						),
					),
					'trending_post'              => '0',
					'trending_post_position'     => '',
					'trending_post_label'        => '',
					'sponsored_post'             => '0',
					'sponsored_post_label'       => '',
					'sponsored_post_name'        => '',
					'sponsored_post_url'         => '',
					'sponsored_post_logo_enable' => '0',
					'sponsored_post_logo'        => '',
					'sponsored_post_desc'        => '',
				),
			),
		),
		'vice-president-harris-to-give-naval-academy-commissioning-address' =>
		array(
			'title'          => 'Vice President Harris to give Naval Academy commissioning address',
			'content'        => 'post2.txt',
			'featured_image' => 'militarynews2',
			'post_type'      => 'post',
			'taxonomy'       =>
			array(
				'category' => 'defense,opinion,politic,training',
				'post_tag' => 'air-force,army,congress,flashpoint,navy,off-duty',
			),
			'metabox'        =>
			array(
				'jnews_primary_category' =>
				array(
					'id' => '{{category:opinion:id}}',
				),
				'jnews_single_post'      =>
				array(
					'source_name'                => '',
					'source_url'                 => '',
					'via_name'                   => '',
					'via_url'                    => '',
					'override_template'          => '0',
					'override'                   =>
					array(

						array(
							'single_blog_custom'       => '',
							'parallax'                 => '0',
							'fullscreen'               => '0',
							'sidebar'                  => '',
							'second_sidebar'           => '',
							'sticky_sidebar'           => '0',
							'share_position'           => '',
							'share_float_style'        => '',
							'show_share_counter'       => '0',
							'show_view_counter'        => '0',
							'show_featured'            => '0',
							'show_post_meta'           => '0',
							'show_post_author'         => '0',
							'show_post_author_image'   => '0',
							'show_post_date'           => '0',
							'post_date_format'         => '',
							'post_date_format_custom'  => '',
							'show_post_category'       => '0',
							'show_post_reading_time'   => '0',
							'post_reading_time_wpm'    => '',
							'show_zoom_button'         => '0',
							'zoom_button_out_step'     => '1',
							'zoom_button_in_step'      => '1',
							'show_post_tag'            => '0',
							'show_prev_next_post'      => '0',
							'show_popup_post'          => '0',
							'number_popup_post'        => '1',
							'show_author_box'          => '0',
							'show_post_related'        => '0',
							'show_inline_post_related' => '0',
						),
					),
					'override_image_size'        => '0',
					'image_override'             =>
					array(

						array(
							'single_post_thumbnail_size' => '',
							'single_post_gallery_size'   => '',
						),
					),
					'trending_post'              => '0',
					'trending_post_position'     => '',
					'trending_post_label'        => '',
					'sponsored_post'             => '0',
					'sponsored_post_label'       => '',
					'sponsored_post_name'        => '',
					'sponsored_post_url'         => '',
					'sponsored_post_logo_enable' => '0',
					'sponsored_post_logo'        => '',
					'sponsored_post_desc'        => '',
				),
			),
		),
		'wisconsin-national-guard-soldier-friend-charged-in-capitol-attack' =>
		array(
			'title'          => 'Wisconsin National Guard soldier, friend charged in Capitol attack',
			'content'        => 'post1.txt',
			'featured_image' => 'militarynews1',
			'post_type'      => 'post',
			'taxonomy'       =>
			array(
				'category' => 'education,opinion,veteran',
				'post_tag' => 'flashpoint,marine-corps,off-duty,pentagon,submarine',
			),
			'metabox'        =>
			array(
				'jnews_primary_category' =>
				array(
					'id' => '{{category:veteran:id}}',
				),
				'jnews_single_post'      =>
				array(
					'source_name'                => '',
					'source_url'                 => '',
					'via_name'                   => '',
					'via_url'                    => '',
					'override_template'          => '0',
					'override'                   =>
					array(

						array(
							'single_blog_custom'       => '',
							'parallax'                 => '0',
							'fullscreen'               => '0',
							'sidebar'                  => '',
							'second_sidebar'           => '',
							'sticky_sidebar'           => '0',
							'share_position'           => '',
							'share_float_style'        => '',
							'show_share_counter'       => '0',
							'show_view_counter'        => '0',
							'show_featured'            => '0',
							'show_post_meta'           => '0',
							'show_post_author'         => '0',
							'show_post_author_image'   => '0',
							'show_post_date'           => '0',
							'post_date_format'         => '',
							'post_date_format_custom'  => '',
							'show_post_category'       => '0',
							'show_post_reading_time'   => '0',
							'post_reading_time_wpm'    => '',
							'show_zoom_button'         => '0',
							'zoom_button_out_step'     => '1',
							'zoom_button_in_step'      => '1',
							'show_post_tag'            => '0',
							'show_prev_next_post'      => '0',
							'show_popup_post'          => '0',
							'number_popup_post'        => '1',
							'show_author_box'          => '0',
							'show_post_related'        => '0',
							'show_inline_post_related' => '0',
						),
					),
					'override_image_size'        => '0',
					'image_override'             =>
					array(

						array(
							'single_post_thumbnail_size' => '',
							'single_post_gallery_size'   => '',
						),
					),
					'trending_post'              => '0',
					'trending_post_position'     => '',
					'trending_post_label'        => '',
					'sponsored_post'             => '0',
					'sponsored_post_label'       => '',
					'sponsored_post_name'        => '',
					'sponsored_post_url'         => '',
					'sponsored_post_logo_enable' => '0',
					'sponsored_post_logo'        => '',
					'sponsored_post_desc'        => '',
				),
			),
		),
		'defense-secretary-austin-calls-for-new-vision-for-american-defense' =>
		array(
			'title'          => 'Defense Secretary Austin calls for ‘new vision’ for American defense',
			'content'        => 'post2.txt',
			'featured_image' => 'militarynews2',
			'post_type'      => 'post',
			'taxonomy'       =>
			array(
				'category' => 'defense,news,politic',
				'post_tag' => 'air-force,army,marine-corps,navy,special-forces,submarine',
			),
			'metabox'        =>
			array(
				'jnews_primary_category' =>
				array(
					'id' => '{{category:defense:id}}',
				),
				'jnews_single_post'      =>
				array(
					'source_name'                => '',
					'source_url'                 => '',
					'via_name'                   => '',
					'via_url'                    => '',
					'override_template'          => '0',
					'override'                   =>
					array(

						array(
							'single_blog_custom'       => '',
							'parallax'                 => '0',
							'fullscreen'               => '0',
							'sidebar'                  => '',
							'second_sidebar'           => '',
							'sticky_sidebar'           => '0',
							'share_position'           => '',
							'share_float_style'        => '',
							'show_share_counter'       => '0',
							'show_view_counter'        => '0',
							'show_featured'            => '0',
							'show_post_meta'           => '0',
							'show_post_author'         => '0',
							'show_post_author_image'   => '0',
							'show_post_date'           => '0',
							'post_date_format'         => '',
							'post_date_format_custom'  => '',
							'show_post_category'       => '0',
							'show_post_reading_time'   => '0',
							'post_reading_time_wpm'    => '',
							'show_zoom_button'         => '0',
							'zoom_button_out_step'     => '1',
							'zoom_button_in_step'      => '1',
							'show_post_tag'            => '0',
							'show_prev_next_post'      => '0',
							'show_popup_post'          => '0',
							'number_popup_post'        => '1',
							'show_author_box'          => '0',
							'show_post_related'        => '0',
							'show_inline_post_related' => '0',
						),
					),
					'override_image_size'        => '0',
					'image_override'             =>
					array(

						array(
							'single_post_thumbnail_size' => '',
							'single_post_gallery_size'   => '',
						),
					),
					'trending_post'              => '0',
					'trending_post_position'     => '',
					'trending_post_label'        => '',
					'sponsored_post'             => '0',
					'sponsored_post_label'       => '',
					'sponsored_post_name'        => '',
					'sponsored_post_url'         => '',
					'sponsored_post_logo_enable' => '0',
					'sponsored_post_logo'        => '',
					'sponsored_post_desc'        => '',
				),
			),
		),
		'a-new-battle-campaign-museum-fights-to-stay-at-fort-gordon' =>
		array(
			'title'          => 'A new battle campaign: Museum fights to stay at Fort Gordon',
			'content'        => 'post1.txt',
			'featured_image' => 'militarynews5',
			'post_type'      => 'post',
			'taxonomy'       =>
			array(
				'category' => 'education,news,politic',
				'post_tag' => 'air-force,flashpoint,marine-corps,navy,off-duty,submarine',
			),
			'metabox'        =>
			array(
				'jnews_primary_category' =>
				array(
					'id' => '{{category:news:id}}',
				),
				'jnews_single_post'      =>
				array(
					'source_name'                => '',
					'source_url'                 => '',
					'via_name'                   => '',
					'via_url'                    => '',
					'override_template'          => '0',
					'override'                   =>
					array(

						array(
							'single_blog_custom'       => '',
							'parallax'                 => '0',
							'fullscreen'               => '0',
							'sidebar'                  => '',
							'second_sidebar'           => '',
							'sticky_sidebar'           => '0',
							'share_position'           => '',
							'share_float_style'        => '',
							'show_share_counter'       => '0',
							'show_view_counter'        => '0',
							'show_featured'            => '0',
							'show_post_meta'           => '0',
							'show_post_author'         => '0',
							'show_post_author_image'   => '0',
							'show_post_date'           => '0',
							'post_date_format'         => '',
							'post_date_format_custom'  => '',
							'show_post_category'       => '0',
							'show_post_reading_time'   => '0',
							'post_reading_time_wpm'    => '',
							'show_zoom_button'         => '0',
							'zoom_button_out_step'     => '1',
							'zoom_button_in_step'      => '1',
							'show_post_tag'            => '0',
							'show_prev_next_post'      => '0',
							'show_popup_post'          => '0',
							'number_popup_post'        => '1',
							'show_author_box'          => '0',
							'show_post_related'        => '0',
							'show_inline_post_related' => '0',
						),
					),
					'override_image_size'        => '0',
					'image_override'             =>
					array(

						array(
							'single_post_thumbnail_size' => '',
							'single_post_gallery_size'   => '',
						),
					),
					'trending_post'              => '0',
					'trending_post_position'     => '',
					'trending_post_label'        => '',
					'sponsored_post'             => '0',
					'sponsored_post_label'       => '',
					'sponsored_post_name'        => '',
					'sponsored_post_url'         => '',
					'sponsored_post_logo_enable' => '0',
					'sponsored_post_logo'        => '',
					'sponsored_post_desc'        => '',
				),
			),
		),
		'president-biden-to-speak-at-coast-guard-academy-commencement' =>
		array(
			'title'          => 'President Biden to speak at Coast Guard Academy commencement',
			'content'        => 'post2.txt',
			'featured_image' => 'militarynews1',
			'post_type'      => 'post',
			'taxonomy'       =>
			array(
				'category' => 'defense,opinion',
				'post_tag' => 'congress,off-duty,pentagon,special-forces,submarine',
			),
			'metabox'        =>
			array(
				'jnews_primary_category' =>
				array(
					'id' => '{{category:defense:id}}',
				),
				'jnews_single_post'      =>
				array(
					'source_name'                => '',
					'source_url'                 => '',
					'via_name'                   => '',
					'via_url'                    => '',
					'override_template'          => '0',
					'override'                   =>
					array(

						array(
							'single_blog_custom'       => '',
							'parallax'                 => '0',
							'fullscreen'               => '0',
							'sidebar'                  => '',
							'second_sidebar'           => '',
							'sticky_sidebar'           => '0',
							'share_position'           => '',
							'share_float_style'        => '',
							'show_share_counter'       => '0',
							'show_view_counter'        => '0',
							'show_featured'            => '0',
							'show_post_meta'           => '0',
							'show_post_author'         => '0',
							'show_post_author_image'   => '0',
							'show_post_date'           => '0',
							'post_date_format'         => '',
							'post_date_format_custom'  => '',
							'show_post_category'       => '0',
							'show_post_reading_time'   => '0',
							'post_reading_time_wpm'    => '',
							'show_zoom_button'         => '0',
							'zoom_button_out_step'     => '1',
							'zoom_button_in_step'      => '1',
							'show_post_tag'            => '0',
							'show_prev_next_post'      => '0',
							'show_popup_post'          => '0',
							'number_popup_post'        => '1',
							'show_author_box'          => '0',
							'show_post_related'        => '0',
							'show_inline_post_related' => '0',
						),
					),
					'override_image_size'        => '0',
					'image_override'             =>
					array(

						array(
							'single_post_thumbnail_size' => '',
							'single_post_gallery_size'   => '',
						),
					),
					'trending_post'              => '0',
					'trending_post_position'     => '',
					'trending_post_label'        => '',
					'sponsored_post'             => '0',
					'sponsored_post_label'       => '',
					'sponsored_post_name'        => '',
					'sponsored_post_url'         => '',
					'sponsored_post_logo_enable' => '0',
					'sponsored_post_logo'        => '',
					'sponsored_post_desc'        => '',
				),
			),
		),
		'heres-us-military-dogs-that-are-specially-trained-for-combat' =>
		array(
			'title'          => 'Here\'s US Military dogs that are specially trained for combat',
			'content'        => 'post1.txt',
			'featured_image' => 'militarynews3',
			'post_type'      => 'post',
			'taxonomy'       =>
			array(
				'category' => 'operation,training',
				'post_tag' => 'air-force,army,congress,flashpoint',
			),
			'metabox'        =>
			array(
				'jnews_primary_category' =>
				array(
					'id' => '{{category:training:id}}',
				),
				'jnews_single_post'      =>
				array(
					'source_name'                => '',
					'source_url'                 => '',
					'via_name'                   => '',
					'via_url'                    => '',
					'override_template'          => '0',
					'override'                   =>
					array(

						array(
							'single_blog_custom'       => '',
							'parallax'                 => '0',
							'fullscreen'               => '0',
							'sidebar'                  => '',
							'second_sidebar'           => '',
							'sticky_sidebar'           => '0',
							'share_position'           => '',
							'share_float_style'        => '',
							'show_share_counter'       => '0',
							'show_view_counter'        => '0',
							'show_featured'            => '0',
							'show_post_meta'           => '0',
							'show_post_author'         => '0',
							'show_post_author_image'   => '0',
							'show_post_date'           => '0',
							'post_date_format'         => '',
							'post_date_format_custom'  => '',
							'show_post_category'       => '0',
							'show_post_reading_time'   => '0',
							'post_reading_time_wpm'    => '',
							'show_zoom_button'         => '0',
							'zoom_button_out_step'     => '1',
							'zoom_button_in_step'      => '1',
							'show_post_tag'            => '0',
							'show_prev_next_post'      => '0',
							'show_popup_post'          => '0',
							'number_popup_post'        => '1',
							'show_author_box'          => '0',
							'show_post_related'        => '0',
							'show_inline_post_related' => '0',
						),
					),
					'override_image_size'        => '0',
					'image_override'             =>
					array(

						array(
							'single_post_thumbnail_size' => '',
							'single_post_gallery_size'   => '',
						),
					),
					'trending_post'              => '0',
					'trending_post_position'     => '',
					'trending_post_label'        => '',
					'sponsored_post'             => '0',
					'sponsored_post_label'       => '',
					'sponsored_post_name'        => '',
					'sponsored_post_url'         => '',
					'sponsored_post_logo_enable' => '0',
					'sponsored_post_logo'        => '',
					'sponsored_post_desc'        => '',
				),
			),
		),
		'this-week-in-congress-military-leaders-storm-the-internet' =>
		array(
			'title'          => 'This week in Congress: Military leaders storm the internet',
			'content'        => 'post2.txt',
			'featured_image' => 'militarynews7',
			'post_type'      => 'post',
			'taxonomy'       =>
			array(
				'category' => 'news,politic,veteran',
				'post_tag' => 'army,congress,marine-corps,navy,pentagon,special-forces',
			),
			'metabox'        =>
			array(
				'jnews_primary_category' =>
				array(
					'id' => '{{category:news:id}}',
				),
				'jnews_single_post'      =>
				array(
					'source_name'                => '',
					'source_url'                 => '',
					'via_name'                   => '',
					'via_url'                    => '',
					'override_template'          => '0',
					'override'                   =>
					array(

						array(
							'single_blog_custom'       => '',
							'parallax'                 => '0',
							'fullscreen'               => '0',
							'sidebar'                  => '',
							'second_sidebar'           => '',
							'sticky_sidebar'           => '0',
							'share_position'           => '',
							'share_float_style'        => '',
							'show_share_counter'       => '0',
							'show_view_counter'        => '0',
							'show_featured'            => '0',
							'show_post_meta'           => '0',
							'show_post_author'         => '0',
							'show_post_author_image'   => '0',
							'show_post_date'           => '0',
							'post_date_format'         => '',
							'post_date_format_custom'  => '',
							'show_post_category'       => '0',
							'show_post_reading_time'   => '0',
							'post_reading_time_wpm'    => '',
							'show_zoom_button'         => '0',
							'zoom_button_out_step'     => '1',
							'zoom_button_in_step'      => '1',
							'show_post_tag'            => '0',
							'show_prev_next_post'      => '0',
							'show_popup_post'          => '0',
							'number_popup_post'        => '1',
							'show_author_box'          => '0',
							'show_post_related'        => '0',
							'show_inline_post_related' => '0',
						),
					),
					'override_image_size'        => '0',
					'image_override'             =>
					array(

						array(
							'single_post_thumbnail_size' => '',
							'single_post_gallery_size'   => '',
						),
					),
					'trending_post'              => '0',
					'trending_post_position'     => '',
					'trending_post_label'        => '',
					'sponsored_post'             => '0',
					'sponsored_post_label'       => '',
					'sponsored_post_name'        => '',
					'sponsored_post_url'         => '',
					'sponsored_post_logo_enable' => '0',
					'sponsored_post_logo'        => '',
					'sponsored_post_desc'        => '',
				),
			),
		),
		'who-should-lead-the-pentagons-information-operations-efforts' =>
		array(
			'title'          => 'Who should lead the Pentagon’s information operations efforts?',
			'content'        => 'post1.txt',
			'featured_image' => 'militarynews4',
			'post_type'      => 'post',
			'taxonomy'       =>
			array(
				'category' => 'education,news,training',
				'post_tag' => 'air-force,congress,marine-corps,pentagon,special-forces',
			),
			'metabox'        =>
			array(
				'jnews_primary_category' =>
				array(
					'id' => '{{category:news:id}}',
				),
				'jnews_single_post'      =>
				array(
					'source_name'                => '',
					'source_url'                 => '',
					'via_name'                   => '',
					'via_url'                    => '',
					'override_template'          => '0',
					'override'                   =>
					array(

						array(
							'single_blog_custom'       => '',
							'parallax'                 => '0',
							'fullscreen'               => '0',
							'sidebar'                  => '',
							'second_sidebar'           => '',
							'sticky_sidebar'           => '0',
							'share_position'           => '',
							'share_float_style'        => '',
							'show_share_counter'       => '0',
							'show_view_counter'        => '0',
							'show_featured'            => '0',
							'show_post_meta'           => '0',
							'show_post_author'         => '0',
							'show_post_author_image'   => '0',
							'show_post_date'           => '0',
							'post_date_format'         => '',
							'post_date_format_custom'  => '',
							'show_post_category'       => '0',
							'show_post_reading_time'   => '0',
							'post_reading_time_wpm'    => '',
							'show_zoom_button'         => '0',
							'zoom_button_out_step'     => '1',
							'zoom_button_in_step'      => '1',
							'show_post_tag'            => '0',
							'show_prev_next_post'      => '0',
							'show_popup_post'          => '0',
							'number_popup_post'        => '1',
							'show_author_box'          => '0',
							'show_post_related'        => '0',
							'show_inline_post_related' => '0',
						),
					),
					'override_image_size'        => '0',
					'image_override'             =>
					array(

						array(
							'single_post_thumbnail_size' => '',
							'single_post_gallery_size'   => '',
						),
					),
					'trending_post'              => '0',
					'trending_post_position'     => '',
					'trending_post_label'        => '',
					'sponsored_post'             => '0',
					'sponsored_post_label'       => '',
					'sponsored_post_name'        => '',
					'sponsored_post_url'         => '',
					'sponsored_post_logo_enable' => '0',
					'sponsored_post_logo'        => '',
					'sponsored_post_desc'        => '',
				),
			),
		),
		'army-approves-rapid-development-of-tactical-space-layer' =>
		array(
			'title'          => 'Army approves rapid development of Tactical Space Layer',
			'content'        => 'post2.txt',
			'featured_image' => 'militarynews7',
			'post_type'      => 'post',
			'taxonomy'       =>
			array(
				'category' => 'defense,operation,opinion,politic',
				'post_tag' => 'army,congress,flashpoint,pentagon,special-forces',
			),
			'metabox'        =>
			array(
				'jnews_primary_category' =>
				array(
					'id' => '{{category:defense:id}}',
				),
				'jnews_single_post'      =>
				array(
					'source_name'                => '',
					'source_url'                 => '',
					'via_name'                   => '',
					'via_url'                    => '',
					'override_template'          => '0',
					'override'                   =>
					array(

						array(
							'single_blog_custom'       => '',
							'parallax'                 => '0',
							'fullscreen'               => '0',
							'sidebar'                  => '',
							'second_sidebar'           => '',
							'sticky_sidebar'           => '0',
							'share_position'           => '',
							'share_float_style'        => '',
							'show_share_counter'       => '0',
							'show_view_counter'        => '0',
							'show_featured'            => '0',
							'show_post_meta'           => '0',
							'show_post_author'         => '0',
							'show_post_author_image'   => '0',
							'show_post_date'           => '0',
							'post_date_format'         => '',
							'post_date_format_custom'  => '',
							'show_post_category'       => '0',
							'show_post_reading_time'   => '0',
							'post_reading_time_wpm'    => '',
							'show_zoom_button'         => '0',
							'zoom_button_out_step'     => '1',
							'zoom_button_in_step'      => '1',
							'show_post_tag'            => '0',
							'show_prev_next_post'      => '0',
							'show_popup_post'          => '0',
							'number_popup_post'        => '1',
							'show_author_box'          => '0',
							'show_post_related'        => '0',
							'show_inline_post_related' => '0',
						),
					),
					'override_image_size'        => '0',
					'image_override'             =>
					array(

						array(
							'single_post_thumbnail_size' => '',
							'single_post_gallery_size'   => '',
						),
					),
					'trending_post'              => '0',
					'trending_post_position'     => '',
					'trending_post_label'        => '',
					'sponsored_post'             => '0',
					'sponsored_post_label'       => '',
					'sponsored_post_name'        => '',
					'sponsored_post_url'         => '',
					'sponsored_post_logo_enable' => '0',
					'sponsored_post_logo'        => '',
					'sponsored_post_desc'        => '',
				),
			),
		),
		'38-photographs-capturing-the-end-of-world-war-ii' =>
		array(
			'title'          => '38 Photographs Capturing the End of World War II',
			'content'        => 'post1.txt',
			'featured_image' => 'militarynews1',
			'post_type'      => 'post',
			'taxonomy'       =>
			array(
				'category' => 'education,operation,veteran',
				'post_tag' => 'air-force,army,navy,off-duty,submarine',
			),
			'metabox'        =>
			array(
				'jnews_primary_category' =>
				array(
					'id' => '{{category:education:id}}',
				),
				'jnews_single_post'      =>
				array(
					'source_name'                => '',
					'source_url'                 => '',
					'via_name'                   => '',
					'via_url'                    => '',
					'override_template'          => '0',
					'override'                   =>
					array(

						array(
							'single_blog_custom'       => '',
							'parallax'                 => '0',
							'fullscreen'               => '0',
							'sidebar'                  => '',
							'second_sidebar'           => '',
							'sticky_sidebar'           => '0',
							'share_position'           => '',
							'share_float_style'        => '',
							'show_share_counter'       => '0',
							'show_view_counter'        => '0',
							'show_featured'            => '0',
							'show_post_meta'           => '0',
							'show_post_author'         => '0',
							'show_post_author_image'   => '0',
							'show_post_date'           => '0',
							'post_date_format'         => '',
							'post_date_format_custom'  => '',
							'show_post_category'       => '0',
							'show_post_reading_time'   => '0',
							'post_reading_time_wpm'    => '',
							'show_zoom_button'         => '0',
							'zoom_button_out_step'     => '1',
							'zoom_button_in_step'      => '1',
							'show_post_tag'            => '0',
							'show_prev_next_post'      => '0',
							'show_popup_post'          => '0',
							'number_popup_post'        => '1',
							'show_author_box'          => '0',
							'show_post_related'        => '0',
							'show_inline_post_related' => '0',
						),
					),
					'override_image_size'        => '0',
					'image_override'             =>
					array(

						array(
							'single_post_thumbnail_size' => '',
							'single_post_gallery_size'   => '',
						),
					),
					'trending_post'              => '0',
					'trending_post_position'     => '',
					'trending_post_label'        => '',
					'sponsored_post'             => '0',
					'sponsored_post_label'       => '',
					'sponsored_post_name'        => '',
					'sponsored_post_url'         => '',
					'sponsored_post_logo_enable' => '0',
					'sponsored_post_logo'        => '',
					'sponsored_post_desc'        => '',
				),
			),
		),
		'miracle-the-b-21-bomber-is-on-time-and-on-budget' =>
		array(
			'title'          => 'Miracle: The B-21 Bomber is On Time and On Budget',
			'content'        => 'post2.txt',
			'featured_image' => 'militarynews2',
			'post_type'      => 'post',
			'taxonomy'       =>
			array(
				'category' => 'defense,news,veteran',
				'post_tag' => 'army,congress,flashpoint,pentagon,special-forces',
			),
			'metabox'        =>
			array(
				'jnews_primary_category' =>
				array(
					'id' => '{{category:news:id}}',
				),
				'jnews_single_post'      =>
				array(
					'source_name'                => '',
					'source_url'                 => '',
					'via_name'                   => '',
					'via_url'                    => '',
					'override_template'          => '0',
					'override'                   =>
					array(

						array(
							'single_blog_custom'       => '',
							'parallax'                 => '0',
							'fullscreen'               => '0',
							'sidebar'                  => '',
							'second_sidebar'           => '',
							'sticky_sidebar'           => '0',
							'share_position'           => '',
							'share_float_style'        => '',
							'show_share_counter'       => '0',
							'show_view_counter'        => '0',
							'show_featured'            => '0',
							'show_post_meta'           => '0',
							'show_post_author'         => '0',
							'show_post_author_image'   => '0',
							'show_post_date'           => '0',
							'post_date_format'         => '',
							'post_date_format_custom'  => '',
							'show_post_category'       => '0',
							'show_post_reading_time'   => '0',
							'post_reading_time_wpm'    => '',
							'show_zoom_button'         => '0',
							'zoom_button_out_step'     => '1',
							'zoom_button_in_step'      => '1',
							'show_post_tag'            => '0',
							'show_prev_next_post'      => '0',
							'show_popup_post'          => '0',
							'number_popup_post'        => '1',
							'show_author_box'          => '0',
							'show_post_related'        => '0',
							'show_inline_post_related' => '0',
						),
					),
					'override_image_size'        => '0',
					'image_override'             =>
					array(

						array(
							'single_post_thumbnail_size' => '',
							'single_post_gallery_size'   => '',
						),
					),
					'trending_post'              => '0',
					'trending_post_position'     => '',
					'trending_post_label'        => '',
					'sponsored_post'             => '0',
					'sponsored_post_label'       => '',
					'sponsored_post_name'        => '',
					'sponsored_post_url'         => '',
					'sponsored_post_logo_enable' => '0',
					'sponsored_post_logo'        => '',
					'sponsored_post_desc'        => '',
				),
			),
		),
		'russian-aircraft-visits-leave-air-units-stretched' =>
		array(
			'title'          => 'Russian Aircraft Visits Leave Air Units Stretched',
			'content'        => 'post1.txt',
			'featured_image' => 'militarynews7',
			'post_type'      => 'post',
			'taxonomy'       =>
			array(
				'category' => 'education,operation,politic,veteran',
				'post_tag' => 'air-force,army,congress,flashpoint',
			),
			'metabox'        =>
			array(
				'jnews_primary_category' =>
				array(
					'id' => '{{category:politic:id}}',
				),
				'jnews_single_post'      =>
				array(
					'source_name'                => '',
					'source_url'                 => '',
					'via_name'                   => '',
					'via_url'                    => '',
					'override_template'          => '0',
					'override'                   =>
					array(

						array(
							'single_blog_custom'       => '',
							'parallax'                 => '0',
							'fullscreen'               => '0',
							'sidebar'                  => '',
							'second_sidebar'           => '',
							'sticky_sidebar'           => '0',
							'share_position'           => '',
							'share_float_style'        => '',
							'show_share_counter'       => '0',
							'show_view_counter'        => '0',
							'show_featured'            => '0',
							'show_post_meta'           => '0',
							'show_post_author'         => '0',
							'show_post_author_image'   => '0',
							'show_post_date'           => '0',
							'post_date_format'         => '',
							'post_date_format_custom'  => '',
							'show_post_category'       => '0',
							'show_post_reading_time'   => '0',
							'post_reading_time_wpm'    => '',
							'show_zoom_button'         => '0',
							'zoom_button_out_step'     => '1',
							'zoom_button_in_step'      => '1',
							'show_post_tag'            => '0',
							'show_prev_next_post'      => '0',
							'show_popup_post'          => '0',
							'number_popup_post'        => '1',
							'show_author_box'          => '0',
							'show_post_related'        => '0',
							'show_inline_post_related' => '0',
						),
					),
					'override_image_size'        => '0',
					'image_override'             =>
					array(

						array(
							'single_post_thumbnail_size' => '',
							'single_post_gallery_size'   => '',
						),
					),
					'trending_post'              => '0',
					'trending_post_position'     => '',
					'trending_post_label'        => '',
					'sponsored_post'             => '0',
					'sponsored_post_label'       => '',
					'sponsored_post_name'        => '',
					'sponsored_post_url'         => '',
					'sponsored_post_logo_enable' => '0',
					'sponsored_post_logo'        => '',
					'sponsored_post_desc'        => '',
				),
			),
		),
		'indonesian-submarine-nanggala-ii-with-33-aboard-missing' =>
		array(
			'title'          => 'Indonesian Submarine Nanggala II with 33 Aboard Missing',
			'content'        => 'post2.txt',
			'featured_image' => 'militarynews4',
			'post_type'      => 'post',
			'taxonomy'       =>
			array(
				'category' => 'news,operation,opinion,politic',
				'post_tag' => 'marine-corps,navy,off-duty,special-forces,submarine',
			),
			'metabox'        =>
			array(
				'jnews_primary_category' =>
				array(
					'id' => '{{category:opinion:id}}',
				),
				'jnews_single_post'      =>
				array(
					'source_name'                => '',
					'source_url'                 => '',
					'via_name'                   => '',
					'via_url'                    => '',
					'override_template'          => '0',
					'override'                   =>
					array(

						array(
							'single_blog_custom'       => '',
							'parallax'                 => '0',
							'fullscreen'               => '0',
							'sidebar'                  => '',
							'second_sidebar'           => '',
							'sticky_sidebar'           => '0',
							'share_position'           => '',
							'share_float_style'        => '',
							'show_share_counter'       => '0',
							'show_view_counter'        => '0',
							'show_featured'            => '0',
							'show_post_meta'           => '0',
							'show_post_author'         => '0',
							'show_post_author_image'   => '0',
							'show_post_date'           => '0',
							'post_date_format'         => '',
							'post_date_format_custom'  => '',
							'show_post_category'       => '0',
							'show_post_reading_time'   => '0',
							'post_reading_time_wpm'    => '',
							'show_zoom_button'         => '0',
							'zoom_button_out_step'     => '1',
							'zoom_button_in_step'      => '1',
							'show_post_tag'            => '0',
							'show_prev_next_post'      => '0',
							'show_popup_post'          => '0',
							'number_popup_post'        => '1',
							'show_author_box'          => '0',
							'show_post_related'        => '0',
							'show_inline_post_related' => '0',
						),
					),
					'override_image_size'        => '0',
					'image_override'             =>
					array(

						array(
							'single_post_thumbnail_size' => '',
							'single_post_gallery_size'   => '',
						),
					),
					'trending_post'              => '0',
					'trending_post_position'     => '',
					'trending_post_label'        => '',
					'sponsored_post'             => '0',
					'sponsored_post_label'       => '',
					'sponsored_post_name'        => '',
					'sponsored_post_url'         => '',
					'sponsored_post_logo_enable' => '0',
					'sponsored_post_logo'        => '',
					'sponsored_post_desc'        => '',
				),
			),
		),
		'with-f-35-expulsion-turkeys-top-weapons-buyer-prioritizes-tf-x-work' =>
		array(
			'title'          => 'With F-35 expulsion, Turkey’s top weapons buyer prioritizes TF-X work',
			'content'        => 'post1.txt',
			'featured_image' => 'militarynews5',
			'post_type'      => 'post',
			'taxonomy'       =>
			array(
				'category' => 'defense,news,opinion,training',
				'post_tag' => 'flashpoint,marine-corps,navy,off-duty,special-forces',
			),
			'metabox'        =>
			array(
				'jnews_primary_category' =>
				array(
					'id' => '{{category:news:id}}',
				),
				'jnews_single_post'      =>
				array(
					'source_name'                => '',
					'source_url'                 => '',
					'via_name'                   => '',
					'via_url'                    => '',
					'override_template'          => '0',
					'override'                   =>
					array(

						array(
							'single_blog_custom'       => '',
							'parallax'                 => '0',
							'fullscreen'               => '0',
							'sidebar'                  => '',
							'second_sidebar'           => '',
							'sticky_sidebar'           => '0',
							'share_position'           => '',
							'share_float_style'        => '',
							'show_share_counter'       => '0',
							'show_view_counter'        => '0',
							'show_featured'            => '0',
							'show_post_meta'           => '0',
							'show_post_author'         => '0',
							'show_post_author_image'   => '0',
							'show_post_date'           => '0',
							'post_date_format'         => '',
							'post_date_format_custom'  => '',
							'show_post_category'       => '0',
							'show_post_reading_time'   => '0',
							'post_reading_time_wpm'    => '',
							'show_zoom_button'         => '0',
							'zoom_button_out_step'     => '1',
							'zoom_button_in_step'      => '1',
							'show_post_tag'            => '0',
							'show_prev_next_post'      => '0',
							'show_popup_post'          => '0',
							'number_popup_post'        => '1',
							'show_author_box'          => '0',
							'show_post_related'        => '0',
							'show_inline_post_related' => '0',
						),
					),
					'override_image_size'        => '0',
					'image_override'             =>
					array(

						array(
							'single_post_thumbnail_size' => '',
							'single_post_gallery_size'   => '',
						),
					),
					'trending_post'              => '0',
					'trending_post_position'     => '',
					'trending_post_label'        => '',
					'sponsored_post'             => '0',
					'sponsored_post_label'       => '',
					'sponsored_post_name'        => '',
					'sponsored_post_url'         => '',
					'sponsored_post_logo_enable' => '0',
					'sponsored_post_logo'        => '',
					'sponsored_post_desc'        => '',
				),
			),
		),
		'biden-will-keep-loosened-rules-on-land-mines'     =>
		array(
			'title'          => 'Biden Will Keep Loosened Rules on Land Mines',
			'content'        => 'post2.txt',
			'featured_image' => 'militarynews3',
			'post_type'      => 'post',
			'taxonomy'       =>
			array(
				'category' => 'education,operation,politic,veteran',
				'post_tag' => 'air-force,congress,flashpoint,off-duty,special-forces,submarine',
			),
			'metabox'        =>
			array(
				'jnews_primary_category' =>
				array(
					'id' => '{{category:politic:id}}',
				),
				'jnews_single_post'      =>
				array(
					'source_name'                => '',
					'source_url'                 => '',
					'via_name'                   => '',
					'via_url'                    => '',
					'override_template'          => '0',
					'override'                   =>
					array(

						array(
							'single_blog_custom'       => '',
							'parallax'                 => '0',
							'fullscreen'               => '0',
							'sidebar'                  => '',
							'second_sidebar'           => '',
							'sticky_sidebar'           => '0',
							'share_position'           => '',
							'share_float_style'        => '',
							'show_share_counter'       => '0',
							'show_view_counter'        => '0',
							'show_featured'            => '0',
							'show_post_meta'           => '0',
							'show_post_author'         => '0',
							'show_post_author_image'   => '0',
							'show_post_date'           => '0',
							'post_date_format'         => '',
							'post_date_format_custom'  => '',
							'show_post_category'       => '0',
							'show_post_reading_time'   => '0',
							'post_reading_time_wpm'    => '',
							'show_zoom_button'         => '0',
							'zoom_button_out_step'     => '1',
							'zoom_button_in_step'      => '1',
							'show_post_tag'            => '0',
							'show_prev_next_post'      => '0',
							'show_popup_post'          => '0',
							'number_popup_post'        => '1',
							'show_author_box'          => '0',
							'show_post_related'        => '0',
							'show_inline_post_related' => '0',
						),
					),
					'override_image_size'        => '0',
					'image_override'             =>
					array(

						array(
							'single_post_thumbnail_size' => '',
							'single_post_gallery_size'   => '',
						),
					),
					'trending_post'              => '0',
					'trending_post_position'     => '',
					'trending_post_label'        => '',
					'sponsored_post'             => '0',
					'sponsored_post_label'       => '',
					'sponsored_post_name'        => '',
					'sponsored_post_url'         => '',
					'sponsored_post_logo_enable' => '0',
					'sponsored_post_logo'        => '',
					'sponsored_post_desc'        => '',
				),
			),
		),
		'navy-destroyer-drones-hit-ship-at-250-miles'      =>
		array(
			'title'          => 'Navy Destroyer, Drones Hit Ship at 250 Miles',
			'content'        => 'post1.txt',
			'featured_image' => 'militarynews7',
			'post_type'      => 'post',
			'taxonomy'       =>
			array(
				'category' => 'defense,opinion,politic,training',
				'post_tag' => 'air-force,congress,flashpoint,off-duty,special-forces,submarine',
			),
			'metabox'        =>
			array(
				'jnews_primary_category' =>
				array(
					'id' => '{{category:defense:id}}',
				),
				'jnews_single_post'      =>
				array(
					'source_name'                => '',
					'source_url'                 => '',
					'via_name'                   => '',
					'via_url'                    => '',
					'override_template'          => '0',
					'override'                   =>
					array(

						array(
							'single_blog_custom'       => '',
							'parallax'                 => '0',
							'fullscreen'               => '0',
							'sidebar'                  => '',
							'second_sidebar'           => '',
							'sticky_sidebar'           => '0',
							'share_position'           => '',
							'share_float_style'        => '',
							'show_share_counter'       => '0',
							'show_view_counter'        => '0',
							'show_featured'            => '0',
							'show_post_meta'           => '0',
							'show_post_author'         => '0',
							'show_post_author_image'   => '0',
							'show_post_date'           => '0',
							'post_date_format'         => '',
							'post_date_format_custom'  => '',
							'show_post_category'       => '0',
							'show_post_reading_time'   => '0',
							'post_reading_time_wpm'    => '',
							'show_zoom_button'         => '0',
							'zoom_button_out_step'     => '1',
							'zoom_button_in_step'      => '1',
							'show_post_tag'            => '0',
							'show_prev_next_post'      => '0',
							'show_popup_post'          => '0',
							'number_popup_post'        => '1',
							'show_author_box'          => '0',
							'show_post_related'        => '0',
							'show_inline_post_related' => '0',
						),
					),
					'override_image_size'        => '0',
					'image_override'             =>
					array(

						array(
							'single_post_thumbnail_size' => '',
							'single_post_gallery_size'   => '',
						),
					),
					'trending_post'              => '0',
					'trending_post_position'     => '',
					'trending_post_label'        => '',
					'sponsored_post'             => '0',
					'sponsored_post_label'       => '',
					'sponsored_post_name'        => '',
					'sponsored_post_url'         => '',
					'sponsored_post_logo_enable' => '0',
					'sponsored_post_logo'        => '',
					'sponsored_post_desc'        => '',
				),
			),
		),
		'south-korea-just-unveiled-its-new-fighter-jet'    =>
		array(
			'title'          => 'South Korea Just Unveiled Its New Fighter Jet',
			'content'        => 'post2.txt',
			'featured_image' => 'militarynews1',
			'post_type'      => 'post',
			'taxonomy'       =>
			array(
				'category' => 'news,opinion,politic,training',
				'post_tag' => 'air-force,congress,flashpoint,off-duty,special-forces,submarine',
			),
			'metabox'        =>
			array(
				'jnews_primary_category' =>
				array(
					'id' => '{{category:news:id}}',
				),
				'jnews_single_post'      =>
				array(
					'source_name'                => '',
					'source_url'                 => '',
					'via_name'                   => '',
					'via_url'                    => '',
					'override_template'          => '0',
					'override'                   =>
					array(

						array(
							'single_blog_custom'       => '',
							'parallax'                 => '0',
							'fullscreen'               => '0',
							'sidebar'                  => '',
							'second_sidebar'           => '',
							'sticky_sidebar'           => '0',
							'share_position'           => '',
							'share_float_style'        => '',
							'show_share_counter'       => '0',
							'show_view_counter'        => '0',
							'show_featured'            => '0',
							'show_post_meta'           => '0',
							'show_post_author'         => '0',
							'show_post_author_image'   => '0',
							'show_post_date'           => '0',
							'post_date_format'         => '',
							'post_date_format_custom'  => '',
							'show_post_category'       => '0',
							'show_post_reading_time'   => '0',
							'post_reading_time_wpm'    => '',
							'show_zoom_button'         => '0',
							'zoom_button_out_step'     => '1',
							'zoom_button_in_step'      => '1',
							'show_post_tag'            => '0',
							'show_prev_next_post'      => '0',
							'show_popup_post'          => '0',
							'number_popup_post'        => '1',
							'show_author_box'          => '0',
							'show_post_related'        => '0',
							'show_inline_post_related' => '0',
						),
					),
					'override_image_size'        => '0',
					'image_override'             =>
					array(

						array(
							'single_post_thumbnail_size' => '',
							'single_post_gallery_size'   => '',
						),
					),
					'trending_post'              => '0',
					'trending_post_position'     => '',
					'trending_post_label'        => '',
					'sponsored_post'             => '0',
					'sponsored_post_label'       => '',
					'sponsored_post_name'        => '',
					'sponsored_post_url'         => '',
					'sponsored_post_logo_enable' => '0',
					'sponsored_post_logo'        => '',
					'sponsored_post_desc'        => '',
				),
			),
		),
		'home'                                             =>
		array(
			'title'     => 'Home',
			'content'   => 'home1.txt',
			'post_type' => 'page',
			'metabox'   =>
			array(
				'_wp_page_template'          => 'template-builder.php',
				'_wpb_shortcodes_custom_css' => '.vc_custom_1620378921910{margin-bottom: 30px !important;border-bottom-width: 1px !important;border-bottom-color: #eeeeee !important;border-bottom-style: solid !important;}.vc_custom_1620379558245{padding-top: 30px !important;padding-bottom: 20px !important;background-color: #111111 !important;}.vc_custom_1620379750027{padding-top: 40px !important;}.vc_custom_1620378864363{margin-bottom: 0px !important;padding-top: 15px !important;padding-bottom: 15px !important;}.vc_custom_1620633971453{margin-bottom: 0px !important;}.vc_custom_1620641710930{margin-bottom: 0px !important;}',
				'_wpb_post_custom_css'       => '.jeg_content {padding-top: 0;}',
				'_elementor_data'            => 'home1.json',
				'_elementor_edit_mode'       => 'builder',
				'_elementor_page_settings'   =>
				array(
					'custom_css' => '.jeg_content {padding-top: 0;}',
				),
			),
		),
	),
	'menu_location'   =>
	array(
		'footer'          =>
		array(
			'title'    => 'Footer',
			'location' => 'footer_navigation',
		),
		'main-navigation' =>
		array(
			'title'    => 'Main Navigation',
			'location' => 'mobile_navigation',
		),
	),
	'menu'            =>
	array(
		'purchase-now' =>
		array(
			'location'       => 'footer',
			'menu-item-data' =>
			array(
				'menu-item-title'  => 'Purchase Now',
				'menu-item-type'   => 'custom',
				'menu-item-object' => 'custom',
				'menu-item-status' => 'publish',
				'menu-item-url'    => 'https://themeforest.net/item/jnews-wordpress-blog-news-magazine-newspaper-theme/20566392?ref=jegtheme&license=regular&open_purchase_for_item_id=20566392',
			),
		),
		'features'     =>
		array(
			'location'       => 'footer',
			'menu-item-data' =>
			array(
				'menu-item-title'  => 'Features',
				'menu-item-type'   => 'custom',
				'menu-item-object' => 'custom',
				'menu-item-status' => 'publish',
				'menu-item-url'    => 'https://jnews.io/',
			),
		),
		'demos'        =>
		array(
			'location'       => 'footer',
			'menu-item-data' =>
			array(
				'menu-item-title'  => 'Demos',
				'menu-item-type'   => 'custom',
				'menu-item-object' => 'custom',
				'menu-item-status' => 'publish',
				'menu-item-url'    => 'https://jnews.io/#demo',
			),
			'metabox'        =>
			array(
				'menu_item_jnews_mega_menu' =>
				array(
					'type'              => 'disable',
					'custom_mega'       => '0',
					'category'          => '1',
					'number'            => '9',
					'override_item_row' => '0',
					'item_row'          => '3',
					'trending_tag'      => '',
					'child_mega'        => 'disable',
					'enable_icon'       => '0',
					'enable_icon_image' => '0',
				),
			),
		),
		'support'      =>
		array(
			'location'       => 'footer',
			'menu-item-data' =>
			array(
				'menu-item-title'  => 'Support',
				'menu-item-type'   => 'custom',
				'menu-item-object' => 'custom',
				'menu-item-status' => 'publish',
				'menu-item-url'    => 'https://support.jegtheme.com/',
			),
			'metabox'        =>
			array(
				'menu_item_jnews_mega_menu' =>
				array(
					'type'              => 'disable',
					'custom_mega'       => '0',
					'category'          => '1',
					'number'            => '9',
					'override_item_row' => '0',
					'item_row'          => '3',
					'trending_tag'      => '',
					'child_mega'        => 'disable',
					'enable_icon'       => '0',
					'enable_icon_image' => '0',
				),
			),
		),
		'home-menu'    =>
		array(
			'location'       => 'main-navigation',
			'menu-item-data' =>
			array(
				'menu-item-title'     => 'Home',
				'menu-item-type'      => 'post_type',
				'menu-item-object'    => 'page',
				'menu-item-status'    => 'publish',
				'menu-item-object-id' => '{{post:home:id}}',
			),
		),
		'news'         =>
		array(
			'location'       => 'main-navigation',
			'menu-item-data' =>
			array(
				'menu-item-title'     => 'News',
				'menu-item-type'      => 'taxonomy',
				'menu-item-object'    => 'category',
				'menu-item-status'    => 'publish',
				'menu-item-object-id' => '{{category:news:id}}',
			),
		),
		'defense'      =>
		array(
			'location'       => 'main-navigation',
			'menu-item-data' =>
			array(
				'menu-item-title'     => 'Defense',
				'menu-item-type'      => 'taxonomy',
				'menu-item-object'    => 'category',
				'menu-item-status'    => 'publish',
				'menu-item-object-id' => '{{category:defense:id}}',
			),
		),
		'opinion'      =>
		array(
			'location'       => 'main-navigation',
			'menu-item-data' =>
			array(
				'menu-item-title'     => 'Opinion',
				'menu-item-type'      => 'taxonomy',
				'menu-item-object'    => 'category',
				'menu-item-status'    => 'publish',
				'menu-item-object-id' => '{{category:opinion:id}}',
			),
		),
		'politic'      =>
		array(
			'location'       => 'main-navigation',
			'menu-item-data' =>
			array(
				'menu-item-title'     => 'Politic',
				'menu-item-type'      => 'taxonomy',
				'menu-item-object'    => 'category',
				'menu-item-status'    => 'publish',
				'menu-item-object-id' => '{{category:politic:id}}',
			),
		),
		'operation'    =>
		array(
			'location'       => 'main-navigation',
			'menu-item-data' =>
			array(
				'menu-item-title'     => 'Operation',
				'menu-item-type'      => 'taxonomy',
				'menu-item-object'    => 'category',
				'menu-item-status'    => 'publish',
				'menu-item-object-id' => '{{category:operation:id}}',
			),
		),
		'veteran'      =>
		array(
			'location'       => 'main-navigation',
			'menu-item-data' =>
			array(
				'menu-item-title'     => 'Veteran',
				'menu-item-type'      => 'taxonomy',
				'menu-item-object'    => 'category',
				'menu-item-status'    => 'publish',
				'menu-item-object-id' => '{{category:veteran:id}}',
			),
		),
		'education'    =>
		array(
			'location'       => 'main-navigation',
			'menu-item-data' =>
			array(
				'menu-item-title'     => 'Education',
				'menu-item-type'      => 'taxonomy',
				'menu-item-object'    => 'category',
				'menu-item-status'    => 'publish',
				'menu-item-object-id' => '{{category:education:id}}',
			),
		),
		'training'     =>
		array(
			'location'       => 'main-navigation',
			'menu-item-data' =>
			array(
				'menu-item-title'     => 'Training',
				'menu-item-type'      => 'taxonomy',
				'menu-item-object'    => 'category',
				'menu-item-status'    => 'publish',
				'menu-item-object-id' => '{{category:training:id}}',
			),
		),
	),
	'widget_position' =>
	array(),
	'widget'          =>
	array(
		'widget.json',
	),
	'customizer'      =>
	array(
		'style.json',
	),
	'plugin'          =>
	array(
		'classic-editor',
		'elementor',
		'jnews-breadcrumb',
		'jnews-essential',
		'jnews-importer',
		'jnews-social-share',
		'jnews-view-counter',
		'jnews-weather',
		'js_composer',
		'mailchimp-for-wp',
	),
);
