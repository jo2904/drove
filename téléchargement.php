<?php
$uploaddir = $_POST['statut'];
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

echo $uploaddir;
echo '<pre>';
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "Le fichier est valide, et a été téléchargé avec succès. ";
} else {
    echo "Erreure";
}
?>
