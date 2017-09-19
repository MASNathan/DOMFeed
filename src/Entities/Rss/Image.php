<?php

namespace MASNathan\DOMFeed\Entities\Rss;

use MASNathan\DOMFeed\Entities\Entity;
use MASNathan\DOMFeed\Entities\ImageInterface;

/**
 * Class Image
 *
 * @package MASNathan\DOMFeed\Entities
 *
 * @property string $url
 * @property string $title
 * @property string $link
 * @property string $description
 * @property string $width
 * @property string $height
 */
class Image extends Entity implements ImageInterface
{
    protected $properties = [
        'url',
        'title',
        'link',
        'description',
        'width',
        'height',
    ];

    public function getTitle()
    {
        return $this->title;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function getHeight()
    {
        return $this->height;
    }
}
