<?php include 'includes/connect.php'; 
session_start();

function redirect($url)
{header('Location: '.$url);}

function register()
{
$name = $_POST['name'];
$address = $_POST['address'] . "\n" . $_POST['city'] . " - " . $_POST['pincode'] . "\n" . $_POST['state'] . "\n" . $_POST['country'];
$mobile = $_POST['telephone'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

$sql="INSERT INTO users (name, username , password, email, mobile, address) VALUES ('".$name."', '".$username."', '".$password."', '".$email."', '".$mobile."', '".$address."')";
$result=mysql_query($sql);
$_SESSION["username"]=$username;
$_SESSION["name"]=$name;
redirect("index.php");



}


function login()

{
if($_POST['username'] == null || $_POST['password'] == null)

{redirect("index.php?err=0");}
else
{ 
$username = $_POST['username'];
$password = $_POST['password'];
$sql="SELECT * FROM users WHERE username='".$username."' AND password='".$password."'";
$result=mysql_query($sql);
$row =mysql_fetch_array($result);
$count=mysql_num_rows($result);
if($count==1){
$_SESSION["username"]=$username;
$_SESSION["name"]=$row["name"];
if($username=='admin')
{	$_SESSION['adminmode']='1';
	redirect("orders.php");}
else
{redirect("index.php");}
}
else {redirect("index.php?err=1");}
}
}

function logout()
{
session_destroy();
redirect("index.php");
}

function AddToCart()
{
$ProductID=$_POST['ProductID'];
$orderID= uniqid();
$sql="INSERT INTO shoppingcart VALUES ('".$_SESSION["username"]."', '".$orderID."', '".$ProductID."')";
mysql_query($sql);
redirect("index.php");
}

function RemoveFromCart(){
$sql="DELETE FROM shoppingcart WHERE orderid='".$_POST['OrderID']."'";
mysql_query($sql);
redirect("checkout.php");
}

function Checkout()
{ 
  $sql="INSERT INTO orders (orderedby, orderid, productid) SELECT orderedby, orderid, productid FROM shoppingcart WHERE orderedby='".$_SESSION['username']."'";
  $sql1="DELETE FROM shoppingcart WHERE orderedby='".$_SESSION['username']."'";
  mysql_query($sql);
  mysql_query($sql1);
  redirect("orders.php?var=1");
  
}

function Count_Cart_Items()
{
$sql="SELECT * FROM shoppingcart WHERE orderedby='".$_SESSION['username']."'";
$result=mysql_query($sql);
return mysql_num_rows($result);


}




function curPageURL() {
 $pageURL = 'http';
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return strtok($pageURL, '?');
}

function status()
{
	$sql="UPDATE orders SET status = 2 WHERE orderid='".$_POST['OrderID']."'";
	$result=mysql_query($sql);
	redirect("orders.php");
}

if(isset($_POST['var']))
{
if($_POST['var']=='Reg') 
{register();}

if($_POST['var']=='Login') 
{login();}

if($_POST['var']=='AddToCart') 
{AddToCart();}

if($_POST['var']=='Checkout') 
{Checkout();}

if($_POST['var']=='RemoveFromCart') 
{RemoveFromCart();}

if($_POST['var']=='Logout') 
{logout();}

if($_POST['var']=='status') 
{status();}
}


?>