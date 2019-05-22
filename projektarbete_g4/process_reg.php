<!DOCTYPE HTML>
<?php
        $Name = $_GET["Name"];
        $Mail = $_GET["Mail"];
        $Username = $_GET["Username"];
        $Password = $_GET["Password"];

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
     include "database.php"
     
$hash = password_hash($Password, PASSWORD_DEFAULT);
$sql = "INSERT INTO User_login (Name, Mail, Username, Password)
VALUES ('$Name','$Mail','$Username', '$hash')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>
