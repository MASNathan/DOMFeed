<?php

namespace MASNathan\DOMFeed\Entities;

/**
 * Class Details
 *
 * @package MASNathan\DOMFeed\Entities
 *
 * @property string $title
 * @property string $description
 * @property string $link
 * @property string $category
 * @property string $copyright
 * @property string $docs
 * @property string $language
 * @property string $lastBuildDate
 * @property string $managingEditor
 * @property string $pubDate
 * @property string $webMaster
 * @property string $generator
 */
class Details extends DOMEntity
{
    protected $properties = [
        'title',
        'description',
        'link',
        'category',
        'copyright',
        'docs',
        'language',
        'lastBuildDate',
        'managingEditor',
        'pubDate',
        'webMaster',
        'generator',
    ];

    protected $dates = ['lastBuildDate', 'pubDate'];
}
