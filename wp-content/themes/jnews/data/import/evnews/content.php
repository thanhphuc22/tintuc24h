<?php
return array(
	'image'             =>
	array(
		'logo'        => 'https://jegtheme.com/asset/jnews/demo/evnews/logo-1.png',
		'logo2x'      => 'https://jegtheme.com/asset/jnews/demo/evnews/logo@2x-1.png',
		'favicon'     => 'https://jegtheme.com/asset/jnews/demo/default/favicon.png',

		'evnews1'     => 'https://jegtheme.com/asset/jnews/demo/motorcycle/moto1.jpg',
		'evnews2'     => 'https://jegtheme.com/asset/jnews/demo/motorcycle/moto2.jpg',
		'evnews3'     => 'https://jegtheme.com/asset/jnews/demo/motorcycle/moto3.jpg',
		'evnews4'     => 'https://jegtheme.com/asset/jnews/demo/motorcycle/moto4.jpg',
		'evnews5'     => 'https://jegtheme.com/asset/jnews/demo/motorcycle/moto5.jpg',
		'evnews6'     => 'https://jegtheme.com/asset/jnews/demo/motorcycle/moto6.jpg',
		'evnews7'     => 'https://jegtheme.com/asset/jnews/demo/motorcycle/moto7.jpg',
		'evnews8'     => 'https://jegtheme.com/asset/jnews/demo/motorcycle/moto8.jpg',
		'evnews9'     => 'https://jegtheme.com/asset/jnews/demo/motorcycle/moto9.jpg',

		'ad_1456x180' => 'https://jegtheme.com/asset/jnews/demo/evnews/ads.jpg',
		'ad_300x250'  => 'https://jegtheme.com/asset/jnews/demo/evnews/ads-300x250-1.jpg',
		'ad_sidebar'  => 'https://jegtheme.com/asset/jnews/demo/evnews/ads-sidebar.jpg',
	),
	'taxonomy'          =>
	array(
		'category' =>
		array(
			'e-bikes'       =>
			array(
				'title'       => 'E-Bikes',
				'description' => 'You can add some category description here.',
			),
			'electric-cars' =>
			array(
				'title'       => 'E-Cars',
				'description' => 'You can add some category description here.',
			),
			'guides'        =>
			array(
				'title'       => 'Guides',
				'description' => 'You can add some category description here.',
			),
			'hybrids'       =>
			array(
				'title'       => 'Hybrids',
				'description' => 'You can add some category description here.',
			),
			'news'          =>
			array(
				'title'       => 'News',
				'description' => 'You can add some category description here.',
			),
			'technology'    =>
			array(
				'title'       => 'Technology',
				'description' => 'You can add some category description here.',
			),
		),
		'post_tag' =>
		array(
			'battery'     =>
			array(
				'title' => 'Battery',
			),
			'charger'     =>
			array(
				'title' => 'Charger',
			),
			'cybertruck'  =>
			array(
				'title' => 'Cybertruck',
			),
			'e-scooter'   =>
			array(
				'title' => 'E-Scooter',
			),
			'electric'    =>
			array(
				'title' => 'Electric',
			),
			'elon-musk'   =>
			array(
				'title' => 'Elon Musk',
			),
			'mercedes'    =>
			array(
				'title' => 'Mercedes',
			),
			'mini-cooper' =>
			array(
				'title' => 'Mini Cooper',
			),
			'tesla'       =>
			array(
				'title' => 'Tesla',
			),
		),
	),
	'post'              =>
	array(
		'mercedes-rules-out-eqs-coupe-and-convertible-due-to-lack-of-demand' =>
		array(
			'title'          => 'Mercedes Rules Out EQS Coupe And Convertible Due To Lack Of Demand',
			'content'        => 'post1.txt',
			'featured_image' => 'evnews9',
			'post_type'      => 'post',
			'taxonomy'       =>
			array(
				'category' => 'electric-cars,news,technology',
				'post_tag' => 'battery,cybertruck,e-scooter,mercedes',
			),
			'metabox'        =>
			array(
				'post_subtitle'          => 'A budget tells us what we can\'t afford, but it doesn\'t keep us from buying it.',
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
				'jnews_primary_category' =>
				array(
					'id' => '{{category:hybrids:id}}',
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
							'template'                 => '1',
							'single_blog_custom'       => '',
							'parallax'                 => '1',
							'fullscreen'               => '1',
							'layout'                   => 'right-sidebar',
							'sidebar'                  => 'default-sidebar',
							'second_sidebar'           => 'default-sidebar',
							'sticky_sidebar'           => '1',
							'share_position'           => 'top',
							'share_float_style'        => 'share-monocrhome',
							'show_share_counter'       => '1',
							'show_view_counter'        => '1',
							'show_featured'            => '1',
							'show_post_meta'           => '1',
							'show_post_author'         => '1',
							'show_post_author_image'   => '1',
							'show_post_date'           => '1',
							'post_date_format'         => 'default',
							'post_date_format_custom'  => 'Y/m/d',
							'show_post_category'       => '1',
							'show_post_reading_time'   => '0',
							'post_reading_time_wpm'    => '300',
							'show_zoom_button'         => '0',
							'zoom_button_out_step'     => '2',
							'zoom_button_in_step'      => '3',
							'show_post_tag'            => '1',
							'show_prev_next_post'      => '1',
							'show_popup_post'          => '1',
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
							'single_post_thumbnail_size' => 'crop-500',
							'single_post_gallery_size'   => 'crop-500',
						),
					),
					'trending_post'              => '0',
					'trending_post_position'     => 'meta',
					'trending_post_label'        => 'Trending',
					'sponsored_post'             => '0',
					'sponsored_post_label'       => 'Sponsored by',
					'sponsored_post_name'        => '',
					'sponsored_post_url'         => '',
					'sponsored_post_logo_enable' => '0',
					'sponsored_post_logo'        => '',
					'sponsored_post_desc'        => '',
				),
			),
		),
		'apparently-today-is-unofficially-elon-musk-day-who-knew' =>
		array(
			'title'          => 'Apparently, Today Is Unofficially Elon Musk Day: Who Knew?',
			'content'        => 'post2.txt',
			'featured_image' => 'evnews4',
			'post_type'      => 'post',
			'taxonomy'       =>
			array(
				'category' => 'guides,news,technology',
				'post_tag' => 'charger,cybertruck,e-scooter,mini-cooper',
			),
			'metabox'        =>
			array(
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
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
							'template'                 => '1',
							'single_blog_custom'       => '',
							'parallax'                 => '1',
							'fullscreen'               => '1',
							'layout'                   => 'right-sidebar',
							'sidebar'                  => 'default-sidebar',
							'second_sidebar'           => 'default-sidebar',
							'sticky_sidebar'           => '1',
							'share_position'           => 'top',
							'share_float_style'        => 'share-monocrhome',
							'show_share_counter'       => '1',
							'show_view_counter'        => '1',
							'show_featured'            => '1',
							'show_post_meta'           => '1',
							'show_post_author'         => '1',
							'show_post_author_image'   => '1',
							'show_post_date'           => '1',
							'post_date_format'         => 'default',
							'post_date_format_custom'  => 'Y/m/d',
							'show_post_category'       => '1',
							'show_post_reading_time'   => '0',
							'post_reading_time_wpm'    => '300',
							'show_zoom_button'         => '0',
							'zoom_button_out_step'     => '2',
							'zoom_button_in_step'      => '3',
							'show_post_tag'            => '1',
							'show_prev_next_post'      => '1',
							'show_popup_post'          => '1',
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
							'single_post_thumbnail_size' => 'crop-500',
							'single_post_gallery_size'   => 'crop-500',
						),
					),
					'trending_post'              => '0',
					'trending_post_position'     => 'meta',
					'trending_post_label'        => 'Trending',
					'sponsored_post'             => '0',
					'sponsored_post_label'       => 'Sponsored by',
					'sponsored_post_name'        => '',
					'sponsored_post_url'         => '',
					'sponsored_post_logo_enable' => '0',
					'sponsored_post_logo'        => '',
					'sponsored_post_desc'        => '',
				),
			),
		),
		'audi-introduces-the-q4-e-tron-as-its-next-generation-cheaper-ev' =>
		array(
			'title'          => 'Audi Introduces The Q4 E-tron As Its Next Generation, Cheaper EV',
			'content'        => 'post1.txt',
			'featured_image' => 'evnews2',
			'post_type'      => 'post',
			'taxonomy'       =>
			array(
				'category' => 'e-bikes,guides,hybrids,technology',
				'post_tag' => 'charger,cybertruck,electric,mercedes',
			),
			'metabox'        =>
			array(
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
				'jnews_primary_category' =>
				array(
					'id' => '{{category:e-bikes:id}}',
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
							'template'                 => '1',
							'single_blog_custom'       => '',
							'parallax'                 => '1',
							'fullscreen'               => '1',
							'layout'                   => 'right-sidebar',
							'sidebar'                  => 'default-sidebar',
							'second_sidebar'           => 'default-sidebar',
							'sticky_sidebar'           => '1',
							'share_position'           => 'top',
							'share_float_style'        => 'share-monocrhome',
							'show_share_counter'       => '1',
							'show_view_counter'        => '1',
							'show_featured'            => '1',
							'show_post_meta'           => '1',
							'show_post_author'         => '1',
							'show_post_author_image'   => '1',
							'show_post_date'           => '1',
							'post_date_format'         => 'default',
							'post_date_format_custom'  => 'Y/m/d',
							'show_post_category'       => '1',
							'show_post_reading_time'   => '0',
							'post_reading_time_wpm'    => '300',
							'show_zoom_button'         => '0',
							'zoom_button_out_step'     => '2',
							'zoom_button_in_step'      => '3',
							'show_post_tag'            => '1',
							'show_prev_next_post'      => '1',
							'show_popup_post'          => '1',
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
							'single_post_thumbnail_size' => 'crop-500',
							'single_post_gallery_size'   => 'crop-500',
						),
					),
					'trending_post'              => '0',
					'trending_post_position'     => 'meta',
					'trending_post_label'        => 'Trending',
					'sponsored_post'             => '0',
					'sponsored_post_label'       => 'Sponsored by',
					'sponsored_post_name'        => '',
					'sponsored_post_url'         => '',
					'sponsored_post_logo_enable' => '0',
					'sponsored_post_logo'        => '',
					'sponsored_post_desc'        => '',
				),
			),
		),
		'chevy-takes-on-fords-electric-f-150-with-new-ev-silverado' =>
		array(
			'title'          => 'Chevy takes on Ford\'s electric F-150 with new EV Silverado',
			'content'        => 'post2.txt',
			'featured_image' => 'evnews4',
			'post_type'      => 'post',
			'taxonomy'       =>
			array(
				'category' => 'guides,hybrids,news,technology',
				'post_tag' => 'charger,cybertruck,elon-musk,mercedes',
			),
			'metabox'        =>
			array(
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
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
							'template'                 => '1',
							'single_blog_custom'       => '',
							'parallax'                 => '1',
							'fullscreen'               => '1',
							'layout'                   => 'right-sidebar',
							'sidebar'                  => 'default-sidebar',
							'second_sidebar'           => 'default-sidebar',
							'sticky_sidebar'           => '1',
							'share_position'           => 'top',
							'share_float_style'        => 'share-monocrhome',
							'show_share_counter'       => '1',
							'show_view_counter'        => '1',
							'show_featured'            => '1',
							'show_post_meta'           => '1',
							'show_post_author'         => '1',
							'show_post_author_image'   => '1',
							'show_post_date'           => '1',
							'post_date_format'         => 'default',
							'post_date_format_custom'  => 'Y/m/d',
							'show_post_category'       => '1',
							'show_post_reading_time'   => '0',
							'post_reading_time_wpm'    => '300',
							'show_zoom_button'         => '0',
							'zoom_button_out_step'     => '2',
							'zoom_button_in_step'      => '3',
							'show_post_tag'            => '1',
							'show_prev_next_post'      => '1',
							'show_popup_post'          => '1',
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
							'single_post_thumbnail_size' => 'crop-500',
							'single_post_gallery_size'   => 'crop-500',
						),
					),
					'trending_post'              => '0',
					'trending_post_position'     => 'meta',
					'trending_post_label'        => 'Trending',
					'sponsored_post'             => '0',
					'sponsored_post_label'       => 'Sponsored by',
					'sponsored_post_name'        => '',
					'sponsored_post_url'         => '',
					'sponsored_post_logo_enable' => '0',
					'sponsored_post_logo'        => '',
					'sponsored_post_desc'        => '',
				),
			),
		),
		'juiced-scorpion-x-electric-moped-launched-today-with-great-offers' =>
		array(
			'title'          => 'Juiced Scorpion X electric moped launched today with great offers',
			'content'        => 'post1.txt',
			'featured_image' => 'evnews6',
			'post_type'      => 'post',
			'taxonomy'       =>
			array(
				'category' => 'e-bikes,hybrids,technology',
				'post_tag' => 'cybertruck,e-scooter,mercedes,tesla',
			),
			'metabox'        =>
			array(
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
				'jnews_primary_category' =>
				array(
					'id' => '{{category:e-bikes:id}}',
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
							'template'                 => '1',
							'single_blog_custom'       => '',
							'parallax'                 => '1',
							'fullscreen'               => '1',
							'layout'                   => 'right-sidebar',
							'sidebar'                  => 'default-sidebar',
							'second_sidebar'           => 'default-sidebar',
							'sticky_sidebar'           => '1',
							'share_position'           => 'top',
							'share_float_style'        => 'share-monocrhome',
							'show_share_counter'       => '1',
							'show_view_counter'        => '1',
							'show_featured'            => '1',
							'show_post_meta'           => '1',
							'show_post_author'         => '1',
							'show_post_author_image'   => '1',
							'show_post_date'           => '1',
							'post_date_format'         => 'default',
							'post_date_format_custom'  => 'Y/m/d',
							'show_post_category'       => '1',
							'show_post_reading_time'   => '0',
							'post_reading_time_wpm'    => '300',
							'show_zoom_button'         => '0',
							'zoom_button_out_step'     => '2',
							'zoom_button_in_step'      => '3',
							'show_post_tag'            => '1',
							'show_prev_next_post'      => '1',
							'show_popup_post'          => '1',
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
							'single_post_thumbnail_size' => 'crop-500',
							'single_post_gallery_size'   => 'crop-500',
						),
					),
					'trending_post'              => '0',
					'trending_post_position'     => 'meta',
					'trending_post_label'        => 'Trending',
					'sponsored_post'             => '0',
					'sponsored_post_label'       => 'Sponsored by',
					'sponsored_post_name'        => '',
					'sponsored_post_url'         => '',
					'sponsored_post_logo_enable' => '0',
					'sponsored_post_logo'        => '',
					'sponsored_post_desc'        => '',
				),
			),
		),
		'nhtsa-will-investigate-fatal-tesla-crash-with-no-driver-in-texas' =>
		array(
			'title'          => 'NHTSA Will Investigate Fatal Tesla Crash With No Driver In Texas',
			'content'        => 'post2.txt',
			'featured_image' => 'evnews3',
			'post_type'      => 'post',
			'taxonomy'       =>
			array(
				'category' => 'e-bikes,technology',
				'post_tag' => 'charger,e-scooter,electric,mercedes',
			),
			'metabox'        =>
			array(
				'post_subtitle'          => 'The present is theirs; the future, for which I really worked, is mine.',
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
				'jnews_primary_category' =>
				array(
					'id' => '{{category:electric-cars:id}}',
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
							'template'                 => '1',
							'single_blog_custom'       => '',
							'parallax'                 => '1',
							'fullscreen'               => '1',
							'layout'                   => 'right-sidebar',
							'sidebar'                  => 'default-sidebar',
							'second_sidebar'           => 'default-sidebar',
							'sticky_sidebar'           => '1',
							'share_position'           => 'top',
							'share_float_style'        => 'share-monocrhome',
							'show_share_counter'       => '1',
							'show_view_counter'        => '1',
							'show_featured'            => '1',
							'show_post_meta'           => '1',
							'show_post_author'         => '1',
							'show_post_author_image'   => '1',
							'show_post_date'           => '1',
							'post_date_format'         => 'default',
							'post_date_format_custom'  => 'Y/m/d',
							'show_post_category'       => '1',
							'show_post_reading_time'   => '0',
							'post_reading_time_wpm'    => '300',
							'show_zoom_button'         => '0',
							'zoom_button_out_step'     => '2',
							'zoom_button_in_step'      => '3',
							'show_post_tag'            => '1',
							'show_prev_next_post'      => '1',
							'show_popup_post'          => '1',
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
							'single_post_thumbnail_size' => 'crop-500',
							'single_post_gallery_size'   => 'crop-500',
						),
					),
					'trending_post'              => '0',
					'trending_post_position'     => 'meta',
					'trending_post_label'        => 'Trending',
					'sponsored_post'             => '0',
					'sponsored_post_label'       => 'Sponsored by',
					'sponsored_post_name'        => '',
					'sponsored_post_url'         => '',
					'sponsored_post_logo_enable' => '0',
					'sponsored_post_logo'        => '',
					'sponsored_post_desc'        => '',
				),
			),
		),
		'rivian-electric-van-begins-delivering-amazon-packages-in-oklahoma' =>
		array(
			'title'          => 'Rivian Electric Van Begins Delivering Amazon Packages In Oklahoma',
			'content'        => 'post1.txt',
			'featured_image' => 'evnews2',
			'post_type'      => 'post',
			'taxonomy'       =>
			array(
				'category' => 'news,technology',
				'post_tag' => 'e-scooter,elon-musk,mini-cooper,tesla',
			),
			'metabox'        =>
			array(
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
				'jnews_primary_category' =>
				array(
					'id' => '{{category:guides:id}}',
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
							'template'                 => '1',
							'single_blog_custom'       => '',
							'parallax'                 => '1',
							'fullscreen'               => '1',
							'layout'                   => 'right-sidebar',
							'sidebar'                  => 'default-sidebar',
							'second_sidebar'           => 'default-sidebar',
							'sticky_sidebar'           => '1',
							'share_position'           => 'top',
							'share_float_style'        => 'share-monocrhome',
							'show_share_counter'       => '1',
							'show_view_counter'        => '1',
							'show_featured'            => '1',
							'show_post_meta'           => '1',
							'show_post_author'         => '1',
							'show_post_author_image'   => '1',
							'show_post_date'           => '1',
							'post_date_format'         => 'default',
							'post_date_format_custom'  => 'Y/m/d',
							'show_post_category'       => '1',
							'show_post_reading_time'   => '0',
							'post_reading_time_wpm'    => '300',
							'show_zoom_button'         => '0',
							'zoom_button_out_step'     => '2',
							'zoom_button_in_step'      => '3',
							'show_post_tag'            => '1',
							'show_prev_next_post'      => '1',
							'show_popup_post'          => '1',
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
							'single_post_thumbnail_size' => 'crop-500',
							'single_post_gallery_size'   => 'crop-500',
						),
					),
					'trending_post'              => '0',
					'trending_post_position'     => 'meta',
					'trending_post_label'        => 'Trending',
					'sponsored_post'             => '0',
					'sponsored_post_label'       => 'Sponsored by',
					'sponsored_post_name'        => '',
					'sponsored_post_url'         => '',
					'sponsored_post_logo_enable' => '0',
					'sponsored_post_logo'        => '',
					'sponsored_post_desc'        => '',
				),
			),
		),
		'heres-why-ai-will-be-crucial-for-future-us-electrical-grid-reliability' =>
		array(
			'title'          => 'Here’s why AI will be crucial for future US electrical grid reliability',
			'content'        => 'post2.txt',
			'featured_image' => 'evnews6',
			'post_type'      => 'post',
			'taxonomy'       =>
			array(
				'category' => 'e-bikes,electric-cars,technology',
				'post_tag' => 'battery,e-scooter,mini-cooper,tesla',
			),
			'metabox'        =>
			array(
				'post_subtitle'          => 'Happiness is a direction, not a place.',
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
				'jnews_primary_category' =>
				array(
					'id' => '{{category:electric-cars:id}}',
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
							'template'                 => '1',
							'single_blog_custom'       => '',
							'parallax'                 => '1',
							'fullscreen'               => '1',
							'layout'                   => 'right-sidebar',
							'sidebar'                  => 'default-sidebar',
							'second_sidebar'           => 'default-sidebar',
							'sticky_sidebar'           => '1',
							'share_position'           => 'top',
							'share_float_style'        => 'share-monocrhome',
							'show_share_counter'       => '1',
							'show_view_counter'        => '1',
							'show_featured'            => '1',
							'show_post_meta'           => '1',
							'show_post_author'         => '1',
							'show_post_author_image'   => '1',
							'show_post_date'           => '1',
							'post_date_format'         => 'default',
							'post_date_format_custom'  => 'Y/m/d',
							'show_post_category'       => '1',
							'show_post_reading_time'   => '0',
							'post_reading_time_wpm'    => '300',
							'show_zoom_button'         => '0',
							'zoom_button_out_step'     => '2',
							'zoom_button_in_step'      => '3',
							'show_post_tag'            => '1',
							'show_prev_next_post'      => '1',
							'show_popup_post'          => '1',
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
							'single_post_thumbnail_size' => 'crop-500',
							'single_post_gallery_size'   => 'crop-500',
						),
					),
					'trending_post'              => '0',
					'trending_post_position'     => 'meta',
					'trending_post_label'        => 'Trending',
					'sponsored_post'             => '0',
					'sponsored_post_label'       => 'Sponsored by',
					'sponsored_post_name'        => '',
					'sponsored_post_url'         => '',
					'sponsored_post_logo_enable' => '0',
					'sponsored_post_logo'        => '',
					'sponsored_post_desc'        => '',
				),
			),
		),
		'hyundai-ioniq-5-dc-fast-charging-analysis-it-seems-impressive' =>
		array(
			'title'          => 'Hyundai Ioniq 5 DC Fast Charging Analysis: It Seems Impressive',
			'content'        => 'post1.txt',
			'featured_image' => 'evnews2',
			'post_type'      => 'post',
			'taxonomy'       =>
			array(
				'category' => 'e-bikes,guides,technology',
				'post_tag' => 'charger,cybertruck,electric,mercedes',
			),
			'metabox'        =>
			array(
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
				'jnews_primary_category' =>
				array(
					'id' => '{{category:e-bikes:id}}',
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
							'template'                 => '1',
							'single_blog_custom'       => '',
							'parallax'                 => '1',
							'fullscreen'               => '1',
							'layout'                   => 'right-sidebar',
							'sidebar'                  => 'default-sidebar',
							'second_sidebar'           => 'default-sidebar',
							'sticky_sidebar'           => '1',
							'share_position'           => 'top',
							'share_float_style'        => 'share-monocrhome',
							'show_share_counter'       => '1',
							'show_view_counter'        => '1',
							'show_featured'            => '1',
							'show_post_meta'           => '1',
							'show_post_author'         => '1',
							'show_post_author_image'   => '1',
							'show_post_date'           => '1',
							'post_date_format'         => 'default',
							'post_date_format_custom'  => 'Y/m/d',
							'show_post_category'       => '1',
							'show_post_reading_time'   => '0',
							'post_reading_time_wpm'    => '300',
							'show_zoom_button'         => '0',
							'zoom_button_out_step'     => '2',
							'zoom_button_in_step'      => '3',
							'show_post_tag'            => '1',
							'show_prev_next_post'      => '1',
							'show_popup_post'          => '1',
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
							'single_post_thumbnail_size' => 'crop-500',
							'single_post_gallery_size'   => 'crop-500',
						),
					),
					'trending_post'              => '0',
					'trending_post_position'     => 'meta',
					'trending_post_label'        => 'Trending',
					'sponsored_post'             => '0',
					'sponsored_post_label'       => 'Sponsored by',
					'sponsored_post_name'        => '',
					'sponsored_post_url'         => '',
					'sponsored_post_logo_enable' => '0',
					'sponsored_post_logo'        => '',
					'sponsored_post_desc'        => '',
				),
			),
		),
		'redmoto-xev-expected-to-launch-electric-motorcycle-lineup-soon' =>
		array(
			'title'          => 'RedMoto XEV Expected To Launch Electric Motorcycle Lineup Soon',
			'content'        => 'post2.txt',
			'featured_image' => 'evnews7',
			'post_type'      => 'post',
			'taxonomy'       =>
			array(
				'category' => 'hybrids,news,technology',
				'post_tag' => 'cybertruck,e-scooter,electric,tesla',
			),
			'metabox'        =>
			array(
				'post_subtitle'          => 'When the pandemic is going to be over',
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
				'jnews_primary_category' =>
				array(
					'id' => '{{category:hybrids:id}}',
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
							'template'                 => '1',
							'single_blog_custom'       => '',
							'parallax'                 => '1',
							'fullscreen'               => '1',
							'layout'                   => 'right-sidebar',
							'sidebar'                  => 'default-sidebar',
							'second_sidebar'           => 'default-sidebar',
							'sticky_sidebar'           => '1',
							'share_position'           => 'top',
							'share_float_style'        => 'share-monocrhome',
							'show_share_counter'       => '1',
							'show_view_counter'        => '1',
							'show_featured'            => '1',
							'show_post_meta'           => '1',
							'show_post_author'         => '1',
							'show_post_author_image'   => '1',
							'show_post_date'           => '1',
							'post_date_format'         => 'default',
							'post_date_format_custom'  => 'Y/m/d',
							'show_post_category'       => '1',
							'show_post_reading_time'   => '0',
							'post_reading_time_wpm'    => '300',
							'show_zoom_button'         => '0',
							'zoom_button_out_step'     => '2',
							'zoom_button_in_step'      => '3',
							'show_post_tag'            => '1',
							'show_prev_next_post'      => '1',
							'show_popup_post'          => '1',
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
							'single_post_thumbnail_size' => 'crop-500',
							'single_post_gallery_size'   => 'crop-500',
						),
					),
					'trending_post'              => '0',
					'trending_post_position'     => 'meta',
					'trending_post_label'        => 'Trending',
					'sponsored_post'             => '0',
					'sponsored_post_label'       => 'Sponsored by',
					'sponsored_post_name'        => '',
					'sponsored_post_url'         => '',
					'sponsored_post_logo_enable' => '0',
					'sponsored_post_logo'        => '',
					'sponsored_post_desc'        => '',
				),
			),
		),
		'tesla-semi-prototype-and-new-refreshed-model-x-spotted-on-test-track' =>
		array(
			'title'          => 'Tesla Semi prototype and new refreshed Model X spotted on test track',
			'content'        => 'post1.txt',
			'featured_image' => 'evnews2',
			'post_type'      => 'post',
			'taxonomy'       =>
			array(
				'category' => 'electric-cars,hybrids,technology',
				'post_tag' => 'charger,mercedes,mini-cooper,tesla',
			),
			'metabox'        =>
			array(
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
				'jnews_primary_category' =>
				array(
					'id' => '{{category:technology:id}}',
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
							'template'                 => '1',
							'single_blog_custom'       => '',
							'parallax'                 => '1',
							'fullscreen'               => '1',
							'layout'                   => 'right-sidebar',
							'sidebar'                  => 'default-sidebar',
							'second_sidebar'           => 'default-sidebar',
							'sticky_sidebar'           => '1',
							'share_position'           => 'top',
							'share_float_style'        => 'share-monocrhome',
							'show_share_counter'       => '1',
							'show_view_counter'        => '1',
							'show_featured'            => '1',
							'show_post_meta'           => '1',
							'show_post_author'         => '1',
							'show_post_author_image'   => '1',
							'show_post_date'           => '1',
							'post_date_format'         => 'default',
							'post_date_format_custom'  => 'Y/m/d',
							'show_post_category'       => '1',
							'show_post_reading_time'   => '0',
							'post_reading_time_wpm'    => '300',
							'show_zoom_button'         => '0',
							'zoom_button_out_step'     => '2',
							'zoom_button_in_step'      => '3',
							'show_post_tag'            => '1',
							'show_prev_next_post'      => '1',
							'show_popup_post'          => '1',
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
							'single_post_thumbnail_size' => 'crop-500',
							'single_post_gallery_size'   => 'crop-500',
						),
					),
					'trending_post'              => '0',
					'trending_post_position'     => 'meta',
					'trending_post_label'        => 'Trending',
					'sponsored_post'             => '0',
					'sponsored_post_label'       => 'Sponsored by',
					'sponsored_post_name'        => '',
					'sponsored_post_url'         => '',
					'sponsored_post_logo_enable' => '0',
					'sponsored_post_logo'        => '',
					'sponsored_post_desc'        => '',
				),
			),
		),
		'harley-davidson-livewire-electric-motorcycle-great-but-expensive' =>
		array(
			'title'          => 'Harley-Davidson LiveWire electric motorcycle: Great but expensive',
			'content'        => 'post2.txt',
			'featured_image' => 'evnews4',
			'post_type'      => 'post',
			'taxonomy'       =>
			array(
				'category' => 'e-bikes,guides,news,technology',
				'post_tag' => 'battery,e-scooter,elon-musk,mercedes',
			),
			'metabox'        =>
			array(
				'post_subtitle'          => 'The present is theirs; the future, for which I really worked, is mine.',
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
				'jnews_primary_category' =>
				array(
					'id' => '{{category:guides:id}}',
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
							'template'                 => '1',
							'single_blog_custom'       => '',
							'parallax'                 => '1',
							'fullscreen'               => '1',
							'layout'                   => 'right-sidebar',
							'sidebar'                  => 'default-sidebar',
							'second_sidebar'           => 'default-sidebar',
							'sticky_sidebar'           => '1',
							'share_position'           => 'top',
							'share_float_style'        => 'share-monocrhome',
							'show_share_counter'       => '1',
							'show_view_counter'        => '1',
							'show_featured'            => '1',
							'show_post_meta'           => '1',
							'show_post_author'         => '1',
							'show_post_author_image'   => '1',
							'show_post_date'           => '1',
							'post_date_format'         => 'default',
							'post_date_format_custom'  => 'Y/m/d',
							'show_post_category'       => '1',
							'show_post_reading_time'   => '0',
							'post_reading_time_wpm'    => '300',
							'show_zoom_button'         => '0',
							'zoom_button_out_step'     => '2',
							'zoom_button_in_step'      => '3',
							'show_post_tag'            => '1',
							'show_prev_next_post'      => '1',
							'show_popup_post'          => '1',
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
							'single_post_thumbnail_size' => 'crop-500',
							'single_post_gallery_size'   => 'crop-500',
						),
					),
					'trending_post'              => '0',
					'trending_post_position'     => 'meta',
					'trending_post_label'        => 'Trending',
					'sponsored_post'             => '0',
					'sponsored_post_label'       => 'Sponsored by',
					'sponsored_post_name'        => '',
					'sponsored_post_url'         => '',
					'sponsored_post_logo_enable' => '0',
					'sponsored_post_logo'        => '',
					'sponsored_post_desc'        => '',
				),
			),
		),
		'mercedes-benz-eqs-preview-redefining-the-luxury-car-as-all-electric' =>
		array(
			'title'          => 'Mercedes-Benz EQS preview: Redefining the luxury car as all-electric',
			'content'        => 'post1.txt',
			'featured_image' => 'evnews4',
			'post_type'      => 'post',
			'taxonomy'       =>
			array(
				'category' => 'e-bikes,electric-cars,news,technology',
				'post_tag' => 'charger,electric,mini-cooper,tesla',
			),
			'metabox'        =>
			array(
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
				'jnews_primary_category' =>
				array(
					'id' => '{{category:electric-cars:id}}',
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
							'template'                 => '1',
							'single_blog_custom'       => '',
							'parallax'                 => '1',
							'fullscreen'               => '1',
							'layout'                   => 'right-sidebar',
							'sidebar'                  => 'default-sidebar',
							'second_sidebar'           => 'default-sidebar',
							'sticky_sidebar'           => '1',
							'share_position'           => 'top',
							'share_float_style'        => 'share-monocrhome',
							'show_share_counter'       => '1',
							'show_view_counter'        => '1',
							'show_featured'            => '1',
							'show_post_meta'           => '1',
							'show_post_author'         => '1',
							'show_post_author_image'   => '1',
							'show_post_date'           => '1',
							'post_date_format'         => 'default',
							'post_date_format_custom'  => 'Y/m/d',
							'show_post_category'       => '1',
							'show_post_reading_time'   => '0',
							'post_reading_time_wpm'    => '300',
							'show_zoom_button'         => '0',
							'zoom_button_out_step'     => '2',
							'zoom_button_in_step'      => '3',
							'show_post_tag'            => '1',
							'show_prev_next_post'      => '1',
							'show_popup_post'          => '1',
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
							'single_post_thumbnail_size' => 'crop-500',
							'single_post_gallery_size'   => 'crop-500',
						),
					),
					'trending_post'              => '0',
					'trending_post_position'     => 'meta',
					'trending_post_label'        => 'Trending',
					'sponsored_post'             => '0',
					'sponsored_post_label'       => 'Sponsored by',
					'sponsored_post_name'        => '',
					'sponsored_post_url'         => '',
					'sponsored_post_logo_enable' => '0',
					'sponsored_post_logo'        => '',
					'sponsored_post_desc'        => '',
				),
			),
		),
		'2020-mini-cooper-se-first-test-i-wish-i-could-recommend-it' =>
		array(
			'title'          => '2020 Mini Cooper SE First Test: I Wish I Could Recommend It',
			'content'        => 'post2.txt',
			'featured_image' => 'evnews9',
			'post_type'      => 'post',
			'taxonomy'       =>
			array(
				'category' => 'electric-cars,hybrids,technology',
				'post_tag' => 'e-scooter,electric,elon-musk,mini-cooper',
			),
			'metabox'        =>
			array(
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
				'jnews_primary_category' =>
				array(
					'id' => '{{category:guides:id}}',
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
							'template'                 => '1',
							'single_blog_custom'       => '',
							'parallax'                 => '1',
							'fullscreen'               => '1',
							'layout'                   => 'right-sidebar',
							'sidebar'                  => 'default-sidebar',
							'second_sidebar'           => 'default-sidebar',
							'sticky_sidebar'           => '1',
							'share_position'           => 'top',
							'share_float_style'        => 'share-monocrhome',
							'show_share_counter'       => '1',
							'show_view_counter'        => '1',
							'show_featured'            => '1',
							'show_post_meta'           => '1',
							'show_post_author'         => '1',
							'show_post_author_image'   => '1',
							'show_post_date'           => '1',
							'post_date_format'         => 'default',
							'post_date_format_custom'  => 'Y/m/d',
							'show_post_category'       => '1',
							'show_post_reading_time'   => '0',
							'post_reading_time_wpm'    => '300',
							'show_zoom_button'         => '0',
							'zoom_button_out_step'     => '2',
							'zoom_button_in_step'      => '3',
							'show_post_tag'            => '1',
							'show_prev_next_post'      => '1',
							'show_popup_post'          => '1',
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
							'single_post_thumbnail_size' => 'crop-500',
							'single_post_gallery_size'   => 'crop-500',
						),
					),
					'trending_post'              => '0',
					'trending_post_position'     => 'meta',
					'trending_post_label'        => 'Trending',
					'sponsored_post'             => '0',
					'sponsored_post_label'       => 'Sponsored by',
					'sponsored_post_name'        => '',
					'sponsored_post_url'         => '',
					'sponsored_post_logo_enable' => '0',
					'sponsored_post_logo'        => '',
					'sponsored_post_desc'        => '',
				),
			),
		),
		'lower-priced-single-motor-polestar-2-260-miles-with-heat-pump' =>
		array(
			'title'          => 'Lower-priced single-motor Polestar 2: 260+ miles with heat pump',
			'content'        => 'post1.txt',
			'featured_image' => 'evnews1',
			'post_type'      => 'post',
			'taxonomy'       =>
			array(
				'category' => 'hybrids,news,technology',
				'post_tag' => 'battery,e-scooter,mercedes,tesla',
			),
			'metabox'        =>
			array(
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
				'jnews_primary_category' =>
				array(
					'id' => '{{category:hybrids:id}}',
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
							'template'                 => '1',
							'single_blog_custom'       => '',
							'parallax'                 => '1',
							'fullscreen'               => '1',
							'layout'                   => 'right-sidebar',
							'sidebar'                  => 'default-sidebar',
							'second_sidebar'           => 'default-sidebar',
							'sticky_sidebar'           => '1',
							'share_position'           => 'top',
							'share_float_style'        => 'share-monocrhome',
							'show_share_counter'       => '1',
							'show_view_counter'        => '1',
							'show_featured'            => '1',
							'show_post_meta'           => '1',
							'show_post_author'         => '1',
							'show_post_author_image'   => '1',
							'show_post_date'           => '1',
							'post_date_format'         => 'default',
							'post_date_format_custom'  => 'Y/m/d',
							'show_post_category'       => '1',
							'show_post_reading_time'   => '0',
							'post_reading_time_wpm'    => '300',
							'show_zoom_button'         => '0',
							'zoom_button_out_step'     => '2',
							'zoom_button_in_step'      => '3',
							'show_post_tag'            => '1',
							'show_prev_next_post'      => '1',
							'show_popup_post'          => '1',
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
							'single_post_thumbnail_size' => 'crop-500',
							'single_post_gallery_size'   => 'crop-500',
						),
					),
					'trending_post'              => '0',
					'trending_post_position'     => 'meta',
					'trending_post_label'        => 'Trending',
					'sponsored_post'             => '0',
					'sponsored_post_label'       => 'Sponsored by',
					'sponsored_post_name'        => '',
					'sponsored_post_url'         => '',
					'sponsored_post_logo_enable' => '0',
					'sponsored_post_logo'        => '',
					'sponsored_post_desc'        => '',
				),
			),
		),
		'2022-audi-q4-e-tron-preview-electric-quattro-utility-for-the-masses' =>
		array(
			'title'          => '2022 Audi Q4 E-Tron preview: Electric quattro utility for the masses',
			'content'        => 'post2.txt',
			'featured_image' => 'evnews7',
			'post_type'      => 'post',
			'taxonomy'       =>
			array(
				'category' => 'e-bikes,guides',
				'post_tag' => 'battery,e-scooter,elon-musk,tesla',
			),
			'metabox'        =>
			array(
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
				'jnews_primary_category' =>
				array(
					'id' => '{{category:guides:id}}',
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
							'template'                 => '1',
							'single_blog_custom'       => '',
							'parallax'                 => '1',
							'fullscreen'               => '1',
							'layout'                   => 'right-sidebar',
							'sidebar'                  => 'default-sidebar',
							'second_sidebar'           => 'default-sidebar',
							'sticky_sidebar'           => '1',
							'share_position'           => 'top',
							'share_float_style'        => 'share-monocrhome',
							'show_share_counter'       => '1',
							'show_view_counter'        => '1',
							'show_featured'            => '1',
							'show_post_meta'           => '1',
							'show_post_author'         => '1',
							'show_post_author_image'   => '1',
							'show_post_date'           => '1',
							'post_date_format'         => 'default',
							'post_date_format_custom'  => 'Y/m/d',
							'show_post_category'       => '1',
							'show_post_reading_time'   => '0',
							'post_reading_time_wpm'    => '300',
							'show_zoom_button'         => '0',
							'zoom_button_out_step'     => '2',
							'zoom_button_in_step'      => '3',
							'show_post_tag'            => '1',
							'show_prev_next_post'      => '1',
							'show_popup_post'          => '1',
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
							'single_post_thumbnail_size' => 'crop-500',
							'single_post_gallery_size'   => 'crop-500',
						),
					),
					'trending_post'              => '0',
					'trending_post_position'     => 'meta',
					'trending_post_label'        => 'Trending',
					'sponsored_post'             => '0',
					'sponsored_post_label'       => 'Sponsored by',
					'sponsored_post_name'        => '',
					'sponsored_post_url'         => '',
					'sponsored_post_logo_enable' => '0',
					'sponsored_post_logo'        => '',
					'sponsored_post_desc'        => '',
				),
			),
		),
		'after-protest-china-presses-tesla-to-improve-customer-care' =>
		array(
			'title'          => 'After Protest, China Presses Tesla To Improve Customer Care',
			'content'        => 'post1.txt',
			'featured_image' => 'evnews3',
			'post_type'      => 'post',
			'taxonomy'       =>
			array(
				'category' => 'electric-cars,hybrids,news',
				'post_tag' => 'battery,cybertruck,electric,tesla',
			),
			'metabox'        =>
			array(
				'post_subtitle'          => 'Automatic import will install plugin, import dummy content & style to replicate demo completely.',
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
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
							'template'                 => '1',
							'single_blog_custom'       => '',
							'parallax'                 => '1',
							'fullscreen'               => '1',
							'layout'                   => 'right-sidebar',
							'sidebar'                  => 'default-sidebar',
							'second_sidebar'           => 'default-sidebar',
							'sticky_sidebar'           => '1',
							'share_position'           => 'top',
							'share_float_style'        => 'share-monocrhome',
							'show_share_counter'       => '1',
							'show_view_counter'        => '1',
							'show_featured'            => '1',
							'show_post_meta'           => '1',
							'show_post_author'         => '1',
							'show_post_author_image'   => '1',
							'show_post_date'           => '1',
							'post_date_format'         => 'default',
							'post_date_format_custom'  => 'Y/m/d',
							'show_post_category'       => '1',
							'show_post_reading_time'   => '0',
							'post_reading_time_wpm'    => '300',
							'show_zoom_button'         => '0',
							'zoom_button_out_step'     => '2',
							'zoom_button_in_step'      => '3',
							'show_post_tag'            => '1',
							'show_prev_next_post'      => '1',
							'show_popup_post'          => '1',
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
							'single_post_thumbnail_size' => 'crop-500',
							'single_post_gallery_size'   => 'crop-500',
						),
					),
					'trending_post'              => '0',
					'trending_post_position'     => 'meta',
					'trending_post_label'        => 'Trending',
					'sponsored_post'             => '0',
					'sponsored_post_label'       => 'Sponsored by',
					'sponsored_post_name'        => '',
					'sponsored_post_url'         => '',
					'sponsored_post_logo_enable' => '0',
					'sponsored_post_logo'        => '',
					'sponsored_post_desc'        => '',
				),
			),
		),
		'gm-still-wants-to-go-ev-only-by-2035-but-its-not-sure-it-can' =>
		array(
			'title'          => 'GM Still Wants To Go EV-Only By 2035, But It’s Not Sure It Can',
			'content'        => 'post2.txt',
			'featured_image' => 'evnews8',
			'post_type'      => 'post',
			'taxonomy'       =>
			array(
				'category' => 'e-bikes,electric-cars,hybrids,news',
				'post_tag' => 'electric,elon-musk,mini-cooper,tesla',
			),
			'metabox'        =>
			array(
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
				'jnews_primary_category' =>
				array(
					'id' => '{{category:technology:id}}',
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
							'template'                 => '1',
							'single_blog_custom'       => '',
							'parallax'                 => '1',
							'fullscreen'               => '1',
							'layout'                   => 'right-sidebar',
							'sidebar'                  => 'default-sidebar',
							'second_sidebar'           => 'default-sidebar',
							'sticky_sidebar'           => '1',
							'share_position'           => 'top',
							'share_float_style'        => 'share-monocrhome',
							'show_share_counter'       => '1',
							'show_view_counter'        => '1',
							'show_featured'            => '1',
							'show_post_meta'           => '1',
							'show_post_author'         => '1',
							'show_post_author_image'   => '1',
							'show_post_date'           => '1',
							'post_date_format'         => 'default',
							'post_date_format_custom'  => 'Y/m/d',
							'show_post_category'       => '1',
							'show_post_reading_time'   => '0',
							'post_reading_time_wpm'    => '300',
							'show_zoom_button'         => '0',
							'zoom_button_out_step'     => '2',
							'zoom_button_in_step'      => '3',
							'show_post_tag'            => '1',
							'show_prev_next_post'      => '1',
							'show_popup_post'          => '1',
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
							'single_post_thumbnail_size' => 'crop-500',
							'single_post_gallery_size'   => 'crop-500',
						),
					),
					'trending_post'              => '0',
					'trending_post_position'     => 'meta',
					'trending_post_label'        => 'Trending',
					'sponsored_post'             => '0',
					'sponsored_post_label'       => 'Sponsored by',
					'sponsored_post_name'        => '',
					'sponsored_post_url'         => '',
					'sponsored_post_logo_enable' => '0',
					'sponsored_post_logo'        => '',
					'sponsored_post_desc'        => '',
				),
			),
		),
		'chevy-pushes-out-tesla-for-best-ev-in-u-s-news-awards' =>
		array(
			'title'          => 'Chevy Pushes Out Tesla For \'Best EV\' In U.S. News Awards',
			'content'        => 'post1.txt',
			'featured_image' => 'evnews3',
			'post_type'      => 'post',
			'taxonomy'       =>
			array(
				'category' => 'hybrids,technology',
				'post_tag' => 'battery,cybertruck,mercedes,mini-cooper',
			),
			'metabox'        =>
			array(
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
				'jnews_primary_category' =>
				array(
					'id' => '{{category:hybrids:id}}',
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
							'template'                 => '1',
							'single_blog_custom'       => '',
							'parallax'                 => '1',
							'fullscreen'               => '1',
							'layout'                   => 'right-sidebar',
							'sidebar'                  => 'default-sidebar',
							'second_sidebar'           => 'default-sidebar',
							'sticky_sidebar'           => '1',
							'share_position'           => 'top',
							'share_float_style'        => 'share-monocrhome',
							'show_share_counter'       => '1',
							'show_view_counter'        => '1',
							'show_featured'            => '1',
							'show_post_meta'           => '1',
							'show_post_author'         => '1',
							'show_post_author_image'   => '1',
							'show_post_date'           => '1',
							'post_date_format'         => 'default',
							'post_date_format_custom'  => 'Y/m/d',
							'show_post_category'       => '1',
							'show_post_reading_time'   => '0',
							'post_reading_time_wpm'    => '300',
							'show_zoom_button'         => '0',
							'zoom_button_out_step'     => '2',
							'zoom_button_in_step'      => '3',
							'show_post_tag'            => '1',
							'show_prev_next_post'      => '1',
							'show_popup_post'          => '1',
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
							'single_post_thumbnail_size' => 'crop-500',
							'single_post_gallery_size'   => 'crop-500',
						),
					),
					'trending_post'              => '0',
					'trending_post_position'     => 'meta',
					'trending_post_label'        => 'Trending',
					'sponsored_post'             => '0',
					'sponsored_post_label'       => 'Sponsored by',
					'sponsored_post_name'        => '',
					'sponsored_post_url'         => '',
					'sponsored_post_logo_enable' => '0',
					'sponsored_post_logo'        => '',
					'sponsored_post_desc'        => '',
				),
			),
		),
		'mercedes-eqb-electric-suv-revealed-confirmed-for-2022-us-arrival' =>
		array(
			'title'          => 'Mercedes EQB electric SUV revealed, confirmed for 2022 US arrival',
			'content'        => 'post2.txt',
			'featured_image' => 'evnews2',
			'post_type'      => 'post',
			'taxonomy'       =>
			array(
				'category' => 'e-bikes,guides,technology',
				'post_tag' => 'charger,mercedes,mini-cooper,tesla',
			),
			'metabox'        =>
			array(
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
				'jnews_primary_category' =>
				array(
					'id' => '{{category:guides:id}}',
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
							'template'                 => '1',
							'single_blog_custom'       => '',
							'parallax'                 => '1',
							'fullscreen'               => '1',
							'layout'                   => 'right-sidebar',
							'sidebar'                  => 'default-sidebar',
							'second_sidebar'           => 'default-sidebar',
							'sticky_sidebar'           => '1',
							'share_position'           => 'top',
							'share_float_style'        => 'share-monocrhome',
							'show_share_counter'       => '1',
							'show_view_counter'        => '1',
							'show_featured'            => '1',
							'show_post_meta'           => '1',
							'show_post_author'         => '1',
							'show_post_author_image'   => '1',
							'show_post_date'           => '1',
							'post_date_format'         => 'default',
							'post_date_format_custom'  => 'Y/m/d',
							'show_post_category'       => '1',
							'show_post_reading_time'   => '0',
							'post_reading_time_wpm'    => '300',
							'show_zoom_button'         => '0',
							'zoom_button_out_step'     => '2',
							'zoom_button_in_step'      => '3',
							'show_post_tag'            => '1',
							'show_prev_next_post'      => '1',
							'show_popup_post'          => '1',
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
							'single_post_thumbnail_size' => 'crop-500',
							'single_post_gallery_size'   => 'crop-500',
						),
					),
					'trending_post'              => '0',
					'trending_post_position'     => 'meta',
					'trending_post_label'        => 'Trending',
					'sponsored_post'             => '0',
					'sponsored_post_label'       => 'Sponsored by',
					'sponsored_post_name'        => '',
					'sponsored_post_url'         => '',
					'sponsored_post_logo_enable' => '0',
					'sponsored_post_logo'        => '',
					'sponsored_post_desc'        => '',
				),
			),
		),
		'up-close-look-at-the-sur-ron-storm-bee-22-5-kw-electric-motorcycle' =>
		array(
			'title'          => 'Up-close look at the Sur Ron Storm Bee 22.5 kW electric motorcycle',
			'content'        => 'post1.txt',
			'featured_image' => 'evnews3',
			'post_type'      => 'post',
			'taxonomy'       =>
			array(
				'category' => 'e-bikes,guides,news',
				'post_tag' => 'battery,charger,cybertruck,mini-cooper',
			),
			'metabox'        =>
			array(
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
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
							'template'                 => '1',
							'single_blog_custom'       => '',
							'parallax'                 => '1',
							'fullscreen'               => '1',
							'layout'                   => 'right-sidebar',
							'sidebar'                  => 'default-sidebar',
							'second_sidebar'           => 'default-sidebar',
							'sticky_sidebar'           => '1',
							'share_position'           => 'top',
							'share_float_style'        => 'share-monocrhome',
							'show_share_counter'       => '1',
							'show_view_counter'        => '1',
							'show_featured'            => '1',
							'show_post_meta'           => '1',
							'show_post_author'         => '1',
							'show_post_author_image'   => '1',
							'show_post_date'           => '1',
							'post_date_format'         => 'default',
							'post_date_format_custom'  => 'Y/m/d',
							'show_post_category'       => '1',
							'show_post_reading_time'   => '0',
							'post_reading_time_wpm'    => '300',
							'show_zoom_button'         => '0',
							'zoom_button_out_step'     => '2',
							'zoom_button_in_step'      => '3',
							'show_post_tag'            => '1',
							'show_prev_next_post'      => '1',
							'show_popup_post'          => '1',
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
							'single_post_thumbnail_size' => 'crop-500',
							'single_post_gallery_size'   => 'crop-500',
						),
					),
					'trending_post'              => '0',
					'trending_post_position'     => 'meta',
					'trending_post_label'        => 'Trending',
					'sponsored_post'             => '0',
					'sponsored_post_label'       => 'Sponsored by',
					'sponsored_post_name'        => '',
					'sponsored_post_url'         => '',
					'sponsored_post_logo_enable' => '0',
					'sponsored_post_logo'        => '',
					'sponsored_post_desc'        => '',
				),
			),
		),
		'mercedes-benz-eqs-is-impressive-but-calling-it-a-tesla-killer-is-insane' =>
		array(
			'title'          => 'Mercedes-Benz EQS is impressive, but calling it a ‘Tesla Killer’ is insane',
			'content'        => 'post2.txt',
			'featured_image' => 'evnews1',
			'post_type'      => 'post',
			'taxonomy'       =>
			array(
				'category' => 'electric-cars,guides,news',
				'post_tag' => 'cybertruck,e-scooter,mercedes,tesla',
			),
			'metabox'        =>
			array(
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
				'jnews_primary_category' =>
				array(
					'id' => '{{category:hybrids:id}}',
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
							'template'                 => '1',
							'single_blog_custom'       => '',
							'parallax'                 => '1',
							'fullscreen'               => '1',
							'layout'                   => 'right-sidebar',
							'sidebar'                  => 'default-sidebar',
							'second_sidebar'           => 'default-sidebar',
							'sticky_sidebar'           => '1',
							'share_position'           => 'top',
							'share_float_style'        => 'share-monocrhome',
							'show_share_counter'       => '1',
							'show_view_counter'        => '1',
							'show_featured'            => '1',
							'show_post_meta'           => '1',
							'show_post_author'         => '1',
							'show_post_author_image'   => '1',
							'show_post_date'           => '1',
							'post_date_format'         => 'default',
							'post_date_format_custom'  => 'Y/m/d',
							'show_post_category'       => '1',
							'show_post_reading_time'   => '0',
							'post_reading_time_wpm'    => '300',
							'show_zoom_button'         => '0',
							'zoom_button_out_step'     => '2',
							'zoom_button_in_step'      => '3',
							'show_post_tag'            => '1',
							'show_prev_next_post'      => '1',
							'show_popup_post'          => '1',
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
							'single_post_thumbnail_size' => 'crop-500',
							'single_post_gallery_size'   => 'crop-500',
						),
					),
					'trending_post'              => '0',
					'trending_post_position'     => 'meta',
					'trending_post_label'        => 'Trending',
					'sponsored_post'             => '0',
					'sponsored_post_label'       => 'Sponsored by',
					'sponsored_post_name'        => '',
					'sponsored_post_url'         => '',
					'sponsored_post_logo_enable' => '0',
					'sponsored_post_logo'        => '',
					'sponsored_post_desc'        => '',
				),
			),
		),
		'electric-pickup-trucks-everything-you-need-to-know' =>
		array(
			'title'          => 'Electric Pickup Trucks: Everything You Need To Know',
			'content'        => 'post1.txt',
			'featured_image' => 'evnews9',
			'post_type'      => 'post',
			'taxonomy'       =>
			array(
				'category' => 'electric-cars,hybrids,news,technology',
				'post_tag' => 'battery,elon-musk,mercedes,tesla',
			),
			'metabox'        =>
			array(
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
				'jnews_primary_category' =>
				array(
					'id' => '{{category:hybrids:id}}',
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
							'template'                 => '1',
							'single_blog_custom'       => '',
							'parallax'                 => '1',
							'fullscreen'               => '1',
							'layout'                   => 'right-sidebar',
							'sidebar'                  => 'default-sidebar',
							'second_sidebar'           => 'default-sidebar',
							'sticky_sidebar'           => '1',
							'share_position'           => 'top',
							'share_float_style'        => 'share-monocrhome',
							'show_share_counter'       => '1',
							'show_view_counter'        => '1',
							'show_featured'            => '1',
							'show_post_meta'           => '1',
							'show_post_author'         => '1',
							'show_post_author_image'   => '1',
							'show_post_date'           => '1',
							'post_date_format'         => 'default',
							'post_date_format_custom'  => 'Y/m/d',
							'show_post_category'       => '1',
							'show_post_reading_time'   => '0',
							'post_reading_time_wpm'    => '300',
							'show_zoom_button'         => '0',
							'zoom_button_out_step'     => '2',
							'zoom_button_in_step'      => '3',
							'show_post_tag'            => '1',
							'show_prev_next_post'      => '1',
							'show_popup_post'          => '1',
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
							'single_post_thumbnail_size' => 'crop-500',
							'single_post_gallery_size'   => 'crop-500',
						),
					),
					'trending_post'              => '0',
					'trending_post_position'     => 'meta',
					'trending_post_label'        => 'Trending',
					'sponsored_post'             => '0',
					'sponsored_post_label'       => 'Sponsored by',
					'sponsored_post_name'        => '',
					'sponsored_post_url'         => '',
					'sponsored_post_logo_enable' => '0',
					'sponsored_post_logo'        => '',
					'sponsored_post_desc'        => '',
				),
			),
		),
		'lightning-emotors-and-rev-to-produce-electric-ambulances' =>
		array(
			'title'          => 'Lightning eMotors and REV to produce electric ambulances',
			'content'        => 'post2.txt',
			'featured_image' => 'evnews7',
			'post_type'      => 'post',
			'taxonomy'       =>
			array(
				'category' => 'electric-cars,guides,news,technology',
				'post_tag' => 'charger,cybertruck,e-scooter,electric',
			),
			'metabox'        =>
			array(
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
				'jnews_primary_category' =>
				array(
					'id' => '{{category:guides:id}}',
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
							'template'                 => '1',
							'single_blog_custom'       => '',
							'parallax'                 => '1',
							'fullscreen'               => '1',
							'layout'                   => 'right-sidebar',
							'sidebar'                  => 'default-sidebar',
							'second_sidebar'           => 'default-sidebar',
							'sticky_sidebar'           => '1',
							'share_position'           => 'top',
							'share_float_style'        => 'share-monocrhome',
							'show_share_counter'       => '1',
							'show_view_counter'        => '1',
							'show_featured'            => '1',
							'show_post_meta'           => '1',
							'show_post_author'         => '1',
							'show_post_author_image'   => '1',
							'show_post_date'           => '1',
							'post_date_format'         => 'default',
							'post_date_format_custom'  => 'Y/m/d',
							'show_post_category'       => '1',
							'show_post_reading_time'   => '0',
							'post_reading_time_wpm'    => '300',
							'show_zoom_button'         => '0',
							'zoom_button_out_step'     => '2',
							'zoom_button_in_step'      => '3',
							'show_post_tag'            => '1',
							'show_prev_next_post'      => '1',
							'show_popup_post'          => '1',
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
							'single_post_thumbnail_size' => 'crop-500',
							'single_post_gallery_size'   => 'crop-500',
						),
					),
					'trending_post'              => '0',
					'trending_post_position'     => 'meta',
					'trending_post_label'        => 'Trending',
					'sponsored_post'             => '0',
					'sponsored_post_label'       => 'Sponsored by',
					'sponsored_post_name'        => '',
					'sponsored_post_url'         => '',
					'sponsored_post_logo_enable' => '0',
					'sponsored_post_logo'        => '',
					'sponsored_post_desc'        => '',
				),
			),
		),
		'the-14-best-electric-bikes-for-every-kind-of-ride' =>
		array(
			'title'          => 'The 14 Best Electric Bikes for Every Kind of Ride',
			'content'        => 'post1.txt',
			'featured_image' => 'evnews3',
			'post_type'      => 'post',
			'taxonomy'       =>
			array(
				'category' => 'e-bikes,news,technology',
				'post_tag' => 'battery,charger,mercedes,mini-cooper',
			),
			'metabox'        =>
			array(
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
				'jnews_primary_category' =>
				array(
					'id' => '{{category:e-bikes:id}}',
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
		'2021-auto-shanghai-mitsubishi-teases-airtrek-ev' =>
		array(
			'title'          => '2021 Auto Shanghai: Mitsubishi Teases Airtrek EV',
			'content'        => 'post2.txt',
			'featured_image' => 'evnews9',
			'post_type'      => 'post',
			'taxonomy'       =>
			array(
				'category' => 'e-bikes,hybrids,technology',
				'post_tag' => 'charger,electric,mercedes,mini-cooper',
			),
			'metabox'        =>
			array(
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
				'jnews_primary_category' =>
				array(
					'id' => '{{category:hybrids:id}}',
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
							'template'                 => '1',
							'single_blog_custom'       => '',
							'parallax'                 => '1',
							'fullscreen'               => '1',
							'layout'                   => 'right-sidebar',
							'sidebar'                  => 'default-sidebar',
							'second_sidebar'           => 'default-sidebar',
							'sticky_sidebar'           => '1',
							'share_position'           => 'top',
							'share_float_style'        => 'share-monocrhome',
							'show_share_counter'       => '1',
							'show_view_counter'        => '1',
							'show_featured'            => '1',
							'show_post_meta'           => '1',
							'show_post_author'         => '1',
							'show_post_author_image'   => '1',
							'show_post_date'           => '1',
							'post_date_format'         => 'default',
							'post_date_format_custom'  => 'Y/m/d',
							'show_post_category'       => '1',
							'show_post_reading_time'   => '0',
							'post_reading_time_wpm'    => '300',
							'show_zoom_button'         => '0',
							'zoom_button_out_step'     => '2',
							'zoom_button_in_step'      => '3',
							'show_post_tag'            => '1',
							'show_prev_next_post'      => '1',
							'show_popup_post'          => '1',
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
							'single_post_thumbnail_size' => 'crop-500',
							'single_post_gallery_size'   => 'crop-500',
						),
					),
					'trending_post'              => '0',
					'trending_post_position'     => 'meta',
					'trending_post_label'        => 'Trending',
					'sponsored_post'             => '0',
					'sponsored_post_label'       => 'Sponsored by',
					'sponsored_post_name'        => '',
					'sponsored_post_url'         => '',
					'sponsored_post_logo_enable' => '0',
					'sponsored_post_logo'        => '',
					'sponsored_post_desc'        => '',
				),
			),
		),
		'amply-power-and-ues-partner-to-electrify-v2g-capable-buses' =>
		array(
			'title'          => 'AMPLY Power and UES partner to electrify V2G capable buses',
			'content'        => 'post1.txt',
			'featured_image' => 'evnews9',
			'post_type'      => 'post',
			'taxonomy'       =>
			array(
				'category' => 'guides,news,technology',
				'post_tag' => 'battery,e-scooter,elon-musk,mini-cooper',
			),
			'metabox'        =>
			array(
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
				'jnews_primary_category' =>
				array(
					'id' => '{{category:e-bikes:id}}',
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
							'template'                 => '1',
							'single_blog_custom'       => '',
							'parallax'                 => '1',
							'fullscreen'               => '1',
							'layout'                   => 'right-sidebar',
							'sidebar'                  => 'default-sidebar',
							'second_sidebar'           => 'default-sidebar',
							'sticky_sidebar'           => '1',
							'share_position'           => 'top',
							'share_float_style'        => 'share-monocrhome',
							'show_share_counter'       => '1',
							'show_view_counter'        => '1',
							'show_featured'            => '1',
							'show_post_meta'           => '1',
							'show_post_author'         => '1',
							'show_post_author_image'   => '1',
							'show_post_date'           => '1',
							'post_date_format'         => 'default',
							'post_date_format_custom'  => 'Y/m/d',
							'show_post_category'       => '1',
							'show_post_reading_time'   => '0',
							'post_reading_time_wpm'    => '300',
							'show_zoom_button'         => '0',
							'zoom_button_out_step'     => '2',
							'zoom_button_in_step'      => '3',
							'show_post_tag'            => '1',
							'show_prev_next_post'      => '1',
							'show_popup_post'          => '1',
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
							'single_post_thumbnail_size' => 'crop-500',
							'single_post_gallery_size'   => 'crop-500',
						),
					),
					'trending_post'              => '0',
					'trending_post_position'     => 'meta',
					'trending_post_label'        => 'Trending',
					'sponsored_post'             => '0',
					'sponsored_post_label'       => 'Sponsored by',
					'sponsored_post_name'        => '',
					'sponsored_post_url'         => '',
					'sponsored_post_logo_enable' => '0',
					'sponsored_post_logo'        => '',
					'sponsored_post_desc'        => '',
				),
			),
		),
		'kia-receives-over-1000-ev6-pre-orders-in-uk-alone' =>
		array(
			'title'          => 'Kia Receives Over 1,000 EV6 Pre-Orders In UK Alone',
			'content'        => 'post2.txt',
			'featured_image' => 'evnews7',
			'post_type'      => 'post',
			'taxonomy'       =>
			array(
				'category' => 'electric-cars,hybrids,technology',
				'post_tag' => 'battery,electric,mercedes,mini-cooper',
			),
			'metabox'        =>
			array(
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
				'jnews_primary_category' =>
				array(
					'id' => '{{category:technology:id}}',
				),
				'jnews_single_post'      =>
				array(
					'source_name'                => '',
					'source_url'                 => '',
					'via_name'                   => '',
					'via_url'                    => '',
					'override_template'          => '1',
					'override'                   =>
					array(

						array(
							'template'                 => '8',
							'single_blog_custom'       => '',
							'parallax'                 => '1',
							'fullscreen'               => '0',
							'layout'                   => 'right-sidebar',
							'sidebar'                  => 'default-sidebar',
							'second_sidebar'           => '',
							'sticky_sidebar'           => '1',
							'share_position'           => 'top',
							'share_float_style'        => 'share-monocrhome',
							'show_share_counter'       => '1',
							'show_view_counter'        => '1',
							'show_featured'            => '1',
							'show_post_meta'           => '1',
							'show_post_author'         => '1',
							'show_post_author_image'   => '1',
							'show_post_date'           => '1',
							'post_date_format'         => '',
							'post_date_format_custom'  => '',
							'show_post_category'       => '1',
							'show_post_reading_time'   => '0',
							'post_reading_time_wpm'    => '',
							'show_zoom_button'         => '0',
							'zoom_button_out_step'     => '1',
							'zoom_button_in_step'      => '1',
							'show_post_tag'            => '1',
							'show_prev_next_post'      => '1',
							'show_popup_post'          => '1',
							'number_popup_post'        => '1',
							'show_author_box'          => '0',
							'show_post_related'        => '1',
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
		'home'                                            =>
		array(
			'title'     => 'Home',
			'content'   => 'home1.txt',
			'post_type' => 'page',
			'metabox'   =>
			array(
				'_wp_page_template'    => 'template-builder.php',
				'_elementor_data'      => 'home1.json',
				'_elementor_edit_mode' => 'builder',
			),
		),
	),
	'menu_location'     =>
	array(
		'main-navigation'    =>
		array(
			'title'    => 'Main Navigation',
			'location' => 'navigation',
		),
		'mobile-navigation'  =>
		array(
			'title'    => 'Mobile Navigation',
			'location' => 'mobile_navigation',
		),
		'top-bar-navigation' =>
		array(
			'title'    => 'Top Bar Navigation',
			'location' => 'top_navigation',
		),
	),
	'menu'              =>
	array(
		'home-menu'      =>
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
		'news'           =>
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
		'guides'         =>
		array(
			'location'       => 'main-navigation',
			'menu-item-data' =>
			array(
				'menu-item-title'     => 'Guides',
				'menu-item-type'      => 'taxonomy',
				'menu-item-object'    => 'category',
				'menu-item-status'    => 'publish',
				'menu-item-object-id' => '{{category:guides:id}}',
			),
		),
		'electric-cars'  =>
		array(
			'location'       => 'main-navigation',
			'menu-item-data' =>
			array(
				'menu-item-title'     => 'E-Cars',
				'menu-item-type'      => 'taxonomy',
				'menu-item-object'    => 'category',
				'menu-item-status'    => 'publish',
				'menu-item-object-id' => '{{category:electric-cars:id}}',
			),
		),
		'e-bikes'        =>
		array(
			'location'       => 'main-navigation',
			'menu-item-data' =>
			array(
				'menu-item-title'     => 'E-Bikes',
				'menu-item-type'      => 'taxonomy',
				'menu-item-object'    => 'category',
				'menu-item-status'    => 'publish',
				'menu-item-object-id' => '{{category:e-bikes:id}}',
			),
		),
		'hybrids'        =>
		array(
			'location'       => 'main-navigation',
			'menu-item-data' =>
			array(
				'menu-item-title'     => 'Hybrids',
				'menu-item-type'      => 'taxonomy',
				'menu-item-object'    => 'category',
				'menu-item-status'    => 'publish',
				'menu-item-object-id' => '{{category:hybrids:id}}',
			),
		),
		'landing-page'   =>
		array(
			'location'       => 'mobile-navigation',
			'menu-item-data' =>
			array(
				'menu-item-title'  => 'Landing Page',
				'menu-item-type'   => 'custom',
				'menu-item-object' => 'custom',
				'menu-item-status' => 'publish',
				'menu-item-url'    => 'https://jnews.io/landing/',
			),
		),
		'buy-jnews'      =>
		array(
			'location'       => 'mobile-navigation',
			'menu-item-data' =>
			array(
				'menu-item-title'  => 'Buy JNews',
				'menu-item-type'   => 'custom',
				'menu-item-object' => 'custom',
				'menu-item-status' => 'publish',
				'menu-item-url'    => 'https://themeforest.net/item/jnews-wordpress-blog-news-magazine-newspaper-theme/20566392?ref=jegtheme&license=regular&open_purchase_for_item_id=20566392',
			),
		),
		'support-forum'  =>
		array(
			'location'       => 'mobile-navigation',
			'menu-item-data' =>
			array(
				'menu-item-title'  => 'Support Forum',
				'menu-item-type'   => 'custom',
				'menu-item-object' => 'custom',
				'menu-item-status' => 'publish',
				'menu-item-url'    => 'https://themeforest.net/item/jnews-wordpress-blog-news-magazine-newspaper-theme/20566392?ref=jegtheme&license=regular&open_purchase_for_item_id=20566392',
			),
		),
		'contact-us'     =>
		array(
			'location'       => 'mobile-navigation',
			'menu-item-data' =>
			array(
				'menu-item-title'  => 'Contact Us',
				'menu-item-type'   => 'custom',
				'menu-item-object' => 'custom',
				'menu-item-status' => 'publish',
				'menu-item-url'    => 'https://themeforest.net/user/jegtheme?ref=jegtheme',
			),
		),
		'landing-page-2' =>
		array(
			'location'       => 'top-bar-navigation',
			'menu-item-data' =>
			array(
				'menu-item-title'  => 'Landing Page',
				'menu-item-type'   => 'custom',
				'menu-item-object' => 'custom',
				'menu-item-status' => 'publish',
				'menu-item-url'    => 'https://jnews.io/landing/',
			),
		),
		'shop'           =>
		array(
			'location'       => 'top-bar-navigation',
			'menu-item-data' =>
			array(
				'menu-item-title'  => 'Shop',
				'menu-item-type'   => 'custom',
				'menu-item-object' => 'custom',
				'menu-item-status' => 'publish',
				'menu-item-url'    => 'https://jnews.io/landing/',
			),
		),
		'contact'        =>
		array(
			'location'       => 'top-bar-navigation',
			'menu-item-data' =>
			array(
				'menu-item-title'  => 'Contact',
				'menu-item-type'   => 'custom',
				'menu-item-object' => 'custom',
				'menu-item-status' => 'publish',
				'menu-item-url'    => 'https://themeforest.net/user/jegtheme?ref=jegtheme',
			),
		),
		'buy-jnews-2'    =>
		array(
			'location'       => 'top-bar-navigation',
			'menu-item-data' =>
			array(
				'menu-item-title'  => 'Buy JNews',
				'menu-item-type'   => 'custom',
				'menu-item-object' => 'custom',
				'menu-item-status' => 'publish',
				'menu-item-url'    => 'https://themeforest.net/item/jnews-wordpress-blog-news-magazine-newspaper-theme/20566392?ref=jegtheme&license=regular&open_purchase_for_item_id=20566392',
			),
		),
	),
	'widget_position'   =>
	array(
		'Home',
		'Archives',
	),
	'widget'            =>
	array(
		'widget.json',
	),
	'customizer'        =>
	array(
		'style.json',
	),
	'elementor_setting' =>
	array(
		'global.json',
	),
	'plugin'            =>
	array(
		'elementor',
		'jnews-breadcrumb',
		'jnews-essential',
		'jnews-importer',
		'jnews-instagram',
		'jnews-meta-header',
		'jnews-social-share',
		'jnews-view-counter',
		'mailchimp-for-wp',
	),
);
