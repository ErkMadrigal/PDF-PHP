<?php include('database.php');

$claseDataBase = new database();

$sql="SELECT * FROM canto";

    $PDFS = $claseDataBase->obtenerConexion()->query($sql);
    $PDFS = $PDFS->fetchAll();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Reporte</title>
  </head>
  <body>
    
    <div class="container">
    <h1 class="text-center">ejemplo de reportes</h1>
    <form action="" method="POST" class="form-iline">
        <label for="" class="mr-2 my-1">categoria</label>
        <select name="cat" required class="custom-select my-1 mr-sm-2" id="">
            <option value="">Seleccionar</option>
            <?php foreach($PDFS as $PDF):?>
                <option value="<?php echo $PDF['IdCanto']?>"><?php echo $PDF['Titulo']?></option>
            <?php endforeach;?>
        </select>
        <button type="submit" name="mostrar" Class="btn btn-primary my-1">Mostrar</button>
    </form>
    </div>

    <?php if(isset($_POST['mostrar'])):?>
        <?php 
        
        $seleccionado=$_POST['cat'];

        $sqlLetra="SELECT Titulo, Letra FROM canto WHERE IdCanto='$seleccionado'";
        $letra = $claseDataBase->obtenerConexion()->query($sqlLetra);
        $letra = $letra->fetch();
        ?>
        <div class="m-5">
            <h1><?php echo $letra['Titulo']?></h1>
            <p><?php echo $letra['Letra']?></p>
        </div>
        <a href="../reportePFD.php?Id=<?php echo $seleccionado;?>" class="m-5"><button type="submit" Class="btn btn-primary my-1">imprimir</button></a>
        

    <?php else:?>
    <div class="alert alert-danger alert-dismissible fade show m-5" role="alert">
        <strong>Selecciona una opcion</strong> informacion no seleccionada.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif;?>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>