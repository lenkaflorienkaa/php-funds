<?php
// BASIC PRINTING SYNTAX

// standart output
// echo, print, print_r, var_dump

echo "hello world"; 
echo 123; 
print "hello again";  
print_r ("hello dude"); // for arrays or variabels 
var_dump ('1','2','3'); 

$array_example = array('satu', 'dua', 'tiga'); 
print_r($array_example); 
var_dump($array_example); 

/* Choose print_r for a quick look at the structure, 
and var_dump for in-depth technical information when debugging. */


// BASIC DATA TYPE AND VARIABLES 
$nama = "Lenka"

// OPERATOR
// + - * / %

?>

// insert php on html
// insert html on php

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Php</title>
</head>
<body>
    <h1>Hello I'm <?php echo $nama; ?></h1>
</body>
</html>