<!DOCTYPE html>
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
$Name = mysqli_real_escape_string($conn, $_GET["Name"]);
$Mail = mysqli_real_escape_string($conn, $_GET["Mail"]);
$Password = mysqli_real_escape_string($conn, $_GET["Password"]);
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
    die ("<div class = \"center\">You may not leave blank fields.<div class = \"loader\"></div></div>");
    }
    else if (filter_var($Mail, FILTER_VALIDATE_EMAIL) == false){
    die ("<div class = \"center\">Incorrect E-mail.<div class = \"loader\"></div></div>");
}
else if ($num_row > 0){
    die ("<div class = \"center\">E-mail already exists.<div class = \"loader\"></div></div>");
}
else if ($conn->query($sql) === TRUE) {
    echo "<div class = \"center\">New record created successfully<div class = \"loader\"></div></div>";
    session_start();
    $_SESSION['Mail'] = $Mail;
    $_SESSION['Name'] = $Name;
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

}
header( "refresh:3;url=index.php" );
?>
    </body>
</html>