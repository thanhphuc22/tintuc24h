<?php

$options = array();

$options[] = array(
    'id'            => 'jnews_query_option_header',
    'type'          => 'jnews-header',
    'label'         => esc_html__( 'Global Query Option Settings','jnews' ),
);

$options[] = array(
    'id'            => 'jnews_query_option_enable',
    'transport'     => 'postMessage',
    'default'       => true,
    'type'          => 'jnews-toggle',
    'label'         => esc_html__( 'Enable Cache Query', 'jnews' ),
    'description'   => esc_html__( 'Use cached query if available. Enabling this option might cause a newly published post to not be immediately visible.', 'jnews' )
);

$options = apply_filters( 'jnews_global_query_option', $options );

return $options;
