<!DOCTYPE html>
<html>
<body>

<?php


function geefTienProcent() {

  $koopPrijs = 75;

  $korting = 10;

  return $koopPrijs - (($korting/100) * $koopPrijs);

}
geefTienProcent();










?>







</body>
</html>



