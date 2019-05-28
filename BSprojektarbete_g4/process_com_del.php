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
		session_start();
        $Name = $_SESSION['Name'];
        $Mail = $_SESSION['Mail'];
        $Comment = $_GET["Kommentar"];

<<<<<<< HEAD
        deleteCommentFromDatabase($Name,$Mail,$Comment);
=======

        addCommentTodatabase($Name,$Mail,$Comment);
>>>>>>> 79ffe1765f92029969b36af5122a3a0d41c00bf4
        
function deleteCommentFromDatabase($Name,$Mail,$Comment)
 {
     include "database.php";

$sql = "DELETE FROM Comments (name,email,comment) VALUES ('$Name','$Mail','$Comment')";

if ($conn->query($sql) === TRUE) {
    echo "Din kommentar har raderats från forumet";
} else {
    echo "Något fick fel: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
header( "refresh:2;url=index.php" );
?>