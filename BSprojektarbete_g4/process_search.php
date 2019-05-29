<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <script type="text/javascript" src="assets/js/function.js"></script>
  <title>Tvättstugan</title>
  <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <link href="css/landing-page.min.css" rel="stylesheet">
</head>
    <body>
<?php
include 'database.php';
 $query = $_GET['Query']; 
         
        $raw_results = "SELECT * FROM Comments
        WHERE (name LIKE '%".$query."%') OR (email LIKE '%".$query."%') OR (comment LIKE '%".$query."%')";

        $result=$conn->query($raw_results);
             
        if ($result->num_rows > 0) 
        {
            while($row = $result->fetch_assoc())
            {             
                echo "<p>".$row['name']."</br>".$row['email']."</br>".$row['comment']."</p>";
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