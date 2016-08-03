<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php
if (isset($_POST['submit'])) {
 // Variable for indexing uploaded image.
$upload_path = "../img/references/uploads/";     // Declaring Path for uploaded images.
$validextensions = array("jpeg", "jpg", "png");      // Extensions which are allowed.
$ext = explode('.', basename($_FILES['file']['name']));   // Explode file name from dot(.)
$file_extension = end($ext); // Store extensions in the variable.
$target_path = $upload_path . md5(uniqid()) . "." . $ext[count($ext) - 1];     // Set the target path with a new name of image.

	if (($_FILES["file"]["size"] < 2000000)     // Approx. 3MB files can be uploaded.
	&& in_array($file_extension, $validextensions)) {
		if (move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) {
			echo '<span>Görsel sunucuya yüklendi!.</span><br/><br/>';
			$p_images = substr($target_path, 26);
			$projectId = $_GET['id'];
			include '../connect.php';
			$insert_query = "INSERT INTO db_project_images (project_id, image_path) VALUES ('$projectId','$p_images')";
			if ($conn->query($insert_query) === TRUE) {
				$conn->close();
				echo "<meta http-equiv='refresh' content='0'>";
			} else {
					    echo "Veritabanı bağlantı hatası: " . $insert_query. "<br>" . $conn->error;
			}
		} 
		else {     //   If File Size And File Type Was Incorrect.
			echo '<span id="error">***Dosya boyutu veya türü hatalı***</span><br/><br/>';	
		}
	}
}
?>
</body>
</html>