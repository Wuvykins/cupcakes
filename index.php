<?php
/**
 * Created by PhpStorm.
 * User: Nicolas Alexander
 * Date: 1/7/2019
 */
ini_set('display_errors', 1);
error_reporting(E_ALL);

$cupcakes = [
    "grasshopper" => "The Grasshopper",
    "carrot" => "Carrot Walnut",
    "caramel" => "Salted Caramel Cupcake",
    "velvet" => "Red Velvet",
    "lemon" => "Lemon Drop",
    "tiramisu" => "Tiramisu"
];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cupcakes</title>
</head>
<body>
    <h1>Cupcakes</h1>
    <fieldset>
        <legend>Contact Info</legend>
        <input type="text" name="fname" id="fname" placeholder="Name">&nbsp;
    </fieldset>

    <fieldset>
        <legend>Type of cupcakes</legend>
            <?php
            foreach($cupcakes as $key => $cupcake) {
                echo "<input type='checkbox' name='flavor[]' value='$cupcake'";
                echo "<label>&nbsp;$cupcake</label><br>";
            }
            ?>
    </fieldset>
    <br>
    <input type="submit" name="btnSubmit" value="Submit your order" id="submit">
</body>
</html>
