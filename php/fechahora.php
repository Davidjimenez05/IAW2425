<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    </head>
    <body>
        <?php
$day= array("domingo","lunes","martes","miercoles","jueves","viernes","sábado");
$month= array("enero","febrero","marzo","abril","mayo","junio","julio","agosto","septiembre","octubre","noviembre","diciembre");

echo $day[date('w')]." ".date('d')." de ".$month[date('n')-1]. " del ".date('Y') ;
?>
</body>
</html>