<?php
mysql_connect("localhost","root") or die(mysql_error("Disconnect"));
echo "Connection established";
$db_name = "mini";
mysql_select_db($db_name) or die (mysql_error());
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
mysql_query($query) or die(mysql_error("in er"));
mysql_close();
?>