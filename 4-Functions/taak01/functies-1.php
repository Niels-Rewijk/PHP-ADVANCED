<!DOCTYPE html>

<html>
    <head>
        
        <title></title>
        
    </head>
    <body>
        <?php
        function schrijfKleur($kleur) {
            echo "<font color='$kleur'>Deze tekst is in de kleur $kleur</font>";
        }

        schrijfKleur("red");
        echo "<br>";
        schrijfKleur("blue");
        echo "<br>";
        schrijfKleur("yellow");
        echo "<br>";
        schrijfKleur("purple");
        ?>
    </body>
</html>