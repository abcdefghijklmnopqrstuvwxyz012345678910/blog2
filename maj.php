<?php
$bdd = new PDO
('mysql:host=localhost;dbname=blog2;charset=utf8', 'leo', 'mercredi');
require_once 'config.php';
$posts = get_all_posts();
?>
<html>
<head>
<title>Mettre à jour</title>
</head>
<body bgcolor="blue">
<form>
<center>
<h1>Choisir l'article à modifier</h1></br>
</br><select name="choix">
	<?php foreach($posts as $post): ?>
	<option value='<?= $post['title'] ?>'><?= $post['title'] ?></option>
<?php endforeach; ?>
</select>
</br></br>
<input type="button" value="Retour" onclick="location.href='index.php'"/>
<input type="button" value="Choisir" onclick="location.href='modif.php'">
</center>
</body>
</html>
