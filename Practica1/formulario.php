
<html>
    <head>

    </head>
    <body>
       <form action="formulario.php" method="get">
        <h2>agenda virtual phph</h2>
        <?php
            $lectura=fopen("agenda.txt","r");
            echo"<h3> contactos </h3>";
            while (!feof($lectura)){
                $linea = fgets($lectura);
                echo $linea. "<br>";
                
               
            }
            fclose($lectura);
        ?>
        <h1>contactos:</h1>
        <p>Para guardar presione el boton</p>
        Nombre:<input type="text" name="nom" ><br>
        Trabajo:<input type="text" name="Trabajo" ><br>
        Telefono:<input type="text" name="Telefono" ><br>
        Direccion:<input type="text" name="direccion"><br>
        Otros:<input type="text" name="otros" ><br><br>
        <input type="submit" value="guardar" name="guardar">
        <input type="reset" value="borrar"><br><br><br>
        buscar usuario:<input type="text" name="usu"> <br>
        <input type="submit" value="mostrar_contactos" name="mostrar_contacto">  
       
        
       </form> 
        

    </body>
</html>
<?php
if(isset($_REQUEST['guardar'])){
    /*declaracion de varibales */
    $nombre=$_REQUEST['nom'];
    $trabajo=$_REQUEST['Trabajo'];
    $telefono=$_REQUEST['Telefono'];
    $direccion=$_REQUEST['direccion'];
    $otros=$_REQUEST['otros']; 
    /*variables archivo */
    $nombreArch="agenda.txt";
    $archivo=fopen($nombreArch,"a");
    /* introducimos los datos en txt*/
    fwrite($archivo,"$nombre,");
    fwrite($archivo,"$trabajo,");
    fwrite($archivo,"$telefono,");
    fwrite($archivo,"$direccion,");
    fwrite($archivo,"$otros".PHP_EOL);
    fclose($archivo); 
}  

if (isset($_REQUEST["mostrar_contacto"])){
    $fich=fopen("agenda.txt","r");
    $usu= $_REQUEST['usu'];
    while(!feof($fich)){
        $linea=fgets($fich);
        $bus=explode(",",$linea);
       
        /* variables de busqueda*/
        $usu= $_REQUEST['usu'];     
        $nombre=$bus[0];

        if($nombre==$usu){
            echo $bus[0], $bus[1], $bus[2],$bus[3],$bus[4] . "<br>";
            
        }
    }
    fclose($fich);
}
?>

