<?php

require_once 'vendor/autoload.php';

$feed = new \MASNathan\DOMFeed\DOMFeed('tests/feeds/feedforall-blog-feed.xml');

dump($feed->encoding);
