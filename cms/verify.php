<?php session_start();
		if(isset($_POST['submit'])){
			$cms_username = $_POST["username"];
			$cms_password = $_POST["password"];
			include '../connect.php';
			$get_user_query = "SELECT username FROM db_users WHERE username = '$cms_username' and password = '$cms_password' LIMIT 1";
			$result = mysqli_query($conn,$get_user_query);
			$row = mysqli_fetch_assoc($result);
			if (count($row) == 1) {
		        $_SESSION['username'] = $row['username']; 
		        $_SESSION['logged'] = TRUE; 
				header("Location: edit-projects.php"); // Modify to go to the page you would like 
        		exit;
			} else{
			echo '
			<!DOCTYPE html>
			<html lang="en">
			<head>
				<meta charset="UTF-8">
				<title>delete image</title>
				<link rel="stylesheet" href="../css/style.css">
			</head>
			<body>
			<section class="cms-elements">
				<div class="yeni-kayit-eklendi">
					Hatalı Giriş
				</div>
				<div class="button">
					<a href="index.php">Geri</a>
				</div>
			</section>
			</body>
			</html>
			';
		}

		}
	?>
