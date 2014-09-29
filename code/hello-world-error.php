<!doctype html>
<html lang=en>
<meta charset="utf-8">
<title>Hello world in PHP</title>
<body>

<pre>

<?php 

/**
 * Set the error reporting.
 *
 */
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors 

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

?>

</pre>
