<?php

namespace MASNathan\DOMFeed\Entities;

use DOMElement;
use DateTime;

abstract class Entity
{
    protected $parentElement;

    protected $properties = [];

    protected $elements = [];

    protected $dates = [];

    public function __construct(DOMElement $element)
    {
        $this->parentElement = $element;

        foreach ($this->properties as $propertyName) {
            $this->applyPropertyReference($propertyName);
        }
    }

    protected function applyPropertyReference($propertyName)
    {
        $propertyElement = $this->parentElement->getElementsByTagName($propertyName)
            ->item(0);

        if ($propertyElement) {
            $this->elements[$propertyName] = &$propertyElement;

            return true;
        }

        return false;
    }

    public function __get($name)
    {
        $value = $this->element($name)->textContent;

        if (in_array($name, $this->dates) && $value) {
            return DateTime::createFromFormat(DateTime::RSS, $value);
        }

        return $value;
    }

    public function __set($name, $value)
    {
        if (in_array($name, $this->dates) && $value) {
            if (is_a($value, DateTime::class)) {
                $value = $value->format(DateTime::RSS);
            } else { //should be a string
                $value = date(DateTime::RSS, strtotime($value));
            }
        }

        $this->element($name)->textContent = $value;
    }

    /**
     * @param string $name
     * @return DOMElement
     */
    public function element($name)
    {
        if (!isset($this->elements[$name]) || !$this->elements[$name]) {
            if (!$this->applyPropertyReference($name)) {
                $newElement = new DOMElement($name);
                $this->parentElement->appendChild($newElement);

                $this->elements[$name] = &$newElement;
            }
        }

        return $this->elements[$name];
    }
}
