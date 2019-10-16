<?php
$bdd = new PDO
('mysql:host=localhost;dbname=blog2;charset=utf8', 'leo', 'mercredi');
require_once 'config.php';
$posts = get_all_posts();
var_dump($_GET);
$title=$_GET['title'];
$req = $bdd->prepare('DELETE FROM posts WHERE title='.$post['title']);
$req -> bindParam(':title',$title);
$req->execute();
//var_dump($bdd);
//$result = $bdd->query("select * from test;");
//var_dump($result->fetchAll());
?>
<html>
<head>
<title>Mettre à jour</title>
</head>
<body bgcolor="blue">
<form>
<center>
<h1><?echo $option?></h1></br>
</br>
<input type="text" value='<?= $post['title'] ?>'></input>
<input type="button" value="Retour" onclick="location.href='maj.php'"/>
<input type="submit" value="Enregistrer">
</center>
</body>
</html>
