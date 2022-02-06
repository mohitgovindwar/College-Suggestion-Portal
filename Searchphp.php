<html>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="fontawesome-free-5.14.0-web/css/all.css">
  <link rel="stylesheet" href="Project.css">
  <title>Search</title>

</head>

<body>
  <header>
    <div id="bottomHeader">
      <div class="container-fluid p-1">
        <nav class="navbar navbar-dark  navbar-expand-md" style="background-color:#6d1b91;">
          <h1 id="logo">Students Portal</h1>
          <button class="navbar-toggler" data-toggle="collapse" data-target="#Toggle"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse " id="Toggle">
            <ul class="navbar-nav" id="navbar-list">

              <li class="nav-item">
                <a class="nav-link" href="Mainpage.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="search_section.html">Search</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="About.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">Contact</a>
              </li>

              <li class="nav-item">

                <a href="logout.php" class="nav-link">
                  <i class="fas fa-arrow-circle-left"></i>Logout
                </a>

              </li>



            </ul>
          </div>
        </nav>
      </div>
    </div>
  </header>

  <section id=search_show>
    <div class='container'>
      <div class='row'>


      <?php


$h = mysqli_connect("Localhost", "root", "", "collegesData") or die("Unable to connect");
$CET = $_POST["cet"];
$caste = $_POST["caste"];
$noOfCollege = $_POST["noOfCollege"];
$city=$_POST["city"];

if($city){
  $q = mysqli_query($h, "select * from cutoffopen where cetScore<='$CET' and city='$city'");
  $q1 = mysqli_query($h, "select * from cutoffobc where cetScore<='$CET' and city='$city'");
}
else{
  $q = mysqli_query($h, "select * from cutoffopen where cetScore<='$CET'");
  $q1 = mysqli_query($h, "select * from cutoffobc where cetScore<='$CET'");
}

if ($caste = "OPEN") {
  if (mysqli_num_rows($q) > 0) {
    while ($a = mysqli_fetch_array($q)) {

      $col_dict[$a[0]] = $a[1];
    }
  } else {
    echo "<script>alert('No colleges found');</script>";
  }
} else {
  if (mysqli_num_rows($q1) > 0) {
    while ($a = mysqli_fetch_array($q1)) {

      $col_dict[$a[0]] = $a[1];
    }
  } else {
    echo "<script>alert('No colleges found');</script>";
  }
}

krsort($col_dict);
$i = 0;
foreach ($col_dict as $cetScore => $college_names) {
  if ($i == $noOfCollege) {
    break;
  }

  echo "<div class='col-md-3 p-4 m-4 m-3' style='background-color: #e7c9f5; box-shadow: 2px 5px 10px  rgb(0, 0, 0)'>
              <center><i class='fas fa-5x fa-university'></i></center>                    
              <br><span><strong><h5>$college_names</h5></strong></span>
              <br><span><strong><h5>Cut-Off: $cetScore</h5></strong></span>
              </div>";

  $i = $i + 1;
}




?>
        <div class='col-md-3 p-4 m-4 m-3' style='background-color: white; box-shadow: 2px 5px 10px  rgb(0, 0, 0)'>
          <center>
            <center><i class="fas fa-5x fa-search-plus"></i></center>
            <br><a href="search_section.html">Want to search again?</a>
          </center>
        </div>



      </div>
    </div>
  </section>




</body>

</html>
