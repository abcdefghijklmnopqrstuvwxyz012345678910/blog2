<?php
$bdd = new PDO
('mysql:host=localhost;dbname=blog2;charset=utf8', 'leo', 'mercredi');
require_once 'config.php';
$posts = get_all_posts();
var_dump($_GET);
$title=$_GET['title'];
$req = $bdd->prepare('DELETE FROM posts WHERE id='.$_GET[':id']);
$req -> bindParam(':title',$title);
$req->execute();
//var_dump($bdd);
//$result = $bdd->query("select * from test;");
//var_dump($result->fetchAll());
?>
<html>
<head>
<title>Effacer</title>
</head>
<body bgcolor="red">
<form>
<center>
<h1>Choisir l'article à effacer</h1></br>
</br><select name="choix">
	<?php foreach($posts as $post): ?>
	<option value='<?= $post['title'] ?>'><?= $post['title'] ?></option>
<?php endforeach; ?>
</select>
</br></br>
<input type="button" value="Retour" onclick="location.href='index.php'"/>
<input type="submit" value="Effacer">
</center>
</body>
</html>
