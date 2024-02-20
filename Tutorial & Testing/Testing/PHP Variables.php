<html>
<body>

<!-- PHP Variables -->

<!--Variables are "containers" for storing information.
 Creating (Declaring) PHP Variables
 In PHP, a variable starts with the $ sign, followed by the name of the variable:

Example -->
<?php
$x = 5;
$Z = "John";
$y = 10;

$sum = $x + $y;

echo $x;
echo "<br>";
echo $Z;
echo "<br>";
echo $sum;
echo "<br>";
?>

<!-- In the example above, the variable $x will hold the value 5, and the variable $y will hold the value "John".

Note: When you assign a text value to a variable, put quotes around the value.

Note: Unlike other programming languages, PHP has no command for declaring a variable. It is created the moment you first assign a value to it. -->

<!--Think of variables as containers for storing data.-->


<!-- PHP Variables
A variable can have a short name (like $x and $y) or a more descriptive name ($age, $carname, $total_volume).

Rules for PHP variables:

A variable starts with the $ sign, followed by the name of the variable
A variable name must start with a letter or the underscore character
A variable name cannot start with a number
A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
Variable names are case-sensitive ($age and $AGE are two different variables)-->

<!-- Remember that PHP variable names are case-sensitive! -->

<!-- Output Variables
The PHP echo statement is often used to output data to the screen.

The following example will show how to output text and a variable:

Example -->
<?php
$txt = "W3Schools.com";
echo "I love $txt!";
echo "<br>";
?>

<!--PHP is a Loosely Typed Language
In the example above, notice that we did not have to tell PHP which data type the variable is.

PHP automatically associates a data type to the variable, depending on its value. Since the data types are not set in a strict sense, you can do things like adding a string to an integer without causing an error.

In PHP 7, type declarations were added. This gives an option to specify the data type expected when declaring a function, and by enabling the strict requirement, it will throw a "Fatal Error" on a type mismatch.-->


<!-- Variable Types
PHP has no command for declaring a variable, and the data type depends on the value of the variable.

Example-->

<?php 
$x = 5;      // $x is an integer
$y = "John"; // $y is a string
echo $x;
echo $y;
echo "<br/>";
?>


<!-- PHP supports the following data types:

String
Integer
Float (floating point numbers - also called double)
Boolean
Array
Object
NULL
Resource 
-->

<!-- Get the Type
To get the data type of a variable, use the var_dump() function.

Example
The var_dump() function returns the data type and the value: -->
<?php 
$x = 5;
var_dump($x);
echo "<br/>";
var_dump(5);
echo "<br/>";
var_dump("John");
echo "<br/>";
var_dump(3.14);
echo "<br/>";
var_dump(true);
echo "<br/>";
var_dump([2, 3, 56]);
echo "<br/>";
var_dump(NULL);
echo "<br/>";
?>


<!-- Assign Multiple Values
You can assign the same value to multiple variables in one line: -->
<?php
$x = $y = $z = "Fruit";

echo $x;
echo $y;
echo $z;
?>

</body>
</html>
