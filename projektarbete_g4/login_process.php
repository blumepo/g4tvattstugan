<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="assets/css/design.css">
        <title>process</title>
    </head>
    <body>

<?php
function login()
{
    include "database.php";

	$Mail = mysqli_real_escape_string($conn, $_get['Mail']);
	$Password = mysqli_real_escape_string($conn, $_get['Password']);

	$sql_q = "SELECT * FROM User_login WHERE Mail = '$Mail'";

	$result=mysqli_query($conn,$sql_q);

	if($result){
	echo("Funkar");}

	$row=mysqli_fetch_array($result, MYSQLI_ASSOC);

	if($row['Mail']===!$Mail)
	{
		echo("Felaktig Mail");
		$conn->close();
	}

	$salt = $row['Salt'];
	$passwordref = $row['Password'];

	$hashpass = sha1($Password.$salt);

	if($hashpass === $passwordref)
	{
		echo("Det lyckades!");
		session_start();
		$_SESSION['Mail'] = $row['Mail'];
		$_SESSION['Username'] = $row['Username'];
		header("refresh:2;url=http://localhost/HielleBergstromLevi/git/g4tvattstugan/projektarbete_g4/index.php");
	}
	else
	{
		echo("Felaktigt anv�ndarnamn eller l�senord");
		header("refresh:2; url=http://localhost/HielleBergstromLevi/git/g4tvattstugan/projektarbete_g4/login.php");
	}

}
?>
	    </body>
    </html>

