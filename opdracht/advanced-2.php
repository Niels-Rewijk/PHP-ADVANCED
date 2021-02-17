<!DOCTYPE html>

<html>
    <head>
        <title></title>
        <style>
        table, td, th {
            border: <?php echo $_POST["dikte"]?>  solid black;
            text-align: left;
            border-spacing: 5px;
            margin-left: auto;
            margin-right: auto;
            border-collapse: collapse;
            width: 50%;
        }
        </style>
    </head>
    <body>
        <?php
            if ($_POST["kleuren"] == 'red') {
                echo '<font color="red">';
            }
            if ($_POST["kleuren"] == 'blue') {
                echo '<font color="blue">';
            }
            if ($_POST["kleuren"] == 'green') {
                echo '<font color="green">';
            }
            if ($_POST["kleuren"] == 'black') {
                echo '<font color="black">';
            }
            if ($_POST["kleuren"] == 'brown') {
                echo '<font color="brown">';
            }

            if ($_POST["kleur"] == 'red') {
                echo '<body style="background-color:red">';}

            if ($_POST["kleur"] == 'blue') {
                echo '<body style="background-color:blue">';}
            
            if ($_POST["kleur"] == 'green') {
                echo '<body style="background-color:green">';}

            if ($_POST["kleur"] == 'black') {
                echo '<body style="background-color:black">';}

            if ($_POST["kleur"] == 'brown') {
                echo '<body style="background-color:brown">';}  
            $data = array("Voornaam"=>"Niels", "Achternaam"=>"Rewijk", "Leeftijd"=>"17", "Woonplaats"=>"De Kwakel", "Klas"=>"0C");
            
        ?>
        <?php function maakrij($value,$key){ ?>
            <table style="width:50%">
                <tr>
                    <td> <?php echo "$key";?></td>
                    <td> <?php echo "$value";?></td>
                </tr>
            </table>
        <?php } ?> 
        <table style= "width:50%">
            <tr>
                <th>key</th>
                <th>value</th>
            </tr>
        <?php foreach($data as $key => $value):
                maakrij("$key", "$value");    
            endforeach;?>
        </table>
    </body>
</html>

