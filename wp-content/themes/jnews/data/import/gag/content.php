<?php

return array(

	// image
	'image'           => array(
		'gag1'          => 'https://jegtheme.com/asset/jnews/demo/gag/gag1.jpg',
		'gag2'          => 'https://jegtheme.com/asset/jnews/demo/gag/gag2.jpg',
		'gag3'          => 'https://jegtheme.com/asset/jnews/demo/gag/gag3.jpg',
		'gag4'          => 'https://jegtheme.com/asset/jnews/demo/gag/gag4.jpg',
		'gag5'          => 'https://jegtheme.com/asset/jnews/demo/gag/gag5.jpg',
		'gag6'          => 'https://jegtheme.com/asset/jnews/demo/gag/gag6.jpg',
		'gag7'          => 'https://jegtheme.com/asset/jnews/demo/gag/gag7.jpg',
		'gag8'          => 'https://jegtheme.com/asset/jnews/demo/gag/gag8.jpg',
		'gag9'          => 'https://jegtheme.com/asset/jnews/demo/gag/gag9.jpg',
		'gag10'         => 'https://jegtheme.com/asset/jnews/demo/gag/gag10.jpg',
		'gag11'         => 'https://jegtheme.com/asset/jnews/demo/gag/gag11.jpg',
		'gag12'         => 'https://jegtheme.com/asset/jnews/demo/gag/gag12.jpg',
		'logo'          => 'https://jegtheme.com/asset/jnews/demo/gag/logo.png',
		'logo2x'        => 'https://jegtheme.com/asset/jnews/demo/gag/logo@2x.png',
		'mobile_logo'   => 'https://jnews.io/gag/wp-content/uploads/sites/9/2017/03/gag_logo.png',
		'mobile_logo2x' => 'https://jnews.io/gag/wp-content/uploads/sites/9/2017/03/gag_logo@2x.png',
		'favicon'       => 'https://jegtheme.com/asset/jnews/demo/default/favicon.png',
		'ad_300x250'    => 'https://jegtheme.com/asset/jnews/demo/default/ad_300x250.jpg',
		'ad_728x90'     => 'https://jegtheme.com/asset/jnews/demo/default/ad_728x90.png',
		'ad_300x600'    => 'https://jegtheme.com/asset/jnews/demo/default/ad_300x600.jpg',
		'ad_970x90'     => 'https://jegtheme.com/asset/jnews/demo/default/ad_970x90.png',
	),

	// create taxonomy
	'taxonomy'        => array(
		'category' => array(
			'video'   =>
				array(
					'title'       => 'Video',
					'description' => 'A wonderful serenity has taken possession of my entire soul.',
				),
			'gif'     =>
				array(
					'title'       => 'GIF',
					'description' => 'A wonderful serenity has taken possession of my entire soul.',
				),
			'fail'    =>
				array(
					'title'       => 'Fail',
					'description' => 'A wonderful serenity has taken possession of my entire soul.',
				),
			'lol'     =>
				array(
					'title'       => 'LOL',
					'description' => 'A wonderful serenity has taken possession of my entire soul.',
				),
			'animals' =>
				array(
					'title'       => 'Animals',
					'description' => 'A wonderful serenity has taken possession of my entire soul.',
				),
			'meme'    =>
				array(
					'title'       => 'Meme',
					'description' => 'A wonderful serenity has taken possession of my entire soul.',
				),
			'girl'    =>
				array(
					'title'       => 'Girl',
					'description' => 'A wonderful serenity has taken possession of my entire soul.',
				),
		),

		'post_tag' => array(
			'dog'    => array(
				'title' => 'Dog',
			),
			'cat'    => array(
				'title' => 'Cat',
			),
			'savage' => array(
				'title' => 'Savage',
			),
			'humor'  => array(
				'title' => 'Humor',
			),
			'gaming' => array(
				'title' => 'Gaming',
			),
			'nsfw'   => array(
				'title' => 'NSFW',
			),
			'quotes' => array(
				'title' => 'Quotes',
			),
			'epic'   => array(
				'title' => 'Epic',
			),
		),
	),

	// post & page
	'post'            => array (
        'age-is-just-a-number-nah-its-just-a-word' => 
        array (
          'title' => 'Age is just a number? Nah, it\'s just a word!',
          'content' => 'post1.txt',
          'featured_image' => 'gag7',
          'post_type' => 'post',
          'taxonomy' => 
          array (
            'category' => 'girl,lol,meme',
            'post_tag' => 'cat,epic,humor,nsfw,quotes',
          ),
          'metabox' => 
          array (
            'jnews_primary_category' => 
            array (
              'id' => '{{category:girl:id}}',
            ),
            'jnews_single_post' => 
            array (
              'override_template' => '0',
              'override' => 
              array (
                0 => 
                array (
                  'template' => '1',
                  'parallax' => '1',
                  'fullscreen' => '0',
                  'layout' => 'right-sidebar',
                  'sidebar' => 'default-sidebar',
                  'share_position' => 'top',
                  'share_float_style' => 'share-monocrhome',
                  'show_share_counter' => '1',
                  'show_view_counter' => '1',
                  'show_post_meta' => '1',
                  'show_post_author' => '1',
                  'show_post_author_image' => '1',
                  'show_post_date' => '1',
                  'show_post_category' => '1',
                  'show_post_tag' => '1',
                  'show_prev_next_post' => '1',
                  'show_popup_post' => '1',
                  'show_author_box' => '1',
                  'show_post_related' => '1',
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
            ),
          ),
        ),
        'you-dont-adopt-the-kitty-the-kitty-adopts-you' => 
        array (
          'title' => 'You dont adopt the kitty, the kitty adopts you',
          'content' => 'post2.txt',
          'featured_image' => 'gag2',
          'post_type' => 'post',
          'taxonomy' => 
          array (
            'category' => 'animals,fail,gif,lol',
            'post_tag' => 'cat,epic,humor,savage',
          ),
          'metabox' => 
          array (
            'jnews_primary_category' => 
            array (
              'id' => '{{category:gif:id}}',
            ),
            'jnews_single_post' => 
            array (
              'override_template' => '0',
              'override' => 
              array (
                0 => 
                array (
                  'template' => '1',
                  'parallax' => '1',
                  'fullscreen' => '0',
                  'layout' => 'right-sidebar',
                  'sidebar' => 'default-sidebar',
                  'share_position' => 'top',
                  'share_float_style' => 'share-monocrhome',
                  'show_share_counter' => '1',
                  'show_view_counter' => '1',
                  'show_featured' => '0',
                  'show_post_meta' => '1',
                  'show_post_author' => '1',
                  'show_post_author_image' => '1',
                  'show_post_date' => '1',
                  'show_post_category' => '1',
                  'show_post_tag' => '1',
                  'show_prev_next_post' => '1',
                  'show_popup_post' => '1',
                  'number_popup_post' => '1',
                  'show_author_box' => '1',
                  'show_post_related' => '1',
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
            ),
          ),
        ),
        'a-frog-can-only-take-so-much-before-completely-losing-it' => 
        array (
          'title' => 'A frog can only take so much before completely losing it',
          'content' => 'post1.txt',
          'featured_image' => 'gag11',
          'post_type' => 'post',
          'taxonomy' => 
          array (
            'category' => 'animals,fail,lol,meme',
            'post_tag' => 'cat,humor,nsfw,quotes,savage',
          ),
          'metabox' => 
          array (
            'jnews_primary_category' => 
            array (
              'id' => '{{category:animals:id}}',
            ),
            'jnews_single_post' => 
            array (
              'override_template' => '0',
              'override' => 
              array (
                0 => 
                array (
                  'template' => '1',
                  'parallax' => '1',
                  'fullscreen' => '0',
                  'layout' => 'right-sidebar',
                  'sidebar' => 'default-sidebar',
                  'share_position' => 'top',
                  'share_float_style' => 'share-monocrhome',
                  'show_share_counter' => '1',
                  'show_view_counter' => '1',
                  'show_featured' => '0',
                  'show_post_meta' => '1',
                  'show_post_author' => '1',
                  'show_post_author_image' => '1',
                  'show_post_date' => '1',
                  'show_post_category' => '1',
                  'show_post_tag' => '1',
                  'show_prev_next_post' => '1',
                  'show_popup_post' => '1',
                  'number_popup_post' => '1',
                  'show_author_box' => '1',
                  'show_post_related' => '1',
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
            ),
          ),
        ),
        'when-people-talk-bullsht-all-the-time' => 
        array (
          'title' => 'When people talk bullsh*t all the time',
          'content' => 'post1.txt',
          'featured_image' => 'gag1',
          'post_type' => 'post',
          'taxonomy' => 
          array (
            'category' => 'animals,fail,gif,lol',
            'post_tag' => 'cat,humor,nsfw,quotes,savage',
          ),
          'metabox' => 
          array (
            'jnews_primary_category' => 
            array (
              'id' => '{{category:animals:id}}',
            ),
            'jnews_single_post' => 
            array (
              'override_template' => '0',
              'override' => 
              array (
                0 => 
                array (
                  'template' => '1',
                  'parallax' => '1',
                  'fullscreen' => '0',
                  'layout' => 'right-sidebar',
                  'sidebar' => 'default-sidebar',
                  'share_position' => 'top',
                  'share_float_style' => 'share-monocrhome',
                  'show_share_counter' => '1',
                  'show_view_counter' => '1',
                  'show_featured' => '0',
                  'show_post_meta' => '1',
                  'show_post_author' => '1',
                  'show_post_author_image' => '1',
                  'show_post_date' => '1',
                  'show_post_category' => '1',
                  'show_post_tag' => '1',
                  'show_prev_next_post' => '1',
                  'show_popup_post' => '1',
                  'number_popup_post' => '1',
                  'show_author_box' => '1',
                  'show_post_related' => '1',
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
            ),
          ),
        ),
        'nnn-meme' => 
        array (
          'title' => 'NNN Meme',
          'content' => 'story.json',
          'featured_image' => 'gag7',
          'post_type' => 'web-story',
          'taxonomy' => 
          array (
          ),
          'metabox' => 
          array (
          ),
        ),
        'stream-fails' => 
        array (
          'title' => 'Stream Fail',
          'content' => 'story.json',
          'featured_image' => 'gag9',
          'post_type' => 'web-story',
          'taxonomy' => 
          array (
          ),
          'metabox' => 
          array (
          ),
        ),
        'fail-dance' => 
        array (
          'title' => 'Fail Dance',
          'content' => 'story.json',
          'featured_image' => 'gag1',
          'post_type' => 'web-story',
          'taxonomy' => 
          array (
          ),
          'metabox' => 
          array (
          ),
        ),
        'xmas-meme' => 
        array (
          'title' => 'Xmas',
          'content' => 'story.json',
          'featured_image' => 'gag11',
          'post_type' => 'web-story',
          'taxonomy' => 
          array (
          ),
          'metabox' => 
          array (
          ),
        ),
        'tech-meme' => 
        array (
          'title' => 'Tech Meme',
          'content' => 'story.json',
          'featured_image' => 'gag12',
          'post_type' => 'web-story',
          'taxonomy' => 
          array (
          ),
          'metabox' => 
          array (
          ),
        ),
        'satisfying' => 
        array (
          'title' => 'Satisfying',
          'content' => 'story.json',
          'featured_image' => 'gag6',
          'post_type' => 'web-story',
          'taxonomy' => 
          array (
          ),
          'metabox' => 
          array (
          ),
        ),
        'dad-jokes' => 
        array (
          'title' => 'Dad Jokes',
          'content' => 'story.json',
          'featured_image' => 'gag11',
          'post_type' => 'web-story',
          'taxonomy' => 
          array (
          ),
          'metabox' => 
          array (
          ),
        ),
        'weird-rules' => 
        array (
          'title' => 'Series',
          'content' => 'story.json',
          'featured_image' => 'gag3',
          'post_type' => 'web-story',
          'taxonomy' => 
          array (
          ),
          'metabox' => 
          array (
          ),
        ),
        'sport-fail' => 
        array (
          'title' => 'Sport Fail',
          'content' => 'story.json',
          'featured_image' => 'gag3',
          'post_type' => 'web-story',
          'taxonomy' => 
          array (
          ),
          'metabox' => 
          array (
          ),
        ),
        'comedian' => 
        array (
          'title' => 'Make Jokes',
          'content' => 'story.json',
          'featured_image' => 'gag11',
          'post_type' => 'web-story',
          'taxonomy' => 
          array (
          ),
          'metabox' => 
          array (
          ),
        ),
        'funny-games' => 
        array (
          'title' => 'Games',
          'content' => 'story.json',
          'featured_image' => 'gag3',
          'post_type' => 'web-story',
          'taxonomy' => 
          array (
          ),
          'metabox' => 
          array (
          ),
        ),
        'meme-song' => 
        array (
          'title' => 'Meme Song',
          'content' => 'story.json',
          'featured_image' => 'gag12',
          'post_type' => 'web-story',
          'taxonomy' => 
          array (
          ),
          'metabox' => 
          array (
          ),
        ),
        'uncle-roger' => 
        array (
          'title' => 'Asian',
          'content' => 'story.json',
          'featured_image' => 'gag5',
          'post_type' => 'web-story',
          'taxonomy' => 
          array (
          ),
          'metabox' => 
          array (
          ),
        ),
        0 => 
        array (
          'title' => 'Animal',
          'content' => 'story.json',
          'featured_image' => 'gag1',
          'post_type' => 'web-story',
          'taxonomy' => 
          array (
          ),
          'metabox' => 
          array (
          ),
        ),
        'meme-coin' => 
        array (
          'title' => 'Meme Coin',
          'content' => 'story.json',
          'featured_image' => 'gag5',
          'post_type' => 'web-story',
          'taxonomy' => 
          array (
          ),
          'metabox' => 
          array (
          ),
        ),
        'when-you-see-your-friend-still-using-internet-explorer-6' => 
        array (
          'title' => 'When you see your friend still using Internet Explorer 6',
          'content' => 'post2.txt',
          'featured_image' => 'gag6',
          'post_type' => 'post',
          'taxonomy' => 
          array (
            'category' => 'fail,lol,meme',
            'post_tag' => 'epic,gaming,humor,nsfw,quotes,savage',
          ),
          'metabox' => 
          array (
            'jnews_primary_category' => 
            array (
              'id' => '{{category:meme:id}}',
            ),
            'jnews_single_post' => 
            array (
              'override_template' => '0',
              'override' => 
              array (
                0 => 
                array (
                  'template' => '1',
                  'parallax' => '1',
                  'fullscreen' => '0',
                  'layout' => 'right-sidebar',
                  'sidebar' => 'default-sidebar',
                  'share_position' => 'top',
                  'share_float_style' => 'share-monocrhome',
                  'show_share_counter' => '1',
                  'show_view_counter' => '1',
                  'show_featured' => '0',
                  'show_post_meta' => '1',
                  'show_post_author' => '1',
                  'show_post_author_image' => '1',
                  'show_post_date' => '1',
                  'show_post_category' => '1',
                  'show_post_tag' => '1',
                  'show_prev_next_post' => '1',
                  'show_popup_post' => '1',
                  'show_author_box' => '1',
                  'show_post_related' => '1',
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
              'subtitle' => '',
              'format' => 'standard',
            ),
          ),
        ),
        'how-to-deal-with-gold-digger' => 
        array (
          'title' => 'How to deal with gold digger',
          'content' => 'post1.txt',
          'featured_image' => 'gag1',
          'post_type' => 'post',
          'taxonomy' => 
          array (
            'category' => 'fail,girl,lol',
            'post_tag' => 'cat,epic,gaming,humor,nsfw,savage',
          ),
          'metabox' => 
          array (
            'jnews_primary_category' => 
            array (
              'id' => '{{category:girl:id}}',
            ),
            'jnews_single_post' => 
            array (
              'override_template' => '0',
              'override' => 
              array (
                0 => 
                array (
                  'template' => '8',
                  'parallax' => '1',
                  'fullscreen' => '0',
                  'layout' => 'right-sidebar',
                  'sidebar' => 'default-sidebar',
                  'share_position' => 'top',
                  'share_float_style' => 'share-monocrhome',
                  'show_share_counter' => '1',
                  'show_view_counter' => '1',
                  'show_featured' => '1',
                  'show_post_meta' => '1',
                  'show_post_author' => '1',
                  'show_post_author_image' => '1',
                  'show_post_date' => '1',
                  'show_post_category' => '1',
                  'show_post_tag' => '1',
                  'show_prev_next_post' => '0',
                  'show_popup_post' => '0',
                  'show_author_box' => '0',
                  'show_post_related' => '0',
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
            ),
          ),
        ),
        'youre-being-watched-without-knowing-it' => 
        array (
          'title' => 'You\'re being watched without knowing it',
          'content' => 'post2.txt',
          'featured_image' => 'gag3',
          'post_type' => 'post',
          'taxonomy' => 
          array (
            'category' => 'animals,gif,lol,video',
            'post_tag' => 'cat,epic,gaming,humor,nsfw,savage',
          ),
          'metabox' => 
          array (
            'jnews_primary_category' => 
            array (
              'id' => '{{category:gif:id}}',
            ),
            'jnews_single_post' => 
            array (
              'override_template' => '0',
              'override' => 
              array (
                0 => 
                array (
                  'template' => '1',
                  'parallax' => '1',
                  'fullscreen' => '0',
                  'layout' => 'right-sidebar',
                  'sidebar' => 'default-sidebar',
                  'share_position' => 'top',
                  'share_float_style' => 'share-monocrhome',
                  'show_share_counter' => '1',
                  'show_view_counter' => '1',
                  'show_featured' => '0',
                  'show_post_meta' => '1',
                  'show_post_author' => '1',
                  'show_post_author_image' => '1',
                  'show_post_date' => '1',
                  'show_post_category' => '1',
                  'show_post_tag' => '1',
                  'show_prev_next_post' => '1',
                  'show_popup_post' => '1',
                  'show_author_box' => '1',
                  'show_post_related' => '1',
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
            ),
          ),
        ),
        'this-is-just-a-banana-dont-be-dirty' => 
        array (
          'title' => 'This is just a banana, don\'t be dirty',
          'content' => 'post1.txt',
          'featured_image' => 'gag4',
          'post_type'      => 'post',
          'taxonomy' => 
          array (
            'category' => 'animals,fail,lol,meme',
            'post_tag' => 'epic,humor,nsfw,quotes',
          ),
          'metabox' => 
          array (
            'jnews_primary_category' => 
            array (
              'id' => '{{category:lol:id}}',
            ),
            'jnews_single_post' => 
            array (
              'override_template' => '0',
              'override' => 
              array (
                0 => 
                array (
                  'template' => '1',
                  'parallax' => '1',
                  'fullscreen' => '0',
                  'layout' => 'right-sidebar',
                  'sidebar' => 'default-sidebar',
                  'share_position' => 'top',
                  'share_float_style' => 'share-monocrhome',
                  'show_share_counter' => '1',
                  'show_view_counter' => '1',
                  'show_post_meta' => '1',
                  'show_post_author' => '1',
                  'show_post_author_image' => '1',
                  'show_post_date' => '1',
                  'show_post_category' => '1',
                  'show_post_tag' => '1',
                  'show_prev_next_post' => '1',
                  'show_popup_post' => '1',
                  'show_author_box' => '1',
                  'show_post_related' => '1',
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
            ),
          ),
        ),
        'when-you-get-another-day-off-but-suddenly-canceled' => 
        array (
          'title' => 'When you get another day-off, but suddenly canceled',
          'content' => 'post2.txt',
          'featured_image' => 'gag2',
          'post_type' => 'post',
          'taxonomy' => 
          array (
            'category' => 'fail,lol,meme',
            'post_tag' => 'epic,gaming,humor,nsfw,quotes,savage',
          ),
          'metabox' => 
          array (
            'jnews_primary_category' => 
            array (
              'id' => '{{category:lol:id}}',
            ),
            'jnews_single_post' => 
            array (
              'override_template' => '0',
              'override' => 
              array (
                0 => 
                array (
                  'template' => '1',
                  'parallax' => '1',
                  'fullscreen' => '0',
                  'layout' => 'right-sidebar',
                  'sidebar' => 'default-sidebar',
                  'share_position' => 'top',
                  'share_float_style' => 'share-monocrhome',
                  'show_share_counter' => '1',
                  'show_view_counter' => '1',
                  'show_featured' => '0',
                  'show_post_meta' => '1',
                  'show_post_author' => '1',
                  'show_post_author_image' => '1',
                  'show_post_date' => '1',
                  'show_post_category' => '1',
                  'show_post_tag' => '1',
                  'show_prev_next_post' => '1',
                  'show_popup_post' => '1',
                  'show_author_box' => '1',
                  'show_post_related' => '1',
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
            ),
          ),
        ),
        'i-feel-so-happy-right-now' => 
        array (
          'title' => 'I feel so happy right now',
          'content' => 'post1.txt',
          'featured_image' => 'gag5',
          'post_type' => 'post',
          'taxonomy' => 
          array (
            'category' => 'gif,girl,lol',
            'post_tag' => 'epic,gaming,humor,nsfw,quotes,savage',
          ),
          'metabox' => 
          array (
            'jnews_primary_category' => 
            array (
              'id' => '{{category:girl:id}}',
            ),
            'jnews_single_post' => 
            array (
              'override_template' => '0',
              'override' => 
              array (
                0 => 
                array (
                  'template' => '1',
                  'parallax' => '1',
                  'fullscreen' => '0',
                  'layout' => 'right-sidebar',
                  'sidebar' => 'default-sidebar',
                  'share_position' => 'top',
                  'share_float_style' => 'share-monocrhome',
                  'show_share_counter' => '1',
                  'show_view_counter' => '1',
                  'show_featured' => '0',
                  'show_post_meta' => '1',
                  'show_post_author' => '1',
                  'show_post_author_image' => '1',
                  'show_post_date' => '1',
                  'show_post_category' => '1',
                  'show_post_tag' => '1',
                  'show_prev_next_post' => '1',
                  'show_popup_post' => '1',
                  'show_author_box' => '1',
                  'show_post_related' => '1',
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
            ),
          ),
        ),
        'cute-baby-monkeys-compilations' => 
        array (
          'title' => 'Cute baby monkeys compilations',
          'content' => 'post2.txt',
          'featured_image' => 'gag6',
          'post_type' => 'post',
          'taxonomy' => 
          array (
            'post_format' => 'post-format-video',
            'category' => 'animals,lol,video',
            'post_tag' => 'cat,epic,gaming,humor,nsfw,savage',
          ),
          'metabox' => 
          array (
            '_format_video_embed' => 'https://www.youtube.com/watch?v=7njL4lDmhOc',
            'jnews_primary_category' => 
            array (
              'id' => '{{category:animals:id}}',
            ),
            'jnews_single_post' => 
            array (
              'override_template' => '1',
              'override' => 
              array (
                0 => 
                array (
                  'template' => '9',
                  'parallax' => '1',
                  'fullscreen' => '0',
                  'layout' => 'right-sidebar',
                  'sidebar' => 'default-sidebar',
                  'share_position' => 'top',
                  'share_float_style' => 'share-monocrhome',
                  'show_share_counter' => '1',
                  'show_view_counter' => '1',
                  'show_featured' => '1',
                  'show_post_meta' => '1',
                  'show_post_author' => '1',
                  'show_post_author_image' => '1',
                  'show_post_date' => '1',
                  'show_post_category' => '1',
                  'show_post_tag' => '1',
                  'show_prev_next_post' => '0',
                  'show_popup_post' => '0',
                  'number_popup_post' => '1',
                  'show_author_box' => '0',
                  'show_post_related' => '0',
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
            ),
          ),
        ),
        'i-laughed-way-too-hard-at-this' => 
        array (
          'title' => 'I laughed way too hard at this',
          'content' => 'post1.txt',
          'featured_image' => 'gag7',
          'post_type' => 'post',
          'taxonomy' => 
          array (
            'category' => 'fail,gif,lol,meme',
            'post_tag' => 'epic,gaming,humor,nsfw,quotes,savage',
          ),
          'metabox' => 
          array (
            'jnews_primary_category' => 
            array (
              'id' => '{{category:lol:id}}',
            ),
            'jnews_single_post' => 
            array (
              'override_template' => '0',
              'override' => 
              array (
                0 => 
                array (
                  'template' => '1',
                  'parallax' => '1',
                  'fullscreen' => '0',
                  'layout' => 'right-sidebar',
                  'sidebar' => 'default-sidebar',
                  'share_position' => 'top',
                  'share_float_style' => 'share-monocrhome',
                  'show_share_counter' => '1',
                  'show_view_counter' => '1',
                  'show_post_meta' => '1',
                  'show_post_author' => '1',
                  'show_post_author_image' => '1',
                  'show_post_date' => '1',
                  'show_post_category' => '1',
                  'show_post_tag' => '1',
                  'show_prev_next_post' => '1',
                  'show_popup_post' => '1',
                  'show_author_box' => '1',
                  'show_post_related' => '1',
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
            ),
          ),
        ),
        'this-is-why-dads-good-at-babysitting' => 
        array (
          'title' => 'This is why dads good at babysitting',
          'content' => 'post2.txt',
          'featured_image' => 'gag8',
          'post_type' => 'post',
          'taxonomy' => 
          array (
            'category' => 'fail,girl,lol,meme',
            'post_tag' => 'epic,gaming,humor,nsfw,quotes,savage',
          ),
          'metabox' => 
          array (
            'jnews_primary_category' => 
            array (
              'id' => '{{category:fail:id}}',
            ),
            'jnews_single_post' => 
            array (
              'override_template' => '0',
              'override' => 
              array (
                0 => 
                array (
                  'template' => '1',
                  'parallax' => '1',
                  'fullscreen' => '0',
                  'layout' => 'right-sidebar',
                  'sidebar' => 'default-sidebar',
                  'share_position' => 'top',
                  'share_float_style' => 'share-monocrhome',
                  'show_share_counter' => '1',
                  'show_view_counter' => '1',
                  'show_featured' => '0',
                  'show_post_meta' => '1',
                  'show_post_author' => '1',
                  'show_post_author_image' => '1',
                  'show_post_date' => '1',
                  'show_post_category' => '1',
                  'show_post_tag' => '1',
                  'show_prev_next_post' => '1',
                  'show_popup_post' => '1',
                  'show_author_box' => '1',
                  'show_post_related' => '1',
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
            ),
          ),
        ),
        'poor-lil-lion-savage-chimpanzee' => 
        array (
          'title' => 'Poor lil\' lion, savage chimpanzee',
          'content' => 'post1.txt',
          'featured_image' => 'gag9',
          'post_type' => 'post',
          'taxonomy' => 
          array (
            'category' => 'animals,fail,girl,lol,meme',
            'post_tag' => 'cat,epic,gaming,humor,nsfw,savage',
          ),
          'metabox' => 
          array (
            'jnews_primary_category' => 
            array (
              'id' => '{{category:fail:id}}',
            ),
            'jnews_single_post' => 
            array (
              'override_template' => '0',
              'override' => 
              array (
                0 => 
                array (
                  'template' => '1',
                  'parallax' => '1',
                  'fullscreen' => '0',
                  'layout' => 'right-sidebar',
                  'sidebar' => 'default-sidebar',
                  'share_position' => 'top',
                  'share_float_style' => 'share-monocrhome',
                  'show_share_counter' => '1',
                  'show_view_counter' => '1',
                  'show_post_meta' => '1',
                  'show_post_author' => '1',
                  'show_post_author_image' => '1',
                  'show_post_date' => '1',
                  'show_post_category' => '1',
                  'show_post_tag' => '1',
                  'show_prev_next_post' => '1',
                  'show_popup_post' => '1',
                  'show_author_box' => '1',
                  'show_post_related' => '1',
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
            ),
          ),
        ),
        'you-will-do-as-i-command' => 
        array (
          'title' => 'You will do as I command',
          'content' => 'post2.txt',
          'featured_image' => 'gag10',
          'post_type' => 'post',
          'taxonomy' => 
          array (
            'category' => 'animals,fail,girl,lol,meme',
            'post_tag' => 'cat,epic,gaming,humor,nsfw,savage',
          ),
          'metabox' => 
          array (
            'jnews_primary_category' => 
            array (
              'id' => '{{category:meme:id}}',
            ),
            'jnews_single_post' => 
            array (
              'override_template' => '0',
              'override' => 
              array (
                0 => 
                array (
                  'template' => '1',
                  'parallax' => '1',
                  'fullscreen' => '0',
                  'layout' => 'right-sidebar',
                  'sidebar' => 'default-sidebar',
                  'share_position' => 'top',
                  'share_float_style' => 'share-monocrhome',
                  'show_share_counter' => '1',
                  'show_view_counter' => '1',
                  'show_featured' => '0',
                  'show_post_meta' => '1',
                  'show_post_author' => '1',
                  'show_post_author_image' => '1',
                  'show_post_date' => '1',
                  'show_post_category' => '1',
                  'show_post_tag' => '1',
                  'show_prev_next_post' => '1',
                  'show_popup_post' => '1',
                  'show_author_box' => '1',
                  'show_post_related' => '1',
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
            ),
          ),
        ),
        'the-real-fantastic-beast' => 
        array (
          'title' => 'The real fantastic beast',
          'content' => 'post2.txt',
          'featured_image' => 'gag12',
          'post_type' => 'post',
          'taxonomy' => 
          array (
            'category' => 'animals,fail,lol,meme',
            'post_tag' => 'cat,epic,gaming,humor,nsfw,savage',
          ),
          'metabox' => 
          array (
            'jnews_primary_category' => 
            array (
              'id' => '{{category:animals:id}}',
            ),
            'jnews_single_post' => 
            array (
              'override_template' => '0',
              'override' => 
              array (
                0 => 
                array (
                  'template' => '1',
                  'parallax' => '1',
                  'fullscreen' => '0',
                  'layout' => 'right-sidebar',
                  'sidebar' => 'default-sidebar',
                  'share_position' => 'top',
                  'share_float_style' => 'share-monocrhome',
                  'show_share_counter' => '1',
                  'show_view_counter' => '1',
                  'show_post_meta' => '1',
                  'show_post_author' => '1',
                  'show_post_author_image' => '1',
                  'show_post_date' => '1',
                  'show_post_category' => '1',
                  'show_post_tag' => '1',
                  'show_prev_next_post' => '1',
                  'show_popup_post' => '1',
                  'show_author_box' => '1',
                  'show_post_related' => '1',
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
            ),
          ),
        ),
        'gimme-more-wine-btch' => 
        array (
          'title' => 'Gimme more wine b*tch',
          'content' => 'post1.txt',
          'featured_image' => 'gag3',
          'post_type' => 'post',
          'taxonomy' => 
          array (
            'category' => 'fail,gif,girl,lol,meme',
            'post_tag' => 'epic,gaming,humor,nsfw,quotes,savage',
          ),
          'metabox' => 
          array (
            'jnews_primary_category' => 
            array (
              'id' => '{{category:girl:id}}',
            ),
            'jnews_single_post' => 
            array (
              'override_template' => '0',
              'override' => 
              array (
                0 => 
                array (
                  'template' => '1',
                  'parallax' => '1',
                  'fullscreen' => '0',
                  'layout' => 'right-sidebar',
                  'sidebar' => 'default-sidebar',
                  'share_position' => 'top',
                  'share_float_style' => 'share-monocrhome',
                  'show_share_counter' => '1',
                  'show_view_counter' => '1',
                  'show_post_meta' => '1',
                  'show_post_author' => '1',
                  'show_post_author_image' => '1',
                  'show_post_date' => '1',
                  'show_post_category' => '1',
                  'show_post_tag' => '1',
                  'show_prev_next_post' => '1',
                  'show_popup_post' => '1',
                  'show_author_box' => '1',
                  'show_post_related' => '1',
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
            ),
          ),
        ),
        'reality-sometimes-beyond-the-expectation' => 
        array (
          'title' => 'Reality sometimes beyond the expectation',
          'content' => 'post2.txt',
          'featured_image' => 'gag4',
          'post_type' => 'post',
          'taxonomy' => 
          array (
            'category' => 'girl,lol,meme',
            'post_tag' => 'cat,epic,gaming,quotes',
          ),
          'metabox' => 
          array (
            'jnews_primary_category' => 
            array (
              'id' => '{{category:meme:id}}',
            ),
            'jnews_single_post' => 
            array (
              'override_template' => '0',
              'override' => 
              array (
                0 => 
                array (
                  'template' => '1',
                  'parallax' => '1',
                  'fullscreen' => '0',
                  'layout' => 'right-sidebar',
                  'sidebar' => 'default-sidebar',
                  'share_position' => 'top',
                  'share_float_style' => 'share-monocrhome',
                  'show_share_counter' => '1',
                  'show_view_counter' => '1',
                  'show_post_meta' => '1',
                  'show_post_author' => '1',
                  'show_post_author_image' => '1',
                  'show_post_date' => '1',
                  'show_post_category' => '1',
                  'show_post_tag' => '1',
                  'show_prev_next_post' => '1',
                  'show_popup_post' => '1',
                  'show_author_box' => '1',
                  'show_post_related' => '1',
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
            ),
          ),
        ),
        'i-wish-i-know-how-to-stop' => 
        array (
          'title' => 'I wish I know how to stop',
          'content' => 'post1.txt',
          'featured_image' => 'gag5',
          'post_type' => 'post',
          'taxonomy' => 
          array (
            'category' => 'animals,fail,lol,meme',
            'post_tag' => 'epic,gaming,humor,nsfw,quotes,savage',
          ),
          'metabox' => 
          array (
            'jnews_primary_category' => 
            array (
              'id' => '{{category:meme:id}}',
            ),
            'jnews_single_post' => 
            array (
              'override_template' => '0',
              'override' => 
              array (
                0 => 
                array (
                  'template' => '1',
                  'parallax' => '1',
                  'fullscreen' => '0',
                  'layout' => 'right-sidebar',
                  'sidebar' => 'default-sidebar',
                  'share_position' => 'top',
                  'share_float_style' => 'share-monocrhome',
                  'show_share_counter' => '1',
                  'show_view_counter' => '1',
                  'show_post_meta' => '1',
                  'show_post_author' => '1',
                  'show_post_author_image' => '1',
                  'show_post_date' => '1',
                  'show_post_category' => '1',
                  'show_post_tag' => '1',
                  'show_prev_next_post' => '1',
                  'show_popup_post' => '1',
                  'show_author_box' => '1',
                  'show_post_related' => '1',
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
            ),
          ),
        ),
        'try-not-to-laugh-at-this' => 
        array (
          'title' => 'Try not to laugh at this',
          'content' => 'post2.txt',
          'featured_image' => 'gag6',
          'post_type' => 'post',
          'taxonomy' => 
          array (
            'post_format' => 'post-format-video',
            'category' => 'animals,lol,video',
            'post_tag' => 'cat,epic,gaming,humor,nsfw,savage',
          ),
          'metabox' => 
          array (
            '_format_video_embed' => 'https://www.youtube.com/watch?v=oqNKD9YVe4U',
            'jnews_primary_category' => 
            array (
              'id' => '{{category:animals:id}}',
            ),
            'jnews_single_post' => 
            array (
              'override_template' => '1',
              'override' => 
              array (
                0 => 
                array (
                  'template' => '7',
                  'parallax' => '1',
                  'fullscreen' => '0',
                  'layout' => 'right-sidebar',
                  'sidebar' => 'default-sidebar',
                  'share_position' => 'top',
                  'share_float_style' => 'share-monocrhome',
                  'show_share_counter' => '1',
                  'show_view_counter' => '1',
                  'show_featured' => '1',
                  'show_post_meta' => '1',
                  'show_post_author' => '1',
                  'show_post_author_image' => '1',
                  'show_post_date' => '1',
                  'show_post_category' => '1',
                  'show_post_tag' => '1',
                  'show_prev_next_post' => '0',
                  'show_popup_post' => '0',
                  'show_author_box' => '0',
                  'show_post_related' => '0',
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
            ),
          ),
        ),
        'contact' => 
        array (
          'title' => 'Contact',
          'content' => 'home1.txt',
          'post_type' => 'page',
          'metabox' => 
          array (
            '_wp_page_template' => 'default',
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
              'module' => '3',
              'excerpt_length' => '20',
              'content_date' => 'default',
              'date_custom' => 'Y/m/d',
              'content_pagination' => 'nav_1',
              'pagination_align' => 'center',
              'show_navtext' => '0',
              'show_pageinfo' => '0',
              'include_post' => '',
              'exclude_post' => '',
              'include_category' => '',
              'exclude_category' => '',
              'include_author' => '',
              'include_tag' => '',
              'exclude_tag' => '',
              'sort_by' => 'latest',
            ),
            '_elementor_data' => 'home1.txt',
            '_elementor_edit_mode' => 'builder',
            '_elementor_page_settings' => 
            array (
              'custom_css' => '',
            ),
          ),
        ),
        'home-1' => 
        array (
          'title' => 'Home 1',
          'content' => 'home1.txt',
          'post_type' => 'page',
          'metabox' => 
          array (
            '_wp_page_template' => 'template-builder.php',
            '_wpb_shortcodes_custom_css' => '.vc_custom_1638950745962{margin-bottom: 40px !important;border-bottom-width: 1px !important;border-bottom-color: #eeeeee !important;border-bottom-style: solid !important;}',
            'jnews_page_loop' => 
            array (
              'enable_page_loop' => '1',
              'first_title' => '',
              'second_title' => '',
              'header_type' => 'heading_6',
              'header_background' => '',
              'header_text_color' => '',
              'layout' => 'right-sidebar',
              'sidebar' => 'home',
              'second_sidebar' => 'default-sidebar',
              'sticky_sidebar' => '1',
              'module' => '18',
              'boxed' => '0',
              'boxed_shadow' => '0',
              'box_shadow' => '0',
              'excerpt_length' => '20',
              'content_date' => 'ago',
              'date_custom' => 'Y/m/d',
              'content_pagination' => 'nav_3',
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
              'custom_css' => '',
            ),
          ),
        ),
        'home-4' => 
        array (
          'title' => 'Home 4',
          'content' => 'home4.txt',
          'post_type' => 'page',
          'metabox' => 
          array (
            '_wp_page_template' => 'template-builder.php',
            '_wpb_shortcodes_custom_css' => '.vc_custom_1490329382094{margin-top: -30px !important;margin-bottom: 40px !important;padding-top: 20px !important;background-color: #f5f5f5 !important;}',
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
              'second_sidebar' => '',
              'sticky_sidebar' => '0',
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
              'posts_per_page' => '1',
              'include_post' => '',
              'exclude_post' => '',
              'include_category' => '',
              'exclude_category' => '',
              'include_author' => '',
              'include_tag' => '',
              'exclude_tag' => '',
              'sort_by' => 'latest',
            ),
            '_elementor_data' => 'home4.json',
            '_elementor_edit_mode' => 'builder',
            '_elementor_page_settings' => 
            array (
              'custom_css' => '',
            ),
          ),
        ),
        'home-5' => 
        array (
          'title' => 'Home 5',
          'content' => 'home5.txt',
          'post_type' => 'page',
          'metabox' => 
          array (
            '_wp_page_template' => 'template-builder.php',
            '_wpb_shortcodes_custom_css' => '.vc_custom_1490427933218{margin-top: -30px !important;margin-bottom: 40px !important;background-color: #000000 !important;}.vc_custom_1490427853683{padding-right: 0px !important;padding-left: 0px !important;}.vc_custom_1619599482936{margin-bottom: 0px !important;}',
            'jnews_page_loop' => 
            array (
              'enable_page_loop' => '1',
              'first_title' => '',
              'second_title' => '',
              'header_type' => 'heading_6',
              'header_background' => '',
              'header_text_color' => '',
              'layout' => 'right-sidebar',
              'sidebar' => 'home',
              'second_sidebar' => '',
              'sticky_sidebar' => '1',
              'module' => '18',
              'boxed' => '0',
              'boxed_shadow' => '0',
              'box_shadow' => '0',
              'excerpt_length' => '20',
              'content_date' => 'default',
              'date_custom' => 'Y/m/d',
              'content_pagination' => 'nav_2',
              'pagination_align' => 'center',
              'show_navtext' => '0',
              'show_pageinfo' => '0',
              'post_offset' => '4',
              'posts_per_page' => '1',
              'include_post' => '',
              'exclude_post' => '',
              'include_category' => '',
              'exclude_category' => '',
              'include_author' => '',
              'include_tag' => '',
              'exclude_tag' => '',
              'sort_by' => 'latest',
            ),
            '_elementor_data' => 'home5.json',
            '_elementor_edit_mode' => 'builder',
            '_elementor_page_settings' => 
            array (
              'custom_css' => '',
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
            '_wpb_shortcodes_custom_css' => '.vc_custom_1490162941985{margin-top: -30px !important;}.vc_custom_1505895864900{border-top-width: 12px !important;border-top-color: rgba(255,255,255,0.01) !important;border-top-style: solid !important;}.vc_custom_1490162237805{padding-right: 0px !important;padding-left: 0px !important;}',
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
              'second_sidebar' => '',
              'sticky_sidebar' => '0',
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
              'posts_per_page' => '1',
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
              'custom_css' => '',
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
            '_wp_page_template' => 'default',
            '_wpb_shortcodes_custom_css' => '.vc_custom_1490162941985{margin-top: -30px !important;}.vc_custom_1505895864900{border-top-width: 12px !important;border-top-color: rgba(255,255,255,0.01) !important;border-top-style: solid !important;}.vc_custom_1490162237805{padding-right: 0px !important;padding-left: 0px !important;}',
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
              'second_sidebar' => '',
              'sticky_sidebar' => '0',
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
              'posts_per_page' => '1',
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
              'custom_css' => '',
            ),
          ),
        ),
        'popular' => 
        array (
          'title' => 'Popular',
          'content' => 'popular.txt',
          'post_type' => 'page',
          'metabox' => 
          array (
            '_wp_page_template' => 'template-builder.php',
            '_wpb_shortcodes_custom_css' => '.vc_custom_1490244019430{margin-top: 0px !important;margin-bottom: 40px !important;border-top-width: 1px !important;border-right-width: 1px !important;border-bottom-width: 1px !important;border-left-width: 1px !important;padding-top: 25px !important;padding-right: 25px !important;padding-bottom: 25px !important;padding-left: 25px !important;border-left-color: #111111 !important;border-left-style: solid !important;border-right-color: #111111 !important;border-right-style: solid !important;border-top-color: #111111 !important;border-top-style: solid !important;border-bottom-color: #111111 !important;border-bottom-style: solid !important;}.vc_custom_1490243964979{margin-top: 30px !important;}',
            'jnews_page_loop' => 
            array (
              'first_title' => 'Latest Post',
              'second_title' => '',
              'header_type' => 'heading_6',
              'header_background' => '',
              'header_text_color' => '',
              'layout' => 'right-sidebar',
              'sidebar' => 'default-sidebar',
              'module' => '3',
              'excerpt_length' => '20',
              'content_date' => 'default',
              'date_custom' => 'Y/m/d',
              'content_pagination' => 'nav_1',
              'pagination_align' => 'center',
              'include_post' => '',
              'exclude_post' => '',
              'include_category' => '',
              'exclude_category' => '',
              'include_author' => '',
              'include_tag' => '',
              'exclude_tag' => '',
              'sort_by' => 'latest',
            ),
            '_elementor_data' => 'home1.txt',
            '_elementor_edit_mode' => 'builder',
            '_elementor_page_settings' => 
            array (
              'custom_css' => '',
            ),
          ),
        ),
        'sample-page' => 
        array (
          'title' => 'Sample Page',
          'content' => 'home1.txt',
          'post_type' => 'page',
          'metabox' => 
          array (
            '_wp_page_template' => 'default',
            '_elementor_data' => 'home1.txt',
            '_elementor_edit_mode' => 'builder',
            '_elementor_page_settings' => 
            array (
              'custom_css' => '',
            ),
          ),
        ),
        'test' => 
        array (
          'title' => 'test',
          'content' => 'home1.txt',
          'post_type' => 'page',
          'metabox' => 
          array (
            '_wp_page_template' => 'default',
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
            '_elementor_data' => 'home1.txt',
            '_elementor_edit_mode' => 'builder',
            '_elementor_page_settings' => 
            array (
              'custom_css' => '',
            ),
          ),
        ),
    ),

	// menu location
	'menu_location'   => array(
		'main-navigation'   => array(
			'title'    => 'Main Navigation',
			'location' => 'navigation',
		),
		'footer-navigation' => array(
			'title'    => 'Footer Navigation',
			'location' => 'footer_navigation',
		),
	),

	// menu it self
	'menu'            => array(

		// main & mobile menu
		'home'               => array(
			'location'       => 'main-navigation',
			'menu-item-data' => array(
				'menu-item-title'     => 'Home',
				'menu-item-type'      => 'post_type',
				'menu-item-object'    => 'page',
				'menu-item-object-id' => '{{post:home-1:id}}',
				'menu-item-status'    => 'publish',
			),
		),
		'home-1'             => array(
			'location'       => 'main-navigation',
			'menu-item-data' => array(
				'menu-item-title'     => 'Home - Layout 1',
				'menu-item-parent-id' => '{{menu:home:id}}',
				'menu-item-type'      => 'post_type',
				'menu-item-object'    => 'page',
				'menu-item-object-id' => '{{post:home-1:id}}',
				'menu-item-status'    => 'publish',
			),
		),
		'home-2'             => array(
			'location'       => 'main-navigation',
			'menu-item-data' => array(
				'menu-item-title'     => 'Home - Layout 2',
				'menu-item-parent-id' => '{{menu:home:id}}',
				'menu-item-type'      => 'post_type',
				'menu-item-object'    => 'page',
				'menu-item-object-id' => '{{post:home-2:id}}',
				'menu-item-status'    => 'publish',
			),
		),
		'home-3'             => array(
			'location'       => 'main-navigation',
			'menu-item-data' => array(
				'menu-item-title'     => 'Home - Layout 3',
				'menu-item-parent-id' => '{{menu:home:id}}',
				'menu-item-type'      => 'post_type',
				'menu-item-object'    => 'page',
				'menu-item-object-id' => '{{post:home-3:id}}',
				'menu-item-status'    => 'publish',
			),
		),
		'home-4'             => array(
			'location'       => 'main-navigation',
			'menu-item-data' => array(
				'menu-item-title'     => 'Home - Layout 4',
				'menu-item-parent-id' => '{{menu:home:id}}',
				'menu-item-type'      => 'post_type',
				'menu-item-object'    => 'page',
				'menu-item-object-id' => '{{post:home-4:id}}',
				'menu-item-status'    => 'publish',
			),
		),
		'home-5'             => array(
			'location'       => 'main-navigation',
			'menu-item-data' => array(
				'menu-item-title'     => 'Home - Layout 5',
				'menu-item-parent-id' => '{{menu:home:id}}',
				'menu-item-type'      => 'post_type',
				'menu-item-object'    => 'page',
				'menu-item-object-id' => '{{post:home-5:id}}',
				'menu-item-status'    => 'publish',
			),
		),

		'popular'            => array(
			'location'       => 'main-navigation',
			'menu-item-data' => array(
				'menu-item-title'     => 'Popular',
				'menu-item-type'      => 'post_type',
				'menu-item-object'    => 'page',
				'menu-item-object-id' => '{{post:popular:id}}',
				'menu-item-status'    => 'publish',
			),
		),

		'meme'               => array(
			'location'       => 'main-navigation',
			'menu-item-data' => array(
				'menu-item-title'     => 'Meme',
				'menu-item-type'      => 'taxonomy',
				'menu-item-object'    => 'category',
				'menu-item-object-id' => '{{category:meme:id}}',
				'menu-item-status'    => 'publish',
			),
		),

		'gif'                => array(
			'location'       => 'main-navigation',
			'menu-item-data' => array(
				'menu-item-title'     => 'GIF',
				'menu-item-type'      => 'taxonomy',
				'menu-item-object'    => 'category',
				'menu-item-object-id' => '{{category:gif:id}}',
				'menu-item-status'    => 'publish',
			),
		),

		'lol'                => array(
			'location'       => 'main-navigation',
			'menu-item-data' => array(
				'menu-item-title'     => 'LOL',
				'menu-item-type'      => 'taxonomy',
				'menu-item-object'    => 'category',
				'menu-item-object-id' => '{{category:lol:id}}',
				'menu-item-status'    => 'publish',
			),
		),

		'animals'            => array(
			'location'       => 'main-navigation',
			'menu-item-data' => array(
				'menu-item-title'     => 'Animals',
				'menu-item-type'      => 'taxonomy',
				'menu-item-object'    => 'category',
				'menu-item-object-id' => '{{category:animals:id}}',
				'menu-item-status'    => 'publish',
			),
		),

		'video'              => array(
			'location'       => 'main-navigation',
			'menu-item-data' => array(
				'menu-item-title'     => 'Video',
				'menu-item-type'      => 'taxonomy',
				'menu-item-object'    => 'category',
				'menu-item-object-id' => '{{category:video:id}}',
				'menu-item-status'    => 'publish',
			),
		),

		'contact'            => array(
			'location'       => 'main-navigation',
			'menu-item-data' => array(
				'menu-item-title'     => 'Contact',
				'menu-item-type'      => 'post_type',
				'menu-item-object'    => 'page',
				'menu-item-object-id' => '{{post:contact:id}}',
				'menu-item-status'    => 'publish',
			),
		),

		// footer & topbar menu
		'about'              => array(
			'location'       => 'footer-navigation',
			'menu-item-data' => array(
				'menu-item-title'  => 'About',
				'menu-item-type'   => 'custom',
				'menu-item-url'    => '#',
				'menu-item-status' => 'publish',
			),
		),
		'advertise'          => array(
			'location'       => 'footer-navigation',
			'menu-item-data' => array(
				'menu-item-title'  => 'Advertise',
				'menu-item-type'   => 'custom',
				'menu-item-url'    => '#',
				'menu-item-status' => 'publish',
			),
		),
		'privacy-and-policy' => array(
			'location'       => 'footer-navigation',
			'menu-item-data' => array(
				'menu-item-title'  => 'Privacy & Policy',
				'menu-item-type'   => 'custom',
				'menu-item-url'    => '#',
				'menu-item-status' => 'publish',
			),
		),
		'contact-1'          => array(
			'location'       => 'footer-navigation',
			'menu-item-data' => array(
				'menu-item-title'     => 'Contact',
				'menu-item-type'      => 'post_type',
				'menu-item-object'    => 'page',
				'menu-item-object-id' => '{{post:contact:id}}',
				'menu-item-status'    => 'publish',
			),
		),
	),

	'widget_position' => array (
        'Home',
        'Author',
        'Archives',
        'Sidebar - Story',
    ),

	'widget'          => array(
		'widget.json',
	),

	'customizer'      => array(
		'style.json',
	),

	'plugin'          => array(
		'contact-form-7',
		'jnews-gallery',
		'jnews-instagram',
		'jnews-jsonld',
		'jnews-like',
		'jnews-meta-header',
		'jnews-social-login',
		'jnews-social-share',
		'jnews-view-counter',
		'mailchimp-for-wp',
    'jnews-webstories',
    'web-stories',
	),
);
