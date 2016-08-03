<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Yeni Kayıt</title>
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
	<?php
		$p_year = $_GET['project-year'];
		$p_title = $_GET['project-title'];
		$p_details =$_GET['project-details'];

		include '../connect.php';
		$insert_query = "INSERT INTO db_projects (project_year, project_title, project_details) VALUES ('$p_year', '$p_title', '$p_details')";
	    
	    if ($conn->query($insert_query) === TRUE) {
	    echo ('
			<section class="cms-elements">
				<div class="yeni-kayit-eklendi">
					Yeni Proje Eklendi!
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


