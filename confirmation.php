<?php
/**
 * Created by PhpStorm.
 * User: Nicolas Alexander
 * Date: 1/7/2019
 * Time: 5:59 PM
 */
$username = $_POST['name'];
$flavor = $_POST['flavor'];
$total = sizeof($flavor) * 3.50;
//print_r($flavor);
echo "<p>Thank you, $username, for your order!</p>";

echo "<p>Order Summary:</p>
    <ul>";
foreach($flavor as $flaver) {
    echo "<li><strong>$flaver</strong></li>";
}
echo "</ul><br>";

echo "Order Total: $" . number_format((double)$total, 2, '.', '');
exit;