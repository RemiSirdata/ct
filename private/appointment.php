<?php

function getVar($name){
    return isset($_GET[$name]) ? $_GET[$name] : '';
}


$content = "Adresse IP : ".$_SERVER['SERVER_ADDR']."\n";
$content = "Nom : ".getVar('name') . "\n";
$content = "Téléphone : ".getVar('phone') . "\n";
$content = "Email : ".getVar('email') . "\n";
$content = "Date : ".getVar('date') . "\n";
$content = "Message : ".getVar('message') . "\n";

mail('osteo.ig@gmail.com','Nouveau rendez vous de '.getVar('name'),$content);

echo "Votre demande de rendez-vous a bien été prise en compte";