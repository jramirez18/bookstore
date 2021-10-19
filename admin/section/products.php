<!--CRUD-->
<?php   include("../template/header.php"); #salimos de la carpeta section y entramos a la carpeta template SALIMOS CON 2 PTS ..?>

<?php   
#validamos la informacion que llegar del formulario, crearmos variables para poder Recepcionar
#para la validaciona utilizamos IF TERNARIO, en () lo que voy a validar 
#isset va evaluar que no este vacio, es decir si tiene algo vamos a poner el valor que esta llegando $_POST, dento del post va el NOMBRE
#? significa SI y : significa de lo contrario
$txtID=(isset($_POST['txtID'])) ? $_POST['txtID'] : "";#SI hay algo en txtID, entonces txtID va a ser igual a esta variable $txtID, de lo contrario va quedar vacio
$txtNombre=(isset($_POST['txtNombre'])) ? $_POST['txtNombre'] : "";
$txtImagen=(isset($_FILES['txtImagen']['name'])) ? $_FILES['txtImagen'] ['name']: "";
$accion=(isset($_POST['accion'])) ? $_POST['accion'] : "";

#y para comparar imprimimos los valores,y aseguramos que la informacion esta llegando
echo $txtID."<br/>";
echo $txtNombre."<br/>";
echo $txtImagen."<br/>";
echo $accion."<br/>";

#conexion a la BD
$host="localhost";
$bd="bookstore";
$user="root";
$pwd="";

#Seguido realizamos una instruccion try
try {
    //PDO es el que nos permite comunicar directamente con la bd, creando una conexion
    $conn= new PDO("mysql:host=$host; dbname=$bd",$user,$pwd);
    //imprimimos si la conexion se llevo a cabo
    if ($conn) {
        # code...
        echo "CONECTADO A LA BD";
    }
} catch (Exception $ex) {
    //En caso dado de que exista un error 
    echo $ex->getMessage();
}


#aca estamos evaluando la variable $accion que igualamos anteriormente
switch($accion){
    case "Agregar":
        $query=$conn->prepare("INSERT INTO books(nombre, imagen) VALUES ('.NET CORE3','core3.png');");
        //ejecutamos la sentencia
        $query->execute();
        echo "Presionado boton Agregar";
        break;
    case "Modificar":
        echo "Presionado boton Modificar";
        break;
    case "Cancelar":
        echo "Presionado boton Cancelar";
        break;
}
#print_r($_POST);
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