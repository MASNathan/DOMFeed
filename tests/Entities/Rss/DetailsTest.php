<?php

namespace MASNathan\DOMFeed\Test\Entities\Rss;

use MASNathan\DOMFeed\Entities\DetailsInterface;
use MASNathan\DOMFeed\Test\Entities\EntityTestCase;
use DateTime;
use DOMDocument;

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

    public function testSetTitleMethod()
    {
        $title = 'Some random title';
        $feed = clone $this->feed;

        $this->assertInstanceOf(
            DetailsInterface::class,
            $feed->details->setTitle($title)
        );

        $document = new DOMDocument();
        $document->loadXML($feed->toString());

        $this->assertEquals($title, $feed->details->getTitle());
        $this->assertEquals(
            $title,
            $this->getElementByXPath('//channel/title', $document)->item(0)->textContent
        );
    }

    public function testGetDescriptionMethod()
    {
        $this->assertEquals(
            $this->getElementByXPath('//channel/description')->item(0)->textContent,
            $this->feed->details->getDescription()
        );
    }

    public function testSetDescriptionMethod()
    {
        $description = 'Some random description';
        $feed = clone $this->feed;

        $this->assertInstanceOf(
            DetailsInterface::class,
            $feed->details->setDescription($description)
        );

        $document = new DOMDocument();
        $document->loadXML($feed->toString());

        $this->assertEquals($description, $feed->details->getDescription());
        $this->assertEquals(
            $description,
            $this->getElementByXPath('//channel/description', $document)->item(0)->textContent
        );
    }

    public function testGetUrlMethod()
    {
        $this->assertEquals(
            $this->getElementByXPath('//channel/link')->item(0)->textContent,
            $this->feed->details->getUrl()
        );
    }

    public function testSetUrlMethod()
    {
        $url = 'https://github.com/MASNathan/DOMFeed/';
        $feed = clone $this->feed;

        $this->assertInstanceOf(
            DetailsInterface::class,
            $feed->details->setUrl($url)
        );

        $document = new DOMDocument();
        $document->loadXML($feed->toString());

        $this->assertEquals($url, $feed->details->getUrl());
        $this->assertEquals(
            $url,
            $this->getElementByXPath('//channel/link', $document)->item(0)->textContent
        );
    }

    public function testGetGeneratorMethod()
    {
        $this->assertEquals(
            $this->getElementByXPath('//channel/generator')->item(0)->textContent,
            $this->feed->details->getGenerator()
        );
    }

    public function testSetGeneratorMethod()
    {
        $generator = 'Some random generator';
        $feed = clone $this->feed;

        $this->assertInstanceOf(
            DetailsInterface::class,
            $feed->details->setGenerator($generator)
        );

        $document = new DOMDocument();
        $document->loadXML($feed->toString());

        $this->assertEquals($generator, $feed->details->getGenerator());
        $this->assertEquals(
            $generator,
            $this->getElementByXPath('//channel/generator', $document)->item(0)->textContent
        );
    }

    public function testGetPublishedDateMethod()
    {
        $this->assertEquals(
            (new DateTime($this->getElementByXPath('//channel/pubDate')->item(0)->textContent))->format(DateTime::RSS),
            $this->feed->details->getPublishedDate()->format(DateTime::RSS)
        );
    }

    public function testSetPublishedDateMethod()
    {
        $datetime = new DateTime();
        $feed = clone $this->feed;

        $this->assertInstanceOf(
            DetailsInterface::class,
            $feed->details->setPublishedDate($datetime)
        );

        $document = new DOMDocument();
        $document->loadXML($feed->toString());

        $this->assertEquals($datetime, $feed->details->getPublishedDate());
        $this->assertEquals(
            $datetime->format(DATE_RSS),
            $this->getElementByXPath('//channel/pubDate', $document)->item(0)->textContent
        );
    }
}
