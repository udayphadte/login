<!--
<body style="background-color:powderblue;"> 
-->
<?php



$servername="localhost";
$username="root";
$password="";
$dbname="aaa";

//create connection
$conn=new mysqli($servername,$username,$password,$dbname);

//check connection
if ($conn->connect_error)
echo "connection fail";
else
	echo"connection sucessfull";

$sql="select * from login where username ='".$_POST['username']."' and password = '".$_POST['password']."'";
//echo $sql;

$result=$conn->query($sql);
if ($result->num_rows>0)
{
$data=$result->fetch_assoc();
echo "<h2>Welcome " .$data["username"]."!</h2>";
}
else
{echo "<h2>Invalid user</h2>";}

?>
<!--
</body>
-->