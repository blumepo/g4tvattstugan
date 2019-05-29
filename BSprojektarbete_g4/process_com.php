<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="assets/css/main.css">
        <title>Blume</title>
    </head>
    <body>
<?php
        include "database.php";
		session_start();
        $Id = $_SESSION['Id'];
        $Comment = mysqli_real_escape_string($conn, $_GET["Kommentar"]);



$sql = "INSERT INTO Comments (userId,comment) VALUES ('$Id','$Comment')";
if ($conn->query($sql) === TRUE && trim($Comment) !== "") {
    echo "<div class = \"center\">Din kommentar har lagts till i forumet<div class = \"loader\"></div></div>";
} else {
    echo "Något fick fel: " . $sql . "<br>" . $conn->error;
}
$conn->close();
header( "refresh:2;url=index.php" );
?>

   </body>
</html>
