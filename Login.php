<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="fontawesome-free-5.14.0-web/css/all.css">
  <link rel="stylesheet" href="Project.css">
  <title>Login</title>
  
</head>

<body>
  <?php
    include('navbar.html'); 
  ?>

  <section id="register-form">
    <div class="container-fluid">
      <form action="loginphp.php" method="post">

        <div class="row align-items-center justify-content-center">
          <center>
            <div class="col-md-6  m-md-5" id="form" style='border-radius:70px;box-shadow: 2px 5px 10px  rgb(0, 0, 0)'>
              <div class="row">

                <div class="col-12 p-3">
                
                  <label>Email:</label><br>
                  <i class="fas fa-user"></i>&nbsp&nbsp&nbsp<input type="text" placeholder="E-mail" name="email">
                 
                </div>


                <div class="col-12 p-3">
                  <label>Password:</label><br>
                  <i class="fas fa-lock"></i>&nbsp&nbsp&nbsp;<input type="Password" placeholder="Password" name="password">
                  
                </div><div class="col-11">
                  <a href="Register.php"><h6 align="right">Don't have an account?</h6></a>
                  
                </div>




                <div class="col-12 mb-4">
                  <br>

                  <input type="submit" name="Login" class="btn btn-success" value="Login">

                </div>

              </div>
            </div>
          </center>
        </div>
      </form>
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