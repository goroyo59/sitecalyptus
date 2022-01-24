<?php

const ERR_REQUIRED = "Veuillez renseigner ce champ !";
const ERR_SHORT_TITLE = "Le titre est trop court";
const ERR_CONTENT_SHORT = "L'article est trop court";
const ERR_IMG_URL = "L'image doit avoir un url valide";

$filename = __DIR__ . "/data/articles.json";
$articles = [];

$errors =[
    'title'=> '',
    'image'=> '',
    'categorie'=> '',
    'content'=> ''

];
$_GET = filter_input_array(INPUT_GET,FILTER_SANITIZE_SPECIAL_CHARS);
$id = $_GET['id'] ?? '';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(file_exists($filename)){
        $articles = json_decode(file_get_contents($filename),true) ?? [];
    }

  $_POST = filter_input_array(INPUT_POST,[
      'title' => FILTER_SANITIZE_STRING,
      'image' => FILTER_SANITIZE_URL,
      'categorie' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
      'content' => [
          'filter' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
          'flags' => FILTER_FLAG_NO_ENCODE_QUOTES
      ]
      ]);

      $title = $_POST['title'] ?? '';
      $image = $_POST['image'] ?? '';
      $categorie = $_POST['categorie'] ?? '';
      $content = $_POST['content'] ?? '';
      if(!$title){
          $errors['title'] = ERR_REQUIRED;
      }else if(mb_strlen($title < 3)){
          $errors['title'] = ERR_SHORT_TITLE;

      }
      if($image){
          $errors['image'] = ERR_REQUIRED;
      }else if(!filter_var($image,FILTER_VALIDATE_URL)){
       $errors['image'] = ERR_IMG_URL;
      };

      if(!$categorie){
        $errors['categorie'] = ERR_REQUIRED;

    };
    if(!$content){
        $errors['content'] = ERR_REQUIRED;
    }else if(mb_strlen($content<50)){
        $errors['content'] = ERR_CONTENT_SHORT;

    }
  //  echo"<pre>";
    if(empty(array_filter($errors,fn ($e)=>$e !== ''))){
     //   echo 'cest ok';
     $articles = [...$articles,[
         'title'=> $title,
         'image'=> $image,
         'categorie'=> $categorie,
         'content'=> $content,
         'id'=> time()
     ]
    ];
    file_put_contents($filename,json_encode($articles));
    header('Location:/');
    }//else{
      //  print_r($errors);
    //}
   //echo"</pre>";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once 'includes/head.php' ?>
    <link rel="stylesheet" href="/public/css/add-article.css">
    <title>Article</title>
</head>

<body>
    <div class="container">
        <?php require_once 'includes/header.php' ?>

        <div class="content"> 
            <div class="block p 20 form-container">
                <h1><?= $id ?>un article</h1>
                <form action="/add-article.php" method = "POST">
                    <div class="form-control">
                        <label for="title">concert</label>
                        <input type="text" name="title" id="title">
                        <p class = "text-error"<?= $errors['title']  ?>></p> 
                    </div>
                    <div class="form-control">
                        <label for="image">Album</label>
                        <input type="text" name="image" id="image">
                        <p class = "text-error"<?= $errors['image']  ?>></p>
                    </div>
                    <div class="form-control">
                        <label for="categorie">Catégorie</label>
                        <select name="" id="">
                        <option value="Metal">Metal</option>
                        <option value="classique">classique</option>
                        <option value="Rock progressif">Rock progressif</option>
                        <option value="Ambiance">Ambiance</option>
                        <option value="Pop">Pop</option>
                        <option value="Reggae">Reggae</option>
                        </select>
                        <p class = "text-error"<?= $errors['categorie']  ?>></p>
                    </div>
                    <div class="form-control">
                        <div for="content">Commentaires</div>
                        <textarea name="content" id="content"></textarea>
                        <p class = "text-error" <?= $errors['content']  ?>>
                    </div>
                    <div class="form-action">
                        <a href="/" class="btn btn-secondary" type="button">Annuler</a>
                        <button class="btn btn-primary">Sauvegarder</button>
                    </div>
                </form>
            </div> 

          </div>


        </div>

        <?php require_once 'includes/footer.php' ?>

    </div>











</body>

</html>