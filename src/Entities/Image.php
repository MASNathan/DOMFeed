<?php

namespace MASNathan\DOMFeed\Entities;

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
class Image extends DOMEntity
{
    protected $properties = [
        'url',
        'title',
        'link',
        'description',
        'width',
        'height',
    ];
}
