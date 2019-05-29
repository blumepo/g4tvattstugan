<?php
include 'database.php';
 $query = $_GET['Query']; 
    // gets value sent over search form
         
        $raw_results = "SELECT * FROM Comments
        WHERE (name LIKE '%".$query."%') OR (email LIKE '%".$query."%') OR (comment LIKE '%".$query."%')";
        $result=$conn->query($raw_results);
             
        // * means that it selects all fields, you can also write: `id`, `title`, `text`
        // articles is the name of our table
         
        // '%$query%' is what we're looking for, % means anything, for example if $query is Hello
        // it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
        // or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'
        
        if ($result->num_rows > 0) 
        {
            while($row = $result->fetch_assoc())
            {             
                echo "<p>".$row['name']."</br>".$row['email']."</br>".$row['comment']."</p>";
                // posts results gotten from database(title and text) you can also show id ($results['id'])
            }   
        }
        else
        { // if there is no matching rows do following
            echo "No results";
        }


?>