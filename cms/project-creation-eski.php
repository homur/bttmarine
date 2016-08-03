<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Yeni Kayıt</title>
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
	<?php
	if ($_SESSION['pimg'] != null) {
		$pimg = implode(",", $_SESSION['pimg']);
	}
	else{
		$pimg= "";
	}
		
		$p_year = $_GET['project-year'];
		$p_title = $_GET['project-title'];
		$p_details =$_GET['project-details'];

		include '../connect.php';
		$insert_query = "INSERT INTO db_projects (project_year, project_title, project_details, project_images) VALUES ('$p_year', '$p_title', '$p_details', '$pimg')";
	    
	    if ($conn->query($insert_query) === TRUE) {
	    echo ('
			<section class="cms-elements">
				<div class="yeni-kayit-eklendi">
					Kayıt Güncellendi
				</div>
				<div class="button">
					<a href="edit-projects.php">Geri</a>
				</div>
			</section>
	    	');
		} else {
		    echo "Error: " . $insert_query . "<br>" . $conn->error;
		}
		$conn->close();
	?>
</body>
</html>


