<?php
namespace App\Controllers;

use Sober\Controller\Controller;

class TemplatePortfolio extends Controller
{
    public function getPostThumbnailAlt() : string
    {
        return get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true);
    }
}
