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
$sql2 = "SELECT * FROM User_login WHERE Mail='$Mail'";
$result = mysqli_query($conn, $sql2);
$num_row = mysqli_num_rows($result);
if (trim($Name) == "" || trim($Mail) == "" || trim($Password) == ""){
    die ("You may not leave blank fields.");
}
else if (filter_var($Mail, FILTER_VALIDATE_EMAIL) == false){
    die ("Incorrect E-mail.");
}
else if ($num_row > 0){
    die ("E-mail already exists.");
}
else if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    session_start();
    $_SESSION['Mail'] = $Mail;
    $_SESSION['Name'] = $Name;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
header( "refresh:200;url=index.php" );
?>
