<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="assets/css/mall.css">
        <title></title>

    </head>
    <body>

            <div class= "header">
                <h1 id="h1">Tidigare kommentarer</h1>
            </div>
    </body>
    </html>

    <?php 
     $server  = "dbtrain.im.uu.se";
     $username = "dbtrain_851";
     $password = "todopx";
     $dbname = "dbtrain_851";

     $conn = new mysqli($server, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connection Worked";

$sql = "SELECT * FROM Comments";
$result=$conn->query($sql);

if ($result->num_rows > 0) 
{
    while($row = $result->fetch_assoc())
    {
        echo "<p><br> Namn: ". $row["name"]. " - E-post: ". $row["email"]. " - Meddelande: ". $row["comment"] . "<br></p>";
    }
}
else 
{
    echo "Inga kommentarer hittades";
}

$conn->close();
    ?>