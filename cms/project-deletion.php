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

		include '../connect.php';
		$update_query = "DELETE FROM db_projects WHERE id='$projectId'";
	    
	    if ($conn->query($update_query) === TRUE) {
	    echo ('
			<section class="cms-elements">
				<div class="yeni-kayit-eklendi">
					Kayıt Silindi
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
