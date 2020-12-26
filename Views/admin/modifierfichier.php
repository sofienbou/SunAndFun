<?php
include "../../Controller/actualiteesC.php";
$file_name = $_FILES['fileToUpload']['name'];
$file_tmp_name = $_FILES ['fileToUpload']['tmp_name'];
$FileType = strtolower(pathinfo($file_name,PATHINFO_EXTENSION));

$ac = new actualiteesC();
if(($FileType == "jpg" || $FileType == "png" ||  $FileType == "jpeg")&&($_POST['type']=="image"))
{
    $file_dest = 'image_upload/'.$file_name;
    move_uploaded_file($file_tmp_name, $file_dest);
    $ac->update($_POST['id'],$_POST['description'],$_POST['type'],$file_dest);
    header('Location: gestionfichier.php');
}
else if(($FileType == "mp4" || $FileType == "mov" ||  $FileType == "wmmv")&& ($_POST['type']=="video")){

    $file_dest = 'video_upload/'.$file_name;
    move_uploaded_file($file_tmp_name, $file_dest);
    $ac->update($_POST['id'],$_POST['description'],$_POST['type'],$file_dest);
    header('Location: gestionfichier.php');
}
