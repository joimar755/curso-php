<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="http://localhost:35729/livereload.js" charset="utf-8"></script>


  </head>

  <body>
    <?php

   $nombre = "joimar jose";
   $apellido = "lopez agamez";


     echo "<a href='http://youtube.com'>".$nombre."</a>". " " .$apellido;



?>
<h2> falso o verdadero BOLEANOS </h2>
 <?php
 $n = 58;
 if ($n < 57) {
   echo "ES MENOR";
 }else {
   echo "NO ES MENOR";
 }
  ?>
<h2>Forzado de tipos</h2>
<?php

$a = 1.645;

$b = (int)$a;

var_dump($a);



 ?>

<h2>constante</h2>
<?php

define("PI", 3.141516);

echo PI*5;


 ?>
 <h2>constante UNIVERSALES</h2>
 <?php

 echo PHP_VERSION;


  ?>
  <h2>OPERADORES y modulos</h2>
  <?php
$a = 5;
$b = 3;
echo $a*$b; echo " multi <br>";
echo $a-$b; echo " resta <br>";
echo $a+$b; echo " suma <br>";
echo $a%$b; echo " residuo o modulo<br>";
echo $a**$b; echo " exponente <br>";

echo "<h1>asignacion</h1>";

$m = 5;
$m += 10;


echo $m;

echo "<h1>comparacion</h1>";

$a = 29;
$b = 30;

$d = 6;
$e = 6;

if ($d <= $e) {
  echo "true"; echo "</br>";
}else {
  echo "false"; echo "</br>";
}


echo $d <=> $e; echo "</br>";

echo  $a==$b ? "ES igual" : "no es igual"; echo "<br>";


echo $h ?? $k ?? "NO EXISTE";

echo "<h1>incremento y decremento</h1>";

$a=20;

while ($a > 10) {
  --$a;
  echo $a."<br>";



}

echo "<h1>operadores logicos</h1>";

$e = 10;
$f = 5;

if ($e==10 && $f==5) {
  echo "correcto";
}else {
  echo "no es correcto";
}


$json = [
  ['id'],
  ['nombre'],
  ['precio'],
  ['stock'],
  ['cantidad'],
  ['cantidad'],
]; 


foreach ($json as $p) {
   $p = $
   
     

} 




   ?>

</html>
