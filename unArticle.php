<?php
$articles = [
    [
        "id" => 1,
        "title" => "Le Billard",
        "content" => "le billard blablabla",
        "image" => "billes.png"
    ],
    [
        "id" => 2,
        "title" => "Les enfants",
        "content" => "les enfants blablabla",
        "image" => "enfants.png"
    ],
    [
        "id" => 3,
        "title" => "Les mains",
        "content" => "les mains blablabla",
        "image" => "mains.png"
    ],
];

$id =$_GET['id'];//--> récupération de l'id dans l'url

$article = null;
if ($id) {
    foreach ($articles as $a) {
        if ($a['id'] == $id) {
            $article = $a;
            break;
        }
    }
}

if ($article === null) {
    echo "Article introuvable.";
    exit;
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $article['title'] ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg bg-success">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
    </div>
</nav>
<a href="articles.php">retour à la liste des articles</a>
<div class="container">
    <?php if($article!=null){ ?>
    <div class="card" style="width: 18rem;">
        <img src="images/<?= $article['image'] ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?= $article['title'] ?></h5>
            <p class="card-text"><?= $article['content'] ?></p>
        </div>
    </div>
    <?php }?>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>