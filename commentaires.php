
<div ID="com">
<h3>Comments section </h3>
<?php
$path = $_SERVER['PHP_SELF'];
 $file = basename ($path);
 $page = substr($file, 0, -4);
 try
{
    $bdd = new PDO('mysql:host=localhost;dbname=******DDB name here********;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
$reponse = $bdd->query('SELECT * FROM `commentaires` WHERE id_article="' .$page. '" AND verif="1" ORDER BY `commentaires`.`date` DESC  LIMIT 0, 100 ');
while ($donnees = $reponse->fetch())
{
    echo '<p> Le ' . htmlspecialchars($donnees['date']) . ' par <strong>' . htmlspecialchars($donnees['auteur']) . '</strong></p>';
	echo '<p id="comment"><i>' . htmlspecialchars($donnees['commentaire']) . '</i></p>';
}
$reponse->closeCursor();
?>
<h3>Ajouter un commentaire sur cet article:</h3>


<form action="commentaire_post.php" method="post"> 
        
        <label for="auteur">Pseudo : </label> <input type="text" name="auteur" id="auteur" /><br>
		<label for="message">Comment : </label> <br>
        <textarea name="commentaire" rows="3" cols="140" type="text" id="commentaire"></textarea><br>
		
		<input type="hidden" name="id_article" value="<?php echo $page; ?>" />
        <input type="submit" value="Envoyer" />
		
</form>
    


    
</div>