<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
<<<<<<< HEAD
        <link rel="stylesheet" href="assets/css/main.css">
        <title>Blume</title>
    </head>
    <body>
<?php
=======
        <link rel="stylesheet" type="text/css" href="assets/css/mall.css">
        <title>Tvättstugan</title>
    </head>
    <body>
    <?php
>>>>>>> a5efb769e12ee14dc79ccc3bfe033e8c89d7e097
		session_start();
        $Name = $_SESSION['Name'];
        $Mail = $_SESSION['Mail'];
        $Comment = mysqli_real_escape_string($conn, $_GET["Kommentar"]);

        include "database.php";

$sql = "INSERT INTO Comments (name,email,comment) VALUES ('$Name','$Mail','$Comment')";

<<<<<<< HEAD
if ($conn->query($sql) === TRUE && trim($Comment) !== "") {
    echo "<div class = \"center\">Din kommentar har lagts till i forumet<div class = \"loader\"></div></div>";
} else {
    echo "<div class = \"center\">Något fick fel: " . $sql . "<br>" . $conn->error"<div class = \"loader\"></div></div>";
=======
if ($conn->query($sql) === TRUE) 
{
    echo "Din kommentar har lagts till i forumet";
} 
else 
{
    echo "Något fick fel: " . $sql . "<br>" . $conn->error;
>>>>>>> a5efb769e12ee14dc79ccc3bfe033e8c89d7e097
}
$conn->close();

header( "refresh:2;url=index.php" );
?>
<<<<<<< HEAD
    </body>
</html>
=======
   </body>
    </html>
>>>>>>> a5efb769e12ee14dc79ccc3bfe033e8c89d7e097
