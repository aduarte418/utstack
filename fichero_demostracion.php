<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demostración Práctica </title>
</head>
<body>


<!-- Recordar que para que se muestre esta página en el navegador 
se introduce la ruta "localhost/utstack/", 
para que detecte el repo (utstack) una vez clonado en htdocs -->

<h1>Bienvenido a la demostración dinámica</h1>
<br>


<!-- Contenedor para las variables de fecha y hora -->
<div>

    <!-- En cada script de php se incluye la estructura "htmlspecialchars()"
    al imprimir cada variable para evitar amenazas que comprometan 
    la seguridad del sitio, como XSS (Cross-Site Scripting). 
    Se considera buena práctica para prevenir este tipo de ataques
    y proteger datos de usuario, ya que podrían robar información 
    delicada de la web, secuestrar sesiones de usuario o comprometer el navegador. -->

    <h2>La fecha de hoy es: 
        <?php echo htmlspecialchars($fechaActual = date('d/m/Y')); ?></h2>
    
    <br>
    
    <h2>La hora actual es: 
        <?php echo htmlspecialchars($horaActual = date ('H:i:s')); ?><h2>

</div>

    
</body>
</html>