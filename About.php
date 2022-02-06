<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="fontawesome-free-5.14.0-web/css/all.css">
  <link rel="stylesheet" href="Project.css">
  <title>About Us</title>
</head>
<body>

    <?php
    session_start();
    if(isset($_SESSION["name"]))
    {
    include('user_navbar.php');
    }
    else{
      include('navbar.html'); 
    }  
    ?>
       
      <section>
          <div class="container">
              <div class="row">
                  <div class="col-12 text-center">
                      <h2>About Students Portal</h2><hr>
                  </div>
                  <div class="col-md-4">
                    <img src="std3.jpeg" class="img-fluid p-3 mb-3" id="AboutLogo" alt="">
                  </div>
                  <div class="col-md-8 pl-2 pt-4 text-center">
                    <p>As we know that after giving CET exam students are confused about which engineering colleges they will get based on their CET score.</p>
                      <p>This website suggests best engineering colleges based on last years cutoff.After reisteration and login you will see two options Search and Random Search in navigation-bar.
                        In search you can search colleges based on your cet score and no. of colleges you want to search.In random search section you will search colleges based on upper limit of and lower limit of CET score
                    </p>
                    
                      
                  </div>
              </div>
          </div>
      </section>

      <?php
    include('footer.html');  
    ?>

    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>