<?php
namespace Vendor\Page;

abstract class Page
{
    protected static $counter;

    abstract protected function content();

    final public static function count()
    {
        self::$counter++;
    }    
}
