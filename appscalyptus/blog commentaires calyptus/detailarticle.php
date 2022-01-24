<?php
$filename = __DIR__ . 'data/articles.json';
$articles = [];

$_GET = filter_input_array(INPUT_GET,FILTER_SANITIZE_SPECIAL_CHARS);
$id = $_GET['id'] ?? '';

if(file_exists($filename)){
    $articles = json_decode(file_get_contents($filename), true) ?? [];
    $articleIndex = array_search($id, array_column($articles,'id'));
    $article = $articles[$articleIndex];
}

?>
<!DOCTYPE html>
<html lang="fr">


<head>
    <?php require_once 'includes/head.php' ?>
    <link rel="stylesheet" href="/public/Css/detailarticle.css">
    <title>My BLOG</title>
</head>

<body>
    <div class="container">
        <?php require_once 'includes/header.php' ?>

      <div class="content"></div>
      <div class="article-container">
          <div class ="article-cover-img" style="background-image: url(<?= $article['image']?>)"></div>
          <h1 class = "article-title"><?= $article['title']?></h1>
          <div class="article-content"><?=$article['content']?></div>
      </div>

        <?php require_once 'includes/footer.php' ?>

    </div>











</body>

</html>