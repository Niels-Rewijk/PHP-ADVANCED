<?php
$klassen = array("8A", "8B", "8C", "8D", "8E", "9A", "9B", "9C", "9D", "9E");
?>
<html>
    
        <label for="klassen">kies een klas:</label>
        <select name="klassen">
        <option value=""></option>
<?php
    foreach($klassen as $value):
    echo '<option value="'.$klassen.'">'.$value.'</option>';
    endforeach;
?>
</select>
        <input type="submit">
</html>

<?php
foreach ($klassen as $x) {
    echo "<li>ik zit in klas $x <br /></li>";
}
?>


