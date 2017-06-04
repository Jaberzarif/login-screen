<?php error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);
?>
<?php
require('connexion.php');
require('phplib/functions.php');
session_start();
$_SESSION['username'] = '';
$_SESSION['password'] = '';
$username=$_POST['username'];
$password=$_POST['password'];
$requet="select * from user WHERE username = '$username' AND password = '$password'";
$res=mysql_query($requet);
$ligne = mysql_fetch_array($res);
$log =$ligne['username'];
$pass=$ligne['password'];

if($username == $log AND $password == $pass) {
	$_SESSION['username'] = $username;
	$_SESSION['password'] = $password;
	redirect("Welcome.html");
} else {
	echo "<script>alert(\"username and password incorrect\")</script>"; 
	redirect("index.html");
	

}

?>
