<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="assets/css/mall.css">
        <title>Tvättstugan</title>
    </head>
    <body>
    <?php
		session_start();
        $Name = $_SESSION['Name'];
        $Mail = $_SESSION['Mail'];
        $Comment = $_GET["Kommentar"];

        include "database.php";

$sql = "INSERT INTO Comments (name,email,comment) VALUES ('$Name','$Mail','$Comment')";

if ($conn->query($sql) === TRUE) 
{
    echo "Din kommentar har lagts till i forumet";
} 
else 
{
    echo "Något fick fel: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header( "refresh:2;url=index.php" );
?>
   </body>
    </html>