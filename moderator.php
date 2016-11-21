<!DOCTYPE html>
<html>
<head>
<style> 
.flex-container {
    display: -webkit-flex;
    display: flex;  
    -webkit-flex-flow: row wrap;
    flex-flow: row wrap;
    text-align: center;
}

.flex-container > * {
    padding: 15px;
    -webkit-flex: 1 100%;
    flex: 1 100%;
}

.article {
    text-align: left;
}

header {background: black;color:white;}
footer {background: #aaa;color:white;}
.nav {background:#eee;}

.nav ul {
    list-style-type: none;
	padding: 0;
}
			
.nav ul a {
	text-decoration: none;
}

@media all and (min-width: 768px) {
    .nav {text-align:left;-webkit-flex: 1 auto;flex:1 auto;-webkit-order:1;order:1;}
    .article {-webkit-flex:5 0px;flex:5 0px;-webkit-order:2;order:2;}
    footer {-webkit-order:3;order:3;}
}
</style>
</head>
<body>

<div class="flex-container">
<header>
  <h1>Moderator</h1>
</header>

<nav class="nav">
<ul>
  <img style="border:2px solid orange; margin-left:50px;" src="moderator.PNG">
  
</ul>
</nav>

<article style="min-height:650px;" class="article">
<?php
$mdp = $_POST['mdp'];
if ($mdp == "******your password here********")

{
	try
{
    $bdd = new PDO('mysql:host=localhost;dbname=******DB Name again*******;charset=utf8', 'root', '');
}
catch(Exception $e)
{
      die('Erreur : '.$e->getMessage());
}
$reponse = $bdd->query('SELECT * FROM `commentaires` WHERE verif="0"  ');
while ($donnees = $reponse->fetch())
{
    echo '<p style="border-top:1px solid orange;"> Le ' . htmlspecialchars($donnees['date']) . ' par <strong>' . htmlspecialchars($donnees['auteur']) . '</strong></p>';
	echo '<p><i>' . htmlspecialchars($donnees['commentaire']) . '</i></p>';
	echo '<p> ID : ' . htmlspecialchars($donnees['id']) . '</p>';
	


	echo '<div style="margin-left:80%;">';
    echo '<form action="valider_com.php" method="post">';
    echo         '<input type="hidden" name="id" value=" ' . htmlspecialchars($donnees['id']) . ' " />';
    echo        '<input type="submit" value="Valider" />';
    echo    '</form>';
    echo    '<form action="supprimer_com.php" method="post">';
    echo        '<input type="hidden" name="id" value=" ' . htmlspecialchars($donnees['id']) . ' " />';
    echo        '<p><input type="submit" value="Supprimer" /></p>';
    echo    '</form>';
    echo '</div>';
}
$reponse->closeCursor();
}
	else

{
    echo "Wrong Password, please try log in again.";
}

					

 
?>
  
</article>

<footer><a href="https://github.com/damienlenoir">Comment's moderator</a></footer>
</div>

</body>
</html>
