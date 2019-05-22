<!DOCTYPE html>
<?php
        $Name = $_GET["Name"];
        $Mail = $_GET["Mail"];
        $Password = $_GET["Password"];

addTodatabase($Name,$Mail, $Password);

function addToDatabase($Name,$Mail, $Password)
{
include "database.php";
     
$salt = uniqid();
$hash = sha1($Password.$salt);
$sql = "INSERT INTO User_login (Name, Mail, Password, Salt)
VALUES ('$Name','$Mail', '$hash', '$salt')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
header( "refresh:2;url=index.html" );
?>
