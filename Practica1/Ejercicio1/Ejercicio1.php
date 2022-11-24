<html>
    <head>
        <style>
            fieldset {
                background-color: lightblue;
                border-top: 2px solid blue;
                border-bottom: 2px solid blue;
            }
            legend {
                background-color: white;
                border: 2px solid blue;
            }
        </style>
    </head>
    <body>
        <form action="Ejercicio1.php">
            <fieldset>
                <legend>
                    Formulario
                </legend>
                Escriba el alto y ancho (0 < números <= 100) y mostraré un rectangulo de estrellas de ese tamaño.<br><br>

                <strong>Ancho:</strong> <input type="number" size="2" name="ancho"><br><br>
                <strong>Alto:</strong> <input type="number" size="2" name="alto"><br><br><br>

                <input type="submit" name="dibujar" value="Dibujar">
                <input type="button" name="borrar" value="Borrar" onclick="reset()">
            </fieldset>
        </form>
<?php

$alto = $_REQUEST['alto'];
$ancho = $_REQUEST['ancho'];

if (isset($_REQUEST['dibujar'])){
    if ($ancho <= 100 && $alto <= 100 && $ancho > 0 && $alto > 0) {
        for ($i=0; $i < $alto; $i++) {
            for ($j=0; $j < $ancho; $j++){
                print "* ";
            }
            print "<br>";
        }
    }
    else {
        print "Los números tienen que ser menores que 100";
    }
}

?>
    </body>
</html>