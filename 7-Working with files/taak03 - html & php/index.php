<!DOCTYPE html>
<html>
<head>
</head>
<body>


<?php  
    

    $leeftijd = 17;
?>
    

    <div id="leeftijdChecker">
        <?php
            if($leeftijd < 18 ){
                echo "<h6>Je bent te jong om deze pagina te bekijken</h6>";
            }
        ?>
    </div>

    <div id="isMeerderJarig">
       <?php
        if($leeftijd > 17) {
            echo "<h6>Je bent oud genoeg om het te bekijken :D</h6>";

        }
        ?>
    </div>

</body>
</html>