<?php


session_start();
require('config.php');


if(isset($_POST) && !empty($_FILES['image']['name']) && !empty($_POST['title'])){


	$name = $_FILES['image']['name'];
	list($txt, $ext) = explode(".", $name);
	$image_name = time().".".$ext;
	$tmp = $_FILES['image']['tmp_name'];


	if(move_uploaded_file($tmp, 'uploads/'.$image_name)){


		$sql = "INSERT INTO image_gallery (title, image) VALUES ('".$_POST['title']."', '".$image_name."')";
		$mysqli->query($sql);


		$_SESSION['success'] = 'Image Uploaded successfully.';
		header("Location: http://localhost:8000");
	}else{
		$_SESSION['error'] = 'image uploading failed';
		header("Location: http://localhost:8000");
	}
}else{
	$_SESSION['error'] = 'Please Select Image or Write title';
	header("Location: http://localhost:8000");
}


?>