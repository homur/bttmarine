
  <?php
    $servername = "localhost";
    $username = "btt_db_user_1";
    $password = "S8CU8R3dyAa28JGd";
    $dbname = "bttmarine_db";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    $conn->set_charset("utf8");
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    ?>
      