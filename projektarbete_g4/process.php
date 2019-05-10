<!DOCTYPE HTML>
<?php
        $namnet = $_GET["Name"];
        $epost = $_GET["Epostadress"];
        $medelande = $_GET["Medelande"];

        addTodatabase($namnet,$epost,$medelande);

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
function addToDatabase($namnet,$epost,$medelande)
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
$sql = "INSERT INTO Kommentarer (Name, Epostadress, kommentar)
VALUES ('$namnet', '$epost', '$medelande')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>
