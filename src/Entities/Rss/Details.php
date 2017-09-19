<?php

namespace MASNathan\DOMFeed\Entities\Rss;

use MASNathan\DOMFeed\Entities\DetailsInterface;
use MASNathan\DOMFeed\Entities\Entity;

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
class Details extends Entity implements DetailsInterface
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

    public function getGenerator()
    {
        return $this->generator;
    }

    public function getPublishedDate()
    {
        return $this->pubDate;
    }
}
