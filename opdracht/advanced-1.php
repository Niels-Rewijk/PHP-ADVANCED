<!DOCTYPE html>

<html>
    <head>
        <title>advancend-1</title>
    </head>
    <body>
        
    <label for="kleuren">kies een tekst kleur:</label>
            <select name="kleuren" id="kleuren">
            <option value="red">red</option>
            <option value="blue">blue</option>
            <option value="green">green</option>
            <option value="black">black</option>
            <option value="brown">brown</option>
</select>
        <?php
            $kleuren = array("red", "blue", "green", "black", "brown");
            
            foreach($kleuren as $value): 
                echo "je tekst kleur is $value<br>";
            endforeach;
        ?>
        <input type="submit" name="submit" value="verstuur">
        </body>
</html>