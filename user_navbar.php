<header>
  <div id="bottomHeader">
    <div class="container-fluid p-1">
      <nav class="navbar navbar-dark  navbar-expand-md" style="background-color:#6d1b91;">
        <h1 id="logo">Students Portal</h1>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#Toggle"><span
            class="navbar-toggler-icon"></span></button>
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

            <li class="nav-item dropdown">
                  <a href="" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown"><i class="fas fa-user"></i>
                    <?php if(isset($_SESSION["name"])) echo $_SESSION["name"]; ?>
                  </a>
                  <div class="dropdown-menu">
                    <a href="top10.php" class="nav-link dropdown-item">
                    <i class="fas fa-edit"></i>Top 10 Colleges
                    </a>
                    <a href="top25.php" class="nav-link dropdown-item">
                      <i class="fas fa-edit"></i>Top 25 Colleges
                    </a>
                    <a href="logout.php" class="nav-link dropdown-item">
                      <i class="fas fa-arrow-circle-left"></i>Logout
                    </a>
                  </div>

                </li>



          </ul>
        </div>
      </nav>
    </div>
  </div>
</header>