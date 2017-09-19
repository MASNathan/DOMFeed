<?php

namespace MASNathan\DOMFeed\Test\Entities\Rss;

use MASNathan\DOMFeed\Test\Entities\EntityTestCase;
use DateTime;

class ItemTest extends EntityTestCase implements ItemInterfaceTest
{

    public function getFeedLocation()
    {
        return '/feeds/rss-blog-specifications.xml';
    }

    public function testGetTitleMethod()
    {
        $this->assertEquals(
            $this->getElementByXPath('//channel/item/title')->item(0)->textContent,
            $this->feed->items[0]->getTitle()
        );
    }

    public function testGetDescriptionMethod()
    {
        $this->assertEquals(
            $this->getElementByXPath('//channel/item/description')->item(0)->textContent,
            $this->feed->items[0]->getDescription()
        );
    }

    public function testGetUrlMethod()
    {
        $this->assertEquals(
            $this->getElementByXPath('//channel/item/link')->item(0)->textContent,
            $this->feed->items[0]->getUrl()
        );
    }

    public function testGetPublishedDateMethod()
    {
        $this->assertEquals(
            (new DateTime($this->getElementByXPath('//channel/item/pubDate')->item(0)->textContent))->format(DateTime::RSS),
            $this->feed->items[0]->getPublishedDate()->format(DateTime::RSS)
        );
    }

    public function testGetTitleProperty()
    {
        $this->assertEquals(
            $this->getElementByXPath('//channel/item/title')->item(0)->textContent,
            $this->feed->items[0]->title
        );
    }

    public function testGetDescriptionProperty()
    {
        $this->assertEquals(
            $this->getElementByXPath('//channel/item/description')->item(0)->textContent,
            $this->feed->items[0]->description
        );
    }

    public function testGetLinkProperty()
    {
        $this->assertEquals(
            $this->getElementByXPath('//channel/item/link')->item(0)->textContent,
            $this->feed->items[0]->link
        );
    }

    public function testGetPubDateProperty()
    {
        $this->assertEquals(
            (new DateTime($this->getElementByXPath('//channel/item/pubDate')->item(0)->textContent))->format(DateTime::RSS),
            $this->feed->items[0]->pubDate->format(DateTime::RSS)
        );
    }
}
