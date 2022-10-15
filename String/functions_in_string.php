<?php

/*
    Built in functions
    Here we'll learn some important string functions
*/


//strtolower()-convert into lowercase string
$upper_str = "CHANGE UPPERCASE STRING INTO LOWERCASE STRING";
echo strtolower($upper_str) . "\n";

// strtoupper()-convert into uppercase string
$lower_str = "change lowercase string into uppercase string";
echo strtoupper($lower_str) . "\n";

//substr()-substring of s string
$sub_string = "This will find the substring of a string";
echo $sub_string . "\n";
echo substr($sub_string, 3) . "\n";
echo substr($sub_string, 3, 6) . "\n";
echo substr($sub_string, -3) . "\n";
echo substr($sub_string, -15, 10) . "\n";

// str_word_count()-count total words
$count_word = "This will count the number of words in a string";
echo "Total words in string : " . str_word_count($count_word) . "\n";

//strlen()-Length of string
$str_len = "Find the length of string";
echo "Length of string: " . strlen($str_len) . "\n";

//strrev()- reverse a string
$rev_str = "Reverse a string";
echo strrev($rev_str) . "\n";

//strpos()- strarting positoon of a string in another string
$str_pos = "Find the postion of a string in another string";
echo strpos($str_pos, "string") . "\n"; //if not present the return false

// str_replace()- replace a string with other
$replace = "This is the original string and we will replace a string with another string";
echo str_replace("string", "word(string)", $replace) . "\n";

//trim()- remove white space
$str_trim = "This is trim function";
echo trim($str_trim, "Thon") . "\n";

//ucwords()- Change into uppercase of every words
$sentence = "this will change first character of every words into uppercase";
echo ucwords($sentence) . "\n";

//join()- joins the elements
$arr = array("Php", "DSA", "Github", "Hactoberfest");
$str = join(" ", $arr);
echo $str . "\n";

// str_repeat()-Repeat a string
echo str_repeat(" DSA_PHP ", 5) . " \n";

//str_split()- convert a string into array
$str = "Welcome to DSA_PHP";
print_r(str_split($str));
echo "\n";

// substr_count()-count the number of occurrence os string
$mainstr = "This is the main string. In this we will count the occurrence of string.";
echo substr_count($mainstr, "string", 0, strlen($mainstr)) . "\n";

// substr_compare()-compare two strings
$str1 = "Hello coder";
$str2 = "Welcome coder";
echo substr_compare($str1, $str2, 0) . "\n";  //Negative value- str2>str1
echo substr_compare($str1, "coder", -5) . "\n";  //0-Equal

?>
