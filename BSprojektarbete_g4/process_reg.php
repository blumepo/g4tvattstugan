<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="assets/css/main.css">
        <title>Blume</title>
    </head>
    <body>
    <?php
        include "database.php";
        $Name = mysqli_real_escape_string($conn, $_POST["Name"]);
        $Mail = mysqli_real_escape_string($conn, $_POST["Mail"]);
        $Password = mysqli_real_escape_string($conn, $_POST["Password"]);    

        addTodatabase($Name,$Mail, $Password);

        function addToDatabase($Name,$Mail, $Password)
        {
            include "database.php";
            $salt = uniqid();
            $hash = sha1($Password.$salt);
            $sql = "INSERT INTO User_login (Name, Mail, Password, Salt)
            VALUES ('$Name','$Mail', '$hash', '$salt')";
            $sql2 = "SELECT * FROM User_login WHERE Mail='$Mail'";
            $result = mysqli_query($conn, $sql2);
            $num_row = mysqli_num_rows($result);
                if (trim($Name) == "" || trim($Mail) == "" || trim($Password) == ""){
                    echo ("<div class = \"center\">Inga fält får vara tomma.<div class = \"loader\"></div></div>");
                }
                else if (filter_var($Mail, FILTER_VALIDATE_EMAIL) == false){
                    echo ("<div class = \"center\">Ogiltig E-post.<div class = \"loader\"></div></div>");
                }
                else if ($num_row > 0){
                    echo ("<div class = \"center\">E-posten finns redan registrerad.<div class = \"loader\"></div></div>");
                }
                else if ($conn->query($sql) === TRUE) {
                    echo "<div class = \"center\">Ny användare skapad.<div class = \"loader\"></div></div>";
                } 
                else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
            $conn->close();    
            header( "refresh:3;url=index.php" );
?>
    </body>
</html>