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
        //$Comment = $_GET["Kommentar"];
        
        $Id = $_GET['test'];

    include "database.php";

$sql = "DELETE FROM Comments WHERE id='$Id'";

if ($conn->query($sql) === TRUE) {
    echo "Din kommentar har raderats från forumet";
} else {
    echo "Något fick fel: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header( "refresh:3;url=index.php" );

?>