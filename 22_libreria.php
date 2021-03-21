<html> 
 
<head> 
    <title></title> 
</head> 
 
<body> 
    <h1>Bucle While 2</h1> 
    <form action="20_whileB.php" method="post">         ¿Cuántas veces? 
        <input type="text" name="number"> 
        <input type="submit" value="Enviar"> 
    </form> 
    <p> 
        <?php 
/* Mostraremos el uso de la sentencia While y comenzamos a usar entrada del teclado mediante un formulario simple */ 
if ( isset( $_POST['number'] )) { 
$number = $_POST['number']; 
$counter = 1; 
while ($counter <= $number) { 
echo "<b>$counter</b>.- 
Los bucles son fáciles!<br>\n"; 
$counter++; 
} 
echo "Se acabo.\n"; 
} 

/*Mostrar la tabla de multiplicar del 2. Emplear el for, luego el while y por último el do/while.
 La estructura FOR permite incrementar una variable de 2 en 2: 
    For ($f=2; $f<=20; $f=$f+2)  */

  for ($f=1; $f<=20; $f++){
      $resultado = $f * 2;


    echo $f ." x 2 = ". $resultado. "  <br>";

  }


    
?> 
    </p> 
</body> 
 
</html> 
