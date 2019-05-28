<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script type="text/javascript" src="assets/js/function.js"></script>
  <title>Tvättstugan</title>
  <link href="assets/css/main.css" rel="stylesheet">
</head>

<body>
<?php
login();
function login()
{
    include "database.php";

	$Mail = mysqli_real_escape_string($conn, $_GET['Mail']);
	$Password = mysqli_real_escape_string($conn, $_GET['Password']);

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
		echo"<div class = \"center\">Det lyckades!<div class = \"loader\"></div></div>";
		session_start();
		$_SESSION['Mail'] = $row['Mail'];
		$_SESSION['Name'] = $row['Name'];
		
	}
	else
	{
		echo("Felaktigt användarnamn eller lösenord");
		
	}
$conn->close();
}
header( "refresh:2;url=index.php" );
?>
</body>
</html>

