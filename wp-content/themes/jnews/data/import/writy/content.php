<?php
return array(
	'image'           =>
	array(
		'logo'        => 'https://jegtheme.com/asset/jnews/demo/writy/logo.png',
		'logo2x'      => 'https://jegtheme.com/asset/jnews/demo/writy/logo@2x.png',
		'logo_dark'   => 'https://jegtheme.com/asset/jnews/demo/writy/logo_dark.png',
		'logo_dark2x' => 'https://jegtheme.com/asset/jnews/demo/writy/logo_dark@2x.png',

		'news1'       => 'https://jegtheme.com/asset/jnews/demo/default/news1.jpg',
		'news2'       => 'https://jegtheme.com/asset/jnews/demo/default/news2.jpg',
		'news3'       => 'https://jegtheme.com/asset/jnews/demo/default/news3.jpg',
		'news4'       => 'https://jegtheme.com/asset/jnews/demo/default/news4.jpg',
		'news5'       => 'https://jegtheme.com/asset/jnews/demo/default/news5.jpg',
		'news6'       => 'https://jegtheme.com/asset/jnews/demo/default/news6.jpg',
		'news7'       => 'https://jegtheme.com/asset/jnews/demo/default/news7.jpg',
		'news8'       => 'https://jegtheme.com/asset/jnews/demo/default/news8.jpg',
		'news9'       => 'https://jegtheme.com/asset/jnews/demo/default/news9.jpg',
		'news10'      => 'https://jegtheme.com/asset/jnews/demo/default/news10.jpg',
		'news11'      => 'https://jegtheme.com/asset/jnews/demo/default/news11.jpg',
		'news12'      => 'https://jegtheme.com/asset/jnews/demo/default/news12.jpg',

		'favicon'     => 'https://jegtheme.com/asset/jnews/demo/default/favicon.png',
		'ad_300x250'  => 'https://jegtheme.com/asset/jnews/demo/default/ad_300x250.jpg',
		'ad_728x90'   => 'https://jegtheme.com/asset/jnews/demo/default/ad_728x90.png',
		'ad_600x500'  => 'https://jegtheme.com/asset/jnews/demo/writy/ad_600x500.jpg',
		'ad_1456x180' => 'https://jegtheme.com/asset/jnews/demo/writy/ad_1456x180.jpg',
	),
	'taxonomy'        =>
	array(
		'category' =>
		array(
			'culture'   =>
			array(
				'title' => 'Culture',
			),
			'editorial' =>
			array(
				'title' => 'Editorial',
			),
			'education' =>
			array(
				'title' => 'Education',
			),
			'essay'     =>
			array(
				'title' => 'Essay',
			),
			'global'    =>
			array(
				'title' => 'Global',
			),
			'letters'   =>
			array(
				'title' => 'Letters',
			),
			'opinion'   =>
			array(
				'title' => 'Opinion',
			),
			'sports'    =>
			array(
				'title' => 'Sports',
			),
		),
		'post_tag' =>
		array(
			'article'     =>
			array(
				'title' => 'Article',
			),
			'bali'        =>
			array(
				'title' => 'Bali',
			),
			'guest'       =>
			array(
				'title' => 'Guest',
			),
			'inspiration' =>
			array(
				'title' => 'Inspiration',
			),
			'life'        =>
			array(
				'title' => 'Life',
			),
			'news'        =>
			array(
				'title' => 'News',
			),
			'people'      =>
			array(
				'title' => 'People',
			),
			'story'       =>
			array(
				'title' => 'Story',
			),
			'tourism'     =>
			array(
				'title' => 'Tourism',
			),
		),
	),
	'post'            =>
	array(
		'how-music-shapes-the-way-we-play-video-games'     =>
		array(
			'title'          => 'How music shapes the way we play video games',
			'content'        => 'post1.txt',
			'featured_image' => 'news10',
			'post_type'      => 'post',
			'taxonomy'       =>
			array(
				'category' => 'education,global,opinion,sports',
				'post_tag' => 'article,guest,inspiration,people',
			),
			'metabox'        =>
			array(
				'post_subtitle'          => 'A budget tells us what we can\'t afford, but it doesn\'t keep us from buying it.',
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
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
						0 =>
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
						0 =>
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
		'building-a-southwest-pacific-regional-organization' =>
		array(
			'title'          => 'Building a Southwest Pacific regional organization',
			'content'        => 'post2.txt',
			'featured_image' => 'news2',
			'post_type'      => 'post',
			'taxonomy'       =>
			array(
				'category' => 'editorial,global,letters,opinion',
				'post_tag' => 'article,bali,inspiration,people',
			),
			'metabox'        =>
			array(
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
				'jnews_primary_category' =>
				array(
					'id' => '{{category:global:id}}',
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
						0 =>
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
						0 =>
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
		'the-time-to-unlock-industry-4-0-growth-is-now'    =>
		array(
			'title'          => 'The time to unlock Industry 4.0 growth is now',
			'content'        => 'post1.txt',
			'featured_image' => 'news10',
			'post_type'      => 'post',
			'taxonomy'       =>
			array(
				'category' => 'editorial,essay,opinion',
				'post_tag' => 'bali,news,story,tourism',
			),
			'metabox'        =>
			array(
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
				'jnews_primary_category' =>
				array(
					'id' => '{{category:editorial:id}}',
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
						0 =>
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
						0 =>
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
		'historic-olympic-gold-brings-joy-to-weary-indonesia' =>
		array(
			'title'          => 'Historic Olympic gold brings joy to weary Indonesia',
			'content'        => 'post2.txt',
			'featured_image' => 'news12',
			'post_type'      => 'post',
			'taxonomy'       =>
			array(
				'category' => 'education,essay,sports',
				'post_tag' => 'article,bali,news,story',
			),
			'metabox'        =>
			array(
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
				'jnews_primary_category' =>
				array(
					'id' => '{{category:sports:id}}',
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
						0 =>
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
						0 =>
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
		'covid-19-the-evolution-of-scams-in-asia-pacific'  =>
		array(
			'title'          => 'COVID-19: The evolution of scams in Asia-Pacific',
			'content'        => 'post1.txt',
			'featured_image' => 'news1',
			'post_type'      => 'post',
			'taxonomy'       =>
			array(
				'category' => 'culture,editorial,essay,opinion',
				'post_tag' => 'guest,news,story,tourism',
			),
			'metabox'        =>
			array(
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
				'jnews_primary_category' =>
				array(
					'id' => '{{category:essay:id}}',
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
						0 =>
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
						0 =>
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
		'bringing-yoga-peace-and-wellness-to-your-home'    =>
		array(
			'title'          => 'Bringing yoga, peace and wellness to your home',
			'content'        => 'post2.txt',
			'featured_image' => 'news8',
			'post_type'      => 'post',
			'taxonomy'       =>
			array(
				'category' => 'culture,global,letters,sports',
				'post_tag' => 'guest,life,news,story',
			),
			'metabox'        =>
			array(
				'post_subtitle'          => 'Website schema using JSON LD which is recommended by Google.',
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
				'jnews_primary_category' =>
				array(
					'id' => '{{category:sports:id}}',
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
						0 =>
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
						0 =>
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
		'govt-distributes-free-medicines-to-support-self-isolating-patients' =>
		array(
			'title'          => 'Govt distributes free medicines to support self-isolating patients',
			'content'        => 'post1.txt',
			'featured_image' => 'news11',
			'post_type'      => 'post',
			'taxonomy'       =>
			array(
				'category' => 'editorial,global,letters,opinion,sports',
				'post_tag' => 'article,bali,inspiration,life',
			),
			'metabox'        =>
			array(
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
				'jnews_primary_category' =>
				array(
					'id' => '{{category:editorial:id}}',
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
						0 =>
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
						0 =>
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
		'how-to-support-someone-with-depression-virtually' =>
		array(
			'title'          => 'How to support someone with depression virtually',
			'content'        => 'post2.txt',
			'featured_image' => 'news1',
			'post_type'      => 'post',
			'taxonomy'       =>
			array(
				'category' => 'editorial,essay,global,letters',
				'post_tag' => 'article,guest,inspiration,life,story',
			),
			'metabox'        =>
			array(
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
				'jnews_primary_category' =>
				array(
					'id' => '{{category:global:id}}',
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
						0 =>
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
						0 =>
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
		'what-universal-health-care-should-look-like-in-us' =>
		array(
			'title'          => 'What Universal Health Care should look like in US',
			'content'        => 'post1.txt',
			'featured_image' => 'news2',
			'post_type'      => 'post',
			'taxonomy'       =>
			array(
				'category' => 'education,essay,global,letters',
				'post_tag' => 'article,guest,life,people',
			),
			'metabox'        =>
			array(
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
				'jnews_primary_category' =>
				array(
					'id' => '{{category:letters:id}}',
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
						0 =>
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
						0 =>
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
		'the-gender-health-gap-makes-peoples-lives-hell'   =>
		array(
			'title'          => 'The gender health gap makes people\'s lives hell',
			'content'        => 'post2.txt',
			'featured_image' => 'news12',
			'post_type'      => 'post',
			'taxonomy'       =>
			array(
				'category' => 'editorial,essay,opinion,sports',
				'post_tag' => 'bali,inspiration,life,story',
			),
			'metabox'        =>
			array(
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
				'jnews_primary_category' =>
				array(
					'id' => '{{category:essay:id}}',
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
						0 =>
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
						0 =>
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
		'2021-is-officially-the-summer-we-learned-to-say-no' =>
		array(
			'title'          => '2021 is officially the summer we learned to say no',
			'content'        => 'post1.txt',
			'featured_image' => 'news9',
			'post_type'      => 'post',
			'taxonomy'       =>
			array(
				'category' => 'editorial,education,essay,opinion',
				'post_tag' => 'guest,story,tourism',
			),
			'metabox'        =>
			array(
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
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
						0 =>
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
						0 =>
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
		'how-big-data-helping-transform-public-transport-system' =>
		array(
			'title'          => 'How big data helping transform public transport system',
			'content'        => 'post2.txt',
			'featured_image' => 'news7',
			'post_type'      => 'post',
			'taxonomy'       =>
			array(
				'category' => 'culture,education,sports',
				'post_tag' => 'article,bali,inspiration,life',
			),
			'metabox'        =>
			array(
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
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
						0 =>
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
						0 =>
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
		'independent-data-protection-authority-matters'    =>
		array(
			'title'          => 'Independent data protection authority matters',
			'content'        => 'post1.txt',
			'featured_image' => 'news11',
			'post_type'      => 'post',
			'taxonomy'       =>
			array(
				'category' => 'culture,education,sports',
				'post_tag' => 'article,guest,news,tourism',
			),
			'metabox'        =>
			array(
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
				'jnews_primary_category' =>
				array(
					'id' => '{{category:sports:id}}',
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
						0 =>
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
						0 =>
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
		'why-we-should-embrace-new-routine-vaccines'       =>
		array(
			'title'          => 'Why we should embrace new routine vaccines',
			'content'        => 'post2.txt',
			'featured_image' => 'news11',
			'post_type'      => 'post',
			'taxonomy'       =>
			array(
				'category' => 'culture,editorial,essay,letters',
				'post_tag' => 'article,bali,inspiration,people',
			),
			'metabox'        =>
			array(
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
				'jnews_primary_category' =>
				array(
					'id' => '{{category:editorial:id}}',
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
						0 =>
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
						0 =>
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
		'how-digital-transformation-enables-broader-sustainability-performance' =>
		array(
			'title'          => 'How digital transformation enables broader sustainability performance',
			'content'        => 'post1.txt',
			'featured_image' => 'news6',
			'post_type'      => 'post',
			'taxonomy'       =>
			array(
				'category' => 'culture,education,essay,sports',
				'post_tag' => 'article,bali,people,tourism',
			),
			'metabox'        =>
			array(
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
				'jnews_primary_category' =>
				array(
					'id' => '{{category:culture:id}}',
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
						0 =>
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
						0 =>
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
		'smartphone-addiction-among-the-young-is-undeniably-real' =>
		array(
			'title'          => 'Smartphone addiction among the young is undeniably real',
			'content'        => 'post2.txt',
			'featured_image' => 'news9',
			'post_type'      => 'post',
			'taxonomy'       =>
			array(
				'category' => 'education,global,letters',
				'post_tag' => 'article,bali,inspiration,people',
			),
			'metabox'        =>
			array(
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
				'jnews_primary_category' =>
				array(
					'id' => '{{category:global:id}}',
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
						0 =>
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
						0 =>
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
		'restaurants-will-never-be-the-same-they-shouldnt-be' =>
		array(
			'title'          => 'Restaurants will never be the same. They shouldn’t be',
			'content'        => 'post1.txt',
			'featured_image' => 'news8',
			'post_type'      => 'post',
			'taxonomy'       =>
			array(
				'category' => 'culture,essay,letters,opinion',
				'post_tag' => 'bali,people,story,tourism',
			),
			'metabox'        =>
			array(
				'post_subtitle'          => 'Automatic import will install plugin, import dummy content & style to replicate demo completely.',
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
				'jnews_primary_category' =>
				array(
					'id' => '{{category:essay:id}}',
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
						0 =>
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
						0 =>
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
		'climate-denial-covid-denial-and-the-rights-descent' =>
		array(
			'title'          => 'Climate Denial, Covid Denial and the Right’s Descent',
			'content'        => 'post2.txt',
			'featured_image' => 'news4',
			'post_type'      => 'post',
			'taxonomy'       =>
			array(
				'category' => 'editorial,essay,global,opinion',
				'post_tag' => 'news,people,story,tourism',
			),
			'metabox'        =>
			array(
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
				'jnews_primary_category' =>
				array(
					'id' => '{{category:essay:id}}',
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
						0 =>
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
						0 =>
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
		'young-people-do-not-need-shaming-to-get-vaccinated' =>
		array(
			'title'          => 'Young people do not need shaming to get vaccinated',
			'content'        => 'post1.txt',
			'featured_image' => 'news11',
			'post_type'      => 'post',
			'taxonomy'       =>
			array(
				'category' => 'culture,essay,letters',
				'post_tag' => 'article,bali,inspiration,people',
			),
			'metabox'        =>
			array(
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
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
						0 =>
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
						0 =>
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
		'coffee-shop-finds-clever-way-to-inspire-good-manners-in-customers' =>
		array(
			'title'          => 'Coffee shop finds clever way to inspire good manners in customers',
			'content'        => 'post2.txt',
			'featured_image' => 'news5',
			'post_type'      => 'post',
			'taxonomy'       =>
			array(
				'category' => 'education,global,letters',
				'post_tag' => 'article,guest,news,people,tourism',
			),
			'metabox'        =>
			array(
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
				'jnews_primary_category' =>
				array(
					'id' => '{{category:global:id}}',
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
						0 =>
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
						0 =>
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
		'we-can-all-contribute-to-safer-greener-and-healthier-city-streets' =>
		array(
			'title'          => 'We can all contribute to safer, greener and healthier city streets',
			'content'        => 'post1.txt',
			'featured_image' => 'news11',
			'post_type'      => 'post',
			'taxonomy'       =>
			array(
				'category' => 'education,opinion,sports',
				'post_tag' => 'bali,inspiration,people,tourism',
			),
			'metabox'        =>
			array(
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
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
						0 =>
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
						0 =>
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
		'top-10-hipster-things-to-do-in-canggu-where-you-can-chill-party' =>
		array(
			'title'          => 'Top 10 Hipster things to do in Canggu where you can chill & party',
			'content'        => 'post2.txt',
			'featured_image' => 'news10',
			'post_type'      => 'post',
			'taxonomy'       =>
			array(
				'category' => 'culture,essay,letters,opinion,sports',
				'post_tag' => 'inspiration,life,news,people',
			),
			'metabox'        =>
			array(
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
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
						0 =>
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
						0 =>
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
		'your-daily-coffee-habit-is-about-to-get-more-expensive' =>
		array(
			'title'          => 'Your daily coffee habit is about to get more expensive',
			'content'        => 'post1.txt',
			'featured_image' => 'news2',
			'post_type'      => 'post',
			'taxonomy'       =>
			array(
				'category' => 'editorial,essay,letters,opinion',
				'post_tag' => 'bali,inspiration,life,people,tourism',
			),
			'metabox'        =>
			array(
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
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
						0 =>
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
						0 =>
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
		'asean-aims-for-23-pct-renewables-in-energy-mix-by-2025' =>
		array(
			'title'          => 'Asean Aims for 23 Pct Renewables in Energy Mix by 2025',
			'content'        => 'post2.txt',
			'featured_image' => 'news7',
			'post_type'      => 'post',
			'taxonomy'       =>
			array(
				'category' => 'culture,editorial,essay',
				'post_tag' => 'article,bali,inspiration,people',
			),
			'metabox'        =>
			array(
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
				'jnews_primary_category' =>
				array(
					'id' => '{{category:editorial:id}}',
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
						0 =>
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
						0 =>
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
		'indonesia-could-reopen-bali-beaches-to-foreigners-by-end-of-july' =>
		array(
			'title'          => 'Indonesia could reopen Bali beaches to foreigners by end of july',
			'content'        => 'post1.txt',
			'featured_image' => 'news8',
			'post_type'      => 'post',
			'taxonomy'       =>
			array(
				'category' => 'culture,global,sports',
				'post_tag' => 'article,bali,inspiration,people',
			),
			'metabox'        =>
			array(
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
				'jnews_primary_category' =>
				array(
					'id' => '{{category:global:id}}',
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
						0 =>
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
						0 =>
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
		'orange-coffee-soda-is-your-mysteriously-delicious-summer-drink' =>
		array(
			'title'          => 'Orange coffee soda is your mysteriously delicious summer drink',
			'content'        => 'post2.txt',
			'featured_image' => 'news3',
			'post_type'      => 'post',
			'taxonomy'       =>
			array(
				'category' => 'culture,education,letters,opinion',
				'post_tag' => 'bali,inspiration,life,story',
			),
			'metabox'        =>
			array(
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
				'jnews_primary_category' =>
				array(
					'id' => '{{category:culture:id}}',
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
						0 =>
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
						0 =>
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
		'summer-instagram-captions-that-will-bring-sunny-vibes-to-your-feed' =>
		array(
			'title'          => 'Summer Instagram captions that will bring sunny vibes to your feed',
			'content'        => 'post1.txt',
			'featured_image' => 'news10',
			'post_type'      => 'post',
			'taxonomy'       =>
			array(
				'category' => 'global,opinion,sports',
				'post_tag' => 'article,guest,inspiration,people',
			),
			'metabox'        =>
			array(
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
				'jnews_primary_category' =>
				array(
					'id' => '{{category:global:id}}',
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
						0 =>
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
						0 =>
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
		'brazils-rio-de-janeiro-closes-beaches-as-pandemic-worsens' =>
		array(
			'title'          => 'Brazil\'s Rio de Janeiro closes beaches as pandemic worsens',
			'content'        => 'post2.txt',
			'featured_image' => 'news9',
			'post_type'      => 'post',
			'taxonomy'       =>
			array(
				'category' => 'culture,editorial,essay,sports',
				'post_tag' => 'bali,life,news,story',
			),
			'metabox'        =>
			array(
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
				'jnews_primary_category' =>
				array(
					'id' => '{{category:essay:id}}',
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
						0 =>
						array(
							'template'                 => '8',
							'single_blog_custom'       => '',
							'parallax'                 => '1',
							'fullscreen'               => '0',
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
							'show_post_related'        => '1',
							'show_inline_post_related' => '0',
						),
					),
					'override_image_size'        => '0',
					'image_override'             =>
					array(
						0 =>
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
		'home'                                             =>
		array(
			'title'     => 'Home',
			'content'   => 'home1.txt',
			'post_type' => 'page',
			'metabox'   =>
			array(
				'_wp_page_template'          => 'template-builder.php',
				'_wpb_post_custom_css'       => '.jnews-dark-mode .vc_custom_1628826221980 { background-color: var(--j-darkgrey-bg-color) !important; border-top-color: var(--j-border-color) !important; }',
				'_wpb_shortcodes_custom_css' => '.vc_custom_1628826221980 { border-top-width: 3px !important; padding-top: 35px !important; padding-right: 35px !important; padding-bottom: 35px !important; padding-left: 35px !important; background-color: #f7f7f7 !important; border-top-color: #1b8415 !important; border-top-style: solid !important; }',
				'_elementor_data'            => 'home1.json',
				'_elementor_edit_mode'       => 'builder',
				'_elementor_page_settings'   =>
				array(
					'custom_css' => '.vc_custom_1628826221980 { border-top-width: 3px !important; padding-top: 35px !important; padding-right: 35px !important; padding-bottom: 35px !important; padding-left: 35px !important; background-color: #f7f7f7 !important; border-top-color: #1b8415 !important; border-top-style: solid !important; } .jnews-dark-mode .vc_custom_1628826221980 { background-color: var(--j-darkgrey-bg-color) !important; border-top-color: var(--j-border-color) !important; }',
				),
			),
		),
	),
	'menu_location'   =>
	array(
		'footer-menu'        =>
		array(
			'title'    => 'Footer Menu',
			'location' => 'footer_navigation',
		),
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
	'menu'            =>
	array(
		'buy-jnews-3'         =>
		array(
			'location'       => 'footer-menu',
			'menu-item-data' =>
			array(
				'menu-item-title'  => 'Buy JNews',
				'menu-item-type'   => 'custom',
				'menu-item-object' => 'custom',
				'menu-item-status' => 'publish',
				'menu-item-url'    => 'https://themeforest.net/item/jnews-wordpress-blog-news-magazine-newspaper-theme/20566392?ref=jegtheme&license=regular&open_purchase_for_item_id=20566392',
			),
		),
		'support-forum-2'     =>
		array(
			'location'       => 'footer-menu',
			'menu-item-data' =>
			array(
				'menu-item-title'  => 'Support Forum',
				'menu-item-type'   => 'custom',
				'menu-item-object' => 'custom',
				'menu-item-status' => 'publish',
				'menu-item-url'    => 'https://themeforest.net/item/jnews-wordpress-blog-news-magazine-newspaper-theme/20566392?ref=jegtheme&license=regular&open_purchase_for_item_id=20566392',
			),
		),
		'pre-sale-question-2' =>
		array(
			'location'       => 'footer-menu',
			'menu-item-data' =>
			array(
				'menu-item-title'  => 'Pre-sale Question',
				'menu-item-type'   => 'custom',
				'menu-item-object' => 'custom',
				'menu-item-status' => 'publish',
				'menu-item-url'    => 'https://themeforest.net/item/jnews-one-stop-solution-for-web-publishing/20566392/comments?ref=jegtheme',
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
					'icon'              => '',
					'icon_image'        => '',
					'icon_color'        => '',
					'badge'             => 'disable',
					'badge_bg_color'    => '#f70d28',
					'badge_text_color'  => '#fff',
					'badge_text'        => '',
					'child_badge'       => 'disable',
					'child_badge_text'  => '',
				),
			),
		),
		'contact-us-2'        =>
		array(
			'location'       => 'footer-menu',
			'menu-item-data' =>
			array(
				'menu-item-title'  => 'Contact Us',
				'menu-item-type'   => 'custom',
				'menu-item-object' => 'custom',
				'menu-item-status' => 'publish',
				'menu-item-url'    => 'https://themeforest.net/user/jegtheme?ref=jegtheme',
			),
		),
		'home-menu'                   =>
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
		'opinion'             =>
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
		'editorial'           =>
		array(
			'location'       => 'main-navigation',
			'menu-item-data' =>
			array(
				'menu-item-title'     => 'Editorial',
				'menu-item-type'      => 'taxonomy',
				'menu-item-object'    => 'category',
				'menu-item-status'    => 'publish',
				'menu-item-object-id' => '{{category:editorial:id}}',
			),
		),
		'culture'             =>
		array(
			'location'       => 'main-navigation',
			'menu-item-data' =>
			array(
				'menu-item-title'     => 'Culture',
				'menu-item-type'      => 'taxonomy',
				'menu-item-object'    => 'category',
				'menu-item-status'    => 'publish',
				'menu-item-object-id' => '{{category:culture:id}}',
			),
		),
		'global'              =>
		array(
			'location'       => 'main-navigation',
			'menu-item-data' =>
			array(
				'menu-item-title'     => 'Global',
				'menu-item-type'      => 'taxonomy',
				'menu-item-object'    => 'category',
				'menu-item-status'    => 'publish',
				'menu-item-object-id' => '{{category:global:id}}',
			),
		),
		'essay'               =>
		array(
			'location'       => 'main-navigation',
			'menu-item-data' =>
			array(
				'menu-item-title'     => 'Essay',
				'menu-item-type'      => 'taxonomy',
				'menu-item-object'    => 'category',
				'menu-item-status'    => 'publish',
				'menu-item-object-id' => '{{category:essay:id}}',
			),
		),
		'letters'             =>
		array(
			'location'       => 'main-navigation',
			'menu-item-data' =>
			array(
				'menu-item-title'     => 'Letters',
				'menu-item-type'      => 'taxonomy',
				'menu-item-object'    => 'category',
				'menu-item-status'    => 'publish',
				'menu-item-object-id' => '{{category:letters:id}}',
			),
		),
		'sports'              =>
		array(
			'location'       => 'main-navigation',
			'menu-item-data' =>
			array(
				'menu-item-title'     => 'Sports',
				'menu-item-type'      => 'taxonomy',
				'menu-item-object'    => 'category',
				'menu-item-status'    => 'publish',
				'menu-item-object-id' => '{{category:sports:id}}',
			),
		),
		'education'           =>
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
		'landing-page'        =>
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
		'buy-jnews'           =>
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
		'support-forum'       =>
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
		'pre-sale-question'   =>
		array(
			'location'       => 'mobile-navigation',
			'menu-item-data' =>
			array(
				'menu-item-title'  => 'Pre-sale Question',
				'menu-item-type'   => 'custom',
				'menu-item-object' => 'custom',
				'menu-item-status' => 'publish',
				'menu-item-url'    => 'https://themeforest.net/item/jnews-one-stop-solution-for-web-publishing/20566392/comments?ref=jegtheme',
			),
		),
		'contact-us'          =>
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
		'landing-page-2'      =>
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
		'shop'                =>
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
		'contact'             =>
		array(
			'location'       => 'top-bar-navigation',
			'menu-item-data' =>
			array(
				'menu-item-title'  => 'Contact',
				'menu-item-type'   => 'custom',
				'menu-item-object' => 'custom',
				'menu-item-status' => 'publish',
				'menu-item-url'    => '#',
			),
		),
		'buy-jnews-2'         =>
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
	'widget_position' =>
	array(),
	'widget'          =>
	array(
		0 => 'widget.json',
	),
	'customizer'      =>
	array(
		0 => 'style.json',
	),
	'plugin'          =>
	array(
		'jnews-breadcrumb',
		'jnews-customizer-category',
		'jnews-essential',
		'jnews-instagram',
		'jnews-jsonld',
		'jnews-meta-header',
		'jnews-social-login',
		'jnews-social-share',
		'jnews-view-counter',
	),
);
