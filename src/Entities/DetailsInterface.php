<?php

namespace MASNathan\DOMFeed\Entities;

use DateTime;

interface DetailsInterface
{
    /**
     * @return string
     */
    public function getTitle();

    /**
     * @param string $title
     * @return DetailsInterface
     */
    public function setTitle($title);

    /**
     * @return string
     */
    public function getDescription();

    /**
     * @param string $description
     * @return DetailsInterface
     */
    public function setDescription($description);

    /**
     * @return string
     */
    public function getUrl();

    /**
     * @param string $url
     * @return DetailsInterface
     */
    public function setUrl($url);

    /**
     * @return string
     */
    public function getGenerator();

    /**
     * @param string $generator
     * @return DetailsInterface
     */
    public function setGenerator($generator);

    /**
     * @return DateTime
     */
    public function getPublishedDate();

    /**
     * @param DateTime $publishedDate
     * @return DetailsInterface
     */
    public function setPublishedDate(DateTime $publishedDate);
}
