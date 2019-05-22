<!DOCTYPE html>
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
		echo("Det lyckades!");
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

