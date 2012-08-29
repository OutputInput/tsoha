<?php

$user=$_POST['user'];
$pass=$_POST['pass'];

if(($user=='Pena') && ($pass=='lol')){
  header("Location: http://pxkorpel.users.cs.helsinki.fi/viestit.php");
}
else echo "access Denied!";




?>



<html>
<head/>
<body>


<form action="index.php" method=POST>
Username:<input type=text name=user><br />
Password: <input type=password name=pass><br />
<input type=submit value"Go!"><p>
</form>

