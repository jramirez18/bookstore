<!--CRUD-->
<?php   include("../template/header.php"); #salimos de la carpeta section y entramos a la carpeta template SALIMOS CON 2 PTS ..?>

<?php   
print_r($_POST);

#Elementos php que nos van a permitir hacer o imprimir informacion de la cual se esta enviando, Todo esto lo hacemos a traves del metodo POST 
#ENCTYPE, para que el formulario acepte fotografias, archivos
?>

<!--b4-grid-col COMANDO-->
<!--De la pantalla que equivale a 12 agarramos 5; y para llegar a 12 me va a faltar 7-->
<div class="col-md-5">
    <!--Formulario de agregar libros-->

    <!--COMANDO b4-card-head-foot-->
    <div class="card">
        <div class="card-header">
            Información del Libro
        </div>

        <div class="card-body"><!--dentro del CardBody colocamos el formulario-->
             <!--Utilizamos el constructor de plantillas COMANDO !crt-form-->
    <form method="POST" enctype="multipart/form-data"><!--Aca en el form ponemos las especificaciones de envio, El metodo-->
    <div class = "form-group">
    <label for="txtID">ID</label>
    <input type="text" class="form-control" name="txtID" id="txtID"  placeholder="ID">
    </div>

    <div class = "form-group">
    <label for="txtNombre">Nombre</label>
    <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder="Nombre">
    </div>

    <div class = "form-group">
    <label for="txtImagen">Imagen</label>
    <input type="file" class="form-control" name="txtImagen" id="txtImagen">
    </div>

   
    <!--COMANDO b4-bgroup-default-->
    <div class="btn-group" role="group" aria-label="">
        <button type="submit" name="accion" value="Agregar" class="btn btn-success">Agregar</button>
        <button type="submit" name="accion" value="Modificar" class="btn btn-warning">Modificar</button>
        <button type="submit" name="accion" value="Cancelar" class="btn btn-info">Cancelar</button>
    </div>
    </form>
        
        </div>
    </div>
</div><!--TERMINA COL 5-->


<div class="col-md-7">
    <!--Tabla de libros (Mostrar datos de los libros)-->
    <!--b4-table-default COMANDO-->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>2</td>
                <td>Aprende PHP</td>
                <td>Imagen.jpg</td>
                <td>Seleccionar | Borrar</td>
            </tr>
        </tbody>
    </table>
</div>


<?php include("../template/footer.php"); ?>