<!--CRUD-->
<?php   include("../template/header.php"); #salimos de la carpeta section y entramos a la carpeta template SALIMOS CON 2 PTS ..?>
<?php include("../config/db.php"); #BD ?> 

<?php   
#validamos la informacion que llegar del formulario, crearmos variables para poder Recepcionar
#para la validaciona utilizamos IF TERNARIO, en () lo que voy a validar 
#isset va evaluar que no este vacio, es decir si tiene algo vamos a poner el valor que esta llegando $_POST, dento del post va el NOMBRE
#? significa SI y : significa de lo contrario
$txtID=(isset($_POST['txtID'])) ? $_POST['txtID'] : "";#SI hay algo en txtID, entonces txtID va a ser igual a esta variable $txtID, de lo contrario va quedar vacio
$txtNombre=(isset($_POST['txtNombre'])) ? $_POST['txtNombre'] : "";
$txtImagen=(isset($_FILES['txtImagen']['name'])) ? $_FILES['txtImagen'] ['name']: "";
$accion=(isset($_POST['accion'])) ? $_POST['accion'] : "";

#aca estamos evaluando la variable $accion que igualamos anteriormente
switch($accion){
    case "Agregar":
        $query=$conn->prepare("INSERT INTO books(nombre, imagen) VALUES (:nombre,:imagen);");
        //parametros
        $query->bindParam(':nombre',$txtNombre);
        $query->bindParam(':imagen',$txtImagen);
        //ejecutamos la sentencia
        $query->execute();
        break;
    case "Modificar":

        break;
    case "Cancelar":

        break;
    case "Seleccionar":
        break;
    case "Borrar":
        $query=$conn->prepare("DELETE FROM books WHERE id=:id");
        //parametros
        $query->bindParam(':id',$txtID);
        //ejecutamos la sentencia
        $query->execute();
        break;
}
#print_r($_POST);
#Elementos php que nos van a permitir hacer o imprimir informacion de la cual se esta enviando, Todo esto lo hacemos a traves del metodo POST 
#ENCTYPE, para que el formulario acepte fotografias, archivos


$query=$conn->prepare("SELECT * FROM books");
$query->execute();
#Almacenar la informacion, en una variable para que lo pueda mostrar
#fetchAll recupera todos los registros para poder mostrarlos en la variable $listaLibros
$listaLibros=$query->fetchAll(PDO::FETCH_ASSOC);

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
            <?php foreach ($listaLibros as $libro) {
                # dentro del foreach ponemos la listra de libros que esta en la variables $listaLibros y que lo lea como si fuera un libro
             ?>
            <tr>
                <td><?php echo $libro['id'];?></td>
                <td><?php echo $libro['nombre'];?></td>
                <td><?php echo $libro['imagen'];?></td>
                <td>
                    <!--form:post-->
                <form method="post">
                    <input type="hidden" name="txtID" id="txtID" value="<?php echo $libro['id'];?>"/>
                    <input type="submit" name="accion" value="Seleccionar" class="btn btn-primary"/>
                    <input type="submit" name="accion" value="Borrar" class="btn btn-danger"/>
                </form>
                
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>


<?php include("../template/footer.php"); ?>