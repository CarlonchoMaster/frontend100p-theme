<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class Page extends Controller
{
    public function listChildPages(): string
    {
        $string = '';
        $current_pageId = get_the_ID();
        $parent_pageId = wp_get_post_parent_id($current_pageId) ?? 0;
        $number_child=0;

        $pages = get_pages([
            'sort_column' => 'menu_order',
            'child_of' => $current_pageId
        ]);

        if (is_page($current_pageId) && $parent_pageId) {
            $pages = get_pages([
                'sort_column' => 'menu_order',
                'child_of' => $parent_pageId
            ]);
        }

        $children = get_page_children($current_pageId, $pages);

        if ($children) {
            $string = '<nav class="pages-cluster">';
        }

        foreach ($children as $child) {
            if ($child->post_parent === $current_pageId) {
                $number_child++;

                if ($number_child % 3 === 1) $string .= '<div class="columns">';

                $string .= '<div class="column is-4"><section class="card">';

                if (has_post_thumbnail($child->ID)) {
                    $string .= '<div class="card-image">';
                    $string .= '<figure class="image is-square">';
                    $string .= '<a href="' . get_permalink($child->ID) . '" target="_blank">' . get_the_post_thumbnail($child->ID, 'thumbnail') . '</a>';
                    $string .= '</figure></div>';
                }

                $string .= '<div class="card-content"><header class="media mb-2"><h2 class="media-content is-family-secondary">';
                $string .= "<a href='" . get_permalink($child->ID) . "'>{$child->post_title}</a>";
                $string .= '</h2></header>';

                if (!empty(get_the_excerpt($child->ID))) {
                    $string .= '<p class="content excerpt">' . get_the_excerpt($child->ID) . '</p>';
                }

                $string .= '</div></section></div>';

                if ($number_child % 3 === 0) $string .= '</div>';
            }
        }

        if (!strlen($string)) {
            $string .= '</nav>';
        }

        return $string;
    }
}
