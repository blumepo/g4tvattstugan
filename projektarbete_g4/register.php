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
   
        <form name="form_reg" action="process_reg.php" method="_GET" onsubmit="return checkReg()">
                E-postadress:<br></br><input type="text" name="Mail"></br>
                Name: <br></br><input type="text" name="Name"></br>
                Username:<br></br><input type="text" name="Username"></br>
                Password:<br></br><input type="text" name="Password"></br>
                Repeat Password:<br></br><input type="text" name="Password2"></br>
                <input type="submit" name="submit">
        </form>
    </body>
</html>
