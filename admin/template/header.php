<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <!--Variables de redireccion, donde $_SERVER['HTTP_HOST'] nos da el nombre del host=localhost, concatenado con http+website-->
    <?php $url="http://".$_SERVER['HTTP_HOST']."/projects/2021/php/sitio-web-libros"   ?>
      <!--b4-nav-minimal-a-->
      <nav class="navbar navbar-expand navbar-light bg-light">
          <div class="nav navbar-nav">
              <a class="nav-item nav-link active" href="#">
                   <span class="sr-only">(current)</span>Website Administrator</a>
              <a class="nav-item nav-link" href="<?php echo $url;?>/admin/home.php">Home</a> <!--Si no lo imprimos con echo aparace la URL como tal-->
              <a class="nav-item nav-link" href="<?php echo $url;?>/admin/section/products.php">Book manager</a>
              <a class="nav-item nav-link" href="<?php echo $url;?>/admin/section/close.php">Sign off</a>
              <a class="nav-item nav-link" href="<?php echo $url; ?>">See Website</a>
          </div>
      </nav>
      <div class="container">
        <br>
          <div class="row">