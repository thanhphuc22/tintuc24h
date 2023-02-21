<?php

/**
 * JNews Paywall Class
 *
 * @author Jegtheme
 * @since 1.0.0
 * @package jnews-paywall
 */

namespace JNews\Paywall\Truncater;

/**
 * Class Tree_Node
 *
 * @package JNews\Paywall\Truncater
 */
class Tree_Node {
	public static $self_closing = array(
		'area',
		'base',
		'br',
		'col',
		'command',
		'embed',
		'hr',
		'img',
		'input',
		'keygen',
		'link',
		'menuitem',
		'meta',
		'param',
		'source',
		'track',
		'wbr',
	);
	/**
	 * @var null
	 */
	public $tag;
	/**
	 * @var null
	 */
	public $start;
	public $end;
	/**
	 * @var array
	 */
	public $child = array();
	public $parent;

	/**
	 * Tree_Node constructor.
	 *
	 * @param null $tag
	 * @param null $start
	 * @param null $parent
	 */
	public function __construct( $tag = null, $start = null, $parent = null ) {
		$this->tag    = $tag;
		$this->start  = $start;
		$this->parent = $parent;
	}

	/**
	 * Set position for start tag, and set the value of current tag
	 *
	 * @param $tag
	 * @param $start
	 *
	 * @return $this|mixed
	 */
	public function create_child( $tag, $start ) {
		$total                 = sizeof( $this->child );
		$this->child[ $total ] = new Tree_Node( $tag, $start, $this );

		if ( in_array( $tag, self::$self_closing ) ) {
			$this->end = $this->calculate_end_tag( $start, $this->child[ $total ] );

			return $this;
		} else {
			return $this->child[ $total ];
		}
	}

	/**
	 * Check if it's end tag or not
	 *
	 * @param $begin
	 * @param null  $child
	 *
	 * @return bool|int
	 */
	public function calculate_end_tag( $begin, $child = null ) {
		if ( $child === null ) {
			$end = strpos( Content_Tag::get_content(), '>', $begin );
		} else {
			$end = strpos( Content_Tag::get_content(), '>', $begin );
		}

		return ++ $end;
	}

	/**
	 * Set position for end tag
	 *
	 * @param $end
	 *
	 * @return null
	 */
	public function end_child( $end ) {
		$this->end = $this->calculate_end_tag( $end );

		return $this->parent;
	}
}
