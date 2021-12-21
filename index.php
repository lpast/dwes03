<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>index</title>
        <link rel="stylesheet" type="text/css" href="index.css" media="screen" />
    </head>
    <body style="background: MistyRose">
        <fieldset>
            <legend style="font-weight: bold">JUEGO ADIVINA NÚMERO</legend>
            <p><b>Selecciona un intervalo del menú de abajo</b></p>
            <fieldset>
            <legend>Establece intervalo</legend>
            <form action="jugar.php" method="POST">
                <input type="radio" name="intentos" value="10"/>&nbsp;1-1024(2<sup>10</sup>). 10 intentos</p>
                <input type="radio" name="intentos" value="16" />&nbsp;1-65536(2<sup>16</sup>). 16 intentos</p>
                <input type="radio" name="intentos" value="20"/>&nbsp;1-1048576(2<sup>20</sup>). 20 intentos</p>
                <input type="submit" name="empezar" value="empezar"/>
            </form>
            </fieldset>
            <br />
            <div name="explicacion">
                <p><b>Piensa un número de ese intervalo</b></p>
                <p><b>La aplicación lo acertará en el número de intentos establecidos según el intervalo</b></p>
                <hr>
                <p><b>Cada vez que la aplicación te especifique un número deberás de indicar</b></p>
                <ol>Si el número buscado es mayor</ol>
                <ol>Si el número buscado es menor</ol>
                <ol>Si has acertado el número </ol>
            </div>
            <br />
            <hr>
            <div>
                <p style="font-size:12px">&copy; 2021 Lorena M.</p>
            </div>
        </fieldset>
    </body>
</html>