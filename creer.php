<?php
$bdd = new PDO
('mysql:host=localhost;dbname=blog2;charset=utf8', 'leo', 'mercredi');
var_dump($_GET);
$title=$_GET['title'];
$content=$_GET['content'];
$req = $bdd->prepare("INSERT INTO posts VALUES(:id,:title,:content)");
$req -> bindParam(':id',$id);
$req -> bindParam(':title',$title);
$req -> bindParam(':content',$content);
$req->execute();
//var_dump($bdd);
//$result = $bdd->query("select * from test;");
//var_dump($result->fetchAll());
?>
<html>
<head>
<title>Creer</title>
</head>
<body bgcolor="green">
<form>
<center>
<h1>Créer un nouvel article</h1></br>
</br><input type="text" name="title" placeholder="Titre"></br></br>
<input type="text" size="100" name="content" placeholder="Contenu"></br></br>
<input type="button" value="Retour" onclick="location.href='index.php'"/>
<input type="submit" value="Envoyer">
</center>
</body>
</html>
