<?php

namespace MASNathan\DOMFeed\Entities\Rss;

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
        return $this->link;
    }

    public function getPublishedDate()
    {
        return $this->pubDate;
    }
}
