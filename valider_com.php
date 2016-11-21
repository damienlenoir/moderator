<?php

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=*******DB Name********;charset=utf8', 'root', '');
}
catch(Exception $e)
{
     die('Erreur : '.$e->getMessage());
}


$bdd->exec('UPDATE commentaires SET verif = 1 WHERE commentaires .id = ' . $_POST['id'] . ' ');




?>				
 <?php
header ('Location: *******redirection file here ********.php');

?>
 