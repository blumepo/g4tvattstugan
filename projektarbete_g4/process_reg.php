<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="assets/css/mall.css">
        <title>Tvättstugan</title>
 </head>
    <body>
    </body>
    </html>

<?php
        $Name = $_GET["Name"];
        $Mail = $_GET["Mail"];
        $Username = $_GET["Username"];
        $Password = $_GET["Password"];

$salt = uniqid();

addTodatabase($Name,$Mail,$Username, $Password);

function addToDatabase($Name,$Mail,$Username, $Password)
{
include "database.php";

$salt = uniqid();
$hash = sha1($Password, $salt);
$sql = "INSERT INTO User_login (Name, Mail, Username, Password, Salt)
VALUES ('$Name','$Mail','$Username', '$hash', '$salt')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>
