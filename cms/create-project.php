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
    <section class="create-project">
      <div class="container">
        <div class="row page-title-row">
          <div class="col-xs-12">
            <h2>Yeni Proje Oluştur</h2>
          </div>
          <div class="col-xs-12"><hr></div>
        </div>
        <div class="row elements-row">
        <form action="project-creation.php">
          <div class="col-xs-12 col-md-6 col-md-offset-3 create-project-element">
            <h3>Proje Başlığı</h3>
            <input name="project-title" type="text" maxlength="50">
          </div>
          <div class="col-xs-12 col-md-6 col-md-offset-3 create-project-element">
            <h3>Proje Yılı</h3>
            <select name="project-year" id="">
              <option value="2017">2017</option>
              <option selected="selected" value="2016">2016</option>
              <option value="2015">2015</option>
              <option value="2014">2014</option>
              <option value="2013">2013</option>
              <option value="2012">2012</option>
            </select>
          </div>
          <div class="col-xs-12 col-md-6 col-md-offset-3 create-project-element">
            <h3>Proje Detay Açıklamaları</h3>
            <textarea name="project-details" id=""  rows="10"></textarea>
          </div>
          <div class="col-xs-12 col-md-6 col-md-offset-3 create-project-element">
            <input type="submit" value="Projeyi Kaydet">
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