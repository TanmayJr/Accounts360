<?php
/**
 * Created by PhpStorm.
 * User: Roshan
 * Date: 19-10-2017
 * Time: 10:24
 */

$connect = mysqli_connect("localhost", "root", "", "mini");
$output = '';

if(isset($_POST["brand_id"])){
    if($_POST["brand_id"] != ''){
        $sql = "SELECT * FROM Inventory WHERE brand_id = ' ".$_POST["brand_id"]." ' ";

    }
    else{
        echo ("Guololma");
    }
    $result = mysqli_query($connect, $sql);

    while($row = mysqli_fetch_array($result)){
        $output = '<div class = "col-md-3"><div style="border:1px solid #cccccc;">'.$row["rate"].'</div></div>'; /*LOT of things here*/
    }

    echo $output;
    echo ("ADJFOFA");
}


?>

<html>

<head></head>
<body>
<p>dsfdfs</p>
</body>
</html>
