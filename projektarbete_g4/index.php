<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="assets/css/mall.css">
        <title></title>

    </head>
    <body>

            <div class= "header">
                <h1 id="h1">Projektarbete grupp 4</h1>
            </div>
            <br/>

            <form id="form" name="form1" action="process.php" method="_GET" onsubmit="return look()">
                Name: <br></br><input type="text" name="Name"></br>
                E-postadress:<br></br><input type="text" name="Epostadress"></br>
                Kommentar:<br></br><input id="comment" type="text" name="Medelande"></br>
                <input type="submit" name="submit">

            </form>
            <aside id="comments">
                <h3 class= "header">Kommentarer:</h3>

                    <p id="textbox">hey</p>



            </aside>


<script src="assets/js/function.js">
look();
</script>



    </body>
</html>
