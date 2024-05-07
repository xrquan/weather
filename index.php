<?php
namespace Xrquan\Weather;
require 'vendor/autoload.php';

use Xrquan\Weather\Day;
use Xrquan\Weather\History;

$tag1 = new Day('25-04-2024', 'schöner Tag');
$tag2 = new Day('26-04-2024', 'bewölkter Tag');


$history = new History();


$history->addTag($tag1);
$history->addTag($tag2);

echo $history->getDescriptionByDate('25-04-2024');












