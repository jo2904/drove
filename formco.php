<?php

$ID = $_POST['identifiant'];
$Passwd = $_POST['mot_de_passe'];

if($ID == 'TON ID' AND $Passwd == 'TON PASSWD'){
  header('Location:perso.php ');
  exit();
}
else{
  echo 'mot de passe incorect';
}
