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
        $db = new App\Database('blog');
        $datas = $db->query('SELECT * FROM articles');
        var_dump($datas);

        /*$pdo = new PDO('mysql:dbname=blog;host=localhost', 'root', 'root');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $res = $pdo->query('SELECT * FROM articles');
        $datas = $res->fetchAll(PDO::FETCH_OBJ);
        var_dump($datas[0]->titre);*/
        //$count = $pdo->exec('INSERT INTO articles SET titre="Mon titre", date="' . date('Y-m-d H:i:s') . '"');

        ?>
    </div>

    </main><!-- /.container -->

  </body>
</html>
