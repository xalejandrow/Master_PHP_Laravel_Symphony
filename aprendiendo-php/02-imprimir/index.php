
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Imprimir por pantalla - Master en PHP</title>
    </head>
    <body>
        <h1>Master en PHP - <?php echo "alew" ?></h1>
        
        <?="Bienvenido al curso de PHP"?>
        
        <?php
        // Titular de la sección
            echo "<h3>Listado de videojuegos:</h3>";
            
            /* Esta es una lista 
             * de videojuegos
               moderno*/
            echo "<ul>"
                ."<li>GTA</li>"
                ."<li>Fifa</li>"
                ."<li>Mario Bros</li>"
                ."</ul>";
            // Párrafo explicativo
            echo '<p>Esta es una'.' - '.'lista de juegos </p>';
        ?>
    </body>
</html>
