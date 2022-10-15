<?php
/*
        We'll use mainly two type of string syntax
        1.Single-quoted
        2.Double-quoted

        After that we'll learn other syntax
        Note:- Always quote use in pair like-(""),('')
    */
?>

<?php
#Single-quoted-string

$string1 = 'Welcome to PHP_DSA';
echo $string1 . "\n";

$string2 = 'We\'ll learn php';
echo $string2 . "\n";

$string3 = '"Php is easy to learn"';
echo $string3 . "\n";

$string4 = 'PHP_DSA';
echo 'Welcome to ' . $string4 . "\n";

?>


<?php

#Double-quoted-string

$string1 = "Welcome to PHP_DSA";
echo $string1 . "\n";

$string2 = "We'll learn php";
echo $string2 . "\n";

$string3 = "'Php is easy to learn'";
echo $string3 . "\n";

$string4 = "PHP_DSA";
echo "Welcome to $string4 \n";
?>

<?php

#Other syntax in string

#Heredoc-(Start with [<<<Name] and close with [Name;])

$str = <<<phpdsa
string
php
DSA
Hactoberfest
phpdsa;     //whitespace is not valid before closing 

echo $str . "\n";


#Nowdoc-(Start with [<<<'Name'] and close with [Name;])

$str = <<<'phpdsa'
STRING
NOWDOC
php
DSA
Hactoberfest
phpdsa;     //whitespace is not valid before closing 

echo $str . "\n";

?>