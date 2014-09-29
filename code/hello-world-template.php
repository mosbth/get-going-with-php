<?php 
include "config.php";

$pageTitle = "Hello world in PHP";

$name = 'Mumintrollet';
$live = "Mumindalen";
$age = 42;

$content = "Hello World!\n";

$str = "
My name is $name.
I live in $live.
I am $age years old.
";

$content .= $str;


// Render webpage
include "default_tpl.php";
