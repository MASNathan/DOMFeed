<?php

namespace MASNathan\DOMFeed\Test\Entities\Rss;

use MASNathan\DOMFeed\Entities\ImageInterface;
use MASNathan\DOMFeed\Test\Entities\EntityTestCase;
use DOMDocument;

class ImageTest extends EntityTestCase implements ImageInterfaceTest
{

    public function getFeedLocation()
    {
        return '/feeds/rss-blog-specifications.xml';
    }

    public function testGetTitleMethod()
    {
        $this->assertEquals(
            $this->getElementByXPath('//channel/image/title')->item(0)->textContent,
            $this->feed->image->getTitle()
        );
    }

    public function testSetTitleMethod()
    {
        $title = 'Some random title';
        $feed = clone $this->feed;

        $this->assertInstanceOf(
            ImageInterface::class,
            $feed->image->setTitle($title)
        );

        $document = new DOMDocument();
        $document->loadXML($feed->toString());

        $this->assertEquals($title, $feed->image->getTitle());
        $this->assertEquals(
            $title,
            $this->getElementByXPath('//channel/image/title', $document)->item(0)->textContent
        );
    }

    public function testGetDescriptionMethod()
    {
        $this->assertEquals(
            $this->getElementByXPath('//channel/image/description')->item(0)->textContent,
            $this->feed->image->getDescription()
        );
    }

    public function testSetDescriptionMethod()
    {
        $description = 'Some random description';
        $feed = clone $this->feed;

        $this->assertInstanceOf(
            ImageInterface::class,
            $feed->image->setDescription($description)
        );

        $document = new DOMDocument();
        $document->loadXML($feed->toString());

        $this->assertEquals($description, $feed->image->getDescription());
        $this->assertEquals(
            $description,
            $this->getElementByXPath('//channel/image/description', $document)->item(0)->textContent
        );
    }

    public function testGetUrlMethod()
    {
        $this->assertEquals(
            $this->getElementByXPath('//channel/image/url')->item(0)->textContent,
            $this->feed->image->getUrl()
        );
    }

    public function testSetUrlMethod()
    {
        $url = 'https://github.com/MASNathan/DOMFeed/';
        $feed = clone $this->feed;

        $this->assertInstanceOf(
            ImageInterface::class,
            $feed->image->setUrl($url)
        );

        $document = new DOMDocument();
        $document->loadXML($feed->toString());

        $this->assertEquals($url, $feed->image->getUrl());
        $this->assertEquals(
            $url,
            $this->getElementByXPath('//channel/image/url', $document)->item(0)->textContent
        );
    }

    public function testGetWidthMethod()
    {
        $this->assertEquals(
            $this->getElementByXPath('//channel/image/width')->item(0)->textContent,
            $this->feed->image->getWidth()
        );
    }

    public function testSetWidthMethod()
    {
        $width = 800;
        $feed = clone $this->feed;

        $this->assertInstanceOf(
            ImageInterface::class,
            $feed->image->setWidth($width)
        );

        $document = new DOMDocument();
        $document->loadXML($feed->toString());

        $this->assertEquals($width, $feed->image->getWidth());
        $this->assertEquals(
            $width,
            $this->getElementByXPath('//channel/image/width', $document)->item(0)->textContent
        );
    }

    public function testGetHeightMethod()
    {
        $this->assertEquals(
            $this->getElementByXPath('//channel/image/height')->item(0)->textContent,
            $this->feed->image->getHeight()
        );
    }

    public function testSetHeightMethod()
    {
        $height = 600;
        $feed = clone $this->feed;

        $this->assertInstanceOf(
            ImageInterface::class,
            $feed->image->setHeight($height)
        );

        $document = new DOMDocument();
        $document->loadXML($feed->toString());

        $this->assertEquals($height, $feed->image->getHeight());
        $this->assertEquals(
            $height,
            $this->getElementByXPath('//channel/image/height', $document)->item(0)->textContent
        );
    }
}
