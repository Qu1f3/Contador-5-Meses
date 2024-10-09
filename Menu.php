<?php
// Establecer la fecha objetivo (año, mes, día, hora, minuto, segundo)
$fechaObjetivo = strtotime("2024-11-01 00:00:00");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de tiempo</title>
    <style>
        /* Estilos globales */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #282c34;
            color: #61dafb;
            text-align: center;
        }

        /* Contenedor principal del contador */
        .contador-container {
            background-color: #20232a;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
        }

        h1 {
            font-size: 3rem;
            margin-bottom: 20px;
        }

        p {
            font-size: 2.5rem;
            letter-spacing: 1px;
        }

        /* Ajustes para pantallas más pequeñas */
        @media (max-width: 768px) {
            h1 {
                font-size: 2rem;
            }

            p {
                font-size: 2rem;
            }
        }

        @media (max-width: 480px) {
            h1 {
                font-size: 1.5rem;
            }

            p {
                font-size: 1.5rem;
            }
        }
    </style>
    <script>
        // Obtener la fecha objetivo desde PHP en formato UNIX timestamp
        var fechaObjetivo = <?php echo $fechaObjetivo * 1000; ?>; // Convertimos a milisegundos

        // Función que se ejecutará cada segundo
        function actualizarContador() {
            var fechaActual = new Date().getTime(); // Fecha y hora actual en milisegundos
            var diferencia = fechaObjetivo - fechaActual;

            // Si la fecha objetivo no ha pasado
            if (diferencia > 0) {
                var dias = Math.floor(diferencia / (1000 * 60 * 60 * 24));
                var horas = Math.floor((diferencia % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutos = Math.floor((diferencia % (1000 * 60 * 60)) / (1000 * 60));
                var segundos = Math.floor((diferencia % (1000 * 60)) / 1000);

                // Mostrar el contador
                document.getElementById("contador").innerHTML = dias + " días, " + horas + " horas, " +
                    minutos + " minutos y " + segundos + " segundos";
            } else {
                document.getElementById("contador").innerHTML = "¡La fecha objetivo ya ha pasado!";
            }
        }

        // Actualizar el contador cada segundo
        setInterval(actualizarContador, 1000);
    </script>
</head>
<body>

<div class="contador-container">
    <h1>Cuenta regresiva</h1>
    <p id="contador"></p>
</div>

<script>
    // Iniciar el contador cuando se cargue la página
    actualizarContador();
</script>

</body>
</html>
