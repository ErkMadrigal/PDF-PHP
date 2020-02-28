<?php 

    include('class/database.php');

    $claseDataBase = new database();

    $id=$_GET['Id'];

    $sql="SELECT * FROM canto WHERE IdCanto='$id'";

    $lyrics = $claseDataBase->obtenerConexion()->query($sql);
    $lyrics = $lyrics->fetch();

?>
    <h1><?php echo $lyrics['Titulo'];?></h1>
    <h4><?php echo $lyrics['Autor'];?></h>
    <p><?php echo $lyrics['Letra'];?></p>
