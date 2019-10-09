<!DOCTYPE html>
<?php
$bdd = new PDO('mysql:host=localhost;dbname=blog2;charset=utf8', 'leo', 'mercredi');
require_once 'config.php';

$posts = get_all_posts();
?>
<html lang="en">
<head>
    <title>Blog</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body bgcolor="grey">
    <div class="container">
        <h1 class="text-center">Mon Blog</h1>
        <div class="row">
            <?php foreach($posts as $post): ?>
                <div class="col-md-4">
                    <h2><?= $post['title'] ?></h2>
                    <p><?= $post['content'] ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
<form>
<center><input type="button" value="Créer" onclick="location.href='creer.php'"/>
<input type="button" value="Récuperer"/>
<input type="button" value="Mettre à jour"/>
<input type="button" value="Effacer"/></center>
</form>
</body>
</html>
