<!doctype html>
<html lang="en" class="no-js">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/HTML; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="img/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="img/favicon-16x16.png" sizes="16x16" />
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap 3.36 -->
    <link rel="stylesheet" href="css/reset.css">
    <!-- CSS reset -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Resource style -->
    <script src="lib/modernizr.js"></script> <!-- Modernizr -->
    <script src="lib/jquery-2.1.4.js"></script> <!-- Jquery -->
    <title>BTT Marine</title>
  </head>
  <?php
    include 'connect.php';
    $query = "SELECT id, project_year, project_title, project_details FROM db_projects";
    $year_query = "SELECT DISTINCT project_year FROM db_projects";
    $image_query = "SELECT project_id, image_path FROM db_project_images";


    $totalResult = mysqli_query($conn,$query);
    $yearResult = mysqli_query($conn,$year_query);
    $imageResult = mysqli_query($conn, $image_query);

    $rows = array();
    $years = array();
    $imagePaths = array();
  
    while ($row = mysqli_fetch_assoc($totalResult)) {
        $rows[] = $row;
    }
   
    while ($year = mysqli_fetch_assoc($yearResult)) {
        $years[] = $year;
    }

    while ($imagePath = mysqli_fetch_assoc($imageResult)) {
        $imagePaths[] = $imagePath;
    }
    
    $yearCount = count($years);
    $conn->close();
  ?>
  <body>
    <section class="mobile-menu">
      <div class="container-fluid">
        <div class="row mobile-menu-top-row">
          <div class="col-xs-6">
            <div class="mobile-menu-search">
              <input id="search-bar" type="text" placeholder="Sitede ara...">
            </div>
          </div>
          <div class="col-xs-6">
            <a id="mobile-menu-close-button" href="#"><i class="fa fa-close animated"></i></a>
          </div>
        </div>
        <div class="row mobile-menu-content-row">
          <ul>
            <li><a href="about-us.html">ABOUT US</a></li>
            <li><a href="services.html">SERVICES</a></li>
            <li><a href="references.php">REFERENCES</a></li>
            <li><a href="equipments.html">EQUIPMENTS</a></li>
            <li><a href="contact-us.html">CONTACT</a></li>
          </ul>
        </div>
        <div class="row mobile-menu-social-row">
          <div class="col-xs-12">
            <ul>
              <li><a href=""><i class="fa fa-facebook-square"></i></a></li>
              <li><a href=""><i class="fa fa-twitter-square"></i></a></li>
              <li><a href=""><i class="fa fa-instagram"></i></a></li>
            </ul>
          </div>
          <div class="col-xs-12 copyright-text">© BTT Marine 2016 - Her Hakkı Saklıdır</div>
        </div>
      </div>
    </section>
    <header>
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-3 col-xs-6 header-logo">
            <a href="index.html"><img class="img-responsive" src="img/logo.png" alt=""></a>
          </div>
          <div class="col-lg-9 col-md-9 col-xs-6 hidden-lg">
            <div id="header-mobile-menu-button" class="header-mobile-menu-button">
              <a href="#"><i class="fa fa-bars"></i></a>
            </div>
          </div>
          <div class="col-md-9 col-xs-12 menu-wrapper hidden-md hidden-sm hidden-xs">
            <div class="row">
              <div class="col-xs-12 social-and-search-wrapper">
                <div class="header-desktop-search">
                  <input id="search-bar" type="text" placeholder="SEARCH...">
                  <a href="#"><img class="buyutec" src="img/buyutec.png" alt="Arama"></a>
                </div>
                <div class="desktop-header-social-icons">
                  <a target="_blank" href="https://www.facebook.com/BttMarine/"><img src="img/fb.png" alt=""></a>
                  <a target="_blank" href="https://www.linkedin.com/company/btt-marine"><img src="img/linkedin.png" alt=""></a>
                  </ul>
                </div>
              </div>
              <div class="col-xs-12 col-md-12 header-desktop-menu">
                <ul>
                  <li><a href="about-us.html">ABOUT US</a></li>
                  <li><a href="services.html">SERVICES</a></li>
                  <li><a href="references.php">REFERENCES</a></li>
                  <li><a href="equipments.html">EQUIPMENTS</a></li>
                  <li><a href="contact-us.html">CONTACT</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <section id="references-content-area">
      <div class="container">
        <div class="panel-group" id="accordion">
          <?php 
            for ($i=0; $i < $yearCount ; $i++) { 
            $yearName = $years[$i]['project_year'];
            echo('
            <div class="panel panel-default">
            <div class="accordion-header">
              <h2>
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse');
            echo($yearName);
            
            echo('">');
            
            echo($yearName);
            
            echo(
                '
                 - PROJECTS<span class="accordion-close-button"><i class="fa fa-plus"></i></span></a>
              </h2>
            </div>
            <div id="collapse');
            
            echo($yearName);
            echo ('"class="panel-collapse collapse'); 
            if ($yearName === '2016') {
              echo('in">');
            }
            else{
              echo('">');
            }

            foreach ($rows as $key => $value) {
              if($value['project_year'] === $yearName){
                $project_year = $value['project_year'];
                //$image_paths = $imagePaths['project_images'];
                
                $project_title = $value['project_title'];
                $project_details = $value['project_details'];
                echo('
                  <div class="accordion-container">
                    <div class="reference-item">
                      <div class="reference-item-header">
                        <h3>' . $project_title . '
                        </h3>
                      </div>
                      <div class="reference-item-body">
                        <div class="row">');
                          foreach ($imagePaths as $imageitem) {
                            if($imageitem['project_id'] == $value['id']){
                            echo('
                            <div class="col-xs-12 col-md-3 reference-item-col">
                              <img class="zoomImage img-responsive" src="img/references/uploads/'. $imageitem['image_path'] .'" data-zoom-image=""/>
                            </div>' );
                            }
                          }
                        echo('
                        </div>
                      </div>
                    </div>
                  </div>
                ');
              }
            };
            echo('
              </div>
            </div>
              ');
            }
            ?>
        </div>
      </div>
    </section>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-md-4 footer-menu">
            <ul>
              <li> <i class="fa fa-caret-right"></i> <a href="about-us.html">ABOUT US</a></li>
              <li> <i class="fa fa-caret-right"></i> <a href="services.html">SERVICES</a></li>
              <li> <i class="fa fa-caret-right"></i> <a href="references.html">REFERENCES</a></li>
              <li> <i class="fa fa-caret-right"></i> <a href="equipments.html">EQUIPMENTS</a></li>
              <li> <i class="fa fa-caret-right"></i> <a href="contact-us.html">CONTACT</a></li>
            </ul>
          </div>
          <div class="col-xs-12 col-md-4 footer-mailing-list">
            <div class="row">
              <div class="col-xs-12 mailing-list-title">
                Subscribe To Our Newsletter
              </div>
              <div class="col-xs-12 mailing-list-input">
                <input type="text" placeholder="enter your e-mail address here">
              </div>
              <div class="col-xs-12 mailing-list-button">
                <a class="btn" href="#">Subscribe</a>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-md-4 footer-partner-logo">
            <div class="row">
              <div class="col-xs-12">
                OUR SOLUTION PARTNER
              </div>
              <div class="col-xs-12">
                <img src="img/w-smit-logo.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <script src="js/main.js"></script> <!-- Site Library -->
    <script src="lib/jquery.elevateZoom-3.0.8.min.js"></script> <!-- Eleveate Zoom -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="lib/animate.css">
  </body>
</html>