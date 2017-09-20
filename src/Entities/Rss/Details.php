<?php

namespace MASNathan\DOMFeed\Entities\Rss;

use DateTime;
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
     * @return string
     */
    public function getGenerator()
    {
        return $this->generator;
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
     * @return DetailsInterface
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @param string $description
     * @return DetailsInterface
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @param string $url
     * @return DetailsInterface
     */
    public function setUrl($url)
    {
        $this->link = $url;

        return $this;
    }

    /**
     * @param string $generator
     * @return DetailsInterface
     */
    public function setGenerator($generator)
    {
        $this->generator = $generator;

        return $this;
    }

    /**
     * @param DateTime $publishedDate
     * @return DetailsInterface
     */
    public function setPublishedDate(DateTime $publishedDate)
    {
        $this->pubDate = $publishedDate;

        return $this;
    }
}
