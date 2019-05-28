<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="assets/css/mall.css">
        <title>Tv�ttstugan</title>
 </head>
    <body>
    </body>
    </html>

    <?php
		session_start();
        $Name = $_SESSION['Name'];
        $Mail = $_SESSION['Mail'];
        $Comment = $_GET["Kommentar"];
        
     deleteCommentFromDatabase($Name,$Mail,$Comment);
     
function deleteCommentFromDatabase($Name,$Mail,$Comment)
 {
     include "database.php";

$sql = "DELETE FROM Comments (name,email,comment) VALUES ('$Name','$Mail','$Comment')";

if ($conn->query($sql) === TRUE) {
    echo "Din kommentar har raderats fr�n forumet";
} else {
    echo "N�got fick fel: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
header( "refresh:2;url=index.php" );
?>