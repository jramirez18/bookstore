<!--B4-$, este comando nos da la estructura de bootstrap-->
<?php 
if ($_POST) {
    # header redirecciona a cierta pagina
    header('Location:home.php');
}

?>
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
      <!--B4-GRID-DEFAULT-->
      <div class="container">
          <div class="row">
              <!--le pusimos otra columna, para que se corra un poco el formulario-->
              <div class="col-md-4">
                  
              </div>
              <div class="col-md-4">
                  <br><br><br><br>
                  <!--B4-CARD-HEAD-FOOT-->
                  <div class="card">
                      <div class="card-header">
                          Login
                      </div>
                      <div class="card-body">
                          <!--Dentro del carda-body creamos un formulario-->
                          <!--COMANDO crt-form-login, con la extension The Powerful Bootstrap-->
                          <form method="">
                          <div class = "form-group">
                          <label>User</label>
                          <input type="text" class="form-control" name="user" placeholder="Enter a user">
                          </div>

                          <div class="form-group">
                          <label>Password</label>
                          <input type="password" class="form-control" name="password" placeholder="Password">
                          </div>
                          <button type="submit" class="btn btn-primary">Sign In</button>
                          </form>
                      </div>
                  </div>
              </div>
              
          </div>
      </div>
  </body>
</html>