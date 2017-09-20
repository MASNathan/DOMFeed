<?php

namespace MASNathan\DOMFeed\Test\Entities\Rss;

use MASNathan\DOMFeed\Entities\ItemInterface;
use MASNathan\DOMFeed\Test\Entities\EntityTestCase;
use DateTime;
use DOMDocument;

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

    public function testSetTitleMethod()
    {
        $title = 'Some random title';
        $feed = clone $this->feed;

        $this->assertInstanceOf(
            ItemInterface::class,
            $feed->items[0]->setTitle($title)
        );

        $document = new DOMDocument();
        $document->loadXML($feed->toString());

        $this->assertEquals($title, $feed->items[0]->getTitle());
        $this->assertEquals(
            $title,
            $this->getElementByXPath('//channel/item/title', $document)->item(0)->textContent
        );
    }

    public function testGetDescriptionMethod()
    {
        $this->assertEquals(
            $this->getElementByXPath('//channel/item/description')->item(0)->textContent,
            $this->feed->items[0]->getDescription()
        );
    }

    public function testSetDescriptionMethod()
    {
        $description = 'Some random description';
        $feed = clone $this->feed;

        $this->assertInstanceOf(
            ItemInterface::class,
            $feed->items[0]->setDescription($description)
        );

        $document = new DOMDocument();
        $document->loadXML($feed->toString());

        $this->assertEquals($description, $feed->items[0]->getDescription());
        $this->assertEquals(
            $description,
            $this->getElementByXPath('//channel/item/description', $document)->item(0)->textContent
        );
    }

    public function testGetUrlMethod()
    {
        $this->assertEquals(
            $this->getElementByXPath('//channel/item/link')->item(0)->textContent,
            $this->feed->items[0]->getUrl()
        );
    }

    public function testSetUrlMethod()
    {
        $url = 'https://github.com/MASNathan/DOMFeed/';
        $feed = clone $this->feed;

        $this->assertInstanceOf(
            ItemInterface::class,
            $feed->items[0]->setUrl($url)
        );

        $document = new DOMDocument();
        $document->loadXML($feed->toString());

        $this->assertEquals($url, $feed->items[0]->getUrl());
        $this->assertEquals(
            $url,
            $this->getElementByXPath('//channel/item/link', $document)->item(0)->textContent
        );
    }

    public function testGetPublishedDateMethod()
    {
        $this->assertEquals(
            (new DateTime($this->getElementByXPath('//channel/item/pubDate')->item(0)->textContent))->format(DateTime::RSS),
            $this->feed->items[0]->getPublishedDate()->format(DateTime::RSS)
        );
    }

    public function testSetPublishedDateMethod()
    {
        $datetime = new DateTime();
        $feed = clone $this->feed;

        $this->assertInstanceOf(
            ItemInterface::class,
            $feed->items[0]->setPublishedDate($datetime)
        );

        $document = new DOMDocument();
        $document->loadXML($feed->toString());

        $this->assertEquals($datetime, $feed->items[0]->getPublishedDate());
        $this->assertEquals(
            $datetime->format(DATE_RSS),
            $this->getElementByXPath('//channel/item/pubDate', $document)->item(0)->textContent
        );
    }
}
