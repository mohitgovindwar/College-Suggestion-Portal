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
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>

      <div class="carousel-inner slide-show-color">
        <div class="carousel-item active">
          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <img src="std2.jpeg" class="d-block w-100" alt="...">

              </div>
              <div class="col-md-8 text-center p-md-5 mt-md-5">
                <h3>What WE DO</h3>
                <p>
                <h5>We shortlist colleges according to your CET score and state and suggest you best engineering
                  colleges
                  for your bright future. </h5>
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <u><b><h2 align="center">Everything you need to know about us.</h2></b></u>
              </div>
              <div class="col-md-4">
                <img src="std4.jpeg" class="d-block w-100" alt="...">

              </div>
              <div class="col-md-8 text-center p-md-5 mt-md-5">
                <h3>WHO ARE WE.</h3>
                <p>
                <h5>We are a group of highly motivated students and we are trying to solve the daily life problems of
                  students which hinder them to be successful in their lives. </h5>
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <u><b><h2 align="center">Everything you need to know about us.</h2></b></u>
              </div>
              <div class="col-md-4">
                <img src="std5.jpeg" class="d-block w-100" alt="...">

              </div>
              <div class="col-md-8 text-center p-md-5 mt-md-5">
                <h3>Our Mission</h3>
                <p>
                <h5>We aim to promote the digital document attestation and verification. Our sole mission is to save the time that the students consume in attesting their docs. </h5>
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <u><b><h2 align="center">Everything you need to know about us.</h2></b></u>
              </div>
              <div class="col-md-4">
                <img src="std6.jpeg" class="d-block w-100" alt="...">

              </div>
              <div class="col-md-8 text-center p-md-5 mt-md-5">
                <h3>What we provide</h3>
                <p>
                <h5>iStudent is a platform where students can get their documents verified and attested digitally. Companies can view their docs and offer them internships and jobs</h5>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon  next-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>



  <footer class="full-footer">
    <div class="container-fluid top-footer p-4">
      <div class="row">
        <div class="col-md-4 text-center">
          <h1 id="logo">Students Portal</h1><br>
          <p>
            Student Portal is a platform for students to get the best suggestion for engineering colleges based on their
            CET scores.
          </p><br>
          <a href="" class="pr-3"><i class="fab fa-2x fa-facebook"></i></a>
          <a href="" class="pr-3"><i class="fab fa-2x fa-google-plus"></i></a>
          <a href="" class="pr-3"><i class="fab fa-2x fa-twitter"></i></a>
          <a href="" class="pr-3"><i class="fab fa-2x fa-instagram"></i></a>

        </div>
        <div class="col-md-4 pl-md-5">
          <h1>Important Links</h1>
          <a href="">Privacy Policy</a><br>
          <a href="">Youtube Channel(link)</a><br>
          <a href="">Blog</a><br>
          <a href="">Social Media</a><br>
        </div>

        <div class="col-md-4">
          <h1>Contact Us</h1>
          <a class="p-1" href="tel:9082637026"><i class="fas fa-phone"></i>(+91)9082637026</a><br>
          <a class="p-1" href="mailto:prathamghule3@gmail.com"><i
              class="fas fa-envelope"></i>prathamghule3@gmail.com</a><br>

          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d120726.33377851103!2d73.04431636569936!3d18.
              98894337820059!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7e83e1f23f23d%3A0xe3a106c431e3fd0a!2sPanv
              el%2C%20Navi%20Mumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1600181051337!5m2!1sen!2sin"
            frameborder="0"></iframe>

        </div>
      </div>
    </div>
  </footer>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="js/jquery-3.5.1.slim.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>