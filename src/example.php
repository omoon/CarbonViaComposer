<?php
use Carbon\Carbon;

require_once __DIR__ . '/../vendor/autoload.php';

say(Carbon::now());

function say($something)
{
    print $something . "\n";
}
