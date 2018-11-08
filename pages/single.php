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

      <?php
      use App\App;
      use App\Table\Categorie;
      use App\Table\Article;

      $post = Article::find($_GET['id']);
      if($post === false){
        App::notFound();
      }
      App::setTitle($post->titre);
      ?>

        <h1><?= $post->titre; ?></h1>

        <p><em><? $post->categorie; ?></em></p>

        <p><?= $post->contenu; ?></p>

    </div>

    </main><!-- /.container -->

  </body>
</html>
