<!DOCTYPE html>
<html>
    <head>
        
        <title>Gegevens</title>
        <style>
            
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
        if ($_POST["kleur"] == 'yellow') {
            echo '<body style="background-color:yellow">';}

        if ($_POST["kleur"] == 'red') {
            echo '<body style="background-color:red">';}
        
        if ($_POST["kleur"] == 'blue') {
            echo '<body style="background-color:blue">';}
        
        if ($_POST["kleur"] == 'green') {
            echo '<body style="background-color:green">';}
        
        if ($_POST["kleur"] == 'purple') {
            echo '<body style="background-color:purple">';}
        
        ?>
    </body>
</html>