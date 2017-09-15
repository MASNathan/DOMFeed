<?php

namespace MASNathan\DOMFeed\Entities;

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
class Item extends DOMEntity
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
}
