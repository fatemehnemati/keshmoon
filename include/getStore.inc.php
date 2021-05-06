<?php
//include_once '../class/control.class.php';
//if($_POST["submited"]=="submit")
//{
//    $cityName=$_POST["cityName"];
//    $StoreName=$_POST["StoreName"];
//    $Address=$_POST["Address"];
//    $objController=new Control();
//    $objController->createStore($cityName,$StoreName,$Address);
//}

include_once '../class/control.class.php';
if ($_POST["submited"] == "submit") {
    $cityName = $_POST["cityName"];
    $StoreName = $_POST["StoreName"];
    $Address = $_POST["Address"];
    if (empty($cityName) || empty($StoreName) || empty($Address)) {
        header("location:../add-store.php?error=empty");
    } else {
        $objController = new Control();
        $objController->createStore($cityName, $StoreName, $Address);
    }
}