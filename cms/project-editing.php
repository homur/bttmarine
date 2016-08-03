<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Yeni Kayıt</title>
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
	<?php
		$projectId = $_GET['id'];
		$p_year = $_GET['project-year'];
		$p_title = $_GET['project-title'];
		$p_details =$_GET['project-details'];

		include '../connect.php';
		$update_query = "UPDATE db_projects SET project_year='$p_year', project_title='$p_title', project_details='$p_details' WHERE id='$projectId'";
	    
	    if ($conn->query($update_query) === TRUE) {
	    echo ('
			<section class="cms-elements">
				<div class="yeni-kayit-eklendi">
					Kayıt Düzenlendi
				</div>
				<div class="button">
					<a href="edit-projects.php">Geri</a>
				</div>
			</section>
	    	');
		} else {
		    echo "Error: " . $update_query . "<br>" . $conn->error;
		}
		$conn->close();
	?>
</body>
</html>
