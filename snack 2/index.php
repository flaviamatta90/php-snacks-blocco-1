<!-- PHP Snack 2:
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. che mail contenga un punto e una chiocciola
3. e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php

$messaggio ="";

// name
if(!empty($_GET["name"])){
  $name = $_GET["name"];
  if(strlen($name) > 3){
    $messaggio = "Accesso riuscito";
  }else {
    $messaggio = "Accesso negato";
  }
}else{
  $messaggio = "Il nome è piu corto di 3 caratteri";
}
// /name

// email
if(!empty($_GET["email"])){
  $email = $_GET["email"];
  if(strpos($email, ".") !== false && strpos($email, "@") !== false){
    $messaggio = "Accesso riuscito";
  }else {
    $messaggio = "Accesso negato";
  }
}else{
  $messaggio = "Ti sei dimenticato di passare la mail";
}
// /email

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h4>
      <?php echo $messaggio ?>
    </h4>

  </body>
</html>
