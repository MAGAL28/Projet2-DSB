<?php
try{
    $bdd = new PDO('mysql:host=localhost;dbname=DSB','root','root');
}
catch(Exception $e){
    die('Erreur : ' .$e->getMessage());
}
?>