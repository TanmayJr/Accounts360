<?php
$con =  mysqli_connect("localhost","root") or die(mysqli_error("Disconnect"));
echo "Connection established";
$db_name = "mini";
mysqli_select_db($con ,$db_name) or die (mysqli_error());
echo "Database found";
$cname = $_POST["cname"];
$clocation = $_POST["clocation"];
$noemp = $_POST["noemp"];
$salemp = $_POST["salemp"];
$invname = $_POST["invname"];
$noinv = $_POST["noinv"];
$costinv = $_POST["costinv"];
$bankacc = $_POST["bankacc"];
$bname = $_POST["bname"];
$isfccode = $_POST["isfccode"];
print $noemp;
$query = "insert into empdetails (cname,clocation,noemp,salemp,invname,noinv,costinv,bankacc,bname,isfccode) values ('$cname','$clocation','$noemp','$salemp','$invname','$noinv','$costinv','$bankacc','$bname','$isfccode')";
if($query == true){
    print "Sucess";
}
else{
    print "try again";
}
mysqli_query($con, $query) or die(mysqli_error("in er"));
mysqli_close($con);
?>