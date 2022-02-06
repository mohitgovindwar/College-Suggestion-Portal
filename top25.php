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
                                <a class="nav-link" href="random_search_section.html">Random Search</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="About.php">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href=""></a>
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
            <div class="col-12"><center><h2>TOP 25 COLLEGES<h5>(BASED ON LAST YEAR CUTT-OFF)</h5></h2></center></div>

                <?php


                $h = mysqli_connect("Localhost", "root", "", "collegesData") or die("Unable to connect");

                

                
                    $q = mysqli_query($h, "select * from cutoffopen where cetScore>97");
                    
                    
                        if (mysqli_num_rows($q) > 0) {
                            while ($a = mysqli_fetch_array($q)) {

                                $col_dict[$a[0]] = $a[1];
                            }
                        } else {
                            echo "<script>alert('No colleges found');</script>";
                        }
                    

                    krsort($col_dict);
                    $i=0;

                    foreach ($col_dict as $cetScore => $college_names) {
                        if($i==25){
                            break;
                        }
                        $i=$i+1;
                        
                        echo "<div class='col-md-3 p-4 m-4' style='background-color: #e7c9f5; box-shadow: 2px 5px 10px  rgb(0, 0, 0)'>
                      <center><i class='fas fa-5x fa-university'></i></center>                    
                      <br><span><strong><h5>[$i]$college_names</h5></strong></span><br>
                      <span><strong><h5>cutoff Score: $cetScore</h5></strong></span>
                      
                      </div>";

                      
                    }
                

                ?>
                





            </div>
        </div>
    </section>




</body>

</html>