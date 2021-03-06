<?php

function dv($arg)
{
    $backtrace = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, 1);

    $lines = file($backtrace[0]['file']);

    $line = $lines[$backtrace[0]['line'] - 1];

    preg_match('/\s'.__FUNCTION__.'\(([^)]+)\)/', $line, $match);

    dump([$match[1] => $arg]);
}

function dvd($arg)
{
    dv($arg);

    exit;
}
