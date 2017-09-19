<?php

namespace MASNathan\DOMFeed\Entities;

interface ItemInterface
{
    public function getTitle();

    public function getDescription();

    public function getUrl();

    public function getPublishedDate();
}
