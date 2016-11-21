<?php

$path = $_SERVER['PHP_SELF'];
 $file = basename ($path);
 $page = substr($file, 0, -4);
 $date = date("Y-m-d");
try

{
    $bdd = new PDO('mysql:host=localhost;dbname=*****BDDname*******;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
$req = $bdd->prepare('INSERT INTO commentaires (id, id_article, auteur, commentaire, date, verif) VALUES(:id, :id_article, :auteur, :commentaire, :date, :verif)');
$req->execute(array(
					'id' => null,
					'id_article' => $_POST['id_article'],
                    'auteur' => $_POST['auteur'],
                    'commentaire' => $_POST['commentaire'],
                    'date' => $date,
					'verif' => 0
                    ));
				
$mail = '******destination email******'; 
if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) 
{
	$passage_ligne = "\r\n";
}
else
{
	$passage_ligne = "\n";
}
$message_txt = "You have a new comment";
$message_html = "<html><head></head><body><b>Hello from MODERATOR</b>, <br>Please connect to Moderator to see it.</body></html>";
$boundary = "-----=".md5(rand());
$boundary_alt = "-----=".md5(rand());
$sujet = "You have a new comment";
$header = "From: \"WeaponsB\"<********email here********>".$passage_ligne;
$header.= "Reply-to: \"WeaponsB\" <********email here********>".$passage_ligne;
$header.= "MIME-Version: 1.0".$passage_ligne;
$header.= "Content-Type: multipart/mixed;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
$message = $passage_ligne."--".$boundary.$passage_ligne;
$message.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary_alt\"".$passage_ligne;
$message.= $passage_ligne."--".$boundary_alt.$passage_ligne;
$message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;
$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
$message.= $passage_ligne.$message_txt.$passage_ligne;
$message.= $passage_ligne."--".$boundary_alt.$passage_ligne;
$message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
$message.= $passage_ligne.$message_html.$passage_ligne;
$message.= $passage_ligne."--".$boundary_alt."--".$passage_ligne;
$message.= $passage_ligne."--".$boundary.$passage_ligne;
 
mail($mail,$sujet,$message,$header);
 
header('Location: *******redirection********');
?>
