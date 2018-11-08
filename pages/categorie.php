<?php
use App\Table\Article;
use App\Table\Categorie;
use App\App;

$categorie = Categorie::find($_GET['id']);
if($categorie === false){
    App::notFound();
}
$articles = Article::lastByCategory($_GET['id']);
$categories = Categorie::all();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">

    
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#">Navbar</a>
    </nav>

    <main role="main" class="container">

      <div class="starter-template" style="padding-top: 100px;">

      <h1><? $categorie->titre ?></h1>
        
        <div class="row">
        <div class="col-sm-8">

        <?php foreach ($articles as $post): ?>
      
          <h2><a href="<?= $post->url ?>"><?= $post->titre; ?></a></h2>

          <p><em><?= $post->categorie; ?></em></p>

          <p><?php $post->extrait; ?></p>

          <?php endforeach; ?>

          </div>
          <div class="col-sm-4">
          <ul>
          <?php foreach(\App\Table\Categorie::all() as $categorie): ?>
          <li><a href="<?= $categorie->url; ?>"><?= $categorie->titre; ?></a></li>
          <?php endforeach; ?>
          </ul>
          </div>
          </div>


        
    </div>

    </main><!-- /.container -->

  </body>
</html>
