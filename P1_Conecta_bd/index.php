<?php 
    $miservidor = "127.0.0.1";
    $usario = "root";
    $contra - "";
    $mibd = "bd_agencia";

    $miconexion = new mysqli ($miservidor, $usuario, $contra, $mibd);

    if ($miconexion->connect_error) {
        die("Fallo la conexion revisa tus datos de conexion" . $miconexion->connect_error);
    }
    echo "Bienvenido al servidor de base de datos";

    $laconsulta = "SELECT *FROM auto";

    print("<table>");

    $resultado = $miconexion->query($laconsulta);
    foreach($resultado as $rows) {
        print("<tr>");
        print("<tr>".$rows["Marca"]."</td>");
        print("<tr>".$rows["Modelo"]."</td>");
        print("<tr>".$rows["Color"]."</td>");
        print("</tr>");
    }
print("</table>");
?>