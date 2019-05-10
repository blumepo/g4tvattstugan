<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="assets/css/mall.css">
        <title></title>

    </head>
    <body>

            <div class= "header">
                <h1 id="h1">Registeringsformulär</h1>
            </div>
            <br/>

            <form name="form1" action="process.php" method="_GET" onsubmit="return check()">
                E-postadress:<br></br><input type="text" name="Mail"></br>
                Name: <br></br><input type="text" name="Name"></br>
                Username:<br></br><input type="text" name="Username"></br>
                Password:<br></br><input type="text" name="Password"></br>
                Repeat Password:<br></br><input type="text" name="Password2"></br>
                <input type="submit" name="submit">

            </form>
            <aside id="comments">
                <h3 class= "header">Kommentarer:</h3>


                    <p id="textbox">hey</p>



            </aside>


<script src="assets/js/function.js">
check();
</script>



    </body>
</html>
