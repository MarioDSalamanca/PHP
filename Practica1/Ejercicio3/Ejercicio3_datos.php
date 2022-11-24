<?php

$nombre = trim(strip_tags($_REQUEST['nombre']));
$estudios = $_REQUEST['estudios'];
$tlf = trim(strip_tags($_REQUEST['telefono']));
$matricula = $_REQUEST['matriculado'];
$datos = $_REQUEST['datos'];
$enviar = $_REQUEST['enviar'];

if (isset($enviar)) {
    if ($datos == 'pantalla') {

        if (strlen($nombre) > 1 && strlen($tlf) == 9 && isset($estudios)) {
            print "Su nombre es " . $nombre . "<br>";
            print "Su teléfono de contacto es el " . $tlf . "<br>";
            print "Estudia " . $estudios;
                if (isset($matricula)) {
                    print " (Está matriculado) <br>";
                }
                else {
                    print " (No está matriculado) <br>";
                }
        }
        else {
            print "No ha rellenado los campos requeridos";
        }
    }

    elseif ($datos == 'txt') {
        if (isset($enviar)) {
            $nombreArch = "Ejercicio3.txt";
            $archivo = fopen($nombreArch, "a");

            if (strlen($nombre) > 1 && strlen($tlf) == 9 && isset($estudios)) {
                fwrite($archivo,"Su nombre es " . $nombre . " \n");
                fwrite($archivo,"Su teléfono de contacto es el " . $tlf . " \n");
                fwrite($archivo, "Estudia " . $estudios);
                    if (isset($matricula)) {
                        fwrite($archivo," (Está matriculado) \n");
                    }
                    else {
                        fwrite($archivo, " (No está matriculado) \n");
                    }
                echo "Se ha creado el fichero <br>";
                echo "<a href=http://192.168.56.101/php/Practica1/Ejercicio3/Ejercicio3.txt>Para visualizar</a>";
                fwrite($archivo,PHP_EOL);
                
            }
            else {
                echo "No ha rellenado los campos requeridos";
            }
            fclose($archivo);
        }
    }
}

?>