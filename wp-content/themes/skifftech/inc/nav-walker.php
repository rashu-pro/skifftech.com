<?php
/**
 * Custom nav walker for the desktop header menu — renders a top-level item
 * that has children as the V6 design's dropdown: a rich "mega" panel with
 * icons for Services, or a plain link list for anything else with children.
 *
 * @package skifftech
 */

class Skifftech_Mega_Menu_Walker extends Walker_Nav_Menu {

	/**
	 * Icon + description for known Services children, keyed by the menu
	 * item's visible title. A parent whose children aren't all listed here
	 * (including any other top-level dropdown) falls back to a plain list.
	 */
	private $mega_items = array(
		'End-to-End Product Build'   => array(
			'icon' => '<svg viewBox="0 0 24 24"><path d="M3 7l9-4 9 4-9 4-9-4zM3 7v10l9 4 9-4V7"/></svg>',
			'desc' => 'You bring the vision; we own delivery from discovery to launch.',
		),
		'Staff Augmentation'         => array(
			'icon' => '<svg viewBox="0 0 24 24"><circle cx="9" cy="7" r="4"/><path d="M16 21v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2M19 8v6M22 11h-6"/></svg>',
			'desc' => 'Add vetted senior specialists to your existing team, fast.',
		),
		'Dedicated Development Team' => array(
			'icon' => '<svg viewBox="0 0 24 24"><circle cx="8" cy="8" r="3"/><circle cx="17" cy="9" r="2.4"/><path d="M2 20v-1.5A4.5 4.5 0 016.5 14h3A4.5 4.5 0 0114 18.5V20M15.5 14h1A4 4 0 0122 18v2"/></svg>',
			'desc' => 'A full team devs, PM, QA - we assemble and manage for you.',
		),
	);

	/**
	 * Stash each element's direct children onto the element itself so
	 * start_el() can render them inline instead of via start_lvl/end_lvl.
	 */
	public function display_element( $element, &$children_elements, $max_depth, $depth, $args, &$output ) {
		$element->skifftech_children = ! empty( $children_elements[ $element->ID ] ) ? $children_elements[ $element->ID ] : array();
		parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
	}

	public function start_lvl( &$output, $depth = 0, $args = null ) {
		// No-op: children are rendered inline by the parent's start_el().
	}

	public function end_lvl( &$output, $depth = 0, $args = null ) {
		// No-op: see start_lvl().
	}

	public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
		if ( $depth > 0 ) {
			return; // Already rendered inline by the top-level parent.
		}

		$children = ! empty( $item->skifftech_children ) ? $item->skifftech_children : array();

		if ( empty( $children ) ) {
			$output .= sprintf(
				'<li class="%1$s"><a href="%2$s">%3$s</a></li>',
				esc_attr( implode( ' ', array_filter( $item->classes ) ) ),
				esc_url( $item->url ),
				esc_html( $item->title )
			);
			return;
		}

		$has_mega_data = true;
		foreach ( $children as $child ) {
			if ( ! isset( $this->mega_items[ $child->title ] ) ) {
				$has_mega_data = false;
				break;
			}
		}

		$chev = '<svg class="chev" viewBox="0 0 12 12" fill="none" aria-hidden="true"><path d="M2.5 4.5L6 8l3.5-3.5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>';

		$output .= sprintf(
			'<li class="nav-drop"><span tabindex="0" role="button" aria-haspopup="true">%1$s %2$s</span>',
			esc_html( $item->title ),
			$chev
		);

		if ( $has_mega_data ) {
			$output .= sprintf(
				'<div class="mega" role="menu" style="width:min(500px,calc(100vw - 36px))"><div class="mega-lbl">%s</div><div class="mega-items" style="grid-template-columns:1fr;gap:4px">',
				esc_html( $item->title )
			);
			foreach ( $children as $child ) {
				$data    = $this->mega_items[ $child->title ];
				$output .= sprintf(
					'<a class="mega-item" href="%1$s"><span class="mi-ic">%2$s</span><span><span class="mi-t">%3$s <span class="a">&#9679;</span></span><span class="mi-d">%4$s</span></span></a>',
					esc_url( $child->url ),
					$data['icon'],
					esc_html( $child->title ),
					esc_html( $data['desc'] )
				);
			}
			$output .= '</div></div></li>';
		} else {
			$output .= '<div class="drop" role="menu">';
			foreach ( $children as $child ) {
				$output .= sprintf( '<a href="%1$s">%2$s</a>', esc_url( $child->url ), esc_html( $child->title ) );
			}
			$output .= '</div></li>';
		}
	}

	public function end_el( &$output, $item, $depth = 0, $args = null ) {
		// No-op: start_el() already emits fully-closed markup.
	}
}
