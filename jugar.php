             
<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Empieza el juego</title>
    </head>
    <body style="background: gainsboro">
        <fieldset style="background:MistyRose; width:40%; margin:auto">
            <legend style="font-weight: bold">EMPIEZA EL JUEGO</legend>
            <br />
            <div>
            <?php
             
             $jugada==0;
             $GLOBALS['jugada']=$jugada;
            
            if (isset($_POST[empezar]) ){
                session_start();
                $jugada++;

                switch ($intentos) {
                    case $intentos==10;
                        $min=1;
                        $max=1024;
                        $aleatorio=512;
                        echo "<h1>¿El número es $aleatorio</h1>";
                        Break;
                    case $intentos==16;
                        $min=1025;
                        $max=65536;
                        $aleatorio=32768;
                        echo "<h1>¿El número es $aleatorio?</h1>";
                    case $intentos==20;
                        $min=65537;
                        $max=1048536;
                        $aleatorio=524288;
                        echo "<h1>¿El número es $aleatorio?</h1>";
                    Break;
                }   
            }
            if (isset($_POST[jugar])){
                session_start();
                $jugada++;
                $_POST['aleatorio']=$aleatorio;
                
                switch ($numero) {
                    case $numero=="mayor";
                    session_start();
                    #$_SESSION['mayor_que']==$aleatorio;
                    $jugada++;
                    $_POST['aleatorio']=$aleatorio;
                    
                        
                       # $max;
                       # $min;
                        $aleatorio +=$aleatorio/2;
                        echo "<h1>¿El número es $aleatorio?</h1>";
                        Break;
                    case $numero=="menor";
                    session_start();
                        $_SESSION['menor_que']==$aleatorio;
                        $max==$aleatorio;
                        $min==1;
                        $aleatorio -=$aleatorio/2;
                        echo "<h1>¿El número es $aleatorio?</h1>";   
                        Break;
                    default:
                    session_start();
                    $_SESSION['igual_que']==$aleatorio;
                    echo enhorabuena;                  
                }      
            }
            
            if (isset($_POST[reiniciar]) ){ // Si se envía por post se procesa la orden y en caso contrario no hace nada
                session_start();
                $jugada++;

                switch ($intentos) {
                    case $intentos==10;
                        $min=1;
                        $max=1024;
                        $aleatorio=512;
                        echo "<h1>¿El número es $aleatorio</h1>";
                        Break;
                    case $intentos==16;
                        $min=1025;
                        $max=65536;
                        $aleatorio=32768;
                        echo "<h1>¿El número es $aleatorio?</h1>";
                    case $intentos==20;
                        $min=65537;
                        $max=1048536;
                        $aleatorio=524288;
                        echo "<h1>¿El número es $aleatorio?</h1>";
                    Break;
                }   
            }

            echo "Jugada $jugada"; 
            echo "<br>";
        ?> 
             <br/>          
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                <div>
                    <fieldset style="width:50%">
                        <legend>Indica cómo es el número que has pensado</legend>
                        <p><input type="radio" name="numero" value="mayor"/>&nbsp;Mayor</p>
                        <p><input type="radio" name="numero" value="menor"/>&nbsp;Menor</p>
                        <p><input type="radio" name="numero" value="igual"/>&nbsp;Igual</p>
                    </fieldset>
                </div>
                <hr>
                <div> 
                    <input type="submit" name="jugar" value="jugar" />
                </div>
                <div>
                    <input type="submit" name="reiniciar" value="reiniciar" />
                </div>
            </form> 
            <form action="index.php" method="POST">
                <input type="submit" value="volver" name="volver"/>
           </form>
            <hr>
            <p style="font-size:12px">&copy; 2021 Lorena M.</p>
            </div>
        </fieldset>
    </body>
</html>