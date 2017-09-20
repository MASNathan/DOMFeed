<?php

namespace MASNathan\DOMFeed\Entities;

interface ImageInterface
{
    /**
     * @return string
     */
    public function getTitle();

    /**
     * @param string $title
     * @return ImageInterface
     */
    public function setTitle($title);

    /**
     * @return string
     */
    public function getDescription();

    /**
     * @param string $description
     * @return ImageInterface
     */
    public function setDescription($description);

    /**
     * @return string
     */
    public function getUrl();

    /**
     * @param string $url
     * @return ImageInterface
     */
    public function setUrl($url);

    /**
     * @return integer
     */
    public function getWidth();

    /**
     * @param string $width
     * @return ImageInterface
     */
    public function setWidth($width);

    /**
     * @return integer
     */
    public function getHeight();

    /**
     * @param string $height
     * @return ImageInterface
     */
    public function setHeight($height);

}
