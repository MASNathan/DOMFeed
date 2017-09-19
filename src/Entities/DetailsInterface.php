<?php

namespace MASNathan\DOMFeed\Entities;

interface DetailsInterface
{
    /**
     * @return string
     */
    public function getTitle();

    /**
     * @return string
     */
    public function getDescription();

    /**
     * @return string
     */
    public function getUrl();

    /**
     * @return string
     */
    public function getGenerator();

    /**
     * @return \DateTime
     */
    public function getPublishedDate();
}
