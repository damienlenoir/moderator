<?php

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=*******DB Name*********;charset=utf8', 'root', '');
}
catch(Exception $e)
{
     die('Erreur : '.$e->getMessage());
}


$bdd->exec('DELETE FROM commentaires WHERE commentaires .id = ' . $_POST['id'] . ' ');




?>				
 <?php
header ('Location: *******redirection file here ********');

?>