<html>
    <head>
        <style>
        </style>
    </head>
    <body>
<?php
    print "<h1> Jugador 1 </h1>";
    $j1 = 0;
    $j2 = 0;
    for ($i=1; $i <= 5; $i++) {
        $dado1=rand(1,6);
        print "<img src='../imgDadosCartas/$dado1.jpg' width=80 height=80>";
        $j1 = $j1 + $dado1;
    }
    print "<br>";
    print "<h1> Jugador 2 </h1>";
    for ($i=1; $i <= 5; $i++) {
        $dado2=rand(1,6);
        print "<img src='../imgDadosCartas/$dado2.jpg' width=80 height=80>";
        $j2 = $j2 + $dado2;
    }
    if ($j1 > $j2) {
        $ganador = "Jugador 1";
        $suma = $j1;
        print "<h2> Ha ganado " . $ganador . " con un total de " . $suma . " puntos. </h2>";
    }
    elseif ($j1 < $j2) {
        $ganador = "Jugador 2";
        $suma = $j2;
        print "<h2> Ha ganado " . $ganador . " con un total de " . $suma . " puntos. </h2>";
    }
    else {
        print "<h2> Empate </h2>";
    }
?>
    </body>
</html>