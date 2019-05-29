<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script type="text/javascript" src="assets/js/function.js"></script>
  <title>Tvättstugan</title>
  <link href="assets/css/main.css" rel="stylesheet">
</head>

<body>
<div class = "dialoguebox3">
<h1>
Sökresultat
</h1>
</div>
<?php
include 'database.php';
        $query = $_GET['Query'];
        $raw_results = "SELECT * FROM User_login
        WHERE (Name LIKE '%".$query."%') OR (Mail LIKE '%".$query."%')";
// OR (comment LIKE '%".$query."%')
        $result = mysqli_query($conn, $raw_results);
        $something = $result->fetch_assoc();
        $somethingId = $something['Id'];
        $somethingName = $something['Name'];
        $sql = "SELECT * FROM Comments WHERE userId = '$somethingId'";
        $result2= $conn->query($sql);

        if ($result->num_rows > 0) 
        {
            while($row = $result2->fetch_assoc())
            {             
                echo "<div class = \"dialoguebox2\"><p>".$somethingName."</br>".$something['Mail']."</br>" .$row['comment']. "</p></div>";
            }   
        }
        else
        {
            echo "No results";
        }
?>
    <form name="GoBack" action="index.php">
        <input type="submit" value="Tillbaka till startsidan">
    </form>
   </body>
</html>