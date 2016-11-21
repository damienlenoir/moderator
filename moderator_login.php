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
					<h3>Moderator PassWord: </h3>
<form action="moderator.php" method="post">
<p> 
</select>
<input type="password" name="mdp" /><br>
    <input type="submit" value="Valider" />
</p>
</form>
</article>

<footer><a href="https://github.com/damienlenoir">Comment's moderator</a></footer>
</div>

</body>
</html>
