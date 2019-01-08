<?php
/**
 * Created by PhpStorm.
 * User: Nicolas Alexander
 * Date: 1/7/2019
 * Time: 5:54 PM
 */

//check if name is filled in
if(empty($_POST['name'])) {
    $nameError = "Please enter a name";
    $isValid = false;
}

//check if a flavor is checked
if(empty($_POST['flavor'])) {
    $flavError = "Please select a flavor of cupcake";
    $isValid = false;
}

//check if user entered faulty data
if(!empty($_POST['flavor'])) {
    foreach($_POST['flavor'] as $flavor) {
        if(!in_array($flavor, $cupcakes)) {
            $faultyInfo = "What happened?";
            $isValid = false;
        }
    }
}