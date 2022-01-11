<?php

function returnTrue () {
    return true;
}

function myString (string$text) {
    return $text;
}

echo myString("oui") ."<br>";

function concatString ( string$firstString, string$secondString) {
    return $firstString.$secondString;
}
echo "<br>";
echo concatString("oui ", "non");
echo "<br><br>";

function moreOrLessBigger (int $num1, int $num2) {
    if ($num1 > $num2) {
        return "Le premier nombre est plus grand que le deuxième";
    }
    elseif ($num1 < $num2) {
        return "Le premier nombre est plus petit que le deuxième";
    }
    else {
        return "Les deux nombres sont identiques";
    }
}

echo moreOrLessBigger(14, 13);