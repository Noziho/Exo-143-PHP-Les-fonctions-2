<?php

function returnTrue() :bool{
    return true;
}

echo returnTrue();

function myString(string $text) :string{
    return $text;
}
echo "<br><br>";
echo myString("oui") . "<br>";

function concatString(string $firstString, string $secondString) :string{
    return $firstString . $secondString;
}

echo "<br>";
echo concatString("oui ", "non");
echo "<br><br>";

function moreOrLessBigger(int $num1, int $num2) :string{
    if ($num1 > $num2) {
        return "Le premier nombre est plus grand que le deuxième";
    } elseif ($num1 < $num2) {
        return "Le premier nombre est plus petit que le deuxième";
    } else {
        return "Les deux nombres sont identiques";
    }
}

echo moreOrLessBigger(14, 13);

function numberPlusString(int $num, string $text) :string{
    return $num . $text;
}

echo "<br><br>";
echo numberPlusString(10, " Ah ça oui !");

function nameFirstNameAge(string $name, string $firstName, int $age) :string{
    return "Bonjour $name, $firstName tu as $age ans";
}

echo "<br><br>";
echo nameFirstNameAge("Noah", "Decroix", 19);

function menOrWomen(int $age, $genre = "Homme" || "Femme"){

    if ($genre === "Homme" && $age >= 18) {
        echo "Vous êtes un homme et vous êtes majeur";
    } elseif ($genre === "Homme" && $age < 18) {
        echo "Vous êtes un homme et vous êtes mineur";
    } elseif ($genre === "Femme" && $age >= 18) {
        echo "Vous êtes une femme et vous êtes majeur";
    } elseif ($genre === "Femme" && $age < 18) {
        echo "Vous êtes une femme et vous êtes mineur";
    } else {
        echo "Veuillez rentrez 'Homme' ou 'Femme'";
    }

}

echo "<br><br>";
menOrWomen(18, "Femme");

function addition (int $num1 = 5, int $num2 = 5, int $num3 = 5):int {
    return $num1 + $num2 + $num3;
}

echo "<br><br>";
echo addition(10, 15, 20);