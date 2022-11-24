<html>
    <body>
    <form action="Ejercicio4.php" method="POST">
            <h2>Agenda Virtual PHP</h2>
            <h2>Contenido del archivo:</h2>
<?php

# PARA MOSTRAR EL CONTENIDO DEL TXT
        
    # Abro el txt 'r'

        $nombreArch = "Ejercicio4.txt";
        $file = fopen($nombreArch, "r");

    # Mostrar el contenido

        while (!feof($file)) {
            $linea = fgets($file);
            print "$linea <br>";
        }
            
        fclose($file);

    # ---------------------------------------------------------------

?>

            <h1>Contactos</h1>
            <p>Para guardar presione el boton</p>
            Nombre: <input type="text" name="nombre"><br>
            Trabajo:  <input type="text" name="trabajo"><br>
            Telefono: <input type="number" name="tlf"><br>
            Dirección: <input type="text" name="direccion"><br>
            Otras: <input type="text" name="otro"><br>
            <input type="submit" name="guardar" value="Guardar">
            <input type="button" value="Reset" onclick="reset()"><br><br>
            Buscar un usuario:
            <input type="text" name="filtrarnombre">
            <input type="submit" name="buscar" value="Buscar">
        </form>
    </body>
</html>

<?php
   
    #PARA AÑADIR USUARIOS AL TXT
        $guardar = $_REQUEST['guardar'];

        if (isset($guardar)) {

            # Abro el txt 'a+'
            
                $nombreArch = "Ejercicio4.txt";
                $archivo = fopen($nombreArch, 'a');

            # Declarar variables

                $nombre = $_REQUEST['nombre'];
                $trabajo = $_REQUEST['trabajo'];
                $telefono = $_REQUEST['tlf'];
                $direccion = $_REQUEST['direccion'];
                $otro = $_REQUEST['otro'];

            # Insertar los usuarios en el txt 

                if (strlen($nombre > 1 && strlen($telefono) == 9) ) {
                    fwrite($archivo,"$nombre, $trabajo, $telefono, $direccion, $otro".PHP_EOL);
                    echo "Se ha añadido el usuario al archivo<br>";
                }
                else {
                    echo "Faltan campos por rellenar o mal escritos";
                }
                fclose($archivo);
        }

    # ---------------------------------------------------------------


    # PARA BUSCAR UN USUARIO O VARIOS EN CONCRET0  
        $buscar = $_REQUEST['buscar'];

        if (isset($buscar)) {
        # Abro el txt 'r'
            
            $nombreArch = "Ejercicio4.txt";
            $fich = fopen($nombreArch, 'r');

            while (!feof($fich)) {
                $line = fgets($fich);
                $users = explode(",",$line);
                $buscarnombre = $_REQUEST['filtrarnombre'];

                $nombre = $users[0];
                $trabajo = $users[1];
                $telefono = $users[2];
                $direccion = $users[3];
                $otro = $users[4];

                if (trim(strtoupper($buscarnombre)) === trim(strtoupper($nombre))) {
                    echo "Contacto: $nombre $trabajo $telefono $direccion $otro <br>";
                }
            }
            fclose($fich);
        }
?>
