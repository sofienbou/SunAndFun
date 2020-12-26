<?php
include "../../model/actualitees.php";
include "../../Controller/actualiteesC.php";
$file_name = $_FILES['fileToUpload']['name'];
$file_tmp_name = $_FILES ['fileToUpload']['tmp_name'];
$FileType = strtolower(pathinfo($file_name,PATHINFO_EXTENSION));
if($FileType == "jpg" || $FileType == "png" ||  $FileType == "jpeg")
{
    $file_dest = 'image_upload/'.$file_name;
    move_uploaded_file($file_tmp_name, $file_dest);
    $actualitees = new actualitees($_POST['id'],$_POST['description'],"image",$file_dest);
    $actualiteesC = new actualiteesC();
    $actualiteesC->ajouterActualitees($actualitees);
    header('Location: gestionfichier.php');
}
else if($FileType == "mp4" || $FileType == "mov" ||  $FileType == "wmmv"){

    $file_dest = 'video_upload/'.$file_name;
    move_uploaded_file($file_tmp_name, $file_dest);
    $actualitees = new actualitees($_POST['id'],$_POST['description'],"video",$file_dest);
    $actualiteesC = new actualiteesC();
    $actualiteesC->ajouterActualitees($actualitees);
    header('Location: gestionfichier.php');
}
else{
    echo '<script>alert("type fichier invalid");window.location.href = "gestionfichier.php";
</script>';
}


?>