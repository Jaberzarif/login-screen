<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Connexion</title>
</head>

<body>
<?php
$idcon=mysql_connect("localhost" ,"root", "");
if($idcon)
{
  
   $okbd=mysql_select_db("login");
   if($okbd==TRUE)
      echo "<script>alert(\"Error database\")</script>"; 
   else
      echo "<script>alert(\"database correct\")</script>"; 
}
else
    echo "<script>alert(\"Error Server\")</script>"; 
?>

</body>
</html>
