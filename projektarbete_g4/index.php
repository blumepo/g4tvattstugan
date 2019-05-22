<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="assets/css/design.css">
        <script type="text/javascript" src="assets/js/function.js"></script>
        <title>Tvättstugan</title>
    </head>
    <body>
        <div class= "header">
            <h1 id="h1">Välkommen till din tvättstuga</h1>
        </div>

        <form id="form1" name="form1" action="process_com.php" method="_GET" onsubmit="return checkComment()">
                <p>Namn:</p><input type="text" name="Namn"></br>
                <p>E-postadress:</p><input type="text" name="Epost"></br>
                <p>Kommentar:</p><input type="text" name="Kommentar"></br></br>
                <input type="submit" value="Skicka">
        </form>
           
        <form id="form2" name="form2" action="showComments.php">
                <input type="submit" value="Visa tidigare kommentarer">
        </form>
    </body>
</html>
