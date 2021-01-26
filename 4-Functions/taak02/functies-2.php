<!DOCTYPE html>

<html>
    <head>
        <title></title>
    </head>
    <body>
        <?php
            function rekenUit($getal1, $getal2, $getal3) {
                $getal=array($getal1, $getal2, $getal3);
                echo "als ik de getallen $getal1, $getal2 en $getal3 bij elkaar optel krijg ik ";
                echo array_sum($getal);
                echo "<br>";
                return $getal;
            }
            rekenUit(2,5,8);
            rekenUit(10,32,6);
            rekenUit(4,321,45);
        ?>
    </body>
</html>