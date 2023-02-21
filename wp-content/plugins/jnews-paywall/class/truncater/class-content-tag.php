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
 * Class Content_Tag
 *
 * @package JNews\Paywall\Truncater
 */
class Content_Tag {
	/**
	 * @var
	 */
	private static $content;

	/**
	 * @var array
	 */
	private $pointer;
	private $root;
	private $paragraph;
	private $end_tag = array();

	/**
	 * Content_Tag constructor.
	 *
	 * @param $content
	 */
	public function __construct( $content ) {
		self::$content = $content;
		$this->populate_tag();
	}

	/**
	 * Create Tree Node
	 */
	protected function populate_tag() {
		$this->pointer = new Tree_Node();
		$this->root    = $this->pointer;
		self::$content = preg_replace( '/<!--.*?-->/ms', '', self::$content );
		preg_match_all( '/<[^>]*>/im', self::$content, $matches, PREG_OFFSET_CAPTURE );

		foreach ( $matches[0] as $key => $match ) {
			$tag = $this->get_tag( $match[0] );
			if ( ! empty( $tag ) ) {
				if ( ! $this->is_closed_tag( $match[0] ) ) {
					$this->register_tag( $tag, $match[1] );
				} else {
					$this->reset_tag( $match[1] );
				}
			}
		}
	}

	/**
	 * Get html tags from $content
	 *
	 * @param $html
	 *
	 * @return mixed
	 */
	protected function get_tag( $html ) {
		$html = preg_replace( '/<!--.*?-->/ms', '', $html );
		preg_match( '/<\/?([^\s^>]+)/', $html, $tag );

		return $tag[1];
	}

	/**
	 * Check closing tag
	 *
	 * @param $tag
	 *
	 * @return bool
	 */
	protected function is_closed_tag( $tag ) {
		return substr( $tag, 0, 2 ) === '</';
	}

	/**
	 * Register tag and start position
	 *
	 * @param $tag
	 * @param $start
	 */
	protected function register_tag( $tag, $start ) {
		$this->pointer = $this->pointer === null ? $this->root : $this->pointer;
		$this->pointer = $this->pointer->create_child( $tag, $start );
	}

	/**
	 * Register end position
	 *
	 * @param $end
	 */
	protected function reset_tag( $end ) {
		$this->pointer = $this->pointer === null ? $this->root : $this->pointer;
		$this->pointer = $this->pointer->end_child( $end );
	}

	/**
	 * Get value of $content
	 *
	 * @return mixed
	 */
	public static function get_content() {
		return self::$content;
	}

	/**
	 * Find position of the last paragraph's closing tag
	 *
	 * @param $tag
	 * @param $number
	 *
	 * @return int
	 */
	public function find_end( $tag, $number, $paragraph = 0, $position = 0, $pointer = null ) {
		$this->paragraph = $paragraph;
		if ( ! isset( $pointer ) ) {
			$pointer = $this->pointer;
		}

		if ( is_array( $pointer->child ) ) {
			foreach ( $pointer->child as $child ) {

				array_push( $this->end_tag, $child->tag );

				if ( $child->tag === $tag ) {
					array_pop( $this->end_tag );

					$this->paragraph ++;

					if ( $this->paragraph == $number ) {
						return $child->end;
					} elseif ( $this->paragraph > $number ) {
						return $position;
					}
				} else {
					$position = $this->find_end( $tag, $number, $this->paragraph, $position, $child );

					if ( 0 < $position ) {
						return $position;
					}

					array_pop( $this->end_tag );
				}
			}
		}

		return $position;
	}

	/**
	 * Check total paragraph in an article
	 *
	 * @param $tag
	 *
	 * @return int
	 */
	public function total( $tag, $pointer = null ) {
		$total = 0;

		if ( ! isset( $pointer ) ) {
			$pointer = $this->pointer;
		}

		if ( is_array( $pointer->child ) ) {
			foreach ( $pointer->child as $child ) {
				if ( $child->tag === $tag ) {
					$total ++;
				} else {
					$total += $this->total( $tag, $child );
				}
			}
		}

		return $total;
	}

	/**
	 * Get end tag
	 *
	 * @return array
	 */
	public function get_end_tag() {
		return $this->end_tag;
	}
}
