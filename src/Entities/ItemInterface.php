<?php

namespace MASNathan\DOMFeed\Entities;

use DateTime;

interface ItemInterface
{
    /**
     * @return string
     */
    public function getTitle();

    /**
     * @param string $title
     * @return ItemInterface
     */
    public function setTitle($title);

    /**
     * @return string
     */
    public function getDescription();

    /**
     * @param string $description
     * @return ItemInterface
     */
    public function setDescription($description);

    /**
     * @return string
     */
    public function getUrl();

    /**
     * @param string $url
     * @return ItemInterface
     */
    public function setUrl($url);

    /**
     * @return DateTime
     */
    public function getPublishedDate();

    /**
     * @param DateTime $publishedDate
     * @return ItemInterface
     */
    public function setPublishedDate(DateTime $publishedDate);
}
