<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>delete image</title>
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
<?php
include '../connect.php';
$image_path = $_GET['path'];
$back_path = $_GET['url'];
$delete_query = "DELETE FROM db_project_images WHERE image_path = '$image_path'";
if ($conn->query($delete_query) === TRUE) {
echo ('
	<section class="cms-elements">
		<div class="yeni-kayit-eklendi">
			Görsel Silindi
		</div>
		<div class="button">
			<a href="'.$back_path.'">Geri</a>
		</div>
	</section>
	');
} else {
    echo "Error: " . $delete_query . "<br>" . $conn->error;
}
$conn->close();

?>

</body>
</html>