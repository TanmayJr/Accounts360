<html>
<head>
    <title>Database insert</title>
</head>
<body>
<form method="post" action="phptest.php">
    <fieldset>
        <legend>Register</legend>
        <table>
            <tr>
                <td>Name :</td>
                <td><input type = text name=nm></td>
            </tr>
            <tr>
                <td>Roll :</td>
                <td><input type = number name=rl></td>
            </tr>
            <tr>
                <td>City :</td>
                <td><input type = text name=ct></td>
            </tr>
            <tr><td><button type="submit">Add</button></tr>
        </table>
    </fieldset>
</form>

</body>
</html>

<?php
mysql_connect("localhost","root") or die(mysql_error("Disconnect"));
echo "Connection established";
$db_name = "college52";
mysql_select_db($db_name) or die (mysql_error());
echo "Database found";
$nm = $_POST["nm"];
$rl = $_POST["rl"];
$ct = $_POST["ct"];
$query = "insert into login (name,rollno,city) values ('$nm','$rl','$ct')";
if($query == true){
    print "Sucess";
}
else{
    print "try again";
}
mysql_query($query) or die(mysql_error("in er"));
$data = mysql_query("select * from login") or die (mysql_error("Query error"));
print "<table border = 1>";
print "<tr bgcolor = b                                                                                                                                                                                                                                             >";
print "<th bgcolor = green>Name";
print "<th bgcolor = green>Roll";
print "<th bgcolor = green>City";
while($info = mysql_fetch_array($data)){
    print "<tr bgcolor = red>";
    print "<td>".$info['name'];
    print "<td>".$info['rollno'];
    print "<td>".$info['city'];
}
print "</table>";
mysql_close();
?>
