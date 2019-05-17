<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="assets/css/mall.css">
        <title></title>

    </head>
    <body>
    <h1>Min hemsida</p>
    </body>
    </html>

    <?php

        $Name = $_GET["Namn"];
        $Mail = $_GET["E-postadress"];
        $Comment = $_GET["Kommentar"];

        addCommentTodatabase($Name,$Mail,$Comment);
        
function addCommentToDatabase($Name,$Mail,$Comment)
 {
     $server  = "dbtrain.im.uu.se";
     $username = "dbtrain_851";
     $password = "todopx";
     $dbname = "dbtrain_851";

     $conn = new mysqli($server, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connection Worked";

$sql = "INSERT INTO Comments (name,email,comment) VALUES ('$Name','$Mail','$Comment')";

if ($conn->query($sql) === TRUE) {
    echo "New comment posted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>