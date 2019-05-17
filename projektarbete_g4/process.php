<!DOCTYPE HTML>
<?php
  
        addTodatabase();

 ?>
 <html>
     <head>
         <meta charset="utf-8">
     </head>
     <body>
         <h1> Namn, Email och meddelande mottagits </h1>

     </body>
 </html>
 <?php

 function test_input($data){
 $data = trim($data);
 $data = stripslashes($data);
 $data = htmlspecialchars($data);
 return $data;
 }

function addToDatabase()
 {
     $server  = "dbtrain.im.uu.se";
     $username = "dbtrain_851";
     $password = "todopx";
     $dbname = "dbtrain_851";

     // Create connection
     $conn = new mysqli($server, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

       $Name = mysqli_real_escape_string($conn, $_GET["Name"]);
        $Mail = mysqli_real_escape_string($conn, $_GET["Mail"]);
        $Username = mysqli_real_escape_string($conn, $_GET["Username"]);
        $Password = mysqli_real_escape_string($conn,$_GET["Password"]);

if(test_input($Name) ==="" || test_input($Mail) ==="" || test_input($Username) ==="" || test_input($Password) ==="" ){
die("Connection failed, Invalid input from user" . $conn->connect_error);
}

if(!strpos($mail, ".")){
die("Connection failed, Invalid email from user" . $conn->connect_error);
}

if(!strpos($mail, "@")){
die("Connection failed, Invalid email from user" . $conn->connect_error);
}



$salt = uniqid();
$hash = sha1($Password.$salt);
$sql = "INSERT INTO User_login (Name, Mail, Username, Password, Salt)
VALUES ('$Name','$Mail','$Username', '$hash','$salt')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>
