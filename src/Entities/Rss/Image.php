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

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @return integer
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @return integer
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param string $title
     * @return ImageInterface
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @param string $description
     * @return ImageInterface
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @param string $url
     * @return ImageInterface
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * @param string $width
     * @return ImageInterface
     */
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * @param string $height
     * @return ImageInterface
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }
}
