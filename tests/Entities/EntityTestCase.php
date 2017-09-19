<?php

namespace MASNathan\DOMFeed\Test\Entities;

use MASNathan\DOMFeed\DOMFeed;
use PHPUnit\Framework\TestCase;
use DOMDocument;
use DOMXPath;

abstract class EntityTestCase extends TestCase
{
    /**
     * @var DOMFeed
     */
    protected $feed;

    /**
     * @var DOMDocument
     */
    protected $document;

    /**
     * @return string
     */
    public abstract function getFeedLocation();

    protected function setUp()
    {
        $this->feed = new DOMFeed(ROOT_PATH . $this->getFeedLocation());
        $this->document = new DOMDocument();
        $this->document->load(ROOT_PATH . $this->getFeedLocation());
    }

    protected function getElementByXPath($path)
    {
        $xpath = new DOMXPath($this->document);

        return $xpath->query($path);
    }
}
