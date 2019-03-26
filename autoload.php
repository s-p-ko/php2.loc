<?php
/**
 * For autoloading classes
 * @param string $class
 */
function __autoload(string $class) : void
{
    $file = str_replace('\\', '/', $class) . '.php';
    require __DIR__ . '/' . $file;
}
