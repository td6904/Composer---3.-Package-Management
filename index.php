<?php

require_once 'vendor/autoload.php';                                                

//When I tried to autoload it wasn't working as
//auto load files weren't created yet, don't forget command below!!!!!!
//composer dump-autoload -o

use CowSay\Cow;

$bessie = new Cow('Hello, Farm!');

// store the output in a variable
$output = $bessie->say();
echo $output;

// or just echo the object for direct output
echo $bessie;