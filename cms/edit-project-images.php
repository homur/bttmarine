<!doctype html>
<html lang="en" class="no-js">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/HTML; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Bootstrap 3.36 -->
    <link rel="stylesheet" href="../css/reset.css">
    <!-- CSS reset -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- Resource style -->
    <script src="../lib/modernizr.js"></script> <!-- Modernizr -->
    <script src="../lib/jquery-2.1.4.js"></script> <!-- Jquery -->
    <title>BTT Marine</title>
    <?php
    include '../connect.php';
    $projectId = $_GET['id'];

    $get_image_query = "SELECT image_path FROM db_project_images WHERE project_id = '$projectId'";

    $result = mysqli_query($conn,$get_image_query);

    $rows = array();

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    };
    $conn->close();
    ?>

  </head>
  <body>
    <header>
      <div class="container">
        <div class="row">
          <div class="col-md-3 header-logo">
            <a href="#"><img class="img-responsive" src="../img/logo.png" alt=""></a>
          </div>          
        </div>
      </div>
    </header>
    <section class="edit-project-images">
      <div class="container">
        <div class="row page-title-row">
          <div class="col-xs-12">
            <h2>Görselleri Düzenle</h2>
          </div>
          <div class="col-xs-12"><hr></div>
        </div>
        <div class="row elements-row">
        <form enctype="multipart/form-data" method="post">
          <div class="col-xs-12 col-md-3 add-image-element">
            <h3>Resim Ekle</h3>
            <div id="image-add-area" >
              <input style="display:none" name="id" type="text" value="<?php echo ($projectId);?>">
              <input name="file" type="file" id="file">
            </div>
            <input type="submit" name="submit" id="upload" value="Resmi Yükle">
            <p>Not: <br>
            <b>Resimler en fazla 2 MB büyüklüğünde olabilir.</b>
            </p>
            <div class="row error-row">
              <div class="col-xs-12">
                <?php
                include 'image-upload.php';
                ?>
              </div>
            </div>
            <div class="row back-row">
              <div class="col-xs-12">
                <a href="edit-projects.php">Anasayfa</a>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-md-9">
            <div class="row image-list-elements">
            <?php
              $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
              foreach ($rows as $key => $value) {
                $paths = explode(",", $value['image_path']);
                foreach ($paths as $key => $p) {
                  echo('
                  <div class="col-xs-4 image-list-col">
                    <div class="image-col"><img src="../img/references/uploads/'.$p.'" alt=""></div>
                    <div class="delete-col">
                      <a class="delete-image" href="image-deletion.php?path='.$p.'&url='.$actual_link.'">Görseli Sil</a>
                    </div>
                  </div>
                  ');
                }                
              }
            ?>
            </div>
          </div>
        </form>
        </div>
      </div>
    </section>
    <script src="../js/main.js"></script> <!-- Site Library -->
    <script src="../lib/jquery.elevateZoom-3.0.8.min.js"></script> <!-- Eleveate Zoom -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../lib/animate.css">
  </body>
</html>