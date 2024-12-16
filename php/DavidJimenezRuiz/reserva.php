<form action="reserva.php" method="POST">
    <label for="">Nombre:</label><br>
    <input type="text" name="nombre"><br>

    <label for="">Apellidos:</label><br>
    <input type="text" name="apellidos"><br>

    <label for="">Email:</label><br>
    <input type="email" name="email"><br>

    <label for="">DNI:</label><br>
    <input type="text" name="dni"><br>

    <label for="">Dia Entrada:</label><br>
    <input type="date" name="tiempo"><br>

    <label for="">Dias Reservas:</label><br>
    <input type="text" name="total"><br>


    <label for="">Haitacion:</label><br>
    <select name="habitaciones" id="habitaciones">
            <option value="30">Simple</option>
            <option value="50">Doble</option>
            <option value="80">Triple</option>
            <option value="100">Suite</option>
            </select><br>

    <input type="submit" value="Enviar"><br>

</form>
<?php
    if (isset($_POST["nombre"])){
        echo "Hola " . htmlspecialchars($_POST["nombre"]) . " ";
    }
    if (isset($_POST["apellidos"])){
        echo "Con apellidos " . htmlspecialchars($_POST["apellidos"]) . " ";
    }
    if (isset($_POST["email"])){
        echo "Con email " . htmlspecialchars($_POST["email"]) . " ";
    }
    if (isset($_POST["dni"])){
        echo "Y dni " . htmlspecialchars($_POST["dni"]) . " ";
    }
    if (isset($_POST["tiempo"])){
        echo "Tienes previsto entrar el " . htmlspecialchars($_POST["tiempo"]) . " ";
    }
    if (isset($_POST["total"])){
        echo "Y estar " . htmlspecialchars($_POST["total"]) . " dias ";
    }
    if (isset($_POST["habitaciones"])){
        echo "En la habitacion " . htmlspecialchars($_POST["habitaciones"]) . " ";
    }
?>