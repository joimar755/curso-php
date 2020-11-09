<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
   <form  method="post" action="">
    
   
   <label> precio libra</label> <input type="text" name="libra" id="libra" required> </br> 
   <label>gramos</label> <input type="text" name="gramos" id="gramos" required> </br> 


   
   <input type="submit" name="calcular" value="calcular"> 
   

   </form>
  
  
  
</body> 

<?php    
          $libra = $_POST['libra'];
          $gramos = $_POST['gramos'];
         
         
          $gramo =  0.002;
       
          $total = $gramos *  $gramo ;
          $precio = $gramos *  $gramo * $libra;

          echo "la libra es : ".$total ."</br> ". "el precio es :".$precio 

          
          
   ?>
   
</html>
