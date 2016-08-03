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

    $query = "SELECT id, project_year, project_title, project_images, project_details FROM db_projects ORDER BY id DESC";
  
    $totalResult = mysqli_query($conn,$query);
  
    $rows = array();
  
    while ($row = mysqli_fetch_assoc($totalResult)) {
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
      <section class="logout">
        <div class="row">
          <form action="logout.php">
            <input type="submit" value="Çıkış Yap">
          </form>
        </div>
      </section>
    </header>
    <section class="edit-project">
      <div class="container">
        <div class="row page-title-row">
          <div class="col-xs-12">
            <h2>Projeler</h2>
            <hr>
          </div>
        </div>
        <div id="project-list" class="row open-project-row">
          <div class="col-xs-3 project-image-list"></div>
          <div class="col-xs-12 project-title"></div>
          <div class="col-xs-12 project-year"></div>
          <div class="col-xs-12 project-detail"></div>
        </div>
        <div class="row">
          <div class="table-responsive">
           <table class="table table-striped">
            <thead>
              <tr>
                <th>Proje Adı</th>
                <th>Yıl</th>
                <th></th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
            <?php
              foreach ($rows as $key => $value) {
                echo ('
                  <tr>
                    <td>'.$value['project_title'].'</td>
                    <td>'.$value['project_year'].'</td>
                    <td><a href="edit-project-images.php?id='.$value['id'].'" id="edit-project-button">Resim Düzenle</a></td>
                    <td><a href="edit-project-detail.php?id='.$value['id'].'" id="edit-project-button">İçerik Düzenle</a></td>
                    <td><a href="project-deletion.php?id='.$value['id'].'" id="delete-project-button">Sil</a></td>
                  </tr>
                  ');
              }
            ?>
            </tbody>
          </table>
          <div class="col-xs-12 new-project-col">
            <a href="create-project.php">+ Yeni Proje Oluştur</a>
          </div>
         </div>
        </div>
      </div>
    </section>
    <script src="../js/main.js"></script> <!-- Site Library -->
    <script src="../lib/jquery.elevateZoom-3.0.8.min.js"></script> <!-- Eleveate Zoom -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../lib/animate.css">
  </body>
</html>