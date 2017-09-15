<?php

namespace MASNathan\DOMFeed;

use DOMDocument;
use MASNathan\DOMFeed\Entities\Details;
use MASNathan\DOMFeed\Entities\Image;
use MASNathan\DOMFeed\Entities\Item;

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
        $this->image = new Image($this->channel);

        foreach ($this->channel->getElementsByTagName('item') as $itemElement) {
            $this->items[] = new Item($itemElement);
        }
    }

    public function toString()
    {
        $document = clone $this->document;
        $document->preserveWhiteSpace = false;
        $document->formatOutput = true;

        return $document->saveXML();
    }
}
