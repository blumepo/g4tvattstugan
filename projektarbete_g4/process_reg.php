<!DOCTYPE HTML>
<?php


        addTodatabase($Name,$Mail,$Username, $Password);

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
function addToDatabase($Name,$Mail,$Username, $Password)
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

	    $Name = $_GET["Name"];
        $Mail = $_GET["Mail"];
        $Username = $_GET["Username"];
        $Password = $_GET["Password"];
	 
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
