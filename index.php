<!-- Snack 1:
Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario.
Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60 -->

<?php
$matches = array (
  array("Dinamo Sassari",98),
  array("Armani Jeans Milano",87),
);

echo $matches[0][0]."-".$matches[1][0]. " ". "/" . $matches[0][1].  "-" .$matches[1][1];
?>

<!-- echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>"; -->
