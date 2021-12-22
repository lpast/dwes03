             
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
                        $_SET['aleatorio']==65536;
                        echo "<h1>¿El número es $aleatorio?</h1>";
                    case $intentos==20;
                        $min=65537;
                        $max=1048536;
                        $aleatorio3=524288;
                        echo "<h1>¿El número es $aleatorio3?</h1>";
                    Break;
                }   
            }
            if (isset($_POST[jugar])){
                $jugada++ ;
                $_POST['aleatorio']=$aleatorio;
                //$min==1;
                //$max;
                switch ($numero) {
                    case $numero=="mayor";
                    $_SESSION['mayor_que']==$aleatorio;
                        $aleatorio + ($aleatorio%2)==$new_aleatorio;
                       
                        echo "<h1>¿El número es $aleatorio?</h1>";
                        Break;
                    case $numero=="menor";
                        $_SESSION['mayor_que']==1;
                        $max==$aleatorio;
                        $min==1;
                        while($numero=="menor"){
                            $aleatorio - 100==$new_aleatorio;
                            echo "<h1>¿El número es $new_aleatorio?</h1>";
                            };   
                            Break;
                        default:
                        $numero==$aleatorio;
                        echo enhorabuena;                  
                }      
            }
            
            if (isset($_POST[reiniciar]) ){ // Si se envía por post se procesa la orden y en caso contrario no hace nada
                $jugada==1;
                switch ($intentos) {
                    case $intentos==10;
                        $aleatorio=rand(1,1024);
                        echo "<h1>¿El número es $aleatorio?</h1>";
                        Break;
                    case $intentos==16;
                        $aleatorio=rand(1,65536);
                        echo "<h1>¿El número es $aleatorio?</h1>";
                    Break;
                    case $intentos==20;
                        $aleatorio=rand(1,pow(2,20));
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
            <form action="index.php" method="GET">
                <input type="submit" value="volver" name="volver"/>
           </form>
            <hr>
            <p style="font-size:12px">&copy; 2021 Lorena M.</p>
            </div>
        </fieldset>
    </body>
</html>