<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="assets/css/main.css">
        <title>Blume</title>
    </head>
    <body>
<?php
		session_start();
        $Name = $_SESSION['Name'];
        $Mail = $_SESSION['Mail'];
        $Comment = mysqli_real_escape_string($conn, $_GET["Kommentar"]);

        include "database.php";

$sql = "INSERT INTO Comments (name,email,comment) VALUES ('$Name','$Mail','$Comment')";
if ($conn->query($sql) === TRUE && trim($Comment) !== "") {
    echo "<div class = \"center\">Din kommentar har lagts till i forumet<div class = \"loader\"></div></div>";
} else {
    echo "<div class = \"center\">Något fick fel: " . $sql . "<br>" . $conn->error"<div class = \"loader\"></div></div>";
}
$conn->close();
header( "refresh:2;url=index.php" );
?>

   </body>
</html>
