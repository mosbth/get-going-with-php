<?php 
include "config.php";

$pageTitle = "Hello world in PHP";
include "header.php";

$name = 'Mumintrollet';
$live = "Mumindalen";
$age = 42;

echo "Hello World!\n";

$str = "
My name is $name.
I live in $live.
I am $age years old.
";

echo $str;

include "footer.php";
