<!-- Snack 1:
Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario.
Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60 -->

<?php
$matches = array (
  array("Dinamo Sassari",98),
  array("Armani Jeans Milano",87),
  array("Benetton Treviso",75),
  array("Virtus Bologna",89),
  array("Olimpia Milano",86),
  array("Universo Treviso",85),
  array("Reyer Venezia Mestre",97),
  array("Cantù",82),
  array("New Basket Brindisi",75),
  array("Brescia",80)
);

echo $matches[0][0]."-".$matches[1][0]. " ". "/" . $matches[0][1].  "-" .$matches[1][1].".<br>";
echo $matches[2][0]."-".$matches[3][0]. " ". "/" . $matches[2][1].  "-" .$matches[3][1].".<br>";
echo $matches[4][0]."-".$matches[5][0]. " ". "/" . $matches[4][1].  "-" .$matches[5][1].".<br>";
echo $matches[6][0]."-".$matches[7][0]. " ". "/" . $matches[6][1].  "-" .$matches[7][1].".<br>";
echo $matches[8][0]."-".$matches[9][0]. " ". "/" . $matches[8][1].  "-" .$matches[9][1].".<br>";

?>
