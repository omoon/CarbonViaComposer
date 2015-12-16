<?php
use Carbon\Carbon;

require_once __DIR__ . '/../vendor/autoload.php';

$date = new Carbon();
say($date);
say($date->addDay());

function say($something)
{
    print "\n/\n";
    print $something . "\n";
    print "\\\n";
}
