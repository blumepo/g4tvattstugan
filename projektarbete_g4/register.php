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
            <h1 id="h1">Registrera dig</h1>
        </div>
   
        <form name="form_reg" action="process_reg.php" method="_GET" onsubmit="return CheckReg()">
                <p>E-postadress:</p>
                <input type="text" name="Mail"></br>
                <p>Name:</p>
                <input type="text" name="Name"></br>
                <p>Password:</p>
                <input type="text" name="Password"></br>
                <p>Repeat Password:</p>
                <input type="text" name="Password2"></br></br>
                <input type="submit" value="Registrera">
        </form>
    </body>
</html>
