<html> 
 
    <head> 
        <title>EJERCICIO 3_1: 
ANÁLISIS DE FORMULARIO</title> 
    </head> 
 
    <body> 
        <h1>EJERCICIO 3_1: ANÁLISIS DE FORMULARIO</h1><br> 
        <br> 
        <h1>análisis de formularios (analisis.php)</h1> 
        <?php if($_POST['gender'] == 0) { echo "Hola Sr. "; } else { echo "Hola Sra. "; 
} 
 
echo "<b>{$_POST['lastname']}</b>, encantado de saludarte."; ?> 
    </body> 
 
    </html> 
 
