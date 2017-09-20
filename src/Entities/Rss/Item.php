<?php

namespace MASNathan\DOMFeed\Entities\Rss;

use DateTime;
use MASNathan\DOMFeed\Entities\Entity;
use MASNathan\DOMFeed\Entities\ItemInterface;

/**
 * Class Item
 *
 * @package MASNathan\DOMFeed\Entities
 *
 * @property string $title
 * @property string $description
 * @property string $link
 * @property string $category
 * @property string $comments
 * @property string $pubDate
 */
class Item extends Entity implements ItemInterface
{
    protected $properties = [
        'title',
        'description',
        'link',
        'category',
        'comments',
        'pubDate',
    ];

    protected $dates = ['pubDate'];

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
        return $this->link;
    }

    /**
     * @return DateTime
     */
    public function getPublishedDate()
    {
        return $this->pubDate;
    }

    /**
     * @param string $title
     * @return ItemInterface
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @param string $description
     * @return ItemInterface
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @param string $url
     * @return ItemInterface
     */
    public function setUrl($url)
    {
        $this->link = $url;

        return $this;
    }

    /**
     * @param DateTime $publishedDate
     * @return ItemInterface
     */
    public function setPublishedDate(DateTime $publishedDate)
    {
        $this->pubDate = $publishedDate;

        return $this;
    }
}
