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




  <title>MainPage</title>
</head>

<body>

  <script type="text/javascript">
    function change_state() {
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.open("GET", "ajax.php?state=" + document.getElementById("state").value, false);
      xmlhttp.send(null);
      alert(xmlhttp.responseText);
      document.getElementById("city").innerHTML = xmlhttp.responseText;
    }


    function Validate() {
      var pass = document.getElementById("pass").value;
      var cpass = document.getElementById("cpass").value;
      var mobile = document.getElementById("mobile").value;
      var email = document.getElementById("email").value;
      var regxMobile = /^[6-9]\d{9}$/;
      var regxEmail = /^([a-z A-Z 0-9 \. -]+)@([a-z A-Z 0-9 -]+)\.([a-z]{2,20})(\.[a-z]{2,20})?$/;


      if (!regxMobile.test(mobile)) {
        alert("Wrong Mobile");
        return false;
      } else if (!regxEmail.test(email)) {
        alert("Wrong Email Id");
        return false;
      } else if (pass != cpass) {
        alert("Wrong password");
        return false;
      } else {
        return true;
      }



    }
  </script>

  <?php
  include('navbar.html');
  ?>

  <section id="register-form">
    <div class="container">
      <form action="registerform.php" onsubmit="return Validate()" method="post">
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-8 m-md-5" id="form" style='border-radius:20px;box-shadow: 5px 5px 10px  rgb(0, 0, 0)'>
            <div class="row p-5">


              <div class="col-12">
                <center>
                  <img src="profile.png" id="register-form-logo" alt="">
                </center>
                <br>
                <hr id="hr">
                <br>
              </div>

              <div class="col-md-6 p-3">
                <label for="Full Name">Full Name:</label><br>
                <i class="fas fa-user"></i>&nbsp&nbsp&nbsp<input type="text" class="form-group" id="name" name="name" placeholder="Name" required>
              </div>
              <div class="col-md-6 p-3">
                <label for="Email">Email</label><br>
                <i class="fas fa-envelope"></i>&nbsp&nbsp&nbsp;<input type="text" id="email" placeholder="E-mail" name="email" required>
              </div>

              <div class="col-md-6 p-3">
                <label for="Mobile no">Mobile no.:</label><br>
                <i class="fas fa-phone"></i>&nbsp&nbsp&nbsp;<input type="text" id="mobile" placeholder="Mobile-no." name="mobile" required>
              </div>
              <div class="col-md-6 p-3">
                <label for="Gender">Gender:</label><br>
                <label for="Gender"><i class="fas fa-male"></i>&nbsp&nbsp;Male</label>
                <input type="radio" name="r" value="Male"><br>
                <label for="Gender"><i class="fas fa-female"></i>&nbsp&nbsp;Female</label>
                <input type="radio" name="r" value="Female">
              </div>

              <div class="col-md-6 p-3">
                <label for="city">City:</label><br>
                <i class='fas fa-1.8x fa-university'></i>&nbsp&nbsp&nbsp;<input type="text" name="city">
              </div>

              <div class="col-md-6 p-3">
                <label for="DOB">DOB:</label><br>
                <i class="fas fa-birthday-cake"></i>&nbsp&nbsp&nbsp;<input type="date" id="date" name="dob" required>
              </div>

              


              <div class="col-md-6 p-3">
                <label for="Password">Password</label><br>
                <i class="fas fa-lock"></i>&nbsp&nbsp&nbsp;<input type="password" id="pass" name="password" placeholder="Password" required>
              </div>
              <div class="col-md-6 p-3">
                <label for="Confirm Password">Confirm Password</label><br>
                <i class="fas fa-unlock-alt"></i>&nbsp&nbsp&nbsp;<input type="password" id="cpass" placeholder="Confirm Password" required>

              </div>

              

              

              <div class="col-12">
                <br>
                <center>
                  <input type="submit" class="btn btn-success" value="Register">
                </center>
              </div>





            </div>
          </div>
        </div>
      </form>
    </div>

  </section>





  <?php
  include('footer.html');
  ?>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="js/jquery-3.5.1.slim.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>


</body>

</html>