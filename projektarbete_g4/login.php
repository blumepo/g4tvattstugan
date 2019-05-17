<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="assets/css/mall.css">
        <title>Välkommen till inloggningssidan</title>

    </head>
    <body>
           <form name="form_login" action="login_process.php" method="_GET" onsubmit="return check()">
                E-postadress:<br></br><input type="text" name="Mail"></br>
                Password:<br></br><input type="text" name="Password"></br>
                <input type="submit" value="logga in">
            </form>
    </body>
    </html>