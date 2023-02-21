<?php
    $social_array   = jnews_get_author_social();

    $socials = "";

	if(is_single()) {
		$author_id = get_post_field( 'post_author', get_the_ID() );
	} else {
		$author_id = get_queried_object()->ID;
	}

    foreach ($social_array as $key => $value) {
        if( get_the_author_meta( $key, $author_id  )){
            $socials = $socials . "<a target='_blank' href='".get_the_author_meta( $key, $author_id  )."' class='".$key."'><i class='fa ".$value."'></i> </a>";
        }
    }

    echo jnews_sanitize_by_pass( $socials );
