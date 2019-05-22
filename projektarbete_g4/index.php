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
        <div class= "forms">
        
            <form id="form_login" name="form_login" action="login_process.php" method="_GET" onsubmit="return checkUser()">
                <h2 id="h2">Logga in eller registrera dig</h2>
                <p>E-postadress:</p><input type="text" name="Mail"></br>
                <p>Password:</p><input type="text" name="Password"></br></br>
                <input type="submit" value="Logga in">
            </form>
            
           <form id="form_to_reg" name="form_to_reg" action="register.php">
             <input type="submit" value="Inget konto? Registrera dig här!">
            </form>
    
            <form id="form1" name="form1" action="process_com.php" method="_GET" onsubmit="return checkComment()">
                <h2 id="h2">Posta en kommentar i forumet</h2>
                <p>Namn:</p><input type="text" name="Namn"></br>
                <p>E-postadress:</p><input type="text" name="Epost"></br>
                <p>Kommentar:</p><input type="text" name="Kommentar"></br></br>
                <input type="submit" value="Skicka">
            </form>
           
            <form id="form2" name="form2" action="showComments.php">
                <input type="submit" value="Visa tidigare kommentarer">
            </form>
        </div>
    </body>
</html>
