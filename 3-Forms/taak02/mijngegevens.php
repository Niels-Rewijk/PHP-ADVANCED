<!DOCTYPE html>
<html>
    <head>
        
        <title>Gegevens</title>
        <style>
            body{
            background-color: $_POST["kleur"];}
        </style>
        
    </head>
    <body>
        <?php
        echo "Voornaam is " . $_POST["Voornaam"];
        echo "<br>";
        echo "Achternaam is " . $_POST["Achternaam"];
        echo "<br>";
        echo "Klas is " . $_POST["Klas"];
        echo "<br>";
        echo "leeftijd is " . $_POST["Leeftijd"];
        echo "<br>";
        echo "Adres is " . $_POST["Adres"];
        echo "<br>";
        echo "Plaatsnaam is " . $_POST["Plaatsnaam"];
        echo "<br>";
        echo "Favoriete muziekband is " . $_POST["Favoband"];
        echo "<br>";
        echo "Geslacht is " . $_POST["geslacht"];
        echo "<br>";
        echo "<body style='background-color:$_POST[kleur]'>";
        ?>
    </body>
</html>