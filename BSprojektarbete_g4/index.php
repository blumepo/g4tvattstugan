<!DOCTYPE html>
<html lang="en">
<?php 
session_start(); 

?>
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
  if(isset($_SESSION['Mail'])){
echo "<nav class=\"navbar navbar-light bg-light static-top\">
    <div class=\"container\">
    <a class=\"navbar-brand\" href=\"index.php\"><img src=\"https://cali-laundry.com/wp-content/uploads/2018/06/Cali_Laundry-Laundromat-Anaheim-Icon-Washing_Machine-Blue.png\" width=\"60\" height=\"60\" title=\"Home button\" alt=\"Home\"></a>
    <button type=\"button\" class=\"btn btn-primary btn-lg\" onclick=\"location.href= 'logout_process.php'\">
    Logga Ut
    </button>
    </div>
    </nav>";
} else {
 echo "<nav class=\"navbar navbar-light bg-light static-top\">
    <div class=\"container\">
    <a class=\"navbar-brand\" href=\"index.php\"><img src=\"https://cali-laundry.com/wp-content/uploads/2018/06/Cali_Laundry-Laundromat-Anaheim-Icon-Washing_Machine-Blue.png\" width=\"60\" height=\"60\" title=\"Home button\" alt=\"Home\"></a>
    <button type=\"button\" class=\"btn btn-primary btn-lg\" data-toggle=\"modal\" data-target=\"#Registrera\">
    Registrera
    </button>
    </div>
    </nav>";
} ?> 
 
  <header class="masthead text-white text-center">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
        <?php
        if(isset($_SESSION['Mail'])){
          echo "<h1 class=\"mb-5\">Välkommen till din tvättstuga, " . $_SESSION["Name"] . "!</br></h1>";
        }
        else {
          echo"<h1 class=\"mb-5\">Välkommen till din tvättstuga!</br>Logga in eller registrera dig för att se och boka tvättider</h1>";
        }
        ?>
        </div>
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
        <?php
        if (!isset($_SESSION['Mail'])){
          echo"<form id=\"form_to_login\" name=\"form_to_login\" action=\"login_process.php\" method=\"_GET\" onsubmit=\"return checkUser()\">
            <div class=\"form-row\">
              <div class=\"col-11 col-md-9 mb-2 mb-md-3\">
                <input type=\"email\" class=\"form-control form-control-lg\" placeholder=\"E-mail\" name=\"Mail\">
              </div>
              </br>
              <div class=\"col-11 col-md-9 mb-2 mb-md-0\">
                <input type=\"password\" class=\"form-control form-control-lg\" placeholder=\"Lösenord\" name=\"Password\">
              </div>
              <div class=\"col-12 col-md-3\">
                <button type=\"submit\" class=\"btn btn-primary btn-lg\" onclick=\"return checkUser();\">  Logga In  
                </button>
              </div>
            </div>
          </form>";
        }
        ?>
        </div>
      </div>
    </div>
  </header>

<?php 
if(isset($_SESSION['Mail'])){
echo "<div id=\"bookingjs\" style=\"display: visible;\"></div>";
} else {
 echo ("<div id=\"bookingjs\" style=\"display: none;\"></div>");
} ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" defer></script>
<script src="https://cdn.timekit.io/booking-js/v2/booking.min.js" defer></script>
<script>
window.timekitBookingConfig = {
  app_key: 'test_widget_key_uVw3ylo5dPWuNteYnLyHZK84ToJBKgtW',
  project_id: '53e76db3-f061-4e19-8b7b-9b88ace13c5c'
}
</script>

<div class="modal fade" id="Registrera" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Registrera dig</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
	   <form name="form_reg" action="process_reg.php" method="_GET" onsubmit="return CheckReg()">
                        <p>E-postadress:</p>
                <input type="text" name="Mail"></br>
                <p>Namn:</p>
                <input type="text" name="Name"></br>
                <p>Lösenord:</p>
                <input type="text" name="Password"></br>
                <p>Upprepa lösenord:</p>
                <input type="text" name="Password2"></br></br>
				</form>
      </div> 
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Avbryt</button>
        <button type="button" class="btn btn-primary" onclick="return CheckReg()">Skicka</button>
		</form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="Kommentera" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Posta Kommentar</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
	   <form name="form1" action="process_com.php" method="_GET" onsubmit="return CheckComment()">
                <p>Kommentar:</p>
                <textarea rows="4" cols="50" name="Kommentar"></textarea></br></br>
				
      </div> 
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Avbryt</button>
        <button type="submit" class="btn btn-primary" onclick="return CheckComment()">Skicka</button>
		</form>
      </div>
    </div>
  </div>
</div>
  
  <section class="features-icons bg-light text-center">
    <?php 
if(isset($_SESSION['Mail'])){
echo "<div id=\"kommentarer\" class=\"container\" style=\"display: visible;\">";
} else {
 echo ("<div id=\"kommentarer\" class=\"container\" style=\"display: none;\">");
} ?>  
      <div class="row">
        <div class="col-lg-12">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-screen-desktop m-auto text-primary"></i>
            </div>
            <h3>Forum</h3>
            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#Kommentera">
              Posta en kommentar
            </button>
          </div>
          <form name="Search" method="get" action="process_search.php">
            <input type="text" placeholder=" Sök i forum.." name="Query">
            <input type="submit" value="Sök">
          </form>
        </div>
        </div>
        <!--här ska tidigare kommentarer stå(showComments-filen)-->
<?php 
      include "database.php";

      $sql = "SELECT * FROM Comments";  
      $result=$conn->query($sql);

      if ($result->num_rows > 0) 
      {
        while($row = $result->fetch_assoc())
        {
          $Id=$row['id'];
          echo "<p><b>Namn:</b> ". $row["name"]. "</br><b>E-post:</b> ". $row["email"]. "</br><b>Kommentar:</b> ". $row["comment"] . "<br></p>
                <form name=\"del_com\" name=\"delete\" method=\"get\" action=\"process_com_del.php\">
                
                <input type=\"submit\" name=\"delete\" class=\"btn btn-primary btn-lg\" value=\"$Id\">
                </form>"
                ;
        }
      }
      else 
      {
          echo "Inga kommentarer hittades";
      }

$conn->close();
?>

      </div>
    
  </section>



  <footer class="call-to-action text-white text-center">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
          <ul class="list-inline mb-2">
            <li class="list-inline-item">
              <a href="#">Om Oss</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Kontakt</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Terms of Use</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Privacy Policy</a>
            </li>
          </ul>
          <p class="small mb-4 mb-lg-0">&copy; Your Website 2019. All Rights Reserved.</p>
        </div>
        <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
          <ul class="list-inline mb-0">
            <li class="list-inline-item mr-3">
              <a href="#">
                <i class="fab fa-facebook fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item mr-3">
              <a href="#">
                <i class="fab fa-twitter-square fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-instagram fa-2x fa-fw"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
