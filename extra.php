<?php
$array1 = array("a" => "apple", "b" => "banana", "c" => "cherry","e" => "pomo");
$array2 = array("b" => "banana", "c" => "cherry", "d" => "date","e" => "guava");

$result = array_diff($array1, $array2);

print_r($result);

$array1 = array("a" => "apple", "b" => "banana", "c" => "cherry", "e" => "pomo");
$array2 = array("b" => "banana", "c" => "cherry", "d" => "date", "e" => "guava");
$result = array_diff($array1, $array2);
echo "<br>Array Diff Result: ";
echo implode(", ", $result);  // Output: apple,pomo
echo "<br>";

$array = array("a", "b", "c", "d");
   	$reversedArray = array_reverse($array);
   	print_r($reversedArray);
    echo "<br>Reversed Array: ";
    echo implode(", ", $reversedArray);  // Output: d, c, b, a
echo "<br>";
    $arrays = array("banana", "cherry");
   array_unshift($arrays, "apple", "orange");
   print_r($arrays);
   echo "<br>Array After Unshift: ";
   echo implode(", ", $arrays);  // Output: apple, orange, banana, cherry
?>