<?php
$correo = $_REQUEST['correo'];
$confcorreo = $_REQUEST['confcorreo'];
$notif = $_REQUEST['notificaciones'];
if (isset($correo) || isset($confcorreo)) {
    print "Los correos están vacios";
}
else {
    print "El correo están rellenos";
}
if ($correo == $confcorreo) {
    print "Tus huevos";
}
else {
    print "te has confundiod";
}