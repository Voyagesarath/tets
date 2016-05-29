 <?php
    mysql_connect("localhost","root","") or die ("no se ha podido conectar a la BD");

    mysql_select_db("academ") or die ("no se ha podido seleccionar la BD");

    $sql = "SELECT id,Ncontrol,Nombre,Ncopias,archivo_nombre,archivo_tipo,archivo_peso FROM archivos";
    $consulta = mysql_query($sql) or die ("No se pudo ejecutar la consulta");

    While ($registro=mysql_fetch_assoc($consulta)){
        echo "<img src=\"ver.php?id=".$registro['id']."\">";
        echo "<br> numero de control: ".$registro['Ncontrol'];
        echo "<br> Nombre del personal: ".$registro['Nombre'];
        echo "<br> Numero de copias: ".$registro['Ncopias'];
        echo "<br> Nombre archivo: ".$registro['archivo_nombre'];
        echo "<br> Tipo archivo (MIME formato): ".$registro['archivo_tipo'];
        echo "<br> Peso: ".$registro['archivo_peso']." bytes.<br><br>";
    }

?> 