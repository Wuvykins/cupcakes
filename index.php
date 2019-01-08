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
$isValid = true;
$username = "";
$faultyInfo = "";
$nameError = "";
$flavError = "";
$flavor = array();
if(!empty($_POST)) {
    include('verify.php');
    $username = $_POST['name'];
    if(!empty($_POST['flavor'])) { $flavor = $_POST['flavor']; }
}
if($isValid && !empty($_POST)) {
    require('confirmation.php');
}

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
    <form method="POST" action="">
    <fieldset>
        <legend>Name</legend>
        <?php
        if(!empty($nameError)) { echo "<p style='color:red'>$nameError</p>"; }
        ?>
        <input type="text" name="name" id="name" placeholder="Name" value="<?php echo $username; ?>">&nbsp;
    </fieldset>

    <fieldset>
        <?php
        if(!empty($flavorError)) { echo "<p style='color:red'>$flavError</p>"; }
        if(!empty($faultyInfo)) { echo "<p style='color:red'>$faultyInfo</p>"; }
        ?>
        <legend>Type of cupcakes</legend>
            <?php
            foreach($cupcakes as $key => $cupcake) {
                echo "<input type='checkbox' name='flavor[]' value='$cupcake'";
                if(in_array($cupcake, $flavor)) {
                    echo "checked='checked'";
                }
                echo "<label>&nbsp;$cupcake</label><br>";
            }
            ?>
    </fieldset>
    <br>
    <input type="submit" name="btnSubmit" value="Submit your order" id="submit">
    </form>
</body>
</html>
