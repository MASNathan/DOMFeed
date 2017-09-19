<?php

namespace MASNathan\DOMFeed\Test\Entities\Rss;

use MASNathan\DOMFeed\Test\Entities\EntityTestCase;
use DateTime;

class DetailsTest extends EntityTestCase implements DetailsInterfaceTest
{

    public function getFeedLocation()
    {
        return '/feeds/rss-blog-specifications.xml';
    }

    public function testGetTitleMethod()
    {
        $this->assertEquals(
            $this->getElementByXPath('//channel/title')->item(0)->textContent,
            $this->feed->details->getTitle()
        );
    }

    public function testGetDescriptionMethod()
    {
        $this->assertEquals(
            $this->getElementByXPath('//channel/description')->item(0)->textContent,
            $this->feed->details->getDescription()
        );
    }

    public function testGetUrlMethod()
    {
        $this->assertEquals(
            $this->getElementByXPath('//channel/link')->item(0)->textContent,
            $this->feed->details->getUrl()
        );
    }

    public function testGetGeneratorMethod()
    {
        $this->assertEquals(
            $this->getElementByXPath('//channel/generator')->item(0)->textContent,
            $this->feed->details->getGenerator()
        );
    }

    public function testGetPublishedDateMethod()
    {
        $this->assertEquals(
            (new DateTime($this->getElementByXPath('//channel/pubDate')->item(0)->textContent))->format(DateTime::RSS),
            $this->feed->details->getPublishedDate()->format(DateTime::RSS)
        );
    }

    public function testGetTitleProperty()
    {
        $this->assertEquals(
            $this->getElementByXPath('//channel/title')->item(0)->textContent,
            $this->feed->details->title
        );
    }

    public function testGetDescriptionProperty()
    {
        $this->assertEquals(
            $this->getElementByXPath('//channel/description')->item(0)->textContent,
            $this->feed->details->description
        );
    }

    public function testGetLinkProperty()
    {
        $this->assertEquals(
            $this->getElementByXPath('//channel/link')->item(0)->textContent,
            $this->feed->details->link
        );
    }

    public function testGetPubDateProperty()
    {
        $this->assertEquals(
            (new DateTime($this->getElementByXPath('//channel/pubDate')->item(0)->textContent))->format(DateTime::RSS),
            $this->feed->details->pubDate->format(DateTime::RSS)
        );
    }
}
