<!DOCTYPE html>
<html>
<body>

<?php

function geefTienProcent() {

    $koopPrijs = 75;
    $korting = 10;

    $koopPrijs = $koopPrijs - ($koopPrijs * ($korting/100));

    return $koopPrijs;

}





?>


</body>
</html>