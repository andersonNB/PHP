<?php

if (isset($_GET['textoArea'])) {


    //Capturamos los valores del formulario
    $formuText = $_GET['textoArea'];

    $archivo = $_GET['archivo'];

    if (isset($_GET['accionCargar'])) {
        $cargar = $_GET['accionCargar'];
        $cargarG = '';
    } else {
        $cargarG = $_GET['accionGuardar'];
        $cargar = '';
    }



    if ($cargar == 'Cargar') {

        //De esta manera leemos el contenido del archivo texto.txt
        $texto = file_get_contents($archivo);
    } else if ($cargarG == 'Guardar')
        //De esta forma modificamos/guardamos el contenido de nuestro archivo
        file_put_contents($archivo, $formuText);
}



// Array

$autos = array(
    array("Fort", 22000, 2018),
    array("BMW", 22000, 2017),
    array("Volvo", 22000, 2016),
    array("Saab", 22000, 2015)
);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Archivo</title>
</head>

<body>
    <h1>Editar Archivo De Texto</h1>
    <form action="">
        <label for="">Nombre del Archivo:</label>
        <input type="text" name="archivo" id="" value="<?php echo isset($archivo) ? $archivo : ''; ?>" />
        <br />
        <textarea name="textoArea" id="" cols="40" rows="10"><?php echo isset($texto) ? $texto : ''; ?></textarea>
        <br />
        <input type="submit" value="Guardar" name="accionGuardar">
        <input type="submit" value="Cargar" name="accionCargar">

    </form>

    <div>
        <?php
        echo "Modelo: " .$autos[0][0] ."<br/>". "Precio: " . $autos[0][1] . "<br/>". "Año: " . $autos[0][2];
        ?>
    </div>
</body>

</html>