<?php


session_start();
require('config.php');


if(isset($_POST) && !empty($_POST['id'])){


		$sql = "DELETE FROM image_gallery WHERE id = ".$_POST['id'];
		$mysqli->query($sql);


		$_SESSION['success'] = 'Image Deleted successfully.';
		header("Location: http://localhost:8000");
}else{
	$_SESSION['error'] = 'Please Select Image or Write title';
	header("Location: http://localhost:8000");
}


?>