<?php

return array(

	// image
	'image'           => array(
		'video1'      => 'https://jegtheme.com/asset/jnews/demo/gadget-review/gadget1.jpg',
		'video2'      => 'https://jegtheme.com/asset/jnews/demo/gadget-review/gadget2.jpg',
		'video3'      => 'https://jegtheme.com/asset/jnews/demo/gadget-review/gadget3.jpg',
		'video4'      => 'https://jegtheme.com/asset/jnews/demo/gadget-review/gadget4.jpg',
		'video5'      => 'https://jegtheme.com/asset/jnews/demo/gadget-review/gadget5.jpg',
		'video6'      => 'https://jegtheme.com/asset/jnews/demo/gadget-review/gadget6.jpg',
		'video7'      => 'https://jegtheme.com/asset/jnews/demo/gadget-review/gadget7.jpg',

		'travel1'     => 'https://jegtheme.com/asset/jnews/demo/motorcycle/moto1.jpg',
		'travel2'     => 'https://jegtheme.com/asset/jnews/demo/motorcycle/moto2.jpg',
		'travel3'     => 'https://jegtheme.com/asset/jnews/demo/motorcycle/moto3.jpg',
		'travel4'     => 'https://jegtheme.com/asset/jnews/demo/motorcycle/moto4.jpg',
		'travel5'     => 'https://jegtheme.com/asset/jnews/demo/motorcycle/moto5.jpg',
		'travel6'     => 'https://jegtheme.com/asset/jnews/demo/motorcycle/moto6.jpg',

		'webp1'       => 'https://jegtheme.com/asset/jnews/demo/playit/webp1.webp',
		'webp2'       => 'https://jegtheme.com/asset/jnews/demo/playit/webp2.webp',
		'webp3'       => 'https://jegtheme.com/asset/jnews/demo/playit/webp3.webp',
		'webp4'       => 'https://jegtheme.com/asset/jnews/demo/playit/webp4.webp',

		'favicon'     => 'https://jegtheme.com/asset/jnews/demo/default/favicon.png',

		'logo'        => 'https://jegtheme.com/asset/jnews/demo/streamon/logo.png',
		'logo2x'      => 'https://jegtheme.com/asset/jnews/demo/streamon/logo@2x.png',

		'ad_345x345'  => 'http://jegtheme.com/asset/jnews/demo/default/ad_345x345.jpg',
		'ad_1140x160' => 'https://jegtheme.com/asset/jnews/demo/streamon/ad_1140x160.jpg',
	),

	// create taxonomy
	'taxonomy'        => array(
		'category' => array(
			'travel'        => array(
				'title'       => 'Travel',
				'description' => 'Category descriptions show here. You can change the description on each category from the WordPress administration panel.',
				'term_image'  => '{{image:travel2:id}}',
			),
			'technology'    => array(
				'title'       => 'Technology',
				'description' => 'Category descriptions show here. You can change the description on each category from the WordPress administration panel.',
				'term_image'  => '{{image:travel3:id}}',
			),
			'news'          => array(
				'title'       => 'News',
				'description' => 'Category descriptions show here. You can change the description on each category from the WordPress administration panel.',
				'term_image'  => '{{image:travel1:id}}',
			),
			'music'         => array(
				'title'       => 'Music',
				'description' => 'Category descriptions show here. You can change the description on each category from the WordPress administration panel.',
				'term_image'  => '{{image:travel2:id}}',
			),
			'movie'         => array(
				'title'       => 'Movie',
				'description' => 'Category descriptions show here. You can change the description on each category from the WordPress administration panel.',
				'term_image'  => '{{image:travel3:id}}',
			),
			'howto-style'   => array(
				'title'       => 'Howto & Style',
				'description' => 'Category descriptions show here. You can change the description on each category from the WordPress administration panel.',
				'term_image'  => '{{image:travel1:id}}',
			),
			'gaming'        => array(
				'title'       => 'Gaming',
				'description' => 'Category descriptions show here. You can change the description on each category from the WordPress administration panel.',
				'term_image'  => '{{image:travel2:id}}',
			),
			'entertainment' => array(
				'title'       => 'Entertainment',
				'description' => 'Category descriptions show here. You can change the description on each category from the WordPress administration panel.',
				'term_image'  => '{{image:travel3:id}}',
			),
		),
		'post_tag' => array(
			'dua-lipa' => array(
				'title' => 'Dua Lipa',
			),
			'mtv'      => array(
				'title' => 'MTV',
			),
			'music'    => array(
				'title' => 'Music',
			),
			'video'    => array(
				'title' => 'Video',
			),
		),
	),

	// post & page
	'post'            => array (
		'im-a-cat-lover' => 
		array (
		  'title' => 'Im A Cat Lover',
		  'content' => 'story.json',
		  'featured_image' => 'video1',
		  'post_type' => 'web-story',
		  'taxonomy' => 
		  array (
		  ),
		  'metabox' => 
		  array (
		  ),
		),
		'hidden-gem' => 
		array (
		  'title' => 'Hidden Gem',
		  'content' => 'story.json',
		  'featured_image' => 'video2',
		  'post_type' => 'web-story',
		  'taxonomy' => 
		  array (
		  ),
		  'metabox' => 
		  array (
		  ),
		),
		'with-my-son' => 
		array (
		  'title' => 'With My Son',
		  'content' => 'story.json',
		  'featured_image' => 'video3',
		  'post_type' => 'web-story',
		  'taxonomy' => 
		  array (
		  ),
		  'metabox' => 
		  array (
		  ),
		),
		'good-tv-series' => 
		array (
		  'title' => 'Good TV Series',
		  'content' => 'story.json',
		  'featured_image' => 'video4',
		  'post_type' => 'web-story',
		  'taxonomy' => 
		  array (
		  ),
		  'metabox' => 
		  array (
		  ),
		),
		'saving-habbit' => 
		array (
		  'title' => 'Saving Habbit',
		  'content' => 'story.json',
		  'featured_image' => 'video5',
		  'post_type' => 'web-story',
		  'taxonomy' => 
		  array (
		  ),
		  'metabox' => 
		  array (
		  ),
		),
		'making-ramen' => 
		array (
		  'title' => 'Making Ramen',
		  'content' => 'story.json',
		  'featured_image' => 'video6',
		  'post_type' => 'web-story',
		  'taxonomy' => 
		  array (
		  ),
		  'metabox' => 
		  array (
		  ),
		),
		'new-roomate' => 
		array (
		  'title' => 'New Roomate',
		  'content' => 'story.json',
		  'featured_image' => 'video1',
		  'post_type' => 'web-story',
		  'taxonomy' => 
		  array (
		  ),
		  'metabox' => 
		  array (
		  ),
		),
		'gaming-gear' => 
		array (
		  'title' => 'Gaming Gear',
		  'content' => 'story.json',
		  'featured_image' => 'video2',
		  'post_type' => 'web-story',
		  'taxonomy' => 
		  array (
		  ),
		  'metabox' => 
		  array (
		  ),
		),
		'tutorial-makeup' => 
		array (
		  'title' => 'Tutorial MakeUp',
		  'content' => 'story.json',
		  'featured_image' => 'video3',
		  'post_type' => 'web-story',
		  'taxonomy' => 
		  array (
		  ),
		  'metabox' => 
		  array (
		  ),
		),
		'mindful-eating' => 
		array (
		  'title' => 'Mindful Eating',
		  'content' => 'story.json',
		  'featured_image' => 'video4',
		  'post_type' => 'web-story',
		  'taxonomy' => 
		  array (
		  ),
		  'metabox' => 
		  array (
		  ),
		),
		'crypto-trading' => 
		array (
		  'title' => 'Crypto Trading',
		  'content' => 'story.json',
		  'featured_image' => 'video5',
		  'post_type' => 'web-story',
		  'taxonomy' => 
		  array (
		  ),
		  'metabox' => 
		  array (
		  ),
		),
		'travel-dream' => 
		array (
		  'title' => 'Traveling Tips',
		  'content' => 'story.json',
		  'featured_image' => 'video6',
		  'post_type' => 'web-story',
		  'taxonomy' => 
		  array (
		  ),
		  'metabox' => 
		  array (
		  ),
		),
		'live-concert' => 
		array (
		  'title' => 'Live Concert',
		  'content' => 'story.json',
		  'featured_image' => 'video1',
		  'post_type' => 'web-story',
		  'taxonomy' => 
		  array (
		  ),
		  'metabox' => 
		  array (
		  ),
		),
		'stream-highlight' => 
		array (
		  'title' => 'Stream Highlight',
		  'content' => 'story.json',
		  'featured_image' => 'video2',
		  'post_type' => 'web-story',
		  'taxonomy' => 
		  array (
		  ),
		  'metabox' => 
		  array (
		  ),
		),
		'teslas-chinese-factory-just-delivered-its-first-cars' => 
		array (
		  'title' => 'Canon woos pro photographers with EOS-1D X Mark III',
		  'content' => 'post1.txt',
		  'featured_image' => 'video1',
		  'post_type' => 'post',
		  'taxonomy' => 
		  array (
			'post_format' => 'post-format-video',
			'category' => 'news,technology',
		  ),
		  'metabox' => 
		  array (
			'_format_video_embed' => 'https://www.youtube.com/watch?v=Hxl--qaWCg8',
			'jnews_primary_category' => 
			array (
			  'id' => '{{category:technology:id}}',
			),
			'jnews_single_post' => 
			array (
			  'source_name' => '',
			  'source_url' => '',
			  'via_name' => '',
			  'via_url' => '',
			  'override_template' => '0',
			  'override' => 
			  array (
				0 => 
				array (
				  'template' => '1',
				  'single_blog_custom' => '',
				  'parallax' => '1',
				  'fullscreen' => '0',
				  'layout' => 'right-sidebar',
				  'sidebar' => 'default-sidebar',
				  'second_sidebar' => 'default-sidebar',
				  'sticky_sidebar' => '1',
				  'share_position' => 'top',
				  'share_float_style' => 'share-monocrhome',
				  'show_share_counter' => '1',
				  'show_view_counter' => '1',
				  'show_featured' => '1',
				  'show_post_meta' => '1',
				  'show_post_author' => '1',
				  'show_post_author_image' => '1',
				  'show_post_date' => '1',
				  'post_date_format' => 'default',
				  'post_date_format_custom' => 'Y/m/d',
				  'show_post_category' => '1',
				  'show_post_reading_time' => '0',
				  'post_reading_time_wpm' => '300',
				  'show_zoom_button' => '0',
				  'zoom_button_out_step' => '2',
				  'zoom_button_in_step' => '3',
				  'show_post_tag' => '1',
				  'show_prev_next_post' => '1',
				  'show_popup_post' => '1',
				  'number_popup_post' => '1',
				  'show_author_box' => '0',
				  'show_post_related' => '0',
				  'show_inline_post_related' => '0',
				),
			  ),
			  'override_image_size' => '0',
			  'image_override' => 
			  array (
				0 => 
				array (
				  'single_post_thumbnail_size' => 'crop-500',
				  'single_post_gallery_size' => 'crop-500',
				),
			  ),
			  'trending_post' => '0',
			  'trending_post_position' => 'meta',
			  'trending_post_label' => 'Trending',
			),
			'jnews_video_option' => 
			array (
			  'video_duration' => '00:17:40',
			  'video_preview' => '{{image:imageW7:src}}',
			),
		  ),
		),
		'another-director-leaves-the-uncharted-movie' => 
		array (
		  'title' => 'New Bill And Ted Face The Music Image Pairs The Duo With Their Daughters',
		  'content' => 'post2.txt',
		  'featured_image' => 'video2',
		  'post_type' => 'post',
		  'taxonomy' => 
		  array (
			'post_format' => 'post-format-video',
			'category' => 'gaming,movie,news',
		  ),
		  'metabox' => 
		  array (
			'_format_video_embed' => 'https://www.youtube.com/watch?v=6XI3tKLBNz4',
			'jnews_primary_category' => 
			array (
			  'id' => '{{category:gaming:id}}',
			),
			'jnews_single_post' => 
			array (
			  'source_name' => '',
			  'source_url' => '',
			  'via_name' => '',
			  'via_url' => '',
			  'override_template' => '0',
			  'override' => 
			  array (
				0 => 
				array (
				  'template' => '1',
				  'single_blog_custom' => '',
				  'parallax' => '1',
				  'fullscreen' => '0',
				  'layout' => 'right-sidebar',
				  'sidebar' => 'default-sidebar',
				  'second_sidebar' => 'default-sidebar',
				  'sticky_sidebar' => '1',
				  'share_position' => 'top',
				  'share_float_style' => 'share-monocrhome',
				  'show_share_counter' => '1',
				  'show_view_counter' => '1',
				  'show_featured' => '1',
				  'show_post_meta' => '1',
				  'show_post_author' => '1',
				  'show_post_author_image' => '1',
				  'show_post_date' => '1',
				  'post_date_format' => 'default',
				  'post_date_format_custom' => 'Y/m/d',
				  'show_post_category' => '1',
				  'show_post_reading_time' => '0',
				  'post_reading_time_wpm' => '300',
				  'show_zoom_button' => '0',
				  'zoom_button_out_step' => '2',
				  'zoom_button_in_step' => '3',
				  'show_post_tag' => '1',
				  'show_prev_next_post' => '1',
				  'show_popup_post' => '1',
				  'number_popup_post' => '1',
				  'show_author_box' => '0',
				  'show_post_related' => '0',
				  'show_inline_post_related' => '0',
				),
			  ),
			  'override_image_size' => '0',
			  'image_override' => 
			  array (
				0 => 
				array (
				  'single_post_thumbnail_size' => 'crop-500',
				  'single_post_gallery_size' => 'crop-500',
				),
			  ),
			  'trending_post' => '0',
			  'trending_post_position' => 'meta',
			  'trending_post_label' => 'Trending',
			),
			'jnews_video_option' => 
			array (
			  'video_duration' => '00:02:57',
			  'video_preview' => '{{image:imageW10:src}}',
			),
		  ),
		),
		'coachella-coming-to-celebrate-20-years-in-the-desert' => 
		array (
		  'title' => 'Coachella Coming to Celebrate \'20 Years in the Desert\'',
		  'content' => 'post1.txt',
		  'featured_image' => 'video3',
		  'post_type' => 'post',
		  'taxonomy' => 
		  array (
			'post_format' => 'post-format-video',
			'category' => 'music',
		  ),
		  'metabox' => 
		  array (
			'_format_video_embed' => 'https://www.youtube.com/watch?v=-ihAae7MHfQ',
			'jnews_primary_category' => 
			array (
			  'id' => '{{category:music:id}}',
			),
			'jnews_single_post' => 
			array (
			  'source_name' => '',
			  'source_url' => '',
			  'via_name' => '',
			  'via_url' => '',
			  'override_template' => '0',
			  'override' => 
			  array (
				0 => 
				array (
				  'template' => '1',
				  'single_blog_custom' => '',
				  'parallax' => '1',
				  'fullscreen' => '0',
				  'layout' => 'right-sidebar',
				  'sidebar' => 'default-sidebar',
				  'second_sidebar' => 'default-sidebar',
				  'sticky_sidebar' => '1',
				  'share_position' => 'top',
				  'share_float_style' => 'share-monocrhome',
				  'show_share_counter' => '1',
				  'show_view_counter' => '1',
				  'show_featured' => '1',
				  'show_post_meta' => '1',
				  'show_post_author' => '1',
				  'show_post_author_image' => '1',
				  'show_post_date' => '1',
				  'post_date_format' => 'default',
				  'post_date_format_custom' => 'Y/m/d',
				  'show_post_category' => '1',
				  'show_post_reading_time' => '0',
				  'post_reading_time_wpm' => '300',
				  'show_zoom_button' => '0',
				  'zoom_button_out_step' => '2',
				  'zoom_button_in_step' => '3',
				  'show_post_tag' => '1',
				  'show_prev_next_post' => '1',
				  'show_popup_post' => '1',
				  'number_popup_post' => '1',
				  'show_author_box' => '0',
				  'show_post_related' => '0',
				  'show_inline_post_related' => '0',
				),
			  ),
			  'override_image_size' => '0',
			  'image_override' => 
			  array (
				0 => 
				array (
				  'single_post_thumbnail_size' => 'crop-500',
				  'single_post_gallery_size' => 'crop-500',
				),
			  ),
			  'trending_post' => '0',
			  'trending_post_position' => 'meta',
			  'trending_post_label' => 'Trending',
			),
			'jnews_video_option' => 
			array (
			  'video_duration' => '00:07:58',
			  'video_preview' => '{{image:imageW10:src}}',
			),
		  ),
		),
		'niki-la-la-lost-you-official-music-video' => 
		array (
		  'title' => 'Sam Smith Encourages Fans to Love Their Bodies in Inspiring New Post',
		  'content' => 'post2.txt',
		  'featured_image' => 'video4',
		  'post_type' => 'post',
		  'taxonomy' => 
		  array (
			'post_format' => 'post-format-video',
			'category' => 'music',
		  ),
		  'metabox' => 
		  array (
			'_format_video_embed' => 'https://www.youtube.com/watch?v=DIU3xPdhCBI',
			'jnews_primary_category' => 
			array (
			  'id' => '{{category:music:id}}',
			),
			'jnews_single_post' => 
			array (
			  'source_name' => '',
			  'source_url' => '',
			  'via_name' => '',
			  'via_url' => '',
			  'override_template' => '0',
			  'override' => 
			  array (
				0 => 
				array (
				  'template' => '1',
				  'single_blog_custom' => '',
				  'parallax' => '1',
				  'fullscreen' => '0',
				  'layout' => 'right-sidebar',
				  'sidebar' => 'default-sidebar',
				  'second_sidebar' => 'default-sidebar',
				  'sticky_sidebar' => '1',
				  'share_position' => 'top',
				  'share_float_style' => 'share-monocrhome',
				  'show_share_counter' => '1',
				  'show_view_counter' => '1',
				  'show_featured' => '1',
				  'show_post_meta' => '1',
				  'show_post_author' => '1',
				  'show_post_author_image' => '1',
				  'show_post_date' => '1',
				  'post_date_format' => 'default',
				  'post_date_format_custom' => 'Y/m/d',
				  'show_post_category' => '1',
				  'show_post_reading_time' => '0',
				  'post_reading_time_wpm' => '300',
				  'show_zoom_button' => '0',
				  'zoom_button_out_step' => '2',
				  'zoom_button_in_step' => '3',
				  'show_post_tag' => '1',
				  'show_prev_next_post' => '1',
				  'show_popup_post' => '1',
				  'number_popup_post' => '1',
				  'show_author_box' => '0',
				  'show_post_related' => '0',
				  'show_inline_post_related' => '0',
				),
			  ),
			  'override_image_size' => '0',
			  'image_override' => 
			  array (
				0 => 
				array (
				  'single_post_thumbnail_size' => 'crop-500',
				  'single_post_gallery_size' => 'crop-500',
				),
			  ),
			  'trending_post' => '0',
			  'trending_post_position' => 'meta',
			  'trending_post_label' => 'Trending',
			),
			'jnews_video_option' => 
			array (
			  'video_duration' => '00:05:40',
			  'video_preview' => '{{image:imageW10:src}}',
			),
		  ),
		),
		'top-1-fanny-global-gameplay-mobile-legends-bang-bang' => 
		array (
		  'title' => 'Gollum \'doesn\'t look like Andy Serkis\' in Daedalic\'s new Lord of the Rings game',
		  'content' => 'post1.txt',
		  'featured_image' => 'video5',
		  'post_type' => 'post',
		  'taxonomy' => 
		  array (
			'post_format' => 'post-format-video',
			'category' => 'gaming',
		  ),
		  'metabox' => 
		  array (
			'_format_video_embed' => 'https://www.youtube.com/watch?v=jBcBtW5xJsk',
			'jnews_primary_category' => 
			array (
			  'id' => '{{category:gaming:id}}',
			),
			'jnews_single_post' => 
			array (
			  'source_name' => '',
			  'source_url' => '',
			  'via_name' => '',
			  'via_url' => '',
			  'override_template' => '0',
			  'override' => 
			  array (
				0 => 
				array (
				  'template' => '1',
				  'single_blog_custom' => '',
				  'parallax' => '1',
				  'fullscreen' => '0',
				  'layout' => 'right-sidebar',
				  'sidebar' => 'default-sidebar',
				  'second_sidebar' => 'default-sidebar',
				  'sticky_sidebar' => '1',
				  'share_position' => 'top',
				  'share_float_style' => 'share-monocrhome',
				  'show_share_counter' => '1',
				  'show_view_counter' => '1',
				  'show_featured' => '1',
				  'show_post_meta' => '1',
				  'show_post_author' => '1',
				  'show_post_author_image' => '1',
				  'show_post_date' => '1',
				  'post_date_format' => 'default',
				  'post_date_format_custom' => 'Y/m/d',
				  'show_post_category' => '1',
				  'show_post_reading_time' => '0',
				  'post_reading_time_wpm' => '300',
				  'show_zoom_button' => '0',
				  'zoom_button_out_step' => '2',
				  'zoom_button_in_step' => '3',
				  'show_post_tag' => '1',
				  'show_prev_next_post' => '1',
				  'show_popup_post' => '1',
				  'number_popup_post' => '1',
				  'show_author_box' => '0',
				  'show_post_related' => '0',
				  'show_inline_post_related' => '0',
				),
			  ),
			  'override_image_size' => '0',
			  'image_override' => 
			  array (
				0 => 
				array (
				  'single_post_thumbnail_size' => 'crop-500',
				  'single_post_gallery_size' => 'crop-500',
				),
			  ),
			  'trending_post' => '0',
			  'trending_post_position' => 'meta',
			  'trending_post_label' => 'Trending',
			),
			'jnews_video_option' => 
			array (
			  'video_duration' => '00:12:19',
			  'video_preview' => '{{image:imageW2:src}}',
			),
		  ),
		),
		'10-old-trends-that-everyone-is-wearing-again-in-2020' => 
		array (
		  'title' => '10 Time Management Tips That Work',
		  'content' => 'post2.txt',
		  'featured_image' => 'video6',
		  'post_type' => 'post',
		  'taxonomy' => 
		  array (
			'post_format' => 'post-format-video',
			'category' => 'howto-style',
		  ),
		  'metabox' => 
		  array (
			'_format_video_embed' => 'https://www.youtube.com/watch?v=xwsLuxlbY2w',
			'jnews_primary_category' => 
			array (
			  'id' => '{{category:howto-style:id}}',
			),
			'jnews_single_post' => 
			array (
			  'source_name' => '',
			  'source_url' => '',
			  'via_name' => '',
			  'via_url' => '',
			  'override_template' => '0',
			  'override' => 
			  array (
				0 => 
				array (
				  'template' => '1',
				  'single_blog_custom' => '',
				  'parallax' => '1',
				  'fullscreen' => '0',
				  'layout' => 'right-sidebar',
				  'sidebar' => 'default-sidebar',
				  'second_sidebar' => 'default-sidebar',
				  'sticky_sidebar' => '1',
				  'share_position' => 'top',
				  'share_float_style' => 'share-monocrhome',
				  'show_share_counter' => '1',
				  'show_view_counter' => '1',
				  'show_featured' => '1',
				  'show_post_meta' => '1',
				  'show_post_author' => '1',
				  'show_post_author_image' => '1',
				  'show_post_date' => '1',
				  'post_date_format' => 'default',
				  'post_date_format_custom' => 'Y/m/d',
				  'show_post_category' => '1',
				  'show_post_reading_time' => '0',
				  'post_reading_time_wpm' => '300',
				  'show_zoom_button' => '0',
				  'zoom_button_out_step' => '2',
				  'zoom_button_in_step' => '3',
				  'show_post_tag' => '1',
				  'show_prev_next_post' => '1',
				  'show_popup_post' => '1',
				  'number_popup_post' => '1',
				  'show_author_box' => '0',
				  'show_post_related' => '0',
				  'show_inline_post_related' => '0',
				),
			  ),
			  'override_image_size' => '0',
			  'image_override' => 
			  array (
				0 => 
				array (
				  'single_post_thumbnail_size' => 'crop-500',
				  'single_post_gallery_size' => 'crop-500',
				),
			  ),
			  'trending_post' => '0',
			  'trending_post_position' => 'meta',
			  'trending_post_label' => 'Trending',
			),
			'jnews_video_option' => 
			array (
			  'video_duration' => '00:13:46',
			  'video_preview' => '{{image:imageW7:src}}',
			),
		  ),
		),
		'get-ready-for-apples-new-8k-vr-ar-headset-in-2020' => 
		array (
		  'title' => 'Australia bushfires: What countries have offered international aid?',
		  'content' => 'post1.txt',
		  'featured_image' => 'video7',
		  'post_type' => 'post',
		  'taxonomy' => 
		  array (
			'post_format' => 'post-format-video',
			'category' => 'news,technology',
		  ),
		  'metabox' => 
		  array (
			'_format_video_embed' => 'https://www.youtube.com/watch?v=yNdWtNlJEzw',
			'jnews_primary_category' => 
			array (
			  'id' => '{{category:news:id}}',
			),
			'jnews_single_post' => 
			array (
			  'source_name' => '',
			  'source_url' => '',
			  'via_name' => '',
			  'via_url' => '',
			  'override_template' => '0',
			  'override' => 
			  array (
				0 => 
				array (
				  'template' => '1',
				  'single_blog_custom' => '',
				  'parallax' => '1',
				  'fullscreen' => '0',
				  'layout' => 'right-sidebar',
				  'sidebar' => 'default-sidebar',
				  'second_sidebar' => 'default-sidebar',
				  'sticky_sidebar' => '1',
				  'share_position' => 'top',
				  'share_float_style' => 'share-monocrhome',
				  'show_share_counter' => '1',
				  'show_view_counter' => '1',
				  'show_featured' => '1',
				  'show_post_meta' => '1',
				  'show_post_author' => '1',
				  'show_post_author_image' => '1',
				  'show_post_date' => '1',
				  'post_date_format' => 'default',
				  'post_date_format_custom' => 'Y/m/d',
				  'show_post_category' => '1',
				  'show_post_reading_time' => '0',
				  'post_reading_time_wpm' => '300',
				  'show_zoom_button' => '0',
				  'zoom_button_out_step' => '2',
				  'zoom_button_in_step' => '3',
				  'show_post_tag' => '1',
				  'show_prev_next_post' => '1',
				  'show_popup_post' => '1',
				  'number_popup_post' => '1',
				  'show_author_box' => '0',
				  'show_post_related' => '0',
				  'show_inline_post_related' => '0',
				),
			  ),
			  'override_image_size' => '0',
			  'image_override' => 
			  array (
				0 => 
				array (
				  'single_post_thumbnail_size' => 'crop-500',
				  'single_post_gallery_size' => 'crop-500',
				),
			  ),
			  'trending_post' => '0',
			  'trending_post_position' => 'meta',
			  'trending_post_label' => 'Trending',
			),
			'jnews_video_option' => 
			array (
			  'video_duration' => '00:12:47',
			  'video_preview' => '{{image:imageW7:src}}',
			),
		  ),
		),
		'life-fast-draw-young-the-story-of-yung-lenox' => 
		array (
		  'title' => 'Christian Bale In Talks To Join Thor: Love And Thunder',
		  'content' => 'post2.txt',
		  'featured_image' => 'video1',
		  'post_type' => 'post',
		  'taxonomy' => 
		  array (
			'post_format' => 'post-format-video',
			'category' => 'entertainment,movie',
		  ),
		  'metabox' => 
		  array (
			'_format_video_embed' => 'https://www.youtube.com/watch?v=cB-wN3Jr_-o&t=46s',
			'jnews_primary_category' => 
			array (
			  'id' => '{{category:movie:id}}',
			),
			'jnews_single_post' => 
			array (
			  'source_name' => '',
			  'source_url' => '',
			  'via_name' => '',
			  'via_url' => '',
			  'override_template' => '0',
			  'override' => 
			  array (
				0 => 
				array (
				  'template' => '1',
				  'single_blog_custom' => '',
				  'parallax' => '1',
				  'fullscreen' => '0',
				  'layout' => 'right-sidebar',
				  'sidebar' => 'default-sidebar',
				  'second_sidebar' => 'default-sidebar',
				  'sticky_sidebar' => '1',
				  'share_position' => 'top',
				  'share_float_style' => 'share-monocrhome',
				  'show_share_counter' => '1',
				  'show_view_counter' => '1',
				  'show_featured' => '1',
				  'show_post_meta' => '1',
				  'show_post_author' => '1',
				  'show_post_author_image' => '1',
				  'show_post_date' => '1',
				  'post_date_format' => 'default',
				  'post_date_format_custom' => 'Y/m/d',
				  'show_post_category' => '1',
				  'show_post_reading_time' => '0',
				  'post_reading_time_wpm' => '300',
				  'show_zoom_button' => '0',
				  'zoom_button_out_step' => '2',
				  'zoom_button_in_step' => '3',
				  'show_post_tag' => '1',
				  'show_prev_next_post' => '1',
				  'show_popup_post' => '1',
				  'number_popup_post' => '1',
				  'show_author_box' => '0',
				  'show_post_related' => '0',
				  'show_inline_post_related' => '0',
				),
			  ),
			  'override_image_size' => '0',
			  'image_override' => 
			  array (
				0 => 
				array (
				  'single_post_thumbnail_size' => 'crop-500',
				  'single_post_gallery_size' => 'crop-500',
				),
			  ),
			  'trending_post' => '0',
			  'trending_post_position' => 'meta',
			  'trending_post_label' => 'Trending',
			),
			'jnews_video_option' => 
			array (
			  'video_duration' => '00:04:07',
			  'video_preview' => '{{image:imageW6:src}}',
			),
		  ),
		),
		'travelers-guide-to-monte-carlo-monaco' => 
		array (
		  'title' => 'Traveler\'s Guide to Monte Carlo, Monaco',
		  'content' => 'post1.txt',
		  'featured_image' => 'video2',
		  'post_type' => 'post',
		  'taxonomy' => 
		  array (
			'post_format' => 'post-format-video',
			'category' => 'travel',
		  ),
		  'metabox' => 
		  array (
			'_format_video_embed' => 'https://www.youtube.com/watch?v=zB42rJ6WE78',
			'jnews_single_post' => 
			array (
			  'source_name' => '',
			  'source_url' => '',
			  'via_name' => '',
			  'via_url' => '',
			  'override_template' => '0',
			  'override' => 
			  array (
				0 => 
				array (
				  'template' => '1',
				  'single_blog_custom' => '',
				  'parallax' => '1',
				  'fullscreen' => '0',
				  'layout' => 'right-sidebar',
				  'sidebar' => 'default-sidebar',
				  'second_sidebar' => 'default-sidebar',
				  'sticky_sidebar' => '1',
				  'share_position' => 'top',
				  'share_float_style' => 'share-monocrhome',
				  'show_share_counter' => '1',
				  'show_view_counter' => '1',
				  'show_featured' => '1',
				  'show_post_meta' => '1',
				  'show_post_author' => '1',
				  'show_post_author_image' => '1',
				  'show_post_date' => '1',
				  'post_date_format' => 'default',
				  'post_date_format_custom' => 'Y/m/d',
				  'show_post_category' => '1',
				  'show_post_reading_time' => '0',
				  'post_reading_time_wpm' => '300',
				  'show_zoom_button' => '0',
				  'zoom_button_out_step' => '2',
				  'zoom_button_in_step' => '3',
				  'show_post_tag' => '1',
				  'show_prev_next_post' => '1',
				  'show_popup_post' => '1',
				  'number_popup_post' => '1',
				  'show_author_box' => '0',
				  'show_post_related' => '0',
				  'show_inline_post_related' => '0',
				),
			  ),
			  'override_image_size' => '0',
			  'image_override' => 
			  array (
				0 => 
				array (
				  'single_post_thumbnail_size' => 'crop-500',
				  'single_post_gallery_size' => 'crop-500',
				),
			  ),
			  'trending_post' => '0',
			  'trending_post_position' => 'meta',
			  'trending_post_label' => 'Trending',
			),
			'jnews_video_option' => 
			array (
			  'video_duration' => '00:02:24',
			  'video_preview' => '{{image:imageW5:src}}',
			),
		  ),
		),
		'emma-watson-talks-about-turning-30-to-british-vogue' => 
		array (
		  'title' => '5 Secrets for Making Your Cleaning Business a Success',
		  'content' => 'post2.txt',
		  'featured_image' => 'video3',
		  'post_type' => 'post',
		  'taxonomy' => 
		  array (
			'post_format' => 'post-format-video',
			'category' => 'howto-style',
		  ),
		  'metabox' => 
		  array (
			'_format_video_embed' => 'https://www.youtube.com/watch?v=p4miETh5M14',
			'jnews_primary_category' => 
			array (
			  'id' => '{{category:howto-style:id}}',
			),
			'jnews_single_post' => 
			array (
			  'source_name' => '',
			  'source_url' => '',
			  'via_name' => '',
			  'via_url' => '',
			  'override_template' => '0',
			  'override' => 
			  array (
				0 => 
				array (
				  'template' => '1',
				  'single_blog_custom' => '',
				  'parallax' => '1',
				  'fullscreen' => '0',
				  'layout' => 'right-sidebar',
				  'sidebar' => 'default-sidebar',
				  'second_sidebar' => 'default-sidebar',
				  'sticky_sidebar' => '1',
				  'share_position' => 'top',
				  'share_float_style' => 'share-monocrhome',
				  'show_share_counter' => '1',
				  'show_view_counter' => '1',
				  'show_featured' => '1',
				  'show_post_meta' => '1',
				  'show_post_author' => '1',
				  'show_post_author_image' => '1',
				  'show_post_date' => '1',
				  'post_date_format' => 'default',
				  'post_date_format_custom' => 'Y/m/d',
				  'show_post_category' => '1',
				  'show_post_reading_time' => '0',
				  'post_reading_time_wpm' => '300',
				  'show_zoom_button' => '0',
				  'zoom_button_out_step' => '2',
				  'zoom_button_in_step' => '3',
				  'show_post_tag' => '1',
				  'show_prev_next_post' => '1',
				  'show_popup_post' => '1',
				  'number_popup_post' => '1',
				  'show_author_box' => '0',
				  'show_post_related' => '0',
				  'show_inline_post_related' => '0',
				),
			  ),
			  'override_image_size' => '0',
			  'image_override' => 
			  array (
				0 => 
				array (
				  'single_post_thumbnail_size' => 'crop-500',
				  'single_post_gallery_size' => 'crop-500',
				),
			  ),
			  'trending_post' => '0',
			  'trending_post_position' => 'meta',
			  'trending_post_label' => 'Trending',
			),
			'jnews_video_option' => 
			array (
			  'video_duration' => '00:13:39',
			  'video_preview' => '{{image:imageW5:src}}',
			),
		  ),
		),
		'diablo-4-will-bring-back-elective-mode-blizzard-confirms' => 
		array (
		  'title' => 'Soma studio Frictional Games may be teasing its next horrific thing',
		  'content' => 'post1.txt',
		  'featured_image' => 'video4',
		  'post_type' => 'post',
		  'taxonomy' => 
		  array (
			'post_format' => 'post-format-video',
			'category' => 'gaming',
		  ),
		  'metabox' => 
		  array (
			'post_subtitle' => 'The copy warned the Little Blind Text.',
			'_format_video_embed' => 'https://www.youtube.com/watch?v=FD0h-s6NUeM',
			'jnews_primary_category' => 
			array (
			  'id' => '{{category:gaming:id}}',
			),
			'jnews_single_post' => 
			array (
			  'source_name' => '',
			  'source_url' => '',
			  'via_name' => '',
			  'via_url' => '',
			  'override_template' => '0',
			  'override' => 
			  array (
				0 => 
				array (
				  'template' => '1',
				  'single_blog_custom' => '',
				  'parallax' => '1',
				  'fullscreen' => '0',
				  'layout' => 'right-sidebar',
				  'sidebar' => 'default-sidebar',
				  'second_sidebar' => 'default-sidebar',
				  'sticky_sidebar' => '1',
				  'share_position' => 'top',
				  'share_float_style' => 'share-monocrhome',
				  'show_share_counter' => '1',
				  'show_view_counter' => '1',
				  'show_featured' => '1',
				  'show_post_meta' => '1',
				  'show_post_author' => '1',
				  'show_post_author_image' => '1',
				  'show_post_date' => '1',
				  'post_date_format' => 'default',
				  'post_date_format_custom' => 'Y/m/d',
				  'show_post_category' => '1',
				  'show_post_reading_time' => '0',
				  'post_reading_time_wpm' => '300',
				  'show_zoom_button' => '0',
				  'zoom_button_out_step' => '2',
				  'zoom_button_in_step' => '3',
				  'show_post_tag' => '1',
				  'show_prev_next_post' => '1',
				  'show_popup_post' => '1',
				  'number_popup_post' => '1',
				  'show_author_box' => '0',
				  'show_post_related' => '0',
				  'show_inline_post_related' => '0',
				),
			  ),
			  'override_image_size' => '0',
			  'image_override' => 
			  array (
				0 => 
				array (
				  'single_post_thumbnail_size' => 'crop-500',
				  'single_post_gallery_size' => 'crop-500',
				),
			  ),
			  'trending_post' => '0',
			  'trending_post_position' => 'meta',
			  'trending_post_label' => 'Trending',
			),
			'jnews_video_option' => 
			array (
			  'video_duration' => '05:03:34',
			  'video_preview' => '{{image:imageW7:src}}',
			),
		  ),
		),
		'how-to-get-around-rome-on-the-cheap-in-2019' => 
		array (
		  'title' => 'How to Get Around Rome on the Cheap in 2019',
		  'content' => 'post2.txt',
		  'featured_image' => 'video5',
		  'post_type' => 'post',
		  'taxonomy' => 
		  array (
			'post_format' => 'post-format-video',
			'category' => 'travel',
		  ),
		  'metabox' => 
		  array (
			'_format_video_embed' => 'https://www.youtube.com/watch?v=DnL-zJ5DcQw',
			'jnews_single_post' => 
			array (
			  'source_name' => '',
			  'source_url' => '',
			  'via_name' => '',
			  'via_url' => '',
			  'override_template' => '0',
			  'override' => 
			  array (
				0 => 
				array (
				  'template' => '1',
				  'single_blog_custom' => '',
				  'parallax' => '1',
				  'fullscreen' => '0',
				  'layout' => 'right-sidebar',
				  'sidebar' => 'default-sidebar',
				  'second_sidebar' => 'default-sidebar',
				  'sticky_sidebar' => '1',
				  'share_position' => 'top',
				  'share_float_style' => 'share-monocrhome',
				  'show_share_counter' => '1',
				  'show_view_counter' => '1',
				  'show_featured' => '1',
				  'show_post_meta' => '1',
				  'show_post_author' => '1',
				  'show_post_author_image' => '1',
				  'show_post_date' => '1',
				  'post_date_format' => 'default',
				  'post_date_format_custom' => 'Y/m/d',
				  'show_post_category' => '1',
				  'show_post_reading_time' => '0',
				  'post_reading_time_wpm' => '300',
				  'show_zoom_button' => '0',
				  'zoom_button_out_step' => '2',
				  'zoom_button_in_step' => '3',
				  'show_post_tag' => '1',
				  'show_prev_next_post' => '1',
				  'show_popup_post' => '1',
				  'number_popup_post' => '1',
				  'show_author_box' => '0',
				  'show_post_related' => '0',
				  'show_inline_post_related' => '0',
				),
			  ),
			  'override_image_size' => '0',
			  'image_override' => 
			  array (
				0 => 
				array (
				  'single_post_thumbnail_size' => 'crop-500',
				  'single_post_gallery_size' => 'crop-500',
				),
			  ),
			  'trending_post' => '0',
			  'trending_post_position' => 'meta',
			  'trending_post_label' => 'Trending',
			),
			'jnews_video_option' => 
			array (
			  'video_duration' => '00:18:00',
			  'video_preview' => '{{image:imageW1:src}}',
			),
		  ),
		),
		'glastonbury-introduces-new-campsite-to-reduce-waste' => 
		array (
		  'title' => 'Pink donates $500,000 to help with Australia’s catastrophic bushfires',
		  'content' => 'post1.txt',
		  'featured_image' => 'video6',
		  'post_type' => 'post',
		  'taxonomy' => 
		  array (
			'post_format' => 'post-format-video',
			'category' => 'entertainment,music',
		  ),
		  'metabox' => 
		  array (
			'_format_video_embed' => 'https://www.youtube.com/watch?v=EMUxmNTywjI',
			'jnews_primary_category' => 
			array (
			  'id' => '{{category:music:id}}',
			),
			'jnews_single_post' => 
			array (
			  'source_name' => '',
			  'source_url' => '',
			  'via_name' => '',
			  'via_url' => '',
			  'override_template' => '0',
			  'override' => 
			  array (
				0 => 
				array (
				  'template' => '1',
				  'single_blog_custom' => '',
				  'parallax' => '1',
				  'fullscreen' => '0',
				  'layout' => 'right-sidebar',
				  'sidebar' => 'default-sidebar',
				  'second_sidebar' => 'default-sidebar',
				  'sticky_sidebar' => '1',
				  'share_position' => 'top',
				  'share_float_style' => 'share-monocrhome',
				  'show_share_counter' => '1',
				  'show_view_counter' => '1',
				  'show_featured' => '1',
				  'show_post_meta' => '1',
				  'show_post_author' => '1',
				  'show_post_author_image' => '1',
				  'show_post_date' => '1',
				  'post_date_format' => 'default',
				  'post_date_format_custom' => 'Y/m/d',
				  'show_post_category' => '1',
				  'show_post_reading_time' => '0',
				  'post_reading_time_wpm' => '300',
				  'show_zoom_button' => '0',
				  'zoom_button_out_step' => '2',
				  'zoom_button_in_step' => '3',
				  'show_post_tag' => '1',
				  'show_prev_next_post' => '1',
				  'show_popup_post' => '1',
				  'number_popup_post' => '1',
				  'show_author_box' => '0',
				  'show_post_related' => '0',
				  'show_inline_post_related' => '0',
				),
			  ),
			  'override_image_size' => '0',
			  'image_override' => 
			  array (
				0 => 
				array (
				  'single_post_thumbnail_size' => 'crop-500',
				  'single_post_gallery_size' => 'crop-500',
				),
			  ),
			  'trending_post' => '0',
			  'trending_post_position' => 'meta',
			  'trending_post_label' => 'Trending',
			),
			'jnews_video_option' => 
			array (
			  'video_duration' => '00:02:40',
			  'video_preview' => '{{image:imageW2:src}}',
			),
		  ),
		),
		'netflixs-the-witcher-season-1-review-roundup' => 
		array (
		  'title' => 'Joker Breaks Comic Book Movie Golden Globes Record',
		  'content' => 'post2.txt',
		  'featured_image' => 'video7',
		  'post_type' => 'post',
		  'taxonomy' => 
		  array (
			'post_format' => 'post-format-video',
			'category' => 'entertainment,movie',
		  ),
		  'metabox' => 
		  array (
			'_format_video_embed' => 'https://www.youtube.com/watch?v=n1eNG1bKrGA',
			'jnews_primary_category' => 
			array (
			  'id' => '{{category:movie:id}}',
			),
			'jnews_single_post' => 
			array (
			  'source_name' => '',
			  'source_url' => '',
			  'via_name' => '',
			  'via_url' => '',
			  'override_template' => '0',
			  'override' => 
			  array (
				0 => 
				array (
				  'template' => '1',
				  'single_blog_custom' => '',
				  'parallax' => '1',
				  'fullscreen' => '0',
				  'layout' => 'right-sidebar',
				  'sidebar' => 'default-sidebar',
				  'second_sidebar' => 'default-sidebar',
				  'sticky_sidebar' => '1',
				  'share_position' => 'top',
				  'share_float_style' => 'share-monocrhome',
				  'show_share_counter' => '1',
				  'show_view_counter' => '1',
				  'show_featured' => '1',
				  'show_post_meta' => '1',
				  'show_post_author' => '1',
				  'show_post_author_image' => '1',
				  'show_post_date' => '1',
				  'post_date_format' => 'default',
				  'post_date_format_custom' => 'Y/m/d',
				  'show_post_category' => '1',
				  'show_post_reading_time' => '0',
				  'post_reading_time_wpm' => '300',
				  'show_zoom_button' => '0',
				  'zoom_button_out_step' => '2',
				  'zoom_button_in_step' => '3',
				  'show_post_tag' => '1',
				  'show_prev_next_post' => '1',
				  'show_popup_post' => '1',
				  'number_popup_post' => '1',
				  'show_author_box' => '0',
				  'show_post_related' => '0',
				  'show_inline_post_related' => '0',
				),
			  ),
			  'override_image_size' => '0',
			  'image_override' => 
			  array (
				0 => 
				array (
				  'single_post_thumbnail_size' => 'crop-500',
				  'single_post_gallery_size' => 'crop-500',
				),
			  ),
			  'trending_post' => '0',
			  'trending_post_position' => 'title',
			  'trending_post_label' => 'Trending',
			),
			'jnews_video_option' => 
			array (
			  'video_duration' => '00:10:01',
			  'video_preview' => '{{image:imageW1:src}}',
			),
		  ),
		),
		'climate-change-could-devastate-ski-tourism' => 
		array (
		  'title' => 'Climate Change Could Devastate Ski Tourism',
		  'content' => 'post1.txt',
		  'featured_image' => 'video1',
		  'post_type' => 'post',
		  'taxonomy' => 
		  array (
			'post_format' => 'post-format-video',
			'category' => 'travel',
		  ),
		  'metabox' => 
		  array (
			'_format_video_embed' => 'https://www.youtube.com/watch?v=7dowxccu9To',
			'jnews_single_post' => 
			array (
			  'source_name' => '',
			  'source_url' => '',
			  'via_name' => '',
			  'via_url' => '',
			  'override_template' => '0',
			  'override' => 
			  array (
				0 => 
				array (
				  'template' => '1',
				  'single_blog_custom' => '',
				  'parallax' => '1',
				  'fullscreen' => '0',
				  'layout' => 'right-sidebar',
				  'sidebar' => 'default-sidebar',
				  'second_sidebar' => 'default-sidebar',
				  'sticky_sidebar' => '1',
				  'share_position' => 'top',
				  'share_float_style' => 'share-monocrhome',
				  'show_share_counter' => '1',
				  'show_view_counter' => '1',
				  'show_featured' => '1',
				  'show_post_meta' => '1',
				  'show_post_author' => '1',
				  'show_post_author_image' => '1',
				  'show_post_date' => '1',
				  'post_date_format' => 'default',
				  'post_date_format_custom' => 'Y/m/d',
				  'show_post_category' => '1',
				  'show_post_reading_time' => '0',
				  'post_reading_time_wpm' => '300',
				  'show_zoom_button' => '0',
				  'zoom_button_out_step' => '2',
				  'zoom_button_in_step' => '3',
				  'show_post_tag' => '1',
				  'show_prev_next_post' => '1',
				  'show_popup_post' => '1',
				  'number_popup_post' => '1',
				  'show_author_box' => '0',
				  'show_post_related' => '0',
				  'show_inline_post_related' => '0',
				),
			  ),
			  'override_image_size' => '0',
			  'image_override' => 
			  array (
				0 => 
				array (
				  'single_post_thumbnail_size' => 'crop-500',
				  'single_post_gallery_size' => 'crop-500',
				),
			  ),
			  'trending_post' => '0',
			  'trending_post_position' => 'meta',
			  'trending_post_label' => 'Trending',
			),
			'jnews_video_option' => 
			array (
			  'video_duration' => '00:15:07',
			  'video_preview' => '{{image:imageW5:src}}',
			),
		  ),
		),
		'english-soccer-is-hopelessly-addicted-to-jose-mourinho' => 
		array (
		  'title' => 'Things new boss Carlo Ancelotti must address at Everton',
		  'content' => 'post2.txt',
		  'featured_image' => 'video2',
		  'post_type' => 'post',
		  'taxonomy' => 
		  array (
			'post_format' => 'post-format-video',
			'category' => 'news',
		  ),
		  'metabox' => 
		  array (
			'_format_video_embed' => 'https://www.youtube.com/watch?v=evLZErCs-Hk',
			'jnews_primary_category' => 
			array (
			  'id' => '{{category:news:id}}',
			),
			'jnews_single_post' => 
			array (
			  'source_name' => '',
			  'source_url' => '',
			  'via_name' => '',
			  'via_url' => '',
			  'override_template' => '0',
			  'override' => 
			  array (
				0 => 
				array (
				  'template' => '1',
				  'single_blog_custom' => '',
				  'parallax' => '1',
				  'fullscreen' => '0',
				  'layout' => 'right-sidebar',
				  'sidebar' => 'default-sidebar',
				  'second_sidebar' => 'default-sidebar',
				  'sticky_sidebar' => '1',
				  'share_position' => 'top',
				  'share_float_style' => 'share-monocrhome',
				  'show_share_counter' => '1',
				  'show_view_counter' => '1',
				  'show_featured' => '1',
				  'show_post_meta' => '1',
				  'show_post_author' => '1',
				  'show_post_author_image' => '1',
				  'show_post_date' => '1',
				  'post_date_format' => 'default',
				  'post_date_format_custom' => 'Y/m/d',
				  'show_post_category' => '1',
				  'show_post_reading_time' => '0',
				  'post_reading_time_wpm' => '300',
				  'show_zoom_button' => '0',
				  'zoom_button_out_step' => '2',
				  'zoom_button_in_step' => '3',
				  'show_post_tag' => '1',
				  'show_prev_next_post' => '1',
				  'show_popup_post' => '1',
				  'number_popup_post' => '1',
				  'show_author_box' => '0',
				  'show_post_related' => '0',
				  'show_inline_post_related' => '0',
				),
			  ),
			  'override_image_size' => '0',
			  'image_override' => 
			  array (
				0 => 
				array (
				  'single_post_thumbnail_size' => 'crop-500',
				  'single_post_gallery_size' => 'crop-500',
				),
			  ),
			  'trending_post' => '0',
			  'trending_post_position' => 'meta',
			  'trending_post_label' => 'Trending',
			),
			'jnews_video_option' => 
			array (
			  'video_duration' => '00:03:01',
			  'video_preview' => '{{image:imageW9:src}}',
			),
		  ),
		),
		'the-10-best-games-to-play-on-your-new-playstation-4' => 
		array (
		  'title' => 'Vice Cry Remastered brings the Vice City map to GTA 5',
		  'content' => 'post1.txt',
		  'featured_image' => 'video3',
		  'post_type' => 'post',
		  'taxonomy' => 
		  array (
			'post_format' => 'post-format-video',
			'category' => 'gaming',
		  ),
		  'metabox' => 
		  array (
			'_format_video_embed' => 'https://www.youtube.com/watch?v=w1kToVI5pc4',
			'jnews_primary_category' => 
			array (
			  'id' => '{{category:gaming:id}}',
			),
			'jnews_single_post' => 
			array (
			  'source_name' => '',
			  'source_url' => '',
			  'via_name' => '',
			  'via_url' => '',
			  'override_template' => '0',
			  'override' => 
			  array (
				0 => 
				array (
				  'template' => '1',
				  'single_blog_custom' => '',
				  'parallax' => '1',
				  'fullscreen' => '0',
				  'layout' => 'right-sidebar',
				  'sidebar' => 'default-sidebar',
				  'second_sidebar' => 'default-sidebar',
				  'sticky_sidebar' => '1',
				  'share_position' => 'top',
				  'share_float_style' => 'share-monocrhome',
				  'show_share_counter' => '1',
				  'show_view_counter' => '1',
				  'show_featured' => '1',
				  'show_post_meta' => '1',
				  'show_post_author' => '1',
				  'show_post_author_image' => '1',
				  'show_post_date' => '1',
				  'post_date_format' => 'default',
				  'post_date_format_custom' => 'Y/m/d',
				  'show_post_category' => '1',
				  'show_post_reading_time' => '0',
				  'post_reading_time_wpm' => '300',
				  'show_zoom_button' => '0',
				  'zoom_button_out_step' => '2',
				  'zoom_button_in_step' => '3',
				  'show_post_tag' => '1',
				  'show_prev_next_post' => '1',
				  'show_popup_post' => '1',
				  'number_popup_post' => '1',
				  'show_author_box' => '0',
				  'show_post_related' => '0',
				  'show_inline_post_related' => '0',
				),
			  ),
			  'override_image_size' => '0',
			  'image_override' => 
			  array (
				0 => 
				array (
				  'single_post_thumbnail_size' => 'crop-500',
				  'single_post_gallery_size' => 'crop-500',
				),
			  ),
			  'trending_post' => '0',
			  'trending_post_position' => 'meta',
			  'trending_post_label' => 'Trending',
			),
			'jnews_video_option' => 
			array (
			  'video_duration' => '',
			  'video_preview' => '{{image:imageW3:src}}',
			),
		  ),
		),
		'uk-election-2019-who-won-and-what-happens-now' => 
		array (
		  'title' => 'SpaceX sends 60 more Starlink satellites into orbit',
		  'content' => 'post2.txt',
		  'featured_image' => 'video4',
		  'post_type' => 'post',
		  'taxonomy' => 
		  array (
			'post_format' => 'post-format-video',
			'category' => 'news,technology',
		  ),
		  'metabox' => 
		  array (
			'_format_video_embed' => 'https://www.youtube.com/watch?v=PeVVw_eTs4g',
			'jnews_primary_category' => 
			array (
			  'id' => '{{category:news:id}}',
			),
			'jnews_single_post' => 
			array (
			  'source_name' => '',
			  'source_url' => '',
			  'via_name' => '',
			  'via_url' => '',
			  'override_template' => '0',
			  'override' => 
			  array (
				0 => 
				array (
				  'template' => '1',
				  'single_blog_custom' => '',
				  'parallax' => '1',
				  'fullscreen' => '0',
				  'layout' => 'right-sidebar',
				  'sidebar' => 'default-sidebar',
				  'second_sidebar' => 'default-sidebar',
				  'sticky_sidebar' => '1',
				  'share_position' => 'top',
				  'share_float_style' => 'share-monocrhome',
				  'show_share_counter' => '1',
				  'show_view_counter' => '1',
				  'show_featured' => '1',
				  'show_post_meta' => '1',
				  'show_post_author' => '1',
				  'show_post_author_image' => '1',
				  'show_post_date' => '1',
				  'post_date_format' => 'default',
				  'post_date_format_custom' => 'Y/m/d',
				  'show_post_category' => '1',
				  'show_post_reading_time' => '0',
				  'post_reading_time_wpm' => '300',
				  'show_zoom_button' => '0',
				  'zoom_button_out_step' => '2',
				  'zoom_button_in_step' => '3',
				  'show_post_tag' => '1',
				  'show_prev_next_post' => '1',
				  'show_popup_post' => '1',
				  'number_popup_post' => '1',
				  'show_author_box' => '0',
				  'show_post_related' => '0',
				  'show_inline_post_related' => '0',
				),
			  ),
			  'override_image_size' => '0',
			  'image_override' => 
			  array (
				0 => 
				array (
				  'single_post_thumbnail_size' => 'crop-500',
				  'single_post_gallery_size' => 'crop-500',
				),
			  ),
			  'trending_post' => '0',
			  'trending_post_position' => 'meta',
			  'trending_post_label' => 'Trending',
			),
			'jnews_video_option' => 
			array (
			  'video_duration' => '00:04:25',
			  'video_preview' => '{{image:imageW4:src}}',
			),
		  ),
		),
		'the-night-comes-for-us-official-trailer-hd' => 
		array (
		  'title' => 'Shang-Chi Director Explains Why He Joined The MCU',
		  'content' => 'post1.txt',
		  'featured_image' => 'video5',
		  'post_type' => 'post',
		  'taxonomy' => 
		  array (
			'post_format' => 'post-format-video',
			'category' => 'movie',
		  ),
		  'metabox' => 
		  array (
			'_format_video_embed' => 'https://www.youtube.com/watch?v=96wkD0xTacI',
			'jnews_primary_category' => 
			array (
			  'id' => '{{category:movie:id}}',
			),
			'jnews_single_post' => 
			array (
			  'source_name' => '',
			  'source_url' => '',
			  'via_name' => '',
			  'via_url' => '',
			  'override_template' => '0',
			  'override' => 
			  array (
				0 => 
				array (
				  'template' => '1',
				  'single_blog_custom' => '',
				  'parallax' => '1',
				  'fullscreen' => '0',
				  'layout' => 'right-sidebar',
				  'sidebar' => 'default-sidebar',
				  'second_sidebar' => 'default-sidebar',
				  'sticky_sidebar' => '1',
				  'share_position' => 'top',
				  'share_float_style' => 'share-monocrhome',
				  'show_share_counter' => '1',
				  'show_view_counter' => '1',
				  'show_featured' => '1',
				  'show_post_meta' => '1',
				  'show_post_author' => '1',
				  'show_post_author_image' => '1',
				  'show_post_date' => '1',
				  'post_date_format' => 'default',
				  'post_date_format_custom' => 'Y/m/d',
				  'show_post_category' => '1',
				  'show_post_reading_time' => '0',
				  'post_reading_time_wpm' => '300',
				  'show_zoom_button' => '0',
				  'zoom_button_out_step' => '2',
				  'zoom_button_in_step' => '3',
				  'show_post_tag' => '1',
				  'show_prev_next_post' => '1',
				  'show_popup_post' => '1',
				  'number_popup_post' => '1',
				  'show_author_box' => '0',
				  'show_post_related' => '0',
				  'show_inline_post_related' => '0',
				),
			  ),
			  'override_image_size' => '0',
			  'image_override' => 
			  array (
				0 => 
				array (
				  'single_post_thumbnail_size' => 'crop-500',
				  'single_post_gallery_size' => 'crop-500',
				),
			  ),
			  'trending_post' => '0',
			  'trending_post_position' => 'meta',
			  'trending_post_label' => 'Trending',
			),
			'jnews_video_option' => 
			array (
			  'video_duration' => '00:04:39',
			  'video_preview' => '{{image:imageW12:src}}',
			),
		  ),
		),
		'dua-lipas-boots-are-straight-out-of-the-mesozoic-era' => 
		array (
		  'title' => '3 Ways Over-Delivering Value Gives Entrepreneurs an Advantage',
		  'content' => 'post2.txt',
		  'featured_image' => 'video6',
		  'post_type' => 'post',
		  'taxonomy' => 
		  array (
			'post_format' => 'post-format-video',
			'category' => 'howto-style',
			'post_tag' => 'dua-lipa,mtv,music,video',
		  ),
		  'metabox' => 
		  array (
			'_format_video_embed' => 'https://www.youtube.com/watch?v=RGt0cjhoUe8',
			'jnews_primary_category' => 
			array (
			  'id' => '{{category:howto-style:id}}',
			),
			'jnews_single_post' => 
			array (
			  'source_name' => '',
			  'source_url' => '',
			  'via_name' => '',
			  'via_url' => '',
			  'override_template' => '0',
			  'override' => 
			  array (
				0 => 
				array (
				  'template' => '1',
				  'single_blog_custom' => '',
				  'parallax' => '1',
				  'fullscreen' => '0',
				  'layout' => 'right-sidebar',
				  'sidebar' => 'default-sidebar',
				  'second_sidebar' => 'default-sidebar',
				  'sticky_sidebar' => '1',
				  'share_position' => 'top',
				  'share_float_style' => 'share-monocrhome',
				  'show_share_counter' => '1',
				  'show_view_counter' => '1',
				  'show_featured' => '1',
				  'show_post_meta' => '1',
				  'show_post_author' => '1',
				  'show_post_author_image' => '1',
				  'show_post_date' => '1',
				  'post_date_format' => 'default',
				  'post_date_format_custom' => 'Y/m/d',
				  'show_post_category' => '1',
				  'show_post_reading_time' => '0',
				  'post_reading_time_wpm' => '300',
				  'show_zoom_button' => '0',
				  'zoom_button_out_step' => '2',
				  'zoom_button_in_step' => '3',
				  'show_post_tag' => '1',
				  'show_prev_next_post' => '1',
				  'show_popup_post' => '1',
				  'number_popup_post' => '1',
				  'show_author_box' => '0',
				  'show_post_related' => '0',
				  'show_inline_post_related' => '0',
				),
			  ),
			  'override_image_size' => '0',
			  'image_override' => 
			  array (
				0 => 
				array (
				  'single_post_thumbnail_size' => 'crop-500',
				  'single_post_gallery_size' => 'crop-500',
				),
			  ),
			  'trending_post' => '0',
			  'trending_post_position' => 'meta',
			  'trending_post_label' => 'Trending',
			),
			'jnews_video_option' => 
			array (
			  'video_duration' => '01:35:58',
			  'video_preview' => '{{image:imageW12:src}}',
			),
		  ),
		),
		'amazon-sees-alexa-devices-more-than-double-in-just-one-year' => 
		array (
		  'title' => 'Amazon sees Alexa devices more than double in just one year',
		  'content' => 'post1.txt',
		  'featured_image' => 'video7',
		  'post_type' => 'post',
		  'taxonomy' => 
		  array (
			'post_format' => 'post-format-video',
			'category' => 'technology',
		  ),
		  'metabox' => 
		  array (
			'_format_video_embed' => 'https://www.youtube.com/watch?v=_czhNhBXOD0',
			'jnews_primary_category' => 
			array (
			  'id' => '{{category:technology:id}}',
			),
			'jnews_single_post' => 
			array (
			  'source_name' => '',
			  'source_url' => '',
			  'via_name' => '',
			  'via_url' => '',
			  'override_template' => '0',
			  'override' => 
			  array (
				0 => 
				array (
				  'template' => '1',
				  'single_blog_custom' => '',
				  'parallax' => '1',
				  'fullscreen' => '0',
				  'layout' => 'right-sidebar',
				  'sidebar' => 'default-sidebar',
				  'second_sidebar' => 'default-sidebar',
				  'sticky_sidebar' => '1',
				  'share_position' => 'top',
				  'share_float_style' => 'share-monocrhome',
				  'show_share_counter' => '1',
				  'show_view_counter' => '1',
				  'show_featured' => '1',
				  'show_post_meta' => '1',
				  'show_post_author' => '1',
				  'show_post_author_image' => '1',
				  'show_post_date' => '1',
				  'post_date_format' => 'default',
				  'post_date_format_custom' => 'Y/m/d',
				  'show_post_category' => '1',
				  'show_post_reading_time' => '0',
				  'post_reading_time_wpm' => '300',
				  'show_zoom_button' => '0',
				  'zoom_button_out_step' => '2',
				  'zoom_button_in_step' => '3',
				  'show_post_tag' => '1',
				  'show_prev_next_post' => '1',
				  'show_popup_post' => '1',
				  'number_popup_post' => '1',
				  'show_author_box' => '0',
				  'show_post_related' => '0',
				  'show_inline_post_related' => '0',
				),
			  ),
			  'override_image_size' => '0',
			  'image_override' => 
			  array (
				0 => 
				array (
				  'single_post_thumbnail_size' => 'crop-500',
				  'single_post_gallery_size' => 'crop-500',
				),
			  ),
			  'trending_post' => '0',
			  'trending_post_position' => 'meta',
			  'trending_post_label' => 'Trending',
			),
			'jnews_video_option' => 
			array (
			  'video_duration' => '00:05:22',
			  'video_preview' => '{{image:imageW6:src}}',
			),
		  ),
		),
		'robert-pattinson-brings-back-the-super-skinny-tie' => 
		array (
		  'title' => 'Why It Makes Sense to Build a Brand Around a Singular Idea',
		  'content' => 'post2.txt',
		  'featured_image' => 'video1',
		  'post_type' => 'post',
		  'taxonomy' => 
		  array (
			'post_format' => 'post-format-video',
			'category' => 'howto-style',
		  ),
		  'metabox' => 
		  array (
			'_format_video_embed' => 'https://www.youtube.com/watch?v=ycD-6vLYASA',
			'jnews_primary_category' => 
			array (
			  'id' => '{{category:howto-style:id}}',
			),
			'jnews_single_post' => 
			array (
			  'source_name' => '',
			  'source_url' => '',
			  'via_name' => '',
			  'via_url' => '',
			  'override_template' => '0',
			  'override' => 
			  array (
				0 => 
				array (
				  'template' => '1',
				  'single_blog_custom' => '',
				  'parallax' => '1',
				  'fullscreen' => '0',
				  'layout' => 'right-sidebar',
				  'sidebar' => 'default-sidebar',
				  'second_sidebar' => 'default-sidebar',
				  'sticky_sidebar' => '1',
				  'share_position' => 'top',
				  'share_float_style' => 'share-monocrhome',
				  'show_share_counter' => '1',
				  'show_view_counter' => '1',
				  'show_featured' => '1',
				  'show_post_meta' => '1',
				  'show_post_author' => '1',
				  'show_post_author_image' => '1',
				  'show_post_date' => '1',
				  'post_date_format' => 'default',
				  'post_date_format_custom' => 'Y/m/d',
				  'show_post_category' => '1',
				  'show_post_reading_time' => '0',
				  'post_reading_time_wpm' => '300',
				  'show_zoom_button' => '0',
				  'zoom_button_out_step' => '2',
				  'zoom_button_in_step' => '3',
				  'show_post_tag' => '1',
				  'show_prev_next_post' => '1',
				  'show_popup_post' => '1',
				  'number_popup_post' => '1',
				  'show_author_box' => '0',
				  'show_post_related' => '0',
				  'show_inline_post_related' => '0',
				),
			  ),
			  'override_image_size' => '0',
			  'image_override' => 
			  array (
				0 => 
				array (
				  'single_post_thumbnail_size' => 'crop-500',
				  'single_post_gallery_size' => 'crop-500',
				),
			  ),
			  'trending_post' => '0',
			  'trending_post_position' => 'meta',
			  'trending_post_label' => 'Trending',
			),
			'jnews_video_option' => 
			array (
			  'video_duration' => '00:09:41',
			  'video_preview' => '{{image:imageW10:src}}',
			),
		  ),
		),
		'dialog-dini-hari-tentang-rumahku-official-music-video' => 
		array (
		  'title' => 'Dialog Dini Hari - Tentang Rumahku (Official Music Video)',
		  'content' => 'post1.txt',
		  'featured_image' => 'video1',
		  'post_type' => 'post',
		  'taxonomy' => 
		  array (
			'post_format' => 'post-format-video',
			'category' => 'music',
		  ),
		  'metabox' => 
		  array (
			'_format_video_embed' => 'https://www.youtube.com/watch?v=kEbxIfmvJE0',
			'jnews_primary_category' => 
			array (
			  'id' => '{{category:music:id}}',
			),
			'jnews_single_post' => 
			array (
			  'source_name' => '',
			  'source_url' => '',
			  'via_name' => '',
			  'via_url' => '',
			  'override_template' => '0',
			  'override' => 
			  array (
				0 => 
				array (
				  'template' => '1',
				  'single_blog_custom' => '',
				  'parallax' => '1',
				  'fullscreen' => '0',
				  'layout' => 'right-sidebar',
				  'sidebar' => 'default-sidebar',
				  'second_sidebar' => 'default-sidebar',
				  'sticky_sidebar' => '1',
				  'share_position' => 'top',
				  'share_float_style' => 'share-monocrhome',
				  'show_share_counter' => '1',
				  'show_view_counter' => '1',
				  'show_featured' => '1',
				  'show_post_meta' => '1',
				  'show_post_author' => '1',
				  'show_post_author_image' => '1',
				  'show_post_date' => '1',
				  'post_date_format' => 'default',
				  'post_date_format_custom' => 'Y/m/d',
				  'show_post_category' => '1',
				  'show_post_reading_time' => '0',
				  'post_reading_time_wpm' => '300',
				  'show_zoom_button' => '0',
				  'zoom_button_out_step' => '2',
				  'zoom_button_in_step' => '3',
				  'show_post_tag' => '1',
				  'show_prev_next_post' => '1',
				  'show_popup_post' => '1',
				  'number_popup_post' => '1',
				  'show_author_box' => '0',
				  'show_post_related' => '0',
				  'show_inline_post_related' => '0',
				),
			  ),
			  'override_image_size' => '0',
			  'image_override' => 
			  array (
				0 => 
				array (
				  'single_post_thumbnail_size' => 'crop-500',
				  'single_post_gallery_size' => 'crop-500',
				),
			  ),
			  'trending_post' => '0',
			  'trending_post_position' => 'meta',
			  'trending_post_label' => 'Trending',
			),
			'jnews_video_option' => 
			array (
			  'video_duration' => '00:04:06',
			  'video_preview' => '{{image:imageW7:src}}',
			),
		  ),
		),
		'only-beyonce-could-make-opera-gloves-cool' => 
		array (
		  'title' => 'The Best Dating Apps on the Market to Help You Find Love Today',
		  'content' => 'post2.txt',
		  'featured_image' => 'video2',
		  'post_type' => 'post',
		  'taxonomy' => 
		  array (
			'post_format' => 'post-format-video',
			'category' => 'entertainment,howto-style',
		  ),
		  'metabox' => 
		  array (
			'_format_video_embed' => 'https://www.youtube.com/watch?v=CzQUqRoEgd4',
			'jnews_primary_category' => 
			array (
			  'id' => '{{category:howto-style:id}}',
			),
			'jnews_single_post' => 
			array (
			  'source_name' => '',
			  'source_url' => '',
			  'via_name' => '',
			  'via_url' => '',
			  'override_template' => '0',
			  'override' => 
			  array (
				0 => 
				array (
				  'template' => '1',
				  'single_blog_custom' => '',
				  'parallax' => '1',
				  'fullscreen' => '0',
				  'layout' => 'right-sidebar',
				  'sidebar' => 'default-sidebar',
				  'second_sidebar' => 'default-sidebar',
				  'sticky_sidebar' => '1',
				  'share_position' => 'top',
				  'share_float_style' => 'share-monocrhome',
				  'show_share_counter' => '1',
				  'show_view_counter' => '1',
				  'show_featured' => '1',
				  'show_post_meta' => '1',
				  'show_post_author' => '1',
				  'show_post_author_image' => '1',
				  'show_post_date' => '1',
				  'post_date_format' => 'default',
				  'post_date_format_custom' => 'Y/m/d',
				  'show_post_category' => '1',
				  'show_post_reading_time' => '0',
				  'post_reading_time_wpm' => '300',
				  'show_zoom_button' => '0',
				  'zoom_button_out_step' => '2',
				  'zoom_button_in_step' => '3',
				  'show_post_tag' => '1',
				  'show_prev_next_post' => '1',
				  'show_popup_post' => '1',
				  'number_popup_post' => '1',
				  'show_author_box' => '0',
				  'show_post_related' => '0',
				  'show_inline_post_related' => '0',
				),
			  ),
			  'override_image_size' => '0',
			  'image_override' => 
			  array (
				0 => 
				array (
				  'single_post_thumbnail_size' => 'crop-500',
				  'single_post_gallery_size' => 'crop-500',
				),
			  ),
			  'trending_post' => '0',
			  'trending_post_position' => 'meta',
			  'trending_post_label' => 'Trending',
			),
			'jnews_video_option' => 
			array (
			  'video_duration' => '00:13:50',
			  'video_preview' => '{{image:imageW4:src}}',
			),
		  ),
		),
		'pokemon-go-is-bringing-back-all-community-day-pokemon' => 
		array (
		  'title' => 'Kentucky Route Zero\'s final episode is coming soon',
		  'content' => 'post1.txt',
		  'featured_image' => 'video3',
		  'post_type' => 'post',
		  'taxonomy' => 
		  array (
			'post_format' => 'post-format-video',
			'category' => 'gaming,technology',
		  ),
		  'metabox' => 
		  array (
			'_format_video_embed' => 'https://www.youtube.com/watch?v=6NnFmPxKinU',
			'jnews_primary_category' => 
			array (
			  'id' => '{{category:gaming:id}}',
			),
			'jnews_single_post' => 
			array (
			  'source_name' => '',
			  'source_url' => '',
			  'via_name' => '',
			  'via_url' => '',
			  'override_template' => '0',
			  'override' => 
			  array (
				0 => 
				array (
				  'template' => '1',
				  'single_blog_custom' => '',
				  'parallax' => '1',
				  'fullscreen' => '0',
				  'layout' => 'right-sidebar',
				  'sidebar' => 'default-sidebar',
				  'second_sidebar' => 'default-sidebar',
				  'sticky_sidebar' => '1',
				  'share_position' => 'top',
				  'share_float_style' => 'share-monocrhome',
				  'show_share_counter' => '1',
				  'show_view_counter' => '1',
				  'show_featured' => '1',
				  'show_post_meta' => '1',
				  'show_post_author' => '1',
				  'show_post_author_image' => '1',
				  'show_post_date' => '1',
				  'post_date_format' => 'default',
				  'post_date_format_custom' => 'Y/m/d',
				  'show_post_category' => '1',
				  'show_post_reading_time' => '0',
				  'post_reading_time_wpm' => '300',
				  'show_zoom_button' => '0',
				  'zoom_button_out_step' => '2',
				  'zoom_button_in_step' => '3',
				  'show_post_tag' => '1',
				  'show_prev_next_post' => '1',
				  'show_popup_post' => '1',
				  'number_popup_post' => '1',
				  'show_author_box' => '0',
				  'show_post_related' => '0',
				  'show_inline_post_related' => '0',
				),
			  ),
			  'override_image_size' => '0',
			  'image_override' => 
			  array (
				0 => 
				array (
				  'single_post_thumbnail_size' => 'crop-500',
				  'single_post_gallery_size' => 'crop-500',
				),
			  ),
			  'trending_post' => '0',
			  'trending_post_position' => 'meta',
			  'trending_post_label' => 'Trending',
			),
			'jnews_video_option' => 
			array (
			  'video_duration' => '00:01:07',
			  'video_preview' => '{{image:imageW10:src}}',
			),
		  ),
		),
		'why-jokers-depiction-of-mental-illness-is-dangerously-misinformed' => 
		array (
		  'title' => 'Will The Next Star Wars Movies Be Set In The High Republic Era?',
		  'content' => 'post2.txt',
		  'featured_image' => 'video4',
		  'post_type' => 'post',
		  'taxonomy' => 
		  array (
			'post_format' => 'post-format-video',
			'category' => 'entertainment,movie,news',
		  ),
		  'metabox' => 
		  array (
			'_format_video_embed' => 'https://www.youtube.com/watch?v=mJxfuL74CLs',
			'jnews_primary_category' => 
			array (
			  'id' => '{{category:movie:id}}',
			),
			'jnews_single_post' => 
			array (
			  'source_name' => '',
			  'source_url' => '',
			  'via_name' => '',
			  'via_url' => '',
			  'override_template' => '0',
			  'override' => 
			  array (
				0 => 
				array (
				  'template' => '1',
				  'single_blog_custom' => '',
				  'parallax' => '1',
				  'fullscreen' => '0',
				  'layout' => 'right-sidebar',
				  'sidebar' => 'default-sidebar',
				  'second_sidebar' => 'default-sidebar',
				  'sticky_sidebar' => '1',
				  'share_position' => 'top',
				  'share_float_style' => 'share-monocrhome',
				  'show_share_counter' => '1',
				  'show_view_counter' => '1',
				  'show_featured' => '1',
				  'show_post_meta' => '1',
				  'show_post_author' => '1',
				  'show_post_author_image' => '1',
				  'show_post_date' => '1',
				  'post_date_format' => 'default',
				  'post_date_format_custom' => 'Y/m/d',
				  'show_post_category' => '1',
				  'show_post_reading_time' => '0',
				  'post_reading_time_wpm' => '300',
				  'show_zoom_button' => '0',
				  'zoom_button_out_step' => '2',
				  'zoom_button_in_step' => '3',
				  'show_post_tag' => '1',
				  'show_prev_next_post' => '1',
				  'show_popup_post' => '1',
				  'number_popup_post' => '1',
				  'show_author_box' => '0',
				  'show_post_related' => '0',
				  'show_inline_post_related' => '0',
				),
			  ),
			  'override_image_size' => '0',
			  'image_override' => 
			  array (
				0 => 
				array (
				  'single_post_thumbnail_size' => 'crop-500',
				  'single_post_gallery_size' => 'crop-500',
				),
			  ),
			  'trending_post' => '0',
			  'trending_post_position' => 'meta',
			  'trending_post_label' => 'Trending',
			),
			'jnews_video_option' => 
			array (
			  'video_duration' => '00:04:13',
			  'video_preview' => '{{image:imageW4:src}}',
			),
		  ),
		),
		'life-in-paris-one-month-down-in-2019' => 
		array (
		  'title' => 'Life in Paris: One Month Down in 2019',
		  'content' => 'post1.txt',
		  'featured_image' => 'video5',
		  'post_type' => 'post',
		  'taxonomy' => 
		  array (
			'post_format' => 'post-format-video',
			'category' => 'travel',
		  ),
		  'metabox' => 
		  array (
			'_format_video_embed' => 'https://www.youtube.com/watch?v=tKXrpRrj7Ow',
			'jnews_single_post' => 
			array (
			  'source_name' => '',
			  'source_url' => '',
			  'via_name' => '',
			  'via_url' => '',
			  'override_template' => '0',
			  'override' => 
			  array (
				0 => 
				array (
				  'template' => '1',
				  'single_blog_custom' => '',
				  'parallax' => '1',
				  'fullscreen' => '0',
				  'layout' => 'right-sidebar',
				  'sidebar' => 'default-sidebar',
				  'second_sidebar' => 'default-sidebar',
				  'sticky_sidebar' => '1',
				  'share_position' => 'top',
				  'share_float_style' => 'share-monocrhome',
				  'show_share_counter' => '1',
				  'show_view_counter' => '1',
				  'show_featured' => '1',
				  'show_post_meta' => '1',
				  'show_post_author' => '1',
				  'show_post_author_image' => '1',
				  'show_post_date' => '1',
				  'post_date_format' => 'default',
				  'post_date_format_custom' => 'Y/m/d',
				  'show_post_category' => '1',
				  'show_post_reading_time' => '0',
				  'post_reading_time_wpm' => '300',
				  'show_zoom_button' => '0',
				  'zoom_button_out_step' => '2',
				  'zoom_button_in_step' => '3',
				  'show_post_tag' => '1',
				  'show_prev_next_post' => '1',
				  'show_popup_post' => '1',
				  'number_popup_post' => '1',
				  'show_author_box' => '0',
				  'show_post_related' => '0',
				  'show_inline_post_related' => '0',
				),
			  ),
			  'override_image_size' => '0',
			  'image_override' => 
			  array (
				0 => 
				array (
				  'single_post_thumbnail_size' => 'crop-500',
				  'single_post_gallery_size' => 'crop-500',
				),
			  ),
			  'trending_post' => '0',
			  'trending_post_position' => 'meta',
			  'trending_post_label' => 'Trending',
			),
			'jnews_video_option' => 
			array (
			  'video_duration' => '00:09:21',
			  'video_preview' => '{{image:imageW11:src}}',
			),
		  ),
		),
		'league-of-legends-season-10-with-new-2020-warriors-cinematic' => 
		array (
		  'title' => 'League of Legends Season 10 with new 2020 Warriors cinematic.',
		  'content' => 'post2.txt',
		  'featured_image' => 'video6',
		  'post_type' => 'post',
		  'taxonomy' => 
		  array (
			'post_format' => 'post-format-video',
			'category' => 'gaming',
		  ),
		  'metabox' => 
		  array (
			'_format_video_embed' => 'https://www.youtube.com/watch?v=By3pW3boux0',
			'jnews_primary_category' => 
			array (
			  'id' => '{{category:gaming:id}}',
			),
			'jnews_single_post' => 
			array (
			  'source_name' => '',
			  'source_url' => '',
			  'via_name' => '',
			  'via_url' => '',
			  'override_template' => '0',
			  'override' => 
			  array (
				0 => 
				array (
				  'template' => '1',
				  'single_blog_custom' => '',
				  'parallax' => '1',
				  'fullscreen' => '0',
				  'layout' => 'right-sidebar',
				  'sidebar' => 'default-sidebar',
				  'second_sidebar' => 'default-sidebar',
				  'sticky_sidebar' => '1',
				  'share_position' => 'top',
				  'share_float_style' => 'share-monocrhome',
				  'show_share_counter' => '1',
				  'show_view_counter' => '1',
				  'show_featured' => '1',
				  'show_post_meta' => '1',
				  'show_post_author' => '1',
				  'show_post_author_image' => '1',
				  'show_post_date' => '1',
				  'post_date_format' => 'default',
				  'post_date_format_custom' => 'Y/m/d',
				  'show_post_category' => '1',
				  'show_post_reading_time' => '0',
				  'post_reading_time_wpm' => '300',
				  'show_zoom_button' => '0',
				  'zoom_button_out_step' => '2',
				  'zoom_button_in_step' => '3',
				  'show_post_tag' => '1',
				  'show_prev_next_post' => '1',
				  'show_popup_post' => '1',
				  'number_popup_post' => '1',
				  'show_author_box' => '0',
				  'show_post_related' => '0',
				  'show_inline_post_related' => '0',
				),
			  ),
			  'override_image_size' => '0',
			  'image_override' => 
			  array (
				0 => 
				array (
				  'single_post_thumbnail_size' => 'crop-500',
				  'single_post_gallery_size' => 'crop-500',
				),
			  ),
			  'trending_post' => '0',
			  'trending_post_position' => 'meta',
			  'trending_post_label' => 'Trending',
			),
			'jnews_video_option' => 
			array (
			  'video_duration' => '00:01:21',
			  'video_preview' => '{{image:imageW9:src}}',
			),
		  ),
		),
		'dua-lipa-teases-new-album-as-new-era-begins' => 
		array (
		  'title' => 'It looks like My Chemical Romance are teasing a UK show',
		  'content' => 'post1.txt',
		  'featured_image' => 'video7',
		  'post_type' => 'post',
		  'taxonomy' => 
		  array (
			'post_format' => 'post-format-video',
			'category' => 'music',
		  ),
		  'metabox' => 
		  array (
			'_format_video_embed' => 'https://www.youtube.com/watch?v=lleP4Uf10wU',
			'jnews_primary_category' => 
			array (
			  'id' => '{{category:music:id}}',
			),
			'jnews_single_post' => 
			array (
			  'source_name' => '',
			  'source_url' => '',
			  'via_name' => '',
			  'via_url' => '',
			  'override_template' => '0',
			  'override' => 
			  array (
				0 => 
				array (
				  'template' => '1',
				  'single_blog_custom' => '',
				  'parallax' => '1',
				  'fullscreen' => '0',
				  'layout' => 'right-sidebar',
				  'sidebar' => 'default-sidebar',
				  'second_sidebar' => 'default-sidebar',
				  'sticky_sidebar' => '1',
				  'share_position' => 'top',
				  'share_float_style' => 'share-monocrhome',
				  'show_share_counter' => '1',
				  'show_view_counter' => '1',
				  'show_featured' => '1',
				  'show_post_meta' => '1',
				  'show_post_author' => '1',
				  'show_post_author_image' => '1',
				  'show_post_date' => '1',
				  'post_date_format' => 'default',
				  'post_date_format_custom' => 'Y/m/d',
				  'show_post_category' => '1',
				  'show_post_reading_time' => '0',
				  'post_reading_time_wpm' => '300',
				  'show_zoom_button' => '0',
				  'zoom_button_out_step' => '2',
				  'zoom_button_in_step' => '3',
				  'show_post_tag' => '1',
				  'show_prev_next_post' => '1',
				  'show_popup_post' => '1',
				  'number_popup_post' => '1',
				  'show_author_box' => '0',
				  'show_post_related' => '0',
				  'show_inline_post_related' => '0',
				),
			  ),
			  'override_image_size' => '0',
			  'image_override' => 
			  array (
				0 => 
				array (
				  'single_post_thumbnail_size' => 'crop-500',
				  'single_post_gallery_size' => 'crop-500',
				),
			  ),
			  'trending_post' => '0',
			  'trending_post_position' => 'meta',
			  'trending_post_label' => 'Trending',
			),
			'jnews_video_option' => 
			array (
			  'video_duration' => '00:03:28',
			  'video_preview' => '{{image:imageW6:src}}',
			),
		  ),
		),
		'hawaii-5-nonprofits-you-can-support-while-traveling' => 
		array (
		  'title' => 'Hawaii: 5 Nonprofits You Can Support While Traveling',
		  'content' => 'post2.txt',
		  'featured_image' => 'video1',
		  'post_type' => 'post',
		  'taxonomy' => 
		  array (
			'post_format' => 'post-format-video',
			'category' => 'travel',
		  ),
		  'metabox' => 
		  array (
			'_format_video_embed' => 'https://www.youtube.com/watch?v=wMRFzWVV35Y',
			'jnews_single_post' => 
			array (
			  'source_name' => '',
			  'source_url' => '',
			  'via_name' => '',
			  'via_url' => '',
			  'override_template' => '0',
			  'override' => 
			  array (
				0 => 
				array (
				  'template' => '1',
				  'single_blog_custom' => '',
				  'parallax' => '1',
				  'fullscreen' => '0',
				  'layout' => 'right-sidebar',
				  'sidebar' => 'default-sidebar',
				  'second_sidebar' => 'default-sidebar',
				  'sticky_sidebar' => '1',
				  'share_position' => 'top',
				  'share_float_style' => 'share-monocrhome',
				  'show_share_counter' => '1',
				  'show_view_counter' => '1',
				  'show_featured' => '1',
				  'show_post_meta' => '1',
				  'show_post_author' => '1',
				  'show_post_author_image' => '1',
				  'show_post_date' => '1',
				  'post_date_format' => 'default',
				  'post_date_format_custom' => 'Y/m/d',
				  'show_post_category' => '1',
				  'show_post_reading_time' => '0',
				  'post_reading_time_wpm' => '300',
				  'show_zoom_button' => '0',
				  'zoom_button_out_step' => '2',
				  'zoom_button_in_step' => '3',
				  'show_post_tag' => '1',
				  'show_prev_next_post' => '1',
				  'show_popup_post' => '1',
				  'number_popup_post' => '1',
				  'show_author_box' => '0',
				  'show_post_related' => '0',
				  'show_inline_post_related' => '0',
				),
			  ),
			  'override_image_size' => '0',
			  'image_override' => 
			  array (
				0 => 
				array (
				  'single_post_thumbnail_size' => 'crop-500',
				  'single_post_gallery_size' => 'crop-500',
				),
			  ),
			  'trending_post' => '0',
			  'trending_post_position' => 'meta',
			  'trending_post_label' => 'Trending',
			),
			'jnews_video_option' => 
			array (
			  'video_duration' => '00:14:04',
			  'video_preview' => '{{image:imageW10:src}}',
			),
		  ),
		),
		'google-pixel-4-xl-review-the-best-android-experience' => 
		array (
		  'title' => 'CES 2020: Sony announces electric car concept',
		  'content' => 'post1.txt',
		  'featured_image' => 'video2',
		  'post_type' => 'post',
		  'taxonomy' => 
		  array (
			'post_format' => 'post-format-video',
			'category' => 'technology',
		  ),
		  'metabox' => 
		  array (
			'_format_video_embed' => 'https://www.youtube.com/watch?v=yxQYSR8D56Y',
			'jnews_primary_category' => 
			array (
			  'id' => '{{category:technology:id}}',
			),
			'jnews_single_post' => 
			array (
			  'source_name' => '',
			  'source_url' => '',
			  'via_name' => '',
			  'via_url' => '',
			  'override_template' => '0',
			  'override' => 
			  array (
				0 => 
				array (
				  'template' => '1',
				  'single_blog_custom' => '',
				  'parallax' => '1',
				  'fullscreen' => '0',
				  'layout' => 'right-sidebar',
				  'sidebar' => 'default-sidebar',
				  'second_sidebar' => 'default-sidebar',
				  'sticky_sidebar' => '1',
				  'share_position' => 'top',
				  'share_float_style' => 'share-monocrhome',
				  'show_share_counter' => '1',
				  'show_view_counter' => '1',
				  'show_featured' => '1',
				  'show_post_meta' => '1',
				  'show_post_author' => '1',
				  'show_post_author_image' => '1',
				  'show_post_date' => '1',
				  'post_date_format' => 'default',
				  'post_date_format_custom' => 'Y/m/d',
				  'show_post_category' => '1',
				  'show_post_reading_time' => '0',
				  'post_reading_time_wpm' => '300',
				  'show_zoom_button' => '0',
				  'zoom_button_out_step' => '2',
				  'zoom_button_in_step' => '3',
				  'show_post_tag' => '1',
				  'show_prev_next_post' => '1',
				  'show_popup_post' => '1',
				  'number_popup_post' => '1',
				  'show_author_box' => '0',
				  'show_post_related' => '0',
				  'show_inline_post_related' => '0',
				),
			  ),
			  'override_image_size' => '0',
			  'image_override' => 
			  array (
				0 => 
				array (
				  'single_post_thumbnail_size' => 'crop-500',
				  'single_post_gallery_size' => 'crop-500',
				),
			  ),
			  'trending_post' => '0',
			  'trending_post_position' => 'meta',
			  'trending_post_label' => 'Trending',
			),
			'jnews_video_option' => 
			array (
			  'video_duration' => '00:05:41',
			  'video_preview' => '{{image:imageW2:src}}',
			),
		  ),
		),
		'this-man-owned-that-starbucks-cup-in-game-of-thrones' => 
		array (
		  'title' => 'New Mutants Trailer: What The Hell Is Happening In This Movie?',
		  'content' => 'post2.txt',
		  'featured_image' => 'video3',
		  'post_type' => 'post',
		  'taxonomy' => 
		  array (
			'post_format' => 'post-format-video',
			'category' => 'entertainment,movie',
		  ),
		  'metabox' => 
		  array (
			'_format_video_embed' => 'https://www.youtube.com/watch?v=gl39GBkwiCE',
			'jnews_primary_category' => 
			array (
			  'id' => '{{category:movie:id}}',
			),
			'jnews_single_post' => 
			array (
			  'source_name' => '',
			  'source_url' => '',
			  'via_name' => '',
			  'via_url' => '',
			  'override_template' => '0',
			  'override' => 
			  array (
				0 => 
				array (
				  'template' => '1',
				  'single_blog_custom' => '',
				  'parallax' => '1',
				  'fullscreen' => '0',
				  'layout' => 'right-sidebar',
				  'sidebar' => 'default-sidebar',
				  'second_sidebar' => 'default-sidebar',
				  'sticky_sidebar' => '1',
				  'share_position' => 'top',
				  'share_float_style' => 'share-monocrhome',
				  'show_share_counter' => '1',
				  'show_view_counter' => '1',
				  'show_featured' => '1',
				  'show_post_meta' => '1',
				  'show_post_author' => '1',
				  'show_post_author_image' => '1',
				  'show_post_date' => '1',
				  'post_date_format' => 'default',
				  'post_date_format_custom' => 'Y/m/d',
				  'show_post_category' => '1',
				  'show_post_reading_time' => '0',
				  'post_reading_time_wpm' => '300',
				  'show_zoom_button' => '0',
				  'zoom_button_out_step' => '2',
				  'zoom_button_in_step' => '3',
				  'show_post_tag' => '1',
				  'show_prev_next_post' => '1',
				  'show_popup_post' => '1',
				  'number_popup_post' => '1',
				  'show_author_box' => '0',
				  'show_post_related' => '0',
				  'show_inline_post_related' => '0',
				),
			  ),
			  'override_image_size' => '0',
			  'image_override' => 
			  array (
				0 => 
				array (
				  'single_post_thumbnail_size' => 'crop-500',
				  'single_post_gallery_size' => 'crop-500',
				),
			  ),
			  'trending_post' => '0',
			  'trending_post_position' => 'meta',
			  'trending_post_label' => 'Trending',
			),
			'jnews_video_option' => 
			array (
			  'video_duration' => '00:10:08',
			  'video_preview' => '{{image:imageW9:src}}',
			),
		  ),
		),
		'6-sci-fi-gadgets-in-movie-we-wish-actually-existed' => 
		array (
		  'title' => '6 Sci-fi Gadgets in Movie We Wish Actually Existed',
		  'content' => 'post1.txt',
		  'featured_image' => 'video4',
		  'post_type' => 'post',
		  'taxonomy' => 
		  array (
			'post_format' => 'post-format-video',
			'category' => 'entertainment,gaming,movie',
		  ),
		  'metabox' => 
		  array (
			'_format_video_embed' => 'https://video.jnews.io/wp-content/uploads/2020/01/self-hosted-video.mp4',
			'jnews_primary_category' => 
			array (
			  'id' => '{{category:movie:id}}',
			),
			'jnews_single_post' => 
			array (
			  'source_name' => '',
			  'source_url' => '',
			  'via_name' => '',
			  'via_url' => '',
			  'override_template' => '0',
			  'override' => 
			  array (
				0 => 
				array (
				  'template' => '1',
				  'single_blog_custom' => '',
				  'parallax' => '1',
				  'fullscreen' => '0',
				  'layout' => 'right-sidebar',
				  'sidebar' => 'default-sidebar',
				  'second_sidebar' => 'default-sidebar',
				  'sticky_sidebar' => '1',
				  'share_position' => 'top',
				  'share_float_style' => 'share-monocrhome',
				  'show_share_counter' => '1',
				  'show_view_counter' => '1',
				  'show_featured' => '1',
				  'show_post_meta' => '1',
				  'show_post_author' => '1',
				  'show_post_author_image' => '1',
				  'show_post_date' => '1',
				  'post_date_format' => 'default',
				  'post_date_format_custom' => 'Y/m/d',
				  'show_post_category' => '1',
				  'show_post_reading_time' => '0',
				  'post_reading_time_wpm' => '300',
				  'show_zoom_button' => '0',
				  'zoom_button_out_step' => '2',
				  'zoom_button_in_step' => '3',
				  'show_post_tag' => '1',
				  'show_prev_next_post' => '1',
				  'show_popup_post' => '1',
				  'number_popup_post' => '1',
				  'show_author_box' => '0',
				  'show_post_related' => '0',
				  'show_inline_post_related' => '0',
				),
			  ),
			  'override_image_size' => '0',
			  'image_override' => 
			  array (
				0 => 
				array (
				  'single_post_thumbnail_size' => 'crop-500',
				  'single_post_gallery_size' => 'crop-500',
				),
			  ),
			  'trending_post' => '0',
			  'trending_post_position' => 'meta',
			  'trending_post_label' => 'Trending',
			),
			'jnews_video_option' => 
			array (
			  'video_duration' => '00:00:20',
			  'video_preview' => '{{image:imageW3:src}}',
			),
		  ),
		),
		'boost-your-events-visibility-with-jazz-near-yous-spotlight-service' => 
		array (
		  'title' => 'Boost Your Event\'s Visibility With Jazz Near You\'s Spotlight Service',
		  'content' => 'post2.txt',
		  'featured_image' => 'video5',
		  'post_type' => 'post',
		  'taxonomy' => 
		  array (
			'post_format' => 'post-format-video',
			'category' => 'music',
		  ),
		  'metabox' => 
		  array (
			'_format_video_embed' => 'https://vimeo.com/371351778',
			'jnews_primary_category' => 
			array (
			  'id' => '{{category:music:id}}',
			),
			'jnews_single_post' => 
			array (
			  'source_name' => '',
			  'source_url' => '',
			  'via_name' => '',
			  'via_url' => '',
			  'override_template' => '0',
			  'override' => 
			  array (
				0 => 
				array (
				  'template' => '1',
				  'single_blog_custom' => '',
				  'parallax' => '1',
				  'fullscreen' => '0',
				  'layout' => 'right-sidebar',
				  'sidebar' => 'default-sidebar',
				  'second_sidebar' => 'default-sidebar',
				  'sticky_sidebar' => '1',
				  'share_position' => 'top',
				  'share_float_style' => 'share-monocrhome',
				  'show_share_counter' => '1',
				  'show_view_counter' => '1',
				  'show_featured' => '1',
				  'show_post_meta' => '1',
				  'show_post_author' => '1',
				  'show_post_author_image' => '1',
				  'show_post_date' => '1',
				  'post_date_format' => 'default',
				  'post_date_format_custom' => 'Y/m/d',
				  'show_post_category' => '1',
				  'show_post_reading_time' => '0',
				  'post_reading_time_wpm' => '300',
				  'show_zoom_button' => '0',
				  'zoom_button_out_step' => '2',
				  'zoom_button_in_step' => '3',
				  'show_post_tag' => '1',
				  'show_prev_next_post' => '1',
				  'show_popup_post' => '1',
				  'number_popup_post' => '1',
				  'show_author_box' => '0',
				  'show_post_related' => '0',
				  'show_inline_post_related' => '0',
				),
			  ),
			  'override_image_size' => '0',
			  'image_override' => 
			  array (
				0 => 
				array (
				  'single_post_thumbnail_size' => 'crop-500',
				  'single_post_gallery_size' => 'crop-500',
				),
			  ),
			  'trending_post' => '0',
			  'trending_post_position' => 'meta',
			  'trending_post_label' => 'Trending',
			),
			'jnews_video_option' => 
			array (
			  'video_duration' => '00:04:04',
			  'video_preview' => '{{image:imageW7:src}}',
			),
		  ),
		),
		'what-you-missed-in-el-camino-a-breaking-bad-movie' => 
		array (
		  'title' => 'The Walking Dead’s Rick Grimes Movie Will ‘Heighten’ The Stakes',
		  'content' => 'post1.txt',
		  'featured_image' => 'video6',
		  'post_type' => 'post',
		  'taxonomy' => 
		  array (
			'post_format' => 'post-format-video',
			'category' => 'movie',
		  ),
		  'metabox' => 
		  array (
			'_format_video_embed' => 'https://www.youtube.com/watch?v=okR95T6QNtM',
			'jnews_primary_category' => 
			array (
			  'id' => '{{category:movie:id}}',
			),
			'jnews_single_post' => 
			array (
			  'source_name' => '',
			  'source_url' => '',
			  'via_name' => '',
			  'via_url' => '',
			  'override_template' => '0',
			  'override' => 
			  array (
				0 => 
				array (
				  'template' => '1',
				  'single_blog_custom' => '',
				  'parallax' => '1',
				  'fullscreen' => '0',
				  'layout' => 'right-sidebar',
				  'sidebar' => 'default-sidebar',
				  'second_sidebar' => 'default-sidebar',
				  'sticky_sidebar' => '1',
				  'share_position' => 'top',
				  'share_float_style' => 'share-monocrhome',
				  'show_share_counter' => '1',
				  'show_view_counter' => '1',
				  'show_featured' => '1',
				  'show_post_meta' => '1',
				  'show_post_author' => '1',
				  'show_post_author_image' => '1',
				  'show_post_date' => '1',
				  'post_date_format' => 'default',
				  'post_date_format_custom' => 'Y/m/d',
				  'show_post_category' => '1',
				  'show_post_reading_time' => '0',
				  'post_reading_time_wpm' => '300',
				  'show_zoom_button' => '0',
				  'zoom_button_out_step' => '2',
				  'zoom_button_in_step' => '3',
				  'show_post_tag' => '1',
				  'show_prev_next_post' => '1',
				  'show_popup_post' => '1',
				  'number_popup_post' => '1',
				  'show_author_box' => '0',
				  'show_post_related' => '0',
				  'show_inline_post_related' => '0',
				),
			  ),
			  'override_image_size' => '0',
			  'image_override' => 
			  array (
				0 => 
				array (
				  'single_post_thumbnail_size' => 'crop-500',
				  'single_post_gallery_size' => 'crop-500',
				),
			  ),
			  'trending_post' => '0',
			  'trending_post_position' => 'meta',
			  'trending_post_label' => 'Trending',
			),
			'jnews_video_option' => 
			array (
			  'video_duration' => '00:12:13',
			  'video_preview' => '{{image:imageW11:src}}',
			),
		  ),
		),
		'kaia-gerber-whats-in-my-bag-video-vogue' => 
		array (
		  'title' => 'How to clean your appliances so they last longer',
		  'content' => 'post2.txt',
		  'featured_image' => 'video7',
		  'post_type' => 'post',
		  'taxonomy' => 
		  array (
			'post_format' => 'post-format-video',
			'category' => 'howto-style',
		  ),
		  'metabox' => 
		  array (
			'_format_video_embed' => 'https://www.youtube.com/watch?v=lUFD5CQyFT0',
			'jnews_primary_category' => 
			array (
			  'id' => '{{category:howto-style:id}}',
			),
			'jnews_single_post' => 
			array (
			  'source_name' => '',
			  'source_url' => '',
			  'via_name' => '',
			  'via_url' => '',
			  'override_template' => '0',
			  'override' => 
			  array (
				0 => 
				array (
				  'template' => '1',
				  'single_blog_custom' => '',
				  'parallax' => '1',
				  'fullscreen' => '0',
				  'layout' => 'right-sidebar',
				  'sidebar' => 'default-sidebar',
				  'second_sidebar' => 'default-sidebar',
				  'sticky_sidebar' => '1',
				  'share_position' => 'top',
				  'share_float_style' => 'share-monocrhome',
				  'show_share_counter' => '1',
				  'show_view_counter' => '1',
				  'show_featured' => '1',
				  'show_post_meta' => '1',
				  'show_post_author' => '1',
				  'show_post_author_image' => '1',
				  'show_post_date' => '1',
				  'post_date_format' => 'default',
				  'post_date_format_custom' => 'Y/m/d',
				  'show_post_category' => '1',
				  'show_post_reading_time' => '0',
				  'post_reading_time_wpm' => '300',
				  'show_zoom_button' => '0',
				  'zoom_button_out_step' => '2',
				  'zoom_button_in_step' => '3',
				  'show_post_tag' => '1',
				  'show_prev_next_post' => '1',
				  'show_popup_post' => '1',
				  'number_popup_post' => '1',
				  'show_author_box' => '0',
				  'show_post_related' => '0',
				  'show_inline_post_related' => '0',
				),
			  ),
			  'override_image_size' => '0',
			  'image_override' => 
			  array (
				0 => 
				array (
				  'single_post_thumbnail_size' => 'crop-500',
				  'single_post_gallery_size' => 'crop-500',
				),
			  ),
			  'trending_post' => '0',
			  'trending_post_position' => 'meta',
			  'trending_post_label' => 'Trending',
			),
			'jnews_video_option' => 
			array (
			  'video_duration' => '00:06:12',
			  'video_preview' => '{{image:imageW1:src}}',
			),
		  ),
		),
		'golf-are-you-ready-for-the-u-s-open-don-cheadle-is' => 
		array (
		  'title' => 'Golf: Are You Ready for the U.S. Open? Don Cheadle Is!',
		  'content' => 'post1.txt',
		  'featured_image' => 'video1',
		  'post_type' => 'post',
		  'taxonomy' => 
		  array (
			'post_format' => 'post-format-video',
			'category' => 'entertainment,movie,news',
		  ),
		  'metabox' => 
		  array (
			'_format_video_embed' => 'https://www.dailymotion.com/video/x7q8u8m',
			'jnews_primary_category' => 
			array (
			  'id' => '{{category:news:id}}',
			),
			'jnews_single_post' => 
			array (
			  'source_name' => '',
			  'source_url' => '',
			  'via_name' => '',
			  'via_url' => '',
			  'override_template' => '0',
			  'override' => 
			  array (
				0 => 
				array (
				  'template' => '1',
				  'single_blog_custom' => '',
				  'parallax' => '1',
				  'fullscreen' => '0',
				  'layout' => 'right-sidebar',
				  'sidebar' => 'default-sidebar',
				  'second_sidebar' => 'default-sidebar',
				  'sticky_sidebar' => '1',
				  'share_position' => 'top',
				  'share_float_style' => 'share-monocrhome',
				  'show_share_counter' => '1',
				  'show_view_counter' => '1',
				  'show_featured' => '1',
				  'show_post_meta' => '1',
				  'show_post_author' => '1',
				  'show_post_author_image' => '1',
				  'show_post_date' => '1',
				  'post_date_format' => 'default',
				  'post_date_format_custom' => 'Y/m/d',
				  'show_post_category' => '1',
				  'show_post_reading_time' => '0',
				  'post_reading_time_wpm' => '300',
				  'show_zoom_button' => '0',
				  'zoom_button_out_step' => '2',
				  'zoom_button_in_step' => '3',
				  'show_post_tag' => '1',
				  'show_prev_next_post' => '1',
				  'show_popup_post' => '1',
				  'number_popup_post' => '1',
				  'show_author_box' => '0',
				  'show_post_related' => '0',
				  'show_inline_post_related' => '0',
				),
			  ),
			  'override_image_size' => '0',
			  'image_override' => 
			  array (
				0 => 
				array (
				  'single_post_thumbnail_size' => 'crop-500',
				  'single_post_gallery_size' => 'crop-500',
				),
			  ),
			  'trending_post' => '0',
			  'trending_post_position' => 'meta',
			  'trending_post_label' => 'Trending',
			),
			'jnews_video_option' => 
			array (
			  'video_duration' => '00:00:15',
			  'video_preview' => '{{image:imageW9:src}}',
			),
		  ),
		),
		'niki-lowkey-official-visualizer-music-video' => 
		array (
		  'title' => 'NIKI – lowkey (Official Visualizer Music Video)',
		  'content' => 'post2.txt',
		  'featured_image' => 'video2',
		  'post_type' => 'post',
		  'taxonomy' => 
		  array (
			'post_format' => 'post-format-video',
			'category' => 'music',
		  ),
		  'metabox' => 
		  array (
			'_format_video_embed' => 'https://www.youtube.com/watch?v=mxyucLe9YE4',
			'jnews_primary_category' => 
			array (
			  'id' => '{{category:music:id}}',
			),
			'jnews_single_post' => 
			array (
			  'source_name' => '',
			  'source_url' => '',
			  'via_name' => '',
			  'via_url' => '',
			  'override_template' => '0',
			  'override' => 
			  array (
				0 => 
				array (
				  'template' => '1',
				  'single_blog_custom' => '',
				  'parallax' => '1',
				  'fullscreen' => '0',
				  'layout' => 'right-sidebar',
				  'sidebar' => 'default-sidebar',
				  'second_sidebar' => 'default-sidebar',
				  'sticky_sidebar' => '1',
				  'share_position' => 'top',
				  'share_float_style' => 'share-monocrhome',
				  'show_share_counter' => '1',
				  'show_view_counter' => '1',
				  'show_featured' => '1',
				  'show_post_meta' => '1',
				  'show_post_author' => '1',
				  'show_post_author_image' => '1',
				  'show_post_date' => '1',
				  'post_date_format' => 'default',
				  'post_date_format_custom' => 'Y/m/d',
				  'show_post_category' => '1',
				  'show_post_reading_time' => '0',
				  'post_reading_time_wpm' => '300',
				  'show_zoom_button' => '0',
				  'zoom_button_out_step' => '2',
				  'zoom_button_in_step' => '3',
				  'show_post_tag' => '1',
				  'show_prev_next_post' => '1',
				  'show_popup_post' => '1',
				  'number_popup_post' => '1',
				  'show_author_box' => '0',
				  'show_post_related' => '0',
				  'show_inline_post_related' => '0',
				),
			  ),
			  'override_image_size' => '0',
			  'image_override' => 
			  array (
				0 => 
				array (
				  'single_post_thumbnail_size' => 'crop-500',
				  'single_post_gallery_size' => 'crop-500',
				),
			  ),
			  'trending_post' => '0',
			  'trending_post_position' => 'meta',
			  'trending_post_label' => 'Trending',
			),
			'jnews_video_option' => 
			array (
			  'video_duration' => '00:02:52',
			  'video_preview' => '{{image:imageW7:src}}',
			),
		  ),
		),
		'apple-airpods-pro-first-look-a-big-improvement' => 
		array (
		  'title' => 'Samsung’s new Ballie robot is like a real-life mini BB-8',
		  'content' => 'post1.txt',
		  'featured_image' => 'video3',
		  'post_type' => 'post',
		  'taxonomy' => 
		  array (
			'post_format' => 'post-format-video',
			'category' => 'technology',
		  ),
		  'metabox' => 
		  array (
			'_format_video_embed' => 'https://www.youtube.com/watch?v=4t66KO0uE7Y',
			'jnews_primary_category' => 
			array (
			  'id' => '{{category:technology:id}}',
			),
			'jnews_single_post' => 
			array (
			  'source_name' => '',
			  'source_url' => '',
			  'via_name' => '',
			  'via_url' => '',
			  'override_template' => '0',
			  'override' => 
			  array (
				0 => 
				array (
				  'template' => '1',
				  'single_blog_custom' => '',
				  'parallax' => '1',
				  'fullscreen' => '0',
				  'layout' => 'right-sidebar',
				  'sidebar' => 'default-sidebar',
				  'second_sidebar' => 'default-sidebar',
				  'sticky_sidebar' => '1',
				  'share_position' => 'top',
				  'share_float_style' => 'share-monocrhome',
				  'show_share_counter' => '1',
				  'show_view_counter' => '1',
				  'show_featured' => '1',
				  'show_post_meta' => '1',
				  'show_post_author' => '1',
				  'show_post_author_image' => '1',
				  'show_post_date' => '1',
				  'post_date_format' => 'default',
				  'post_date_format_custom' => 'Y/m/d',
				  'show_post_category' => '1',
				  'show_post_reading_time' => '0',
				  'post_reading_time_wpm' => '300',
				  'show_zoom_button' => '0',
				  'zoom_button_out_step' => '2',
				  'zoom_button_in_step' => '3',
				  'show_post_tag' => '1',
				  'show_prev_next_post' => '1',
				  'show_popup_post' => '1',
				  'number_popup_post' => '1',
				  'show_author_box' => '0',
				  'show_post_related' => '0',
				  'show_inline_post_related' => '0',
				),
			  ),
			  'override_image_size' => '0',
			  'image_override' => 
			  array (
				0 => 
				array (
				  'single_post_thumbnail_size' => 'crop-500',
				  'single_post_gallery_size' => 'crop-500',
				),
			  ),
			  'trending_post' => '0',
			  'trending_post_position' => 'meta',
			  'trending_post_label' => 'Trending',
			),
			'jnews_video_option' => 
			array (
			  'video_duration' => '00:05:40',
			  'video_preview' => '{{image:imageW10:src}}',
			),
		  ),
		),
		'how-to-spend-your-time-in-thailand-a-suggested-itinerary' => 
		array (
		  'title' => 'How to Spend Your Time in Thailand: A Suggested Itinerary',
		  'content' => 'post2.txt',
		  'featured_image' => 'video4',
		  'post_type' => 'post',
		  'taxonomy' => 
		  array (
			'post_format' => 'post-format-video',
			'category' => 'travel',
		  ),
		  'metabox' => 
		  array (
			'_format_video_embed' => 'https://www.youtube.com/watch?v=kkYyESKiOOg',
			'jnews_single_post' => 
			array (
			  'source_name' => '',
			  'source_url' => '',
			  'via_name' => '',
			  'via_url' => '',
			  'override_template' => '0',
			  'override' => 
			  array (
				0 => 
				array (
				  'template' => '1',
				  'single_blog_custom' => '',
				  'parallax' => '1',
				  'fullscreen' => '0',
				  'layout' => 'right-sidebar',
				  'sidebar' => 'default-sidebar',
				  'second_sidebar' => 'default-sidebar',
				  'sticky_sidebar' => '1',
				  'share_position' => 'top',
				  'share_float_style' => 'share-monocrhome',
				  'show_share_counter' => '1',
				  'show_view_counter' => '1',
				  'show_featured' => '1',
				  'show_post_meta' => '1',
				  'show_post_author' => '1',
				  'show_post_author_image' => '1',
				  'show_post_date' => '1',
				  'post_date_format' => 'default',
				  'post_date_format_custom' => 'Y/m/d',
				  'show_post_category' => '1',
				  'show_post_reading_time' => '0',
				  'post_reading_time_wpm' => '300',
				  'show_zoom_button' => '0',
				  'zoom_button_out_step' => '2',
				  'zoom_button_in_step' => '3',
				  'show_post_tag' => '1',
				  'show_prev_next_post' => '1',
				  'show_popup_post' => '1',
				  'number_popup_post' => '1',
				  'show_author_box' => '0',
				  'show_post_related' => '0',
				  'show_inline_post_related' => '0',
				),
			  ),
			  'override_image_size' => '0',
			  'image_override' => 
			  array (
				0 => 
				array (
				  'single_post_thumbnail_size' => 'crop-500',
				  'single_post_gallery_size' => 'crop-500',
				),
			  ),
			  'trending_post' => '0',
			  'trending_post_position' => 'meta',
			  'trending_post_label' => 'Trending',
			),
			'jnews_video_option' => 
			array (
			  'video_duration' => '00:28:58',
			  'video_preview' => '{{image:imageW11:src}}',
			),
		  ),
		),
		'a-golf-lovers-ideal-stay-in-the-dominican-republic' => 
		array (
		  'title' => 'A Golf Lover\'s Ideal Stay in the Dominican Republic',
		  'content' => 'post1.txt',
		  'featured_image' => 'video5',
		  'post_type' => 'post',
		  'taxonomy' => 
		  array (
			'post_format' => 'post-format-video',
			'category' => 'travel',
		  ),
		  'metabox' => 
		  array (
			'_format_video_embed' => 'https://www.youtube.com/watch?v=tDCe58s4JU8',
			'jnews_single_post' => 
			array (
			  'source_name' => '',
			  'source_url' => '',
			  'via_name' => '',
			  'via_url' => '',
			  'override_template' => '0',
			  'override' => 
			  array (
				0 => 
				array (
				  'template' => '1',
				  'single_blog_custom' => '',
				  'parallax' => '1',
				  'fullscreen' => '0',
				  'layout' => 'right-sidebar',
				  'sidebar' => 'default-sidebar',
				  'second_sidebar' => 'default-sidebar',
				  'sticky_sidebar' => '1',
				  'share_position' => 'top',
				  'share_float_style' => 'share-monocrhome',
				  'show_share_counter' => '1',
				  'show_view_counter' => '1',
				  'show_featured' => '1',
				  'show_post_meta' => '1',
				  'show_post_author' => '1',
				  'show_post_author_image' => '1',
				  'show_post_date' => '1',
				  'post_date_format' => 'default',
				  'post_date_format_custom' => 'Y/m/d',
				  'show_post_category' => '1',
				  'show_post_reading_time' => '0',
				  'post_reading_time_wpm' => '300',
				  'show_zoom_button' => '0',
				  'zoom_button_out_step' => '2',
				  'zoom_button_in_step' => '3',
				  'show_post_tag' => '1',
				  'show_prev_next_post' => '1',
				  'show_popup_post' => '1',
				  'number_popup_post' => '1',
				  'show_author_box' => '0',
				  'show_post_related' => '0',
				  'show_inline_post_related' => '0',
				),
			  ),
			  'override_image_size' => '0',
			  'image_override' => 
			  array (
				0 => 
				array (
				  'single_post_thumbnail_size' => 'crop-500',
				  'single_post_gallery_size' => 'crop-500',
				),
			  ),
			  'trending_post' => '0',
			  'trending_post_position' => 'meta',
			  'trending_post_label' => 'Trending',
			),
			'jnews_video_option' => 
			array (
			  'video_duration' => '00:01:06',
			  'video_preview' => '{{image:imageW3:src}}',
			),
		  ),
		),
		'white-sands-monument-is-our-newest-national-park' => 
		array (
		  'title' => 'The Best Winter Travel Destination in Every State',
		  'content' => 'post2.txt',
		  'featured_image' => 'video6',
		  'post_type' => 'post',
		  'taxonomy' => 
		  array (
			'post_format' => 'post-format-video',
			'category' => 'travel',
		  ),
		  'metabox' => 
		  array (
			'_format_video_embed' => 'https://www.youtube.com/watch?v=gTyvEgLiiOI',
			'jnews_single_post' => 
			array (
			  'source_name' => '',
			  'source_url' => '',
			  'via_name' => '',
			  'via_url' => '',
			  'override_template' => '0',
			  'override' => 
			  array (
				0 => 
				array (
				  'template' => '1',
				  'single_blog_custom' => '',
				  'parallax' => '1',
				  'fullscreen' => '0',
				  'layout' => 'right-sidebar',
				  'sidebar' => 'default-sidebar',
				  'second_sidebar' => 'default-sidebar',
				  'sticky_sidebar' => '1',
				  'share_position' => 'top',
				  'share_float_style' => 'share-monocrhome',
				  'show_share_counter' => '1',
				  'show_view_counter' => '1',
				  'show_featured' => '1',
				  'show_post_meta' => '1',
				  'show_post_author' => '1',
				  'show_post_author_image' => '1',
				  'show_post_date' => '1',
				  'post_date_format' => 'default',
				  'post_date_format_custom' => 'Y/m/d',
				  'show_post_category' => '1',
				  'show_post_reading_time' => '0',
				  'post_reading_time_wpm' => '300',
				  'show_zoom_button' => '0',
				  'zoom_button_out_step' => '2',
				  'zoom_button_in_step' => '3',
				  'show_post_tag' => '1',
				  'show_prev_next_post' => '1',
				  'show_popup_post' => '1',
				  'number_popup_post' => '1',
				  'show_author_box' => '0',
				  'show_post_related' => '0',
				  'show_inline_post_related' => '0',
				),
			  ),
			  'override_image_size' => '0',
			  'image_override' => 
			  array (
				0 => 
				array (
				  'single_post_thumbnail_size' => 'crop-500',
				  'single_post_gallery_size' => 'crop-500',
				),
			  ),
			  'trending_post' => '0',
			  'trending_post_position' => 'meta',
			  'trending_post_label' => 'Trending',
			),
			'jnews_video_option' => 
			array (
			  'video_duration' => '00:12:08',
			  'video_preview' => '{{image:imageW2:src}}',
			),
		  ),
		),
		'the-netherlands-nixes-holland-as-a-nickname' => 
		array (
		  'title' => 'The Netherlands Nixes \'Holland\' as a Nickname',
		  'content' => 'post1.txt',
		  'featured_image' => 'video7',
		  'post_type' => 'post',
		  'taxonomy' => 
		  array (
			'post_format' => 'post-format-video',
			'category' => 'travel',
		  ),
		  'metabox' => 
		  array (
			'_format_video_embed' => 'https://www.youtube.com/watch?v=K8GPB4c9mVs',
			'jnews_single_post' => 
			array (
			  'source_name' => '',
			  'source_url' => '',
			  'via_name' => '',
			  'via_url' => '',
			  'override_template' => '0',
			  'override' => 
			  array (
				0 => 
				array (
				  'template' => '1',
				  'single_blog_custom' => '',
				  'parallax' => '1',
				  'fullscreen' => '0',
				  'layout' => 'right-sidebar',
				  'sidebar' => 'default-sidebar',
				  'second_sidebar' => 'default-sidebar',
				  'sticky_sidebar' => '1',
				  'share_position' => 'top',
				  'share_float_style' => 'share-monocrhome',
				  'show_share_counter' => '1',
				  'show_view_counter' => '1',
				  'show_featured' => '1',
				  'show_post_meta' => '1',
				  'show_post_author' => '1',
				  'show_post_author_image' => '1',
				  'show_post_date' => '1',
				  'post_date_format' => 'default',
				  'post_date_format_custom' => 'Y/m/d',
				  'show_post_category' => '1',
				  'show_post_reading_time' => '0',
				  'post_reading_time_wpm' => '300',
				  'show_zoom_button' => '0',
				  'zoom_button_out_step' => '2',
				  'zoom_button_in_step' => '3',
				  'show_post_tag' => '1',
				  'show_prev_next_post' => '1',
				  'show_popup_post' => '1',
				  'number_popup_post' => '1',
				  'show_author_box' => '0',
				  'show_post_related' => '0',
				  'show_inline_post_related' => '0',
				),
			  ),
			  'override_image_size' => '0',
			  'image_override' => 
			  array (
				0 => 
				array (
				  'single_post_thumbnail_size' => 'crop-500',
				  'single_post_gallery_size' => 'crop-500',
				),
			  ),
			  'trending_post' => '0',
			  'trending_post_position' => 'meta',
			  'trending_post_label' => 'Trending',
			),
			'jnews_video_option' => 
			array (
			  'video_duration' => '00:41:04',
			  'video_preview' => '{{image:imageW3:src}}',
			),
		  ),
		),
		'will-destinations-ever-rule-the-world' => 
		array (
		  'title' => 'Will Destinations Ever Rule the World?',
		  'content' => 'post2.txt',
		  'featured_image' => 'video1',
		  'post_type' => 'post',
		  'taxonomy' => 
		  array (
			'post_format' => 'post-format-video',
			'category' => 'travel',
		  ),
		  'metabox' => 
		  array (
			'_format_video_embed' => 'https://www.youtube.com/watch?v=OHAWwaYu2H0',
			'jnews_single_post' => 
			array (
			  'source_name' => '',
			  'source_url' => '',
			  'via_name' => '',
			  'via_url' => '',
			  'override_template' => '0',
			  'override' => 
			  array (
				0 => 
				array (
				  'template' => '1',
				  'single_blog_custom' => '',
				  'parallax' => '1',
				  'fullscreen' => '0',
				  'layout' => 'right-sidebar',
				  'sidebar' => 'default-sidebar',
				  'second_sidebar' => 'default-sidebar',
				  'sticky_sidebar' => '1',
				  'share_position' => 'top',
				  'share_float_style' => 'share-monocrhome',
				  'show_share_counter' => '1',
				  'show_view_counter' => '1',
				  'show_featured' => '1',
				  'show_post_meta' => '1',
				  'show_post_author' => '1',
				  'show_post_author_image' => '1',
				  'show_post_date' => '1',
				  'post_date_format' => 'default',
				  'post_date_format_custom' => 'Y/m/d',
				  'show_post_category' => '1',
				  'show_post_reading_time' => '0',
				  'post_reading_time_wpm' => '300',
				  'show_zoom_button' => '0',
				  'zoom_button_out_step' => '2',
				  'zoom_button_in_step' => '3',
				  'show_post_tag' => '1',
				  'show_prev_next_post' => '1',
				  'show_popup_post' => '1',
				  'number_popup_post' => '1',
				  'show_author_box' => '0',
				  'show_post_related' => '0',
				  'show_inline_post_related' => '0',
				),
			  ),
			  'override_image_size' => '0',
			  'image_override' => 
			  array (
				0 => 
				array (
				  'single_post_thumbnail_size' => 'crop-500',
				  'single_post_gallery_size' => 'crop-500',
				),
			  ),
			  'trending_post' => '0',
			  'trending_post_position' => 'meta',
			  'trending_post_label' => 'Trending',
			),
			'jnews_video_option' => 
			array (
			  'video_duration' => '00:07:08',
			  'video_preview' => '{{image:imageW6:src}}',
			),
		  ),
		),
		'harley-davidsons-electric-balance-bike-is-for-future-riders' => 
		array (
		  'title' => 'Sony reveals PlayStation 5 logo and shares PSVR sales milestone',
		  'content' => 'post1.txt',
		  'featured_image' => 'video2',
		  'post_type' => 'post',
		  'taxonomy' => 
		  array (
			'post_format' => 'post-format-video',
			'category' => 'movie,technology',
		  ),
		  'metabox' => 
		  array (
			'_format_video_embed' => 'https://www.youtube.com/watch?v=JCFys3AYHyg',
			'jnews_primary_category' => 
			array (
			  'id' => '{{category:technology:id}}',
			),
			'jnews_single_post' => 
			array (
			  'source_name' => '',
			  'source_url' => '',
			  'via_name' => '',
			  'via_url' => '',
			  'override_template' => '0',
			  'override' => 
			  array (
				0 => 
				array (
				  'template' => '1',
				  'single_blog_custom' => '',
				  'parallax' => '1',
				  'fullscreen' => '0',
				  'layout' => 'right-sidebar',
				  'sidebar' => 'default-sidebar',
				  'second_sidebar' => 'default-sidebar',
				  'sticky_sidebar' => '1',
				  'share_position' => 'top',
				  'share_float_style' => 'share-monocrhome',
				  'show_share_counter' => '1',
				  'show_view_counter' => '1',
				  'show_featured' => '1',
				  'show_post_meta' => '1',
				  'show_post_author' => '1',
				  'show_post_author_image' => '1',
				  'show_post_date' => '1',
				  'post_date_format' => 'default',
				  'post_date_format_custom' => 'Y/m/d',
				  'show_post_category' => '1',
				  'show_post_reading_time' => '0',
				  'post_reading_time_wpm' => '300',
				  'show_zoom_button' => '0',
				  'zoom_button_out_step' => '2',
				  'zoom_button_in_step' => '3',
				  'show_post_tag' => '1',
				  'show_prev_next_post' => '1',
				  'show_popup_post' => '1',
				  'number_popup_post' => '1',
				  'show_author_box' => '0',
				  'show_post_related' => '0',
				  'show_inline_post_related' => '0',
				),
			  ),
			  'override_image_size' => '0',
			  'image_override' => 
			  array (
				0 => 
				array (
				  'single_post_thumbnail_size' => 'crop-500',
				  'single_post_gallery_size' => 'crop-500',
				),
			  ),
			  'trending_post' => '0',
			  'trending_post_position' => 'meta',
			  'trending_post_label' => 'Trending',
			),
			'jnews_video_option' => 
			array (
			  'video_duration' => '00:00:39',
			  'video_preview' => '{{image:imageW7:src}}',
			),
		  ),
		),
		'liv-tyler-just-got-a-major-hair-makeover-for-fall' => 
		array (
		  'title' => 'Why Star is Wearing Same Thing all Award Season',
		  'content' => 'post2.txt',
		  'featured_image' => 'video3',
		  'post_type' => 'post',
		  'taxonomy' => 
		  array (
			'post_format' => 'post-format-video',
			'category' => 'howto-style',
		  ),
		  'metabox' => 
		  array (
			'_format_video_embed' => 'https://www.youtube.com/watch?v=S0gY8eV8KV8',
			'jnews_primary_category' => 
			array (
			  'id' => '{{category:howto-style:id}}',
			),
			'jnews_single_post' => 
			array (
			  'source_name' => '',
			  'source_url' => '',
			  'via_name' => '',
			  'via_url' => '',
			  'override_template' => '0',
			  'override' => 
			  array (
				0 => 
				array (
				  'template' => '1',
				  'single_blog_custom' => '',
				  'parallax' => '1',
				  'fullscreen' => '0',
				  'layout' => 'right-sidebar',
				  'sidebar' => 'default-sidebar',
				  'second_sidebar' => 'default-sidebar',
				  'sticky_sidebar' => '1',
				  'share_position' => 'top',
				  'share_float_style' => 'share-monocrhome',
				  'show_share_counter' => '1',
				  'show_view_counter' => '1',
				  'show_featured' => '1',
				  'show_post_meta' => '1',
				  'show_post_author' => '1',
				  'show_post_author_image' => '1',
				  'show_post_date' => '1',
				  'post_date_format' => 'default',
				  'post_date_format_custom' => 'Y/m/d',
				  'show_post_category' => '1',
				  'show_post_reading_time' => '0',
				  'post_reading_time_wpm' => '300',
				  'show_zoom_button' => '0',
				  'zoom_button_out_step' => '2',
				  'zoom_button_in_step' => '3',
				  'show_post_tag' => '1',
				  'show_prev_next_post' => '1',
				  'show_popup_post' => '1',
				  'number_popup_post' => '1',
				  'show_author_box' => '0',
				  'show_post_related' => '0',
				  'show_inline_post_related' => '0',
				),
			  ),
			  'override_image_size' => '0',
			  'image_override' => 
			  array (
				0 => 
				array (
				  'single_post_thumbnail_size' => 'crop-500',
				  'single_post_gallery_size' => 'crop-500',
				),
			  ),
			  'trending_post' => '0',
			  'trending_post_position' => 'meta',
			  'trending_post_label' => 'Trending',
			),
			'jnews_video_option' => 
			array (
			  'video_duration' => '00:04:48',
			  'video_preview' => '{{image:imageW6:src}}',
			),
		  ),
		),
		'fintech-summit-and-expo-to-begin-on-september-23' => 
		array (
		  'title' => 'Tennis: Smoke delays unlikely at Australian Open, say organisers',
		  'content' => 'post1.txt',
		  'featured_image' => 'video4',
		  'post_type' => 'post',
		  'taxonomy' => 
		  array (
			'post_format' => 'post-format-video',
			'category' => 'news,technology',
		  ),
		  'metabox' => 
		  array (
			'_format_video_embed' => 'https://www.youtube.com/watch?v=RswH-5SrPQo',
			'jnews_primary_category' => 
			array (
			  'id' => '{{category:news:id}}',
			),
			'jnews_single_post' => 
			array (
			  'source_name' => '',
			  'source_url' => '',
			  'via_name' => '',
			  'via_url' => '',
			  'override_template' => '0',
			  'override' => 
			  array (
				0 => 
				array (
				  'template' => '1',
				  'single_blog_custom' => '',
				  'parallax' => '1',
				  'fullscreen' => '0',
				  'layout' => 'right-sidebar',
				  'sidebar' => 'default-sidebar',
				  'second_sidebar' => 'default-sidebar',
				  'sticky_sidebar' => '1',
				  'share_position' => 'top',
				  'share_float_style' => 'share-monocrhome',
				  'show_share_counter' => '1',
				  'show_view_counter' => '1',
				  'show_featured' => '1',
				  'show_post_meta' => '1',
				  'show_post_author' => '1',
				  'show_post_author_image' => '1',
				  'show_post_date' => '1',
				  'post_date_format' => 'default',
				  'post_date_format_custom' => 'Y/m/d',
				  'show_post_category' => '1',
				  'show_post_reading_time' => '0',
				  'post_reading_time_wpm' => '300',
				  'show_zoom_button' => '0',
				  'zoom_button_out_step' => '2',
				  'zoom_button_in_step' => '3',
				  'show_post_tag' => '1',
				  'show_prev_next_post' => '1',
				  'show_popup_post' => '1',
				  'number_popup_post' => '1',
				  'show_author_box' => '0',
				  'show_post_related' => '0',
				  'show_inline_post_related' => '0',
				),
			  ),
			  'override_image_size' => '0',
			  'image_override' => 
			  array (
				0 => 
				array (
				  'single_post_thumbnail_size' => 'crop-500',
				  'single_post_gallery_size' => 'crop-500',
				),
			  ),
			  'trending_post' => '0',
			  'trending_post_position' => 'meta',
			  'trending_post_label' => 'Trending',
			),
			'jnews_video_option' => 
			array (
			  'video_duration' => '00:05:37',
			  'video_preview' => '{{image:imageW8:src}}',
			),
		  ),
		),
		'gundala-director-joko-anwar-lets-imaginations-go-wild' => 
		array (
		  'title' => 'Why Ghostbusters: Afterlife Didn\'t Bring Back The Original Ecto-1',
		  'content' => 'post2.txt',
		  'featured_image' => 'video5',
		  'post_type' => 'post',
		  'taxonomy' => 
		  array (
			'post_format' => 'post-format-video',
			'category' => 'entertainment,movie',
		  ),
		  'metabox' => 
		  array (
			'_format_video_embed' => 'https://www.youtube.com/watch?v=3nMAgHSEeXs',
			'jnews_primary_category' => 
			array (
			  'id' => '{{category:movie:id}}',
			),
			'jnews_single_post' => 
			array (
			  'source_name' => '',
			  'source_url' => '',
			  'via_name' => '',
			  'via_url' => '',
			  'override_template' => '0',
			  'override' => 
			  array (
				0 => 
				array (
				  'template' => '1',
				  'single_blog_custom' => '',
				  'parallax' => '1',
				  'fullscreen' => '0',
				  'layout' => 'right-sidebar',
				  'sidebar' => 'default-sidebar',
				  'second_sidebar' => 'default-sidebar',
				  'sticky_sidebar' => '1',
				  'share_position' => 'top',
				  'share_float_style' => 'share-monocrhome',
				  'show_share_counter' => '1',
				  'show_view_counter' => '1',
				  'show_featured' => '1',
				  'show_post_meta' => '1',
				  'show_post_author' => '1',
				  'show_post_author_image' => '1',
				  'show_post_date' => '1',
				  'post_date_format' => 'default',
				  'post_date_format_custom' => 'Y/m/d',
				  'show_post_category' => '1',
				  'show_post_reading_time' => '0',
				  'post_reading_time_wpm' => '300',
				  'show_zoom_button' => '0',
				  'zoom_button_out_step' => '2',
				  'zoom_button_in_step' => '3',
				  'show_post_tag' => '1',
				  'show_prev_next_post' => '1',
				  'show_popup_post' => '1',
				  'number_popup_post' => '1',
				  'show_author_box' => '0',
				  'show_post_related' => '0',
				  'show_inline_post_related' => '0',
				),
			  ),
			  'override_image_size' => '0',
			  'image_override' => 
			  array (
				0 => 
				array (
				  'single_post_thumbnail_size' => 'crop-500',
				  'single_post_gallery_size' => 'crop-500',
				),
			  ),
			  'trending_post' => '0',
			  'trending_post_position' => 'meta',
			  'trending_post_label' => 'Trending',
			),
			'jnews_video_option' => 
			array (
			  'video_duration' => '00:06:09',
			  'video_preview' => '{{image:imageW5:src}}',
			),
		  ),
		),
		'dua-lipa-lost-in-your-light-feat-miguel-official-video' => 
		array (
		  'title' => 'Rihanna Blessed Our 2020 With a Makeup-Free Selfie',
		  'content' => 'post1.txt',
		  'featured_image' => 'video6',
		  'post_type' => 'post',
		  'taxonomy' => 
		  array (
			'post_format' => 'post-format-video',
			'category' => 'music',
		  ),
		  'metabox' => 
		  array (
			'_format_video_embed' => 'https://www.youtube.com/watch?v=KONe4SNFA64',
			'jnews_primary_category' => 
			array (
			  'id' => '{{category:music:id}}',
			),
			'jnews_single_post' => 
			array (
			  'source_name' => '',
			  'source_url' => '',
			  'via_name' => '',
			  'via_url' => '',
			  'override_template' => '0',
			  'override' => 
			  array (
				0 => 
				array (
				  'template' => '1',
				  'single_blog_custom' => '',
				  'parallax' => '1',
				  'fullscreen' => '0',
				  'layout' => 'right-sidebar',
				  'sidebar' => 'default-sidebar',
				  'second_sidebar' => 'default-sidebar',
				  'sticky_sidebar' => '1',
				  'share_position' => 'top',
				  'share_float_style' => 'share-monocrhome',
				  'show_share_counter' => '1',
				  'show_view_counter' => '1',
				  'show_featured' => '1',
				  'show_post_meta' => '1',
				  'show_post_author' => '1',
				  'show_post_author_image' => '1',
				  'show_post_date' => '1',
				  'post_date_format' => 'default',
				  'post_date_format_custom' => 'Y/m/d',
				  'show_post_category' => '1',
				  'show_post_reading_time' => '0',
				  'post_reading_time_wpm' => '300',
				  'show_zoom_button' => '0',
				  'zoom_button_out_step' => '2',
				  'zoom_button_in_step' => '3',
				  'show_post_tag' => '1',
				  'show_prev_next_post' => '1',
				  'show_popup_post' => '1',
				  'number_popup_post' => '1',
				  'show_author_box' => '0',
				  'show_post_related' => '0',
				  'show_inline_post_related' => '0',
				),
			  ),
			  'override_image_size' => '0',
			  'image_override' => 
			  array (
				0 => 
				array (
				  'single_post_thumbnail_size' => 'crop-500',
				  'single_post_gallery_size' => 'crop-500',
				),
			  ),
			  'trending_post' => '0',
			  'trending_post_position' => 'meta',
			  'trending_post_label' => 'Trending',
			),
			'jnews_video_option' => 
			array (
			  'video_duration' => '00:10:29',
			  'video_preview' => '{{image:imageW4:src}}',
			),
		  ),
		),
		'stranger-things-3-the-game-arrives-on-ios-and-android' => 
		array (
		  'title' => 'Fortnite was the highest-earning game of the year again',
		  'content' => 'post2.txt',
		  'featured_image' => 'video7',
		  'post_type' => 'post',
		  'taxonomy' => 
		  array (
			'post_format' => 'post-format-video',
			'category' => 'gaming,movie',
		  ),
		  'metabox' => 
		  array (
			'_format_video_embed' => 'https://www.youtube.com/watch?v=KOq5w-icRBM',
			'jnews_primary_category' => 
			array (
			  'id' => '{{category:gaming:id}}',
			),
			'jnews_single_post' => 
			array (
			  'source_name' => '',
			  'source_url' => '',
			  'via_name' => '',
			  'via_url' => '',
			  'override_template' => '0',
			  'override' => 
			  array (
				0 => 
				array (
				  'template' => '1',
				  'single_blog_custom' => '',
				  'parallax' => '1',
				  'fullscreen' => '0',
				  'layout' => 'right-sidebar',
				  'sidebar' => 'default-sidebar',
				  'second_sidebar' => 'default-sidebar',
				  'sticky_sidebar' => '1',
				  'share_position' => 'top',
				  'share_float_style' => 'share-monocrhome',
				  'show_share_counter' => '1',
				  'show_view_counter' => '1',
				  'show_featured' => '1',
				  'show_post_meta' => '1',
				  'show_post_author' => '1',
				  'show_post_author_image' => '1',
				  'show_post_date' => '1',
				  'post_date_format' => 'default',
				  'post_date_format_custom' => 'Y/m/d',
				  'show_post_category' => '1',
				  'show_post_reading_time' => '0',
				  'post_reading_time_wpm' => '300',
				  'show_zoom_button' => '0',
				  'zoom_button_out_step' => '2',
				  'zoom_button_in_step' => '3',
				  'show_post_tag' => '1',
				  'show_prev_next_post' => '1',
				  'show_popup_post' => '1',
				  'number_popup_post' => '1',
				  'show_author_box' => '0',
				  'show_post_related' => '0',
				  'show_inline_post_related' => '0',
				),
			  ),
			  'override_image_size' => '0',
			  'image_override' => 
			  array (
				0 => 
				array (
				  'single_post_thumbnail_size' => 'crop-500',
				  'single_post_gallery_size' => 'crop-500',
				),
			  ),
			  'trending_post' => '0',
			  'trending_post_position' => 'meta',
			  'trending_post_label' => 'Trending',
			),
			'jnews_video_option' => 
			array (
			  'video_duration' => '00:11:11',
			  'video_preview' => '{{image:imageW6:src}}',
			),
		  ),
		),
		'how-would-you-dress-if-you-werent-online' => 
		array (
		  'title' => 'Japanese Artisans Sharpen their Traditional Skills',
		  'content' => 'post1.txt',
		  'featured_image' => 'video1',
		  'post_type' => 'post',
		  'taxonomy' => 
		  array (
			'post_format' => 'post-format-video',
			'category' => 'entertainment,howto-style',
		  ),
		  'metabox' => 
		  array (
			'_format_video_embed' => 'https://www.youtube.com/watch?v=XrEY_TAt-Lw',
			'jnews_primary_category' => 
			array (
			  'id' => '{{category:howto-style:id}}',
			),
			'jnews_single_post' => 
			array (
			  'source_name' => '',
			  'source_url' => '',
			  'via_name' => '',
			  'via_url' => '',
			  'override_template' => '0',
			  'override' => 
			  array (
				0 => 
				array (
				  'template' => '1',
				  'single_blog_custom' => '',
				  'parallax' => '1',
				  'fullscreen' => '0',
				  'layout' => 'right-sidebar',
				  'sidebar' => 'default-sidebar',
				  'second_sidebar' => 'default-sidebar',
				  'sticky_sidebar' => '1',
				  'share_position' => 'top',
				  'share_float_style' => 'share-monocrhome',
				  'show_share_counter' => '1',
				  'show_view_counter' => '1',
				  'show_featured' => '1',
				  'show_post_meta' => '1',
				  'show_post_author' => '1',
				  'show_post_author_image' => '1',
				  'show_post_date' => '1',
				  'post_date_format' => 'default',
				  'post_date_format_custom' => 'Y/m/d',
				  'show_post_category' => '1',
				  'show_post_reading_time' => '0',
				  'post_reading_time_wpm' => '300',
				  'show_zoom_button' => '0',
				  'zoom_button_out_step' => '2',
				  'zoom_button_in_step' => '3',
				  'show_post_tag' => '1',
				  'show_prev_next_post' => '1',
				  'show_popup_post' => '1',
				  'number_popup_post' => '1',
				  'show_author_box' => '0',
				  'show_post_related' => '0',
				  'show_inline_post_related' => '0',
				),
			  ),
			  'override_image_size' => '0',
			  'image_override' => 
			  array (
				0 => 
				array (
				  'single_post_thumbnail_size' => 'crop-500',
				  'single_post_gallery_size' => 'crop-500',
				),
			  ),
			  'trending_post' => '0',
			  'trending_post_position' => 'meta',
			  'trending_post_label' => 'Trending',
			),
			'jnews_video_option' => 
			array (
			  'video_duration' => '00:03:01',
			  'video_preview' => '{{image:imageW3:src}}',
			),
		  ),
		),
		'one-handed-guitarist-finds-great-success-as-musician' => 
		array (
		  'title' => 'That Drake/Future Collab Is Finally Coming \'Soon Soon\'',
		  'content' => 'post2.txt',
		  'featured_image' => 'video2',
		  'post_type' => 'post',
		  'taxonomy' => 
		  array (
			'post_format' => 'post-format-video',
			'category' => 'howto-style,music',
		  ),
		  'metabox' => 
		  array (
			'_format_video_embed' => 'https://www.youtube.com/watch?v=yRndgPxKFsM',
			'jnews_primary_category' => 
			array (
			  'id' => '{{category:music:id}}',
			),
			'jnews_single_post' => 
			array (
			  'source_name' => '',
			  'source_url' => '',
			  'via_name' => '',
			  'via_url' => '',
			  'override_template' => '0',
			  'override' => 
			  array (
				0 => 
				array (
				  'template' => '1',
				  'single_blog_custom' => '',
				  'parallax' => '1',
				  'fullscreen' => '0',
				  'layout' => 'right-sidebar',
				  'sidebar' => 'default-sidebar',
				  'second_sidebar' => 'default-sidebar',
				  'sticky_sidebar' => '1',
				  'share_position' => 'top',
				  'share_float_style' => 'share-monocrhome',
				  'show_share_counter' => '1',
				  'show_view_counter' => '1',
				  'show_featured' => '1',
				  'show_post_meta' => '1',
				  'show_post_author' => '1',
				  'show_post_author_image' => '1',
				  'show_post_date' => '1',
				  'post_date_format' => 'default',
				  'post_date_format_custom' => 'Y/m/d',
				  'show_post_category' => '1',
				  'show_post_reading_time' => '0',
				  'post_reading_time_wpm' => '300',
				  'show_zoom_button' => '0',
				  'zoom_button_out_step' => '2',
				  'zoom_button_in_step' => '3',
				  'show_post_tag' => '1',
				  'show_prev_next_post' => '1',
				  'show_popup_post' => '1',
				  'number_popup_post' => '1',
				  'show_author_box' => '0',
				  'show_post_related' => '0',
				  'show_inline_post_related' => '0',
				),
			  ),
			  'override_image_size' => '0',
			  'image_override' => 
			  array (
				0 => 
				array (
				  'single_post_thumbnail_size' => 'crop-500',
				  'single_post_gallery_size' => 'crop-500',
				),
			  ),
			  'trending_post' => '0',
			  'trending_post_position' => 'meta',
			  'trending_post_label' => 'Trending',
			),
			'jnews_video_option' => 
			array (
			  'video_duration' => '00:05:08',
			  'video_preview' => '{{image:imageW9:src}}',
			),
		  ),
		),
		'these-are-the-spookiest-halloween-movies-on-netflix' => 
		array (
		  'title' => 'Spider-Man’s Iron Spider Suit Could Have Looked Way Different',
		  'content' => 'post1.txt',
		  'featured_image' => 'video3',
		  'post_type' => 'post',
		  'taxonomy' => 
		  array (
			'post_format' => 'post-format-video',
			'category' => 'movie',
		  ),
		  'metabox' => 
		  array (
			'_format_video_embed' => 'https://www.youtube.com/watch?v=qxLn69ptWX8',
			'jnews_primary_category' => 
			array (
			  'id' => '{{category:movie:id}}',
			),
			'jnews_single_post' => 
			array (
			  'source_name' => '',
			  'source_url' => '',
			  'via_name' => '',
			  'via_url' => '',
			  'override_template' => '0',
			  'override' => 
			  array (
				0 => 
				array (
				  'template' => '1',
				  'single_blog_custom' => '',
				  'parallax' => '1',
				  'fullscreen' => '0',
				  'layout' => 'right-sidebar',
				  'sidebar' => 'default-sidebar',
				  'second_sidebar' => 'default-sidebar',
				  'sticky_sidebar' => '1',
				  'share_position' => 'top',
				  'share_float_style' => 'share-monocrhome',
				  'show_share_counter' => '1',
				  'show_view_counter' => '1',
				  'show_featured' => '1',
				  'show_post_meta' => '1',
				  'show_post_author' => '1',
				  'show_post_author_image' => '1',
				  'show_post_date' => '1',
				  'post_date_format' => 'default',
				  'post_date_format_custom' => 'Y/m/d',
				  'show_post_category' => '1',
				  'show_post_reading_time' => '0',
				  'post_reading_time_wpm' => '300',
				  'show_zoom_button' => '0',
				  'zoom_button_out_step' => '2',
				  'zoom_button_in_step' => '3',
				  'show_post_tag' => '1',
				  'show_prev_next_post' => '1',
				  'show_popup_post' => '1',
				  'number_popup_post' => '1',
				  'show_author_box' => '0',
				  'show_post_related' => '0',
				  'show_inline_post_related' => '0',
				),
			  ),
			  'override_image_size' => '0',
			  'image_override' => 
			  array (
				0 => 
				array (
				  'single_post_thumbnail_size' => 'crop-500',
				  'single_post_gallery_size' => 'crop-500',
				),
			  ),
			  'trending_post' => '0',
			  'trending_post_position' => 'meta',
			  'trending_post_label' => 'Trending',
			),
			'jnews_video_option' => 
			array (
			  'video_duration' => '00:00:31',
			  'video_preview' => '{{image:imageW9:src}}',
			),
		  ),
		),
		'fedex-pilot-detained-in-china-for-item-found-in-luggage' => 
		array (
		  'title' => 'A school looking after its children – and their families',
		  'content' => 'post2.txt',
		  'featured_image' => 'video4',
		  'post_type' => 'post',
		  'taxonomy' => 
		  array (
			'post_format' => 'post-format-video',
			'category' => 'news,technology',
		  ),
		  'metabox' => 
		  array (
			'_format_video_embed' => 'https://www.youtube.com/watch?v=uc5LDWk_49g',
			'jnews_primary_category' => 
			array (
			  'id' => '{{category:news:id}}',
			),
			'jnews_single_post' => 
			array (
			  'source_name' => '',
			  'source_url' => '',
			  'via_name' => '',
			  'via_url' => '',
			  'override_template' => '0',
			  'override' => 
			  array (
				0 => 
				array (
				  'template' => '1',
				  'single_blog_custom' => '',
				  'parallax' => '1',
				  'fullscreen' => '0',
				  'layout' => 'right-sidebar',
				  'sidebar' => 'default-sidebar',
				  'second_sidebar' => 'default-sidebar',
				  'sticky_sidebar' => '1',
				  'share_position' => 'top',
				  'share_float_style' => 'share-monocrhome',
				  'show_share_counter' => '1',
				  'show_view_counter' => '1',
				  'show_featured' => '1',
				  'show_post_meta' => '1',
				  'show_post_author' => '1',
				  'show_post_author_image' => '1',
				  'show_post_date' => '1',
				  'post_date_format' => 'default',
				  'post_date_format_custom' => 'Y/m/d',
				  'show_post_category' => '1',
				  'show_post_reading_time' => '0',
				  'post_reading_time_wpm' => '300',
				  'show_zoom_button' => '0',
				  'zoom_button_out_step' => '2',
				  'zoom_button_in_step' => '3',
				  'show_post_tag' => '1',
				  'show_prev_next_post' => '1',
				  'show_popup_post' => '1',
				  'number_popup_post' => '1',
				  'show_author_box' => '0',
				  'show_post_related' => '0',
				  'show_inline_post_related' => '0',
				),
			  ),
			  'override_image_size' => '0',
			  'image_override' => 
			  array (
				0 => 
				array (
				  'single_post_thumbnail_size' => 'crop-500',
				  'single_post_gallery_size' => 'crop-500',
				),
			  ),
			  'trending_post' => '0',
			  'trending_post_position' => 'meta',
			  'trending_post_label' => 'Trending',
			),
			'jnews_video_option' => 
			array (
			  'video_duration' => '00:22:31',
			  'video_preview' => '{{image:imageW3:src}}',
			),
		  ),
		),
		'trump-whistleblower-saga-threatens-to-blow-up-2020-campaign' => 
		array (
		  'title' => 'Could killing of Iranian general help Trump get re-elected?',
		  'content' => 'post1.txt',
		  'featured_image' => 'video5',
		  'post_type' => 'post',
		  'taxonomy' => 
		  array (
			'post_format' => 'post-format-video',
			'category' => 'news',
		  ),
		  'metabox' => 
		  array (
			'_format_video_embed' => 'https://www.youtube.com/watch?v=V5j7_euZbPk',
			'jnews_primary_category' => 
			array (
			  'id' => '{{category:news:id}}',
			),
			'jnews_single_post' => 
			array (
			  'source_name' => '',
			  'source_url' => '',
			  'via_name' => '',
			  'via_url' => '',
			  'override_template' => '0',
			  'override' => 
			  array (
				0 => 
				array (
				  'template' => '1',
				  'single_blog_custom' => '',
				  'parallax' => '1',
				  'fullscreen' => '0',
				  'layout' => 'right-sidebar',
				  'sidebar' => 'default-sidebar',
				  'second_sidebar' => 'default-sidebar',
				  'sticky_sidebar' => '1',
				  'share_position' => 'top',
				  'share_float_style' => 'share-monocrhome',
				  'show_share_counter' => '1',
				  'show_view_counter' => '1',
				  'show_featured' => '1',
				  'show_post_meta' => '1',
				  'show_post_author' => '1',
				  'show_post_author_image' => '1',
				  'show_post_date' => '1',
				  'post_date_format' => 'default',
				  'post_date_format_custom' => 'Y/m/d',
				  'show_post_category' => '1',
				  'show_post_reading_time' => '0',
				  'post_reading_time_wpm' => '300',
				  'show_zoom_button' => '0',
				  'zoom_button_out_step' => '2',
				  'zoom_button_in_step' => '3',
				  'show_post_tag' => '1',
				  'show_prev_next_post' => '1',
				  'show_popup_post' => '1',
				  'number_popup_post' => '1',
				  'show_author_box' => '0',
				  'show_post_related' => '0',
				  'show_inline_post_related' => '0',
				),
			  ),
			  'override_image_size' => '0',
			  'image_override' => 
			  array (
				0 => 
				array (
				  'single_post_thumbnail_size' => 'crop-500',
				  'single_post_gallery_size' => 'crop-500',
				),
			  ),
			  'trending_post' => '0',
			  'trending_post_position' => 'meta',
			  'trending_post_label' => 'Trending',
			),
			'jnews_video_option' => 
			array (
			  'video_duration' => '00:04:21',
			  'video_preview' => '{{image:imageW9:src}}',
			),
		  ),
		),
		'john-mayer-shares-new-single-carry-me-away' => 
		array (
		  'title' => 'Beyoncé Looked Like a Golden Goddess at the Globes: See the Pics',
		  'content' => 'post2.txt',
		  'featured_image' => 'video5',
		  'post_type' => 'post',
		  'taxonomy' => 
		  array (
			'post_format' => 'post-format-video',
			'category' => 'music,news',
		  ),
		  'metabox' => 
		  array (
			'_format_video_embed' => 'https://www.youtube.com/watch?v=Xl_HFHemrkI',
			'jnews_primary_category' => 
			array (
			  'id' => '{{category:music:id}}',
			),
			'jnews_single_post' => 
			array (
			  'source_name' => '',
			  'source_url' => '',
			  'via_name' => '',
			  'via_url' => '',
			  'override_template' => '0',
			  'override' => 
			  array (
				0 => 
				array (
				  'template' => '1',
				  'single_blog_custom' => '',
				  'parallax' => '1',
				  'fullscreen' => '0',
				  'layout' => 'right-sidebar',
				  'sidebar' => 'default-sidebar',
				  'second_sidebar' => 'default-sidebar',
				  'sticky_sidebar' => '1',
				  'share_position' => 'top',
				  'share_float_style' => 'share-monocrhome',
				  'show_share_counter' => '1',
				  'show_view_counter' => '1',
				  'show_featured' => '1',
				  'show_post_meta' => '1',
				  'show_post_author' => '1',
				  'show_post_author_image' => '1',
				  'show_post_date' => '1',
				  'post_date_format' => 'default',
				  'post_date_format_custom' => 'Y/m/d',
				  'show_post_category' => '1',
				  'show_post_reading_time' => '0',
				  'post_reading_time_wpm' => '300',
				  'show_zoom_button' => '0',
				  'zoom_button_out_step' => '2',
				  'zoom_button_in_step' => '3',
				  'show_post_tag' => '1',
				  'show_prev_next_post' => '1',
				  'show_popup_post' => '1',
				  'number_popup_post' => '1',
				  'show_author_box' => '0',
				  'show_post_related' => '0',
				  'show_inline_post_related' => '0',
				),
			  ),
			  'override_image_size' => '0',
			  'image_override' => 
			  array (
				0 => 
				array (
				  'single_post_thumbnail_size' => 'crop-500',
				  'single_post_gallery_size' => 'crop-500',
				),
			  ),
			  'trending_post' => '0',
			  'trending_post_position' => 'meta',
			  'trending_post_label' => 'Trending',
			),
			'jnews_video_option' => 
			array (
			  'video_duration' => '00:02:35',
			  'video_preview' => '{{image:imageW11:src}}',
			),
		  ),
		),
		'ps4-pro-will-make-more-games-look-better-on-older-tvs' => 
		array (
		  'title' => 'Intel’s Horseshoe Bend concept is a look at the future of foldable PCs',
		  'content' => 'post1.txt',
		  'featured_image' => 'video7',
		  'post_type' => 'post',
		  'taxonomy' => 
		  array (
			'post_format' => 'post-format-video',
			'category' => 'gaming,technology',
		  ),
		  'metabox' => 
		  array (
			'_format_video_embed' => 'https://www.youtube.com/watch?v=TpVGMdbu2bE',
			'jnews_primary_category' => 
			array (
			  'id' => '{{category:technology:id}}',
			),
			'jnews_single_post' => 
			array (
			  'source_name' => '',
			  'source_url' => '',
			  'via_name' => '',
			  'via_url' => '',
			  'override_template' => '0',
			  'override' => 
			  array (
				0 => 
				array (
				  'template' => '1',
				  'single_blog_custom' => '',
				  'parallax' => '1',
				  'fullscreen' => '0',
				  'layout' => 'right-sidebar',
				  'sidebar' => 'default-sidebar',
				  'second_sidebar' => 'default-sidebar',
				  'sticky_sidebar' => '1',
				  'share_position' => 'top',
				  'share_float_style' => 'share-monocrhome',
				  'show_share_counter' => '1',
				  'show_view_counter' => '1',
				  'show_featured' => '1',
				  'show_post_meta' => '1',
				  'show_post_author' => '1',
				  'show_post_author_image' => '1',
				  'show_post_date' => '1',
				  'post_date_format' => 'default',
				  'post_date_format_custom' => 'Y/m/d',
				  'show_post_category' => '1',
				  'show_post_reading_time' => '0',
				  'post_reading_time_wpm' => '300',
				  'show_zoom_button' => '0',
				  'zoom_button_out_step' => '2',
				  'zoom_button_in_step' => '3',
				  'show_post_tag' => '1',
				  'show_prev_next_post' => '1',
				  'show_popup_post' => '1',
				  'number_popup_post' => '1',
				  'show_author_box' => '0',
				  'show_post_related' => '0',
				  'show_inline_post_related' => '0',
				),
			  ),
			  'override_image_size' => '0',
			  'image_override' => 
			  array (
				0 => 
				array (
				  'single_post_thumbnail_size' => 'crop-500',
				  'single_post_gallery_size' => 'crop-500',
				),
			  ),
			  'trending_post' => '0',
			  'trending_post_position' => 'meta',
			  'trending_post_label' => 'Trending',
			),
			'jnews_video_option' => 
			array (
			  'video_duration' => '00:04:17',
			  'video_preview' => '{{image:imageW1:src}}',
			),
		  ),
		),
		'kendall-jenners-birkenstocks-have-gone-international' => 
		array (
		  'title' => 'Balloon trip gives passengers a real bird’s eye view of the desert',
		  'content' => 'post2.txt',
		  'featured_image' => 'video1',
		  'post_type' => 'post',
		  'taxonomy' => 
		  array (
			'post_format' => 'post-format-video',
			'category' => 'howto-style,news',
		  ),
		  'metabox' => 
		  array (
			'_format_video_embed' => 'https://www.youtube.com/watch?v=FoAoR-gSPJQ',
			'jnews_primary_category' => 
			array (
			  'id' => '{{category:howto-style:id}}',
			),
			'jnews_single_post' => 
			array (
			  'source_name' => '',
			  'source_url' => '',
			  'via_name' => '',
			  'via_url' => '',
			  'override_template' => '0',
			  'override' => 
			  array (
				0 => 
				array (
				  'template' => '1',
				  'single_blog_custom' => '',
				  'parallax' => '1',
				  'fullscreen' => '0',
				  'layout' => 'right-sidebar',
				  'sidebar' => 'default-sidebar',
				  'second_sidebar' => 'default-sidebar',
				  'sticky_sidebar' => '1',
				  'share_position' => 'top',
				  'share_float_style' => 'share-monocrhome',
				  'show_share_counter' => '1',
				  'show_view_counter' => '1',
				  'show_featured' => '1',
				  'show_post_meta' => '1',
				  'show_post_author' => '1',
				  'show_post_author_image' => '1',
				  'show_post_date' => '1',
				  'post_date_format' => 'default',
				  'post_date_format_custom' => 'Y/m/d',
				  'show_post_category' => '1',
				  'show_post_reading_time' => '0',
				  'post_reading_time_wpm' => '300',
				  'show_zoom_button' => '0',
				  'zoom_button_out_step' => '2',
				  'zoom_button_in_step' => '3',
				  'show_post_tag' => '1',
				  'show_prev_next_post' => '1',
				  'show_popup_post' => '1',
				  'number_popup_post' => '1',
				  'show_author_box' => '0',
				  'show_post_related' => '0',
				  'show_inline_post_related' => '0',
				),
			  ),
			  'override_image_size' => '0',
			  'image_override' => 
			  array (
				0 => 
				array (
				  'single_post_thumbnail_size' => 'crop-500',
				  'single_post_gallery_size' => 'crop-500',
				),
			  ),
			  'trending_post' => '0',
			  'trending_post_position' => 'meta',
			  'trending_post_label' => 'Trending',
			),
			'jnews_video_option' => 
			array (
			  'video_duration' => '00:02:01',
			  'video_preview' => '{{image:imageW12:src}}',
			),
		  ),
		),
		'the-deeper-significance-of-the-mall-on-stranger-things' => 
		array (
		  'title' => 'Jumanji: The Next Level Just Quietly Passed Another Big Box Office Milestone',
		  'content' => 'post1.txt',
		  'featured_image' => 'video2',
		  'post_type' => 'post',
		  'taxonomy' => 
		  array (
			'post_format' => 'post-format-video',
			'category' => 'entertainment,movie',
		  ),
		  'metabox' => 
		  array (
			'_format_video_embed' => 'https://www.youtube.com/watch?v=FuUB_FPa0h0',
			'jnews_primary_category' => 
			array (
			  'id' => '{{category:movie:id}}',
			),
			'jnews_single_post' => 
			array (
			  'source_name' => '',
			  'source_url' => '',
			  'via_name' => '',
			  'via_url' => '',
			  'override_template' => '0',
			  'override' => 
			  array (
				0 => 
				array (
				  'template' => '1',
				  'single_blog_custom' => '',
				  'parallax' => '1',
				  'fullscreen' => '0',
				  'layout' => 'right-sidebar',
				  'sidebar' => 'default-sidebar',
				  'second_sidebar' => 'default-sidebar',
				  'sticky_sidebar' => '1',
				  'share_position' => 'top',
				  'share_float_style' => 'share-monocrhome',
				  'show_share_counter' => '1',
				  'show_view_counter' => '1',
				  'show_featured' => '1',
				  'show_post_meta' => '1',
				  'show_post_author' => '1',
				  'show_post_author_image' => '1',
				  'show_post_date' => '1',
				  'post_date_format' => 'default',
				  'post_date_format_custom' => 'Y/m/d',
				  'show_post_category' => '1',
				  'show_post_reading_time' => '0',
				  'post_reading_time_wpm' => '300',
				  'show_zoom_button' => '0',
				  'zoom_button_out_step' => '2',
				  'zoom_button_in_step' => '3',
				  'show_post_tag' => '1',
				  'show_prev_next_post' => '1',
				  'show_popup_post' => '1',
				  'number_popup_post' => '1',
				  'show_author_box' => '0',
				  'show_post_related' => '0',
				  'show_inline_post_related' => '0',
				),
			  ),
			  'override_image_size' => '0',
			  'image_override' => 
			  array (
				0 => 
				array (
				  'single_post_thumbnail_size' => 'crop-500',
				  'single_post_gallery_size' => 'crop-500',
				),
			  ),
			  'trending_post' => '0',
			  'trending_post_position' => 'meta',
			  'trending_post_label' => 'Trending',
			),
			'jnews_video_option' => 
			array (
			  'video_duration' => '00:03:47',
			  'video_preview' => '{{image:imageW6:src}}',
			),
		  ),
		),
		'2019-ubud-writers-readers-festival-8-reasons-why-you-should-come' => 
		array (
		  'title' => 'China pneumonia: Sars ruled out as dozens fall ill in Wuhan',
		  'content' => 'post2.txt',
		  'featured_image' => 'video3',
		  'post_type' => 'post',
		  'taxonomy' => 
		  array (
			'post_format' => 'post-format-video',
			'category' => 'news',
		  ),
		  'metabox' => 
		  array (
			'_format_video_embed' => 'https://www.youtube.com/watch?v=oVMxoBNYASw',
			'jnews_primary_category' => 
			array (
			  'id' => '{{category:news:id}}',
			),
			'jnews_single_post' => 
			array (
			  'source_name' => '',
			  'source_url' => '',
			  'via_name' => '',
			  'via_url' => '',
			  'override_template' => '0',
			  'override' => 
			  array (
				0 => 
				array (
				  'template' => '1',
				  'single_blog_custom' => '',
				  'parallax' => '1',
				  'fullscreen' => '0',
				  'layout' => 'right-sidebar',
				  'sidebar' => 'default-sidebar',
				  'second_sidebar' => 'default-sidebar',
				  'sticky_sidebar' => '1',
				  'share_position' => 'top',
				  'share_float_style' => 'share-monocrhome',
				  'show_share_counter' => '1',
				  'show_view_counter' => '1',
				  'show_featured' => '1',
				  'show_post_meta' => '1',
				  'show_post_author' => '1',
				  'show_post_author_image' => '1',
				  'show_post_date' => '1',
				  'post_date_format' => 'default',
				  'post_date_format_custom' => 'Y/m/d',
				  'show_post_category' => '1',
				  'show_post_reading_time' => '0',
				  'post_reading_time_wpm' => '300',
				  'show_zoom_button' => '0',
				  'zoom_button_out_step' => '2',
				  'zoom_button_in_step' => '3',
				  'show_post_tag' => '1',
				  'show_prev_next_post' => '1',
				  'show_popup_post' => '1',
				  'number_popup_post' => '1',
				  'show_author_box' => '0',
				  'show_post_related' => '0',
				  'show_inline_post_related' => '0',
				),
			  ),
			  'override_image_size' => '0',
			  'image_override' => 
			  array (
				0 => 
				array (
				  'single_post_thumbnail_size' => 'crop-500',
				  'single_post_gallery_size' => 'crop-500',
				),
			  ),
			  'trending_post' => '0',
			  'trending_post_position' => 'meta',
			  'trending_post_label' => 'Trending',
			),
			'jnews_video_option' => 
			array (
			  'video_duration' => '00:00:53',
			  'video_preview' => '{{image:imageW11:src}}',
			),
		  ),
		),
		'nintendo-switch-unboxing-review-indonesia' => 
		array (
		  'title' => 'After nearly a decade, Stalker: Call of Pripyat\'s Gunslinger mod is in open beta',
		  'content' => 'post1.txt',
		  'featured_image' => 'video4',
		  'post_type' => 'post',
		  'taxonomy' => 
		  array (
			'post_format' => 'post-format-video',
			'category' => 'entertainment,gaming',
		  ),
		  'metabox' => 
		  array (
			'_format_video_embed' => 'https://www.youtube.com/watch?v=B0qXOAPcLyk',
			'jnews_primary_category' => 
			array (
			  'id' => '{{category:gaming:id}}',
			),
			'jnews_single_post' => 
			array (
			  'source_name' => '',
			  'source_url' => '',
			  'via_name' => '',
			  'via_url' => '',
			  'override_template' => '0',
			  'override' => 
			  array (
				0 => 
				array (
				  'template' => '1',
				  'single_blog_custom' => '',
				  'parallax' => '1',
				  'fullscreen' => '0',
				  'layout' => 'right-sidebar',
				  'sidebar' => 'default-sidebar',
				  'second_sidebar' => 'default-sidebar',
				  'sticky_sidebar' => '1',
				  'share_position' => 'top',
				  'share_float_style' => 'share-monocrhome',
				  'show_share_counter' => '1',
				  'show_view_counter' => '1',
				  'show_featured' => '1',
				  'show_post_meta' => '1',
				  'show_post_author' => '1',
				  'show_post_author_image' => '1',
				  'show_post_date' => '1',
				  'post_date_format' => 'default',
				  'post_date_format_custom' => 'Y/m/d',
				  'show_post_category' => '1',
				  'show_post_reading_time' => '0',
				  'post_reading_time_wpm' => '300',
				  'show_zoom_button' => '0',
				  'zoom_button_out_step' => '2',
				  'zoom_button_in_step' => '3',
				  'show_post_tag' => '1',
				  'show_prev_next_post' => '1',
				  'show_popup_post' => '1',
				  'number_popup_post' => '1',
				  'show_author_box' => '0',
				  'show_post_related' => '0',
				  'show_inline_post_related' => '0',
				),
			  ),
			  'override_image_size' => '0',
			  'image_override' => 
			  array (
				0 => 
				array (
				  'single_post_thumbnail_size' => 'crop-500',
				  'single_post_gallery_size' => 'crop-500',
				),
			  ),
			  'trending_post' => '0',
			  'trending_post_position' => 'meta',
			  'trending_post_label' => 'Trending',
			),
			'jnews_video_option' => 
			array (
			  'video_duration' => '00:09:13',
			  'video_preview' => '{{image:imageW12:src}}',
			),
		  ),
		),
		'getting-cheap-airfare-for-last-minute-travel' => 
		array (
		  'title' => 'Ricki Lake reveals \'quiet hell\' of hair loss as she shows off buzz cut',
		  'content' => 'post2.txt',
		  'featured_image' => 'video5',
		  'post_type' => 'post',
		  'taxonomy' => 
		  array (
			'post_format' => 'post-format-video',
			'category' => 'entertainment,music',
		  ),
		  'metabox' => 
		  array (
			'_format_video_embed' => 'https://www.youtube.com/watch?v=syaGe7sZOdE',
			'jnews_primary_category' => 
			array (
			  'id' => '{{category:entertainment:id}}',
			),
			'jnews_single_post' => 
			array (
			  'source_name' => '',
			  'source_url' => '',
			  'via_name' => '',
			  'via_url' => '',
			  'override_template' => '0',
			  'override' => 
			  array (
				0 => 
				array (
				  'single_blog_custom' => '',
				  'parallax' => '0',
				  'fullscreen' => '0',
				  'sidebar' => '',
				  'second_sidebar' => '',
				  'sticky_sidebar' => '0',
				  'share_position' => '',
				  'share_float_style' => '',
				  'show_share_counter' => '0',
				  'show_view_counter' => '0',
				  'show_featured' => '0',
				  'show_post_meta' => '0',
				  'show_post_author' => '0',
				  'show_post_author_image' => '0',
				  'show_post_date' => '0',
				  'post_date_format' => '',
				  'post_date_format_custom' => '',
				  'show_post_category' => '0',
				  'show_post_reading_time' => '0',
				  'post_reading_time_wpm' => '',
				  'show_zoom_button' => '0',
				  'zoom_button_out_step' => '1',
				  'zoom_button_in_step' => '1',
				  'show_post_tag' => '0',
				  'show_prev_next_post' => '0',
				  'show_popup_post' => '0',
				  'number_popup_post' => '1',
				  'show_author_box' => '0',
				  'show_post_related' => '0',
				  'show_inline_post_related' => '0',
				),
			  ),
			  'override_image_size' => '0',
			  'image_override' => 
			  array (
				0 => 
				array (
				  'single_post_thumbnail_size' => '',
				  'single_post_gallery_size' => '',
				),
			  ),
			  'trending_post' => '0',
			  'trending_post_position' => '',
			  'trending_post_label' => '',
			),
			'jnews_video_option' => 
			array (
			  'video_duration' => '00:00:29',
			  'video_preview' => '{{image:imageW5:src}}',
			),
		  ),
		),
		'activity' => 
		array (
		  'title' => 'Activity',
		  'content' => 'home1.txt',
		  'post_type' => 'page',
		  'metabox' => 
		  array (
			'_elementor_data' => 'home1.txt',
			'_elementor_edit_mode' => 'builder',
			'_elementor_page_settings' => 
			array (
			  'custom_css' => '',
			),
		  ),
		),

		//page
		'home' => 
		array (
		  'title' => 'Home 1',
		  'content' => 'home1.txt',
		  'post_type' => 'page',
		  'metabox' => 
		  array (
			'_wp_page_template' => 'template-builder.php',
			'_wpb_shortcodes_custom_css' => '.vc_custom_1639122516676{padding-top: 10px !important;}',
			'_wpb_post_custom_css' => '.jeg_content {
				padding-top: 10px;
			}
			.jnews-webstories.square .jnews-webstories-item .info {
				font-size: 12px;
			}',
			'jnews_page_loop' => 
			array (
			  'enable_page_loop' => '0',
			  'first_title' => 'Latest Post',
			  'second_title' => '',
			  'header_type' => 'heading_6',
			  'header_background' => '',
			  'header_text_color' => '',
			  'layout' => 'right-sidebar',
			  'sidebar' => 'default-sidebar',
			  'second_sidebar' => 'default-sidebar',
			  'sticky_sidebar' => '1',
			  'module' => '3',
			  'boxed' => '0',
			  'boxed_shadow' => '0',
			  'box_shadow' => '0',
			  'excerpt_length' => '20',
			  'content_date' => 'default',
			  'date_custom' => 'Y/m/d',
			  'content_pagination' => 'nav_1',
			  'pagination_align' => 'center',
			  'show_navtext' => '0',
			  'show_pageinfo' => '0',
			  'post_offset' => '0',
			  'posts_per_page' => '5',
			  'include_post' => '',
			  'exclude_post' => '',
			  'include_category' => '',
			  'exclude_category' => '',
			  'include_author' => '',
			  'include_tag' => '',
			  'exclude_tag' => '',
			  'sort_by' => 'latest',
			),
			'_elementor_data' => 'home1.json',
			'_elementor_edit_mode' => 'builder',
			'_elementor_page_settings' => 
			array (
			  'custom_css' => '.jeg_content {
					padding-top: 10px;
				}
				.jnews-webstories.square .jnews-webstories-item .info {
					font-size: 12px;
				}',
			),
		  ),
		),
		'home-2' => 
		array (
		  'title' => 'Home 2',
		  'content' => 'home2.txt',
		  'post_type' => 'page',
		  'metabox' => 
		  array (
			'_wp_page_template' => 'template-builder.php',
			'_wpb_shortcodes_custom_css' => '.vc_custom_1578450156684{padding-top: 50px !important;padding-bottom: 15px !important;background-color: #f5f1fe !important;}.vc_custom_1639122633831{padding-top: 15px !important;}',
			'_wpb_post_custom_css' => '.jeg_content {
				padding-top: 20px;
			}
			.jeg_postblock_video_2.jeg_col_1o3 .jeg_post_title {
				font-size: 16px;
			}',
			'jnews_page_loop' => 
			array (
			  'enable_page_loop' => '0',
			  'first_title' => 'Latest Post',
			  'second_title' => '',
			  'header_type' => 'heading_6',
			  'header_background' => '',
			  'header_text_color' => '',
			  'layout' => 'right-sidebar',
			  'sidebar' => 'default-sidebar',
			  'second_sidebar' => 'default-sidebar',
			  'sticky_sidebar' => '1',
			  'module' => '3',
			  'boxed' => '0',
			  'boxed_shadow' => '0',
			  'box_shadow' => '0',
			  'excerpt_length' => '20',
			  'content_date' => 'default',
			  'date_custom' => 'Y/m/d',
			  'content_pagination' => 'nav_1',
			  'pagination_align' => 'center',
			  'show_navtext' => '0',
			  'show_pageinfo' => '0',
			  'post_offset' => '0',
			  'posts_per_page' => '5',
			  'include_post' => '',
			  'exclude_post' => '',
			  'include_category' => '',
			  'exclude_category' => '',
			  'include_author' => '',
			  'include_tag' => '',
			  'exclude_tag' => '',
			  'sort_by' => 'latest',
			),
			'_elementor_data' => 'home2.json',
			'_elementor_edit_mode' => 'builder',
			'_elementor_page_settings' => 
			array (
			  'custom_css' => '.jeg_content {
					padding-top: 20px;
				}
				
				.jeg_postblock_video_2.jeg_col_1o3 .jeg_post_title {
					font-size: 16px;
				}',
			),
		  ),
		),
		'home-3' => 
		array (
		  'title' => 'Home 3',
		  'content' => 'home3.txt',
		  'post_type' => 'page',
		  'metabox' => 
		  array (
			'_wp_page_template' => 'template-builder.php',
			'_wpb_shortcodes_custom_css' => '.vc_custom_1578452204258{padding-top: 10px !important;padding-bottom: 10px !important;background-color: #0f0f0f !important;}.vc_custom_1578450705067{margin-bottom: 0px !important;}.vc_custom_1639122828728{padding-top: 15px !important;}',
			'_wpb_post_custom_css' => '.jeg_content {
				padding-top: 0;
			}
			.jnews-webstories.square .jnews-webstories-item .info {
				font-size: 12px;
			}',
			'jnews_page_loop' => 
			array (
			  'enable_page_loop' => '0',
			  'first_title' => 'Latest Post',
			  'second_title' => '',
			  'header_type' => 'heading_6',
			  'header_background' => '',
			  'header_text_color' => '',
			  'layout' => 'right-sidebar',
			  'sidebar' => 'default-sidebar',
			  'second_sidebar' => 'default-sidebar',
			  'sticky_sidebar' => '1',
			  'module' => '3',
			  'boxed' => '0',
			  'boxed_shadow' => '0',
			  'box_shadow' => '0',
			  'excerpt_length' => '20',
			  'content_date' => 'default',
			  'date_custom' => 'Y/m/d',
			  'content_pagination' => 'nav_1',
			  'pagination_align' => 'center',
			  'show_navtext' => '0',
			  'show_pageinfo' => '0',
			  'post_offset' => '0',
			  'posts_per_page' => '5',
			  'include_post' => '',
			  'exclude_post' => '',
			  'include_category' => '',
			  'exclude_category' => '',
			  'include_author' => '',
			  'include_tag' => '',
			  'exclude_tag' => '',
			  'sort_by' => 'latest',
			),
			'_elementor_data' => 'home3.json',
			'_elementor_edit_mode' => 'builder',
			'_elementor_page_settings' => 
			array (
			  'custom_css' => '.jeg_content {
					padding-top: 0;
				}
				.jnews-webstories.square .jnews-webstories-item .info {
					font-size: 12px;
				}',
			),
		  ),
		),
		'latest' => 
		array (
		  'title' => 'Latest',
		  'content' => 'latest.txt',
		  'post_type' => 'page',
		  'metabox' => 
		  array (
			'_wp_page_template' => 'template-builder.php',
			'jnews_page_loop' => 
			array (
			  'enable_page_loop' => '0',
			  'first_title' => 'Latest Post',
			  'second_title' => '',
			  'header_type' => 'heading_6',
			  'header_background' => '',
			  'header_text_color' => '',
			  'layout' => 'right-sidebar',
			  'sidebar' => 'default-sidebar',
			  'second_sidebar' => 'default-sidebar',
			  'sticky_sidebar' => '1',
			  'module' => '3',
			  'boxed' => '0',
			  'boxed_shadow' => '0',
			  'box_shadow' => '0',
			  'excerpt_length' => '20',
			  'content_date' => 'default',
			  'date_custom' => 'Y/m/d',
			  'content_pagination' => 'nav_1',
			  'pagination_align' => 'center',
			  'show_navtext' => '0',
			  'show_pageinfo' => '0',
			  'post_offset' => '0',
			  'posts_per_page' => '5',
			  'include_post' => '',
			  'exclude_post' => '',
			  'include_category' => '',
			  'exclude_category' => '',
			  'include_author' => '',
			  'include_tag' => '',
			  'exclude_tag' => '',
			  'sort_by' => 'latest',
			),
			'_elementor_data' => 'latest.json',
			'_elementor_edit_mode' => 'builder',
			'_elementor_page_settings' => 
			array (
			  'custom_css' => '',
			),
		  ),
		),
		'trending' => 
		array (
		  'title' => 'Trending',
		  'content' => 'trending.txt',
		  'post_type' => 'page',
		  'metabox' => 
		  array (
			'_wp_page_template' => 'template-builder.php',
			'jnews_page_loop' => 
			array (
			  'enable_page_loop' => '0',
			  'first_title' => 'Latest Post',
			  'second_title' => '',
			  'header_type' => 'heading_6',
			  'header_background' => '',
			  'header_text_color' => '',
			  'layout' => 'right-sidebar',
			  'sidebar' => 'default-sidebar',
			  'second_sidebar' => 'default-sidebar',
			  'sticky_sidebar' => '1',
			  'module' => '3',
			  'boxed' => '0',
			  'boxed_shadow' => '0',
			  'box_shadow' => '0',
			  'excerpt_length' => '20',
			  'content_date' => 'default',
			  'date_custom' => 'Y/m/d',
			  'content_pagination' => 'nav_1',
			  'pagination_align' => 'center',
			  'show_navtext' => '0',
			  'show_pageinfo' => '0',
			  'post_offset' => '0',
			  'posts_per_page' => '5',
			  'include_post' => '',
			  'exclude_post' => '',
			  'include_category' => '',
			  'exclude_category' => '',
			  'include_author' => '',
			  'include_tag' => '',
			  'exclude_tag' => '',
			  'sort_by' => 'latest',
			),
			'_elementor_data' => 'trending.json',
			'_elementor_edit_mode' => 'builder',
			'_elementor_page_settings' => 
			array (
			  'custom_css' => '',
			),
		  ),
		),
		'footer' => 
		array (
		  'title' => 'Footer',
		  'content' => 'footer.txt',
		  'post_type' => 'footer',
		  'metabox' => 
		  array (
			'_wpb_shortcodes_custom_css' => '.vc_custom_1573191637272{padding-top: 20px !important;padding-bottom: 20px !important;}',
			'_wpb_post_custom_css' => '.jeg_menu_footer li:not(:last-child):after {
		  display: none;
	  }
	  
	  .jeg_menu_footer li a {
		  font-size: 12px;
		  margin-right: 1em;
	  }
	  
	  .jeg_menu_footer li a:hover {
		  text-decoration: underline;
	  }
	  
	  .jeg_footer .socials_widget.nobg .fa {
		  font-size: 14px;
	  }
	  @media (max-width:766px){.vc_custom_1573191637272{text-align:center}}',
			'_elementor_data' => 'home1.txt',
			'_elementor_edit_mode' => 'builder',
			'_elementor_page_settings' => 
			array (
			  'custom_css' => '.jeg_menu_footer li:not(:last-child):after {
		  display: none;
	  }
	  
	  .jeg_menu_footer li a {
		  font-size: 12px;
		  margin-right: 1em;
	  }
	  
	  .jeg_menu_footer li a:hover {
		  text-decoration: underline;
	  }
	  
	  .jeg_footer .socials_widget.nobg .fa {
		  font-size: 14px;
	  }
	  @media (max-width:766px){.vc_custom_1573191637272{text-align:center}}',
			),
		  ),
		),
	),

	// menu location
	'menu_location'   => array (
		'footer-menu' => 
		array (
		  'title' => 'Footer Menu',
		  'location' => 'footer_navigation',
		),
		'menu' => 
		array (
		  'title' => 'Menu',
		  'location' => 'mobile_navigation',
		),
		'menu-sidefeed' => 
		array (
		  'title' => 'Menu Sidefeed',
		),
	),

	// menu it self
	'menu'            => array (
		'about' => 
		array (
		  'location' => 'footer-menu',
		  'menu-item-data' => 
		  array (
			'menu-item-title' => 'About',
			'menu-item-type' => 'custom',
			'menu-item-object' => 'custom',
			'menu-item-status' => 'publish',
			'menu-item-url' => '#',
		  ),
		),
		'buy-jnews' => 
		array (
		  'location' => 'footer-menu',
		  'menu-item-data' => 
		  array (
			'menu-item-title' => 'Buy JNews',
			'menu-item-type' => 'custom',
			'menu-item-object' => 'custom',
			'menu-item-status' => 'publish',
			'menu-item-url' => 'https://bit.ly/get-jnews',
		  ),
		),
		'request-a-demo' => 
		array (
		  'location' => 'footer-menu',
		  'menu-item-data' => 
		  array (
			'menu-item-title' => 'Request A Demo',
			'menu-item-type' => 'custom',
			'menu-item-object' => 'custom',
			'menu-item-status' => 'publish',
			'menu-item-url' => 'https://docs.google.com/forms/d/e/1FAIpQLSfHEypFc-tY8BzGdEQU9ECf3bld_Een7_bSStoo8ICR8UG0eA/viewform?entry.1558582620&entry.1060472253&entry.1295994925',
		  ),
		),
		'privacy-policy' => 
		array (
		  'location' => 'footer-menu',
		  'menu-item-data' => 
		  array (
			'menu-item-title' => 'Contact',
			'menu-item-type' => 'custom',
			'menu-item-object' => 'custom',
			'menu-item-status' => 'publish',
			'menu-item-url' => '#',
		  ),
		),
		'home' => 
		array (
		  'location' => 'menu',
		  'menu-item-data' => 
		  array (
			'menu-item-title' => 'Home',
			'menu-item-type' => 'custom',
			'menu-item-object' => 'custom',
			'menu-item-status' => 'publish',
			'menu-item-url' => 'https://video.jnews.io',
		  ),
		),
		'home-layout-1-2' => 
		array (
		  'location' => 'menu',
		  'menu-item-data' => 
		  array (
			'menu-item-title' => 'Home Layout 1',
			'menu-item-type' => 'post_type',
			'menu-item-object' => 'page',
			'menu-item-status' => 'publish',
			'menu-item-parent-id' => '{{menu:home:id}}',
			'menu-item-object-id' => '{{post:home:id}}',
		  ),
		  'metabox' => 
		  array (
			'menu_item_jnews_mega_menu' => 
			array (
			  'type' => 'disable',
			  'custom_mega' => '0',
			  'category' => '1',
			  'number' => '9',
			  'override_item_row' => '0',
			  'item_row' => '3',
			  'trending_tag' => '',
			  'child_mega' => 'disable',
			  'enable_icon' => '0',
			  'icon' => '',
			  'icon_color' => '',
			  'badge' => 'disable',
			  'badge_bg_color' => '#f70d28',
			  'badge_text_color' => '#fff',
			  'badge_text' => '',
			  'child_badge' => 'disable',
			  'child_badge_text' => '',
			),
		  ),
		),
		'home-layout-2' => 
		array (
		  'location' => 'menu',
		  'menu-item-data' => 
		  array (
			'menu-item-title' => 'Home Layout 2',
			'menu-item-type' => 'post_type',
			'menu-item-object' => 'page',
			'menu-item-status' => 'publish',
			'menu-item-parent-id' => '{{menu:home:id}}',
			'menu-item-object-id' => '{{post:home-2:id}}',
		  ),
		),
		'home-layout-3' => 
		array (
		  'location' => 'menu',
		  'menu-item-data' => 
		  array (
			'menu-item-title' => 'Home Layout 3',
			'menu-item-type' => 'post_type',
			'menu-item-object' => 'page',
			'menu-item-status' => 'publish',
			'menu-item-parent-id' => '{{menu:home:id}}',
			'menu-item-object-id' => '{{post:home-3:id}}',
		  ),
		  'metabox' => 
		  array (
			'menu_item_jnews_mega_menu' => 
			array (
			  'type' => 'disable',
			  'custom_mega' => '0',
			  'category' => '1',
			  'number' => '9',
			  'override_item_row' => '0',
			  'item_row' => '3',
			  'trending_tag' => '',
			  'child_mega' => 'disable',
			  'enable_icon' => '0',
			  'icon' => '',
			  'icon_color' => '',
			  'badge' => 'disable',
			  'badge_bg_color' => '#f70d28',
			  'badge_text_color' => '#fff',
			  'badge_text' => '',
			  'child_badge' => 'disable',
			  'child_badge_text' => '',
			),
		  ),
		),
		'features' => 
		array (
		  'location' => 'menu',
		  'menu-item-data' => 
		  array (
			'menu-item-title' => 'Features',
			'menu-item-type' => 'custom',
			'menu-item-object' => 'custom',
			'menu-item-status' => 'publish',
			'menu-item-url' => '#',
		  ),
		  'metabox' => 
		  array (
			'menu_item_jnews_mega_menu' => 
			array (
			  'type' => 'disable',
			  'custom_mega' => '0',
			  'category' => '1',
			  'number' => '9',
			  'override_item_row' => '0',
			  'item_row' => '3',
			  'trending_tag' => '',
			  'child_mega' => 'disable',
			  'enable_icon' => '0',
			  'enable_icon_image' => '0',
			  'icon' => '',
			  'icon_image' => '',
			  'icon_color' => '',
			  'badge' => 'disable',
			  'badge_bg_color' => '#f70d28',
			  'badge_text_color' => '#fff',
			  'badge_text' => '',
			  'child_badge' => 'disable',
			  'child_badge_text' => '',
			),
		  ),
		),
		'youtube-video-2' => 
		array (
		  'location' => 'menu',
		  'menu-item-data' => 
		  array (
			'menu-item-title' => 'Youtube Video',
			'menu-item-type' => 'post_type',
			'menu-item-object' => 'post',
			'menu-item-status' => 'publish',
			'menu-item-parent-id' => '{{menu:features:id}}',
			'menu-item-object-id' => '{{post:amazon-sees-alexa-devices-more-than-double-in-just-one-year:id}}',
		  ),
		  'metabox' => 
		  array (
			'menu_item_jnews_mega_menu' => 
			array (
			  'type' => 'disable',
			  'custom_mega' => '0',
			  'category' => '1',
			  'number' => '9',
			  'override_item_row' => '0',
			  'item_row' => '3',
			  'trending_tag' => '',
			  'child_mega' => 'disable',
			  'enable_icon' => '0',
			  'enable_icon_image' => '0',
			  'icon' => '',
			  'icon_image' => '',
			  'icon_color' => '',
			  'badge' => 'disable',
			  'badge_bg_color' => '#f70d28',
			  'badge_text_color' => '#fff',
			  'badge_text' => '',
			  'child_badge' => 'disable',
			  'child_badge_text' => '',
			),
		  ),
		),
		'vimeo-video-2' => 
		array (
		  'location' => 'menu',
		  'menu-item-data' => 
		  array (
			'menu-item-title' => 'Vimeo Video',
			'menu-item-type' => 'post_type',
			'menu-item-object' => 'post',
			'menu-item-status' => 'publish',
			'menu-item-parent-id' => '{{menu:features:id}}',
			'menu-item-object-id' => '{{post:boost-your-events-visibility-with-jazz-near-yous-spotlight-service:id}}',
		  ),
		  'metabox' => 
		  array (
			'menu_item_jnews_mega_menu' => 
			array (
			  'type' => 'disable',
			  'custom_mega' => '0',
			  'category' => '1',
			  'number' => '9',
			  'override_item_row' => '0',
			  'item_row' => '3',
			  'trending_tag' => '',
			  'child_mega' => 'disable',
			  'enable_icon' => '0',
			  'enable_icon_image' => '0',
			  'icon' => '',
			  'icon_image' => '',
			  'icon_color' => '',
			  'badge' => 'disable',
			  'badge_bg_color' => '#f70d28',
			  'badge_text_color' => '#fff',
			  'badge_text' => '',
			  'child_badge' => 'disable',
			  'child_badge_text' => '',
			),
		  ),
		),
		'dailymotion-video' => 
		array (
		  'location' => 'menu',
		  'menu-item-data' => 
		  array (
			'menu-item-title' => 'Dailymotion Video',
			'menu-item-type' => 'post_type',
			'menu-item-object' => 'post',
			'menu-item-status' => 'publish',
			'menu-item-parent-id' => '{{menu:features:id}}',
			'menu-item-object-id' => '{{post:golf-are-you-ready-for-the-u-s-open-don-cheadle-is:id}}',
		  ),
		  'metabox' => 
		  array (
			'menu_item_jnews_mega_menu' => 
			array (
			  'type' => 'disable',
			  'custom_mega' => '0',
			  'category' => '1',
			  'number' => '9',
			  'override_item_row' => '0',
			  'item_row' => '3',
			  'trending_tag' => '',
			  'child_mega' => 'disable',
			  'enable_icon' => '0',
			  'enable_icon_image' => '0',
			  'icon' => '',
			  'icon_image' => '',
			  'icon_color' => '',
			  'badge' => 'disable',
			  'badge_bg_color' => '#f70d28',
			  'badge_text_color' => '#fff',
			  'badge_text' => '',
			  'child_badge' => 'disable',
			  'child_badge_text' => '',
			),
		  ),
		),
		'self-hosted-video' => 
		array (
		  'location' => 'menu',
		  'menu-item-data' => 
		  array (
			'menu-item-title' => 'Self-hosted Video',
			'menu-item-type' => 'post_type',
			'menu-item-object' => 'post',
			'menu-item-status' => 'publish',
			'menu-item-parent-id' => '{{menu:features:id}}',
			'menu-item-object-id' => '{{post:6-sci-fi-gadgets-in-movie-we-wish-actually-existed:id}}',
		  ),
		  'metabox' => 
		  array (
			'menu_item_jnews_mega_menu' => 
			array (
			  'type' => 'disable',
			  'custom_mega' => '0',
			  'category' => '1',
			  'number' => '9',
			  'override_item_row' => '0',
			  'item_row' => '3',
			  'trending_tag' => '',
			  'child_mega' => 'disable',
			  'enable_icon' => '0',
			  'enable_icon_image' => '0',
			  'icon' => '',
			  'icon_image' => '',
			  'icon_color' => '',
			  'badge' => 'disable',
			  'badge_bg_color' => '#f70d28',
			  'badge_text_color' => '#fff',
			  'badge_text' => '',
			  'child_badge' => 'disable',
			  'child_badge_text' => '',
			),
		  ),
		),
		'user-profile' => 
		array (
		  'location' => 'menu',
		  'menu-item-data' => 
		  array (
			'menu-item-title' => 'User Profile',
			'menu-item-type' => 'custom',
			'menu-item-object' => 'custom',
			'menu-item-status' => 'publish',
			'menu-item-parent-id' => '{{menu:features:id}}',
			'menu-item-url' => 'https://video.jnews.io/streamon/members/andre/',
		  ),
		),
		'playlists-public' => 
		array (
		  'location' => 'menu',
		  'menu-item-data' => 
		  array (
			'menu-item-title' => 'Playlists',
			'menu-item-type' => 'custom',
			'menu-item-object' => 'custom',
			'menu-item-status' => 'publish',
			'menu-item-parent-id' => '{{menu:features:id}}',
			'menu-item-url' => 'https://video.jnews.io/streamon/members/admin/playlist/',
		  ),
		  'metabox' => 
		  array (
			'menu_item_jnews_mega_menu' => 
			array (
			  'type' => 'disable',
			  'custom_mega' => '0',
			  'category' => '1',
			  'number' => '9',
			  'override_item_row' => '0',
			  'item_row' => '3',
			  'trending_tag' => '',
			  'child_mega' => 'disable',
			  'enable_icon' => '0',
			  'enable_icon_image' => '0',
			  'icon' => '',
			  'icon_image' => '',
			  'icon_color' => '',
			  'badge' => 'disable',
			  'badge_bg_color' => '#f70d28',
			  'badge_text_color' => '#fff',
			  'badge_text' => '',
			  'child_badge' => 'disable',
			  'child_badge_text' => '',
			),
		  ),
		),
		'user-created-playlist' => 
		array (
		  'location' => 'menu',
		  'menu-item-data' => 
		  array (
			'menu-item-title' => 'User-created Playlist',
			'menu-item-type' => 'custom',
			'menu-item-object' => 'custom',
			'menu-item-status' => 'publish',
			'menu-item-parent-id' => '{{menu:features:id}}',
			'menu-item-url' => 'https://video.jnews.io/streamon/blog/playlist/important-news/',
		  ),
		  'metabox' => 
		  array (
			'menu_item_jnews_mega_menu' => 
			array (
			  'type' => 'disable',
			  'custom_mega' => '0',
			  'category' => '1',
			  'number' => '9',
			  'override_item_row' => '0',
			  'item_row' => '3',
			  'trending_tag' => '',
			  'child_mega' => 'disable',
			  'enable_icon' => '0',
			  'enable_icon_image' => '0',
			  'icon' => '',
			  'icon_image' => '',
			  'icon_color' => '',
			  'badge' => 'disable',
			  'badge_bg_color' => '#f70d28',
			  'badge_text_color' => '#fff',
			  'badge_text' => '',
			  'child_badge' => 'disable',
			  'child_badge_text' => '',
			),
		  ),
		),
		'favorite-playlist-private' => 
		array (
		  'location' => 'menu',
		  'menu-item-data' => 
		  array (
			'menu-item-title' => 'Favorite Playlist (Private)',
			'menu-item-type' => 'custom',
			'menu-item-object' => 'custom',
			'menu-item-status' => 'publish',
			'menu-item-parent-id' => '{{menu:features:id}}',
			'menu-item-url' => '#',
		  ),
		  'metabox' => 
		  array (
			'menu_item_jnews_mega_menu' => 
			array (
			  'type' => 'disable',
			  'custom_mega' => '0',
			  'category' => '1',
			  'number' => '9',
			  'override_item_row' => '0',
			  'item_row' => '3',
			  'trending_tag' => '',
			  'child_mega' => 'disable',
			  'enable_icon' => '0',
			  'enable_icon_image' => '0',
			  'icon' => '',
			  'icon_image' => '',
			  'icon_color' => '',
			  'badge' => 'disable',
			  'badge_bg_color' => '#f70d28',
			  'badge_text_color' => '#fff',
			  'badge_text' => '',
			  'child_badge' => 'disable',
			  'child_badge_text' => '',
			),
		  ),
		),
		'watch-later-playlist-private' => 
		array (
		  'location' => 'menu',
		  'menu-item-data' => 
		  array (
			'menu-item-title' => 'Watch Later Playlist (Private)',
			'menu-item-type' => 'custom',
			'menu-item-object' => 'custom',
			'menu-item-status' => 'publish',
			'menu-item-parent-id' => '{{menu:features:id}}',
			'menu-item-url' => '#',
		  ),
		  'metabox' => 
		  array (
			'menu_item_jnews_mega_menu' => 
			array (
			  'type' => 'disable',
			  'custom_mega' => '0',
			  'category' => '1',
			  'number' => '9',
			  'override_item_row' => '0',
			  'item_row' => '3',
			  'trending_tag' => '',
			  'child_mega' => 'disable',
			  'enable_icon' => '0',
			  'enable_icon_image' => '0',
			  'icon' => '',
			  'icon_image' => '',
			  'icon_color' => '',
			  'badge' => 'disable',
			  'badge_bg_color' => '#f70d28',
			  'badge_text_color' => '#fff',
			  'badge_text' => '',
			  'child_badge' => 'disable',
			  'child_badge_text' => '',
			),
		  ),
		),
		'all-jnews-features' => 
		array (
		  'location' => 'menu',
		  'menu-item-data' => 
		  array (
			'menu-item-title' => 'All JNews Features',
			'menu-item-type' => 'custom',
			'menu-item-object' => 'custom',
			'menu-item-status' => 'publish',
			'menu-item-parent-id' => '{{menu:features:id}}',
			'menu-item-url' => 'https://jnews.io',
		  ),
		),
		1186 => 
		array (
		  'location' => 'menu',
		  'menu-item-data' => 
		  array (
			'menu-item-title' => 'Trending',
			'menu-item-type' => 'post_type',
			'menu-item-object' => 'page',
			'menu-item-status' => 'publish',
			'menu-item-object-id' => '{{post:trending:id}}',
		  ),
		  'metabox' => 
		  array (
			'menu_item_jnews_mega_menu' => 
			array (
			  'type' => 'disable',
			  'custom_mega' => '0',
			  'category' => '1',
			  'number' => '9',
			  'override_item_row' => '0',
			  'item_row' => '3',
			  'trending_tag' => '',
			  'child_mega' => 'disable',
			  'enable_icon' => '0',
			  'enable_icon_image' => '0',
			  'icon' => '',
			  'icon_image' => '',
			  'icon_color' => '',
			  'badge' => 'disable',
			  'badge_bg_color' => '#f70d28',
			  'badge_text_color' => '#fff',
			  'badge_text' => '',
			  'child_badge' => 'disable',
			  'child_badge_text' => '',
			),
		  ),
		),
		1187 => 
		array (
		  'location' => 'menu',
		  'menu-item-data' => 
		  array (
			'menu-item-title' => 'Latest',
			'menu-item-type' => 'post_type',
			'menu-item-object' => 'page',
			'menu-item-status' => 'publish',
			'menu-item-object-id' => '{{post:latest:id}}',
		  ),
		),
		'browse' => 
		array (
		  'location' => 'menu',
		  'menu-item-data' => 
		  array (
			'menu-item-title' => 'Category',
			'menu-item-type' => 'custom',
			'menu-item-object' => 'custom',
			'menu-item-status' => 'publish',
			'menu-item-url' => '#',
		  ),
		  'metabox' => 
		  array (
			'menu_item_jnews_mega_menu' => 
			array (
			  'type' => 'disable',
			  'custom_mega' => '0',
			  'category' => '1',
			  'number' => '9',
			  'override_item_row' => '0',
			  'item_row' => '3',
			  'trending_tag' => '',
			  'child_mega' => 'disable',
			  'enable_icon' => '0',
			  'enable_icon_image' => '0',
			  'icon' => '',
			  'icon_image' => '',
			  'icon_color' => '',
			  'badge' => 'disable',
			  'badge_bg_color' => '#f70d28',
			  'badge_text_color' => '#fff',
			  'badge_text' => '',
			  'child_badge' => 'disable',
			  'child_badge_text' => '',
			),
		  ),
		),
		'news' => 
		array (
		  'location' => 'menu',
		  'menu-item-data' => 
		  array (
			'menu-item-title' => 'News',
			'menu-item-type' => 'taxonomy',
			'menu-item-object' => 'category',
			'menu-item-status' => 'publish',
			'menu-item-parent-id' => '{{menu:browse:id}}',
			'menu-item-object-id' => '{{category:news:id}}',
		  ),
		),
		'movie' => 
		array (
		  'location' => 'menu',
		  'menu-item-data' => 
		  array (
			'menu-item-title' => 'Movie',
			'menu-item-type' => 'taxonomy',
			'menu-item-object' => 'category',
			'menu-item-status' => 'publish',
			'menu-item-parent-id' => '{{menu:browse:id}}',
			'menu-item-object-id' => '{{category:movie:id}}',
		  ),
		),
		'music' => 
		array (
		  'location' => 'menu',
		  'menu-item-data' => 
		  array (
			'menu-item-title' => 'Music',
			'menu-item-type' => 'taxonomy',
			'menu-item-object' => 'category',
			'menu-item-status' => 'publish',
			'menu-item-parent-id' => '{{menu:browse:id}}',
			'menu-item-object-id' => '{{category:music:id}}',
		  ),
		),
		'technology' => 
		array (
		  'location' => 'menu',
		  'menu-item-data' => 
		  array (
			'menu-item-title' => 'Technology',
			'menu-item-type' => 'taxonomy',
			'menu-item-object' => 'category',
			'menu-item-status' => 'publish',
			'menu-item-parent-id' => '{{menu:browse:id}}',
			'menu-item-object-id' => '{{category:technology:id}}',
		  ),
		),
		'howto-style' => 
		array (
		  'location' => 'menu',
		  'menu-item-data' => 
		  array (
			'menu-item-title' => 'Howto & Style',
			'menu-item-type' => 'taxonomy',
			'menu-item-object' => 'category',
			'menu-item-status' => 'publish',
			'menu-item-parent-id' => '{{menu:browse:id}}',
			'menu-item-object-id' => '{{category:howto-style:id}}',
		  ),
		),
		'entertainment' => 
		array (
		  'location' => 'menu',
		  'menu-item-data' => 
		  array (
			'menu-item-title' => 'Entertainment',
			'menu-item-type' => 'taxonomy',
			'menu-item-object' => 'category',
			'menu-item-status' => 'publish',
			'menu-item-parent-id' => '{{menu:browse:id}}',
			'menu-item-object-id' => '{{category:entertainment:id}}',
		  ),
		),
		'gaming' => 
		array (
		  'location' => 'menu',
		  'menu-item-data' => 
		  array (
			'menu-item-title' => 'Gaming',
			'menu-item-type' => 'taxonomy',
			'menu-item-object' => 'category',
			'menu-item-status' => 'publish',
			'menu-item-parent-id' => '{{menu:browse:id}}',
			'menu-item-object-id' => '{{category:gaming:id}}',
		  ),
		),
		258 => 
		array (
		  'location' => 'menu-sidefeed',
		  'menu-item-data' => 
		  array (
			'menu-item-title' => 'Home',
			'menu-item-type' => 'post_type',
			'menu-item-object' => 'page',
			'menu-item-status' => 'publish',
			'menu-item-object-id' => '{{post:home:id}}',
		  ),
		  'metabox' => 
		  array (
			'menu_item_jnews_mega_menu' => 
			array (
			  'type' => 'disable',
			  'custom_mega' => '0',
			  'category' => '1',
			  'number' => '9',
			  'override_item_row' => '0',
			  'item_row' => '3',
			  'trending_tag' => '',
			  'child_mega' => 'disable',
			  'enable_icon' => '1',
			  'enable_icon_image' => '1',
			  'icon' => 'fa-home',
			  'icon_image' => '670',
			  'icon_color' => '',
			  'badge' => 'disable',
			  'badge_bg_color' => '#f70d28',
			  'badge_text_color' => '#fff',
			  'badge_text' => '',
			  'child_badge' => 'disable',
			  'child_badge_text' => '',
			),
		  ),
		),
		669 => 
		array (
		  'location' => 'menu-sidefeed',
		  'menu-item-data' => 
		  array (
			'menu-item-title' => 'Trending',
			'menu-item-type' => 'post_type',
			'menu-item-object' => 'page',
			'menu-item-status' => 'publish',
			'menu-item-object-id' => '{{post:trending:id}}',
		  ),
		  'metabox' => 
		  array (
			'menu_item_jnews_mega_menu' => 
			array (
			  'type' => 'disable',
			  'custom_mega' => '0',
			  'category' => '1',
			  'number' => '9',
			  'override_item_row' => '0',
			  'item_row' => '3',
			  'trending_tag' => '',
			  'child_mega' => 'disable',
			  'enable_icon' => '1',
			  'enable_icon_image' => '1',
			  'icon' => '',
			  'icon_image' => '671',
			  'icon_color' => '',
			  'badge' => 'disable',
			  'badge_bg_color' => '#f70d28',
			  'badge_text_color' => '#fff',
			  'badge_text' => '',
			  'child_badge' => 'disable',
			  'child_badge_text' => '',
			),
		  ),
		),
		'recommended-2' => 
		array (
		  'location' => 'menu-sidefeed',
		  'menu-item-data' => 
		  array (
			'menu-item-title' => 'Recommended',
			'menu-item-type' => 'post_type',
			'menu-item-object' => 'page',
			'menu-item-status' => 'publish',
			'menu-item-object-id' => '{{post:home-2:id}}',
		  ),
		  'metabox' => 
		  array (
			'menu_item_jnews_mega_menu' => 
			array (
			  'type' => 'disable',
			  'custom_mega' => '0',
			  'category' => '1',
			  'number' => '9',
			  'override_item_row' => '0',
			  'item_row' => '3',
			  'trending_tag' => '',
			  'child_mega' => 'disable',
			  'enable_icon' => '1',
			  'enable_icon_image' => '1',
			  'icon' => '',
			  'icon_image' => '672',
			  'icon_color' => '',
			  'badge' => 'disable',
			  'badge_bg_color' => '#f70d28',
			  'badge_text_color' => '#fff',
			  'badge_text' => '',
			  'child_badge' => 'disable',
			  'child_badge_text' => '',
			),
		  ),
		),
		668 => 
		array (
		  'location' => 'menu-sidefeed',
		  'menu-item-data' => 
		  array (
			'menu-item-title' => 'Latest',
			'menu-item-type' => 'post_type',
			'menu-item-object' => 'page',
			'menu-item-status' => 'publish',
			'menu-item-object-id' => '{{post:latest:id}}',
		  ),
		  'metabox' => 
		  array (
			'menu_item_jnews_mega_menu' => 
			array (
			  'type' => 'disable',
			  'custom_mega' => '0',
			  'category' => '1',
			  'number' => '9',
			  'override_item_row' => '0',
			  'item_row' => '3',
			  'trending_tag' => '',
			  'child_mega' => 'disable',
			  'enable_icon' => '1',
			  'enable_icon_image' => '1',
			  'icon' => '',
			  'icon_image' => '673',
			  'icon_color' => '',
			  'badge' => 'disable',
			  'badge_bg_color' => '#f70d28',
			  'badge_text_color' => '#fff',
			  'badge_text' => '',
			  'child_badge' => 'disable',
			  'child_badge_text' => '',
			),
		  ),
		),
	),


	'widget_position' => array(
		'default-sidebar',
		'jnews-bp-home',
		'sidefeed',
		'sidefeed-footer',
		'single-post',
		'user-profile-sidebar',
	),

	'widget'          => array(
		'widget.json',
	),

	'customizer'      => array(
		'style.json',
	),

	'plugin'          => array(
		'jnews-essential',
		'jnews-frontend-submit',
		'jnews-like',
		'jnews-social-share',
		'jnews-video',
		'jnews-view-counter',
		'jnews-jsonld',
		'jnews-meta-header',
		'jnews-social-login',
		'buddypress',
		'buddypress-followers',
		'mailchimp-for-wp',
		'jnews-webstories',
		'web-stories',
	),
);
