<?php

require __DIR__.'/vendor/autoload.php';

if (!class_exists('PHPUnit_Framework_TestCase')) {
    // for phpunit 6
    class_alias('PHPUnit\Framework\TestCase', 'PHPUnit_Framework_TestCase');
}
