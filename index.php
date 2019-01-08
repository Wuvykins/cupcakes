<?php
/**
 * Created by PhpStorm.
 * User: Nicolas Alexander
 * Date: 1/7/2019
 */
ini_set('display_errors', 1);
error_reporting(E_ALL);

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
        <legend>Flayvers</legend>
        <label>
            <input type="checkbox" value="The Grasshopper" name="options[]">&nbsp;The Grasshopper</label>
        <br>
        <label>
            <input type="checkbox" value="Carrot Walnut" name="options[]">&nbsp;Carrot Walnut</label>
        <br>
        <label>
            <input type="checkbox" value="Salted Caramel Cupcake" name="options[]">&nbsp;Salted Caramel Cupcake</label>
        <br>
        <label>
            <input type="checkbox" value="Red Velvet" name="options[]">&nbsp;Red Velvet</label>
        <br>
        <label>
            <input type="checkbox" value="Lemon Drop" name="options[]">&nbsp;Lemon Drop</label>
        <br>
        <label>
            <input type="checkbox" value="Tiramisu" name="options[]">&nbsp;Tiramisu</label>
    </fieldset>
    <br>
    <input type="submit" name="btnSubmit" value="Submit your order" id="submit">
</body>
</html>
