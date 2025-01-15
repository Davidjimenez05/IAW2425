<?php
// Conexion con base de datos
    $servername = "sql308.thsite.top";
    $username = "thsi_38097507";
    $password = "**************";
    $bd = "****************";
    $enlace = mysqli_connect($servername, $username, $password, $bd);
    if (!$enlace){
        die("Ocurrio un problema con la conexión :" . mysqli_connect_error());
    }
// Construcción de la Query
    $query = "INSERT INTO usuarios(nombre,apellido,email) VALUES ('Pepeluich','Benalmadena','pepeluis@gmail.es')";
// Ejecución de la Query
    $resultado = mysqli_query($enlace,$query);
// Procesamiento de los resultados
    if ($resultado){
        echo "<p>Datos insertados correctamente</p>"
    }
    else {
        echo "<p>NO se pudo insertar los datos</p>"
    }
     
// Cierre de la conexión
mysqli_close($enlace);
?>