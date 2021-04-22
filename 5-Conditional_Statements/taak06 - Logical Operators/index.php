<!DOCTYPE html>
<html>
<body>


<?php


$var1 = 3;

if($var1 < 10 && $var1 > 5) {
    echo "het getal zit tussen de 10 en de 5!";
} else {
    echo "het getal is groter dan 10 of kleiner dan 5!";
}


$var2 = 3;

if($var2 < 10 !== $var2 > 5) {
    echo "het getal zit tussen de 10 en de 5!";
} else {
    echo "het getal is groter dan 10 of kleiner dan 5!";
}




$var3 = 3;

if($var3 < 10 || $var3 > 5) {
    echo "het getal zit tussen de 10 en de 5!";
} else {
    echo "het getal is groter dan 10 of kleiner dan 5!";
}





$var4 = 3;

if($var4 < 10 xor $var4 > 5) {
    echo "het getal zit tussen de 10 en de 5!";
} else {
    echo "het getal is groter dan 10 of kleiner dan 5!";
}






?>




</body>

</html>