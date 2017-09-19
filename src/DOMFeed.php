<?php

namespace MASNathan\DOMFeed;

use DOMDocument;
use MASNathan\DOMFeed\Entities\Rss\Details;
use MASNathan\DOMFeed\Entities\Rss\Image;
use MASNathan\DOMFeed\Entities\Rss\Item;

/**
 * Class DOMFeed
 *
 * @package    MASNathan\DOMFeed
 * @inheritdoc DOMDocument
 */
class DOMFeed
{
    /**
     * @var DOMDocument
     */
    protected $document;

    /**
     * @var \DOMElement
     */
    protected $channel;

    /**
     * @var Details
     */
    public $details;

    /**
     * @var Image
     */
    public $image;

    /**
     * @var array
     */
    public $items = [];

    public function __construct($feedLocation)
    {
        $this->document = new DOMDocument();
        $this->document->load($feedLocation);

        $this->channel = $this->document->getElementsByTagName('channel')->item(0);

        $this->details = new Details($this->channel);
        $this->image = new Image($this->channel->getElementsByTagName('image')->item(0));

        foreach ($this->channel->getElementsByTagName('item') as $itemElement) {
            $this->items[] = new Item($itemElement);
        }
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->document->documentElement->nodeName;
    }

    /**
     * @return float|null
     */
    public function getVersion()
    {
        if ($this->document->documentElement->hasAttribute('version')) {
            $version = $this->document->documentElement->getAttribute('version');

            return floatval($version);
        }

        return null;
    }

    public function toString()
    {
        $document = clone $this->document;
        $document->preserveWhiteSpace = false;
        $document->formatOutput = true;

        return $document->saveXML();
    }

    public function __call($name, $arguments)
    {
        return call_user_func_array([$this->document, $name], $arguments);
    }

    public function __get($name)
    {
        return $this->document->$name;
    }

    public function __set($name, $value)
    {
        $this->document->$name = $value;
    }
}
