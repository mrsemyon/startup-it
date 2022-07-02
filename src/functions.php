<?php

function dd(mixed $var): array
{
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
    die;
}

function isActivePage(string $path): bool
{
    return $_SERVER['REQUEST_URI'] === $path;
}
