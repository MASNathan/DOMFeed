<?php

namespace MASNathan\DOMFeed\Test\Entities\Rss;

use MASNathan\DOMFeed\Test\Entities\EntityTestCase;
use DateTime;

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

    public function testGetDescriptionMethod()
    {
        $this->assertEquals(
            $this->getElementByXPath('//channel/image/description')->item(0)->textContent,
            $this->feed->image->getDescription()
        );
    }

    public function testGetUrlMethod()
    {
        $this->assertEquals(
            $this->getElementByXPath('//channel/image/url')->item(0)->textContent,
            $this->feed->image->getUrl()
        );
    }

    public function testGetWidthMethod()
    {
        $this->assertEquals(
            $this->getElementByXPath('//channel/image/width')->item(0)->textContent,
            $this->feed->image->getWidth()
        );
    }

    public function testGetHeightMethod()
    {
        $this->assertEquals(
            $this->getElementByXPath('//channel/image/height')->item(0)->textContent,
            $this->feed->image->getHeight()
        );
    }

    public function testGetTitleProperty()
    {
        $this->assertEquals(
            $this->getElementByXPath('//channel/image/title')->item(0)->textContent,
            $this->feed->image->title
        );
    }

    public function testGetDescriptionProperty()
    {
        $this->assertEquals(
            $this->getElementByXPath('//channel/image/description')->item(0)->textContent,
            $this->feed->image->description
        );
    }

    public function testGetLinkProperty()
    {
        $this->assertEquals(
            $this->getElementByXPath('//channel/image/link')->item(0)->textContent,
            $this->feed->image->link
        );
    }

    public function testGetUrlProperty()
    {
        $this->assertEquals(
            $this->getElementByXPath('//channel/image/url')->item(0)->textContent,
            $this->feed->image->url
        );
    }

    public function testGetWidthProperty()
    {
        $this->assertEquals(
            $this->getElementByXPath('//channel/image/width')->item(0)->textContent,
            $this->feed->image->width
        );
    }

    public function testGetHeightProperty()
    {
        $this->assertEquals(
            $this->getElementByXPath('//channel/image/height')->item(0)->textContent,
            $this->feed->image->height
        );
    }
}
