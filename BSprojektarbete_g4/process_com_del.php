<!DOCTYPE html>

    <?php

        $Id = $_GET["Id"];

        deleteCommentFromDatabase($Id);



function deleteCommentFromDatabase($Id)
 {
     include "database.php";

$sql = "DELETE FROM Comments WHERE id='$Id'";

if ($conn->query($sql) === TRUE) {
    echo "Din kommentar har raderats från forumet";
} else {
    echo "Något fick fel: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
header( "refresh:2;url=index.php" );
?>