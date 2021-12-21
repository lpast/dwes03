             
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
                if (isset($_POST[submit]) ){ // Si se envía por post se procesa la orden y en caso contrario no hace nada
                    
                    switch ($intentos) {
                        case $intentos==10;

                            $arr[0]=$a;
                                $a=pow(2,1);
                            $arr[1]=$b;
                                $b=pow(2,2);
                            $arr[2]=$c;
                                $c=pow(2,3);
                            $arr[3]=$d;
                                $d=pow(2,4);
                            $arr[4]=$e;
                                $e=pow(2,5);
                            $arr[5]=$f;
                                $f=pow(2,6);
                            $arr[6]=$g;
                                $g=pow(2,7);
                            $arr[7]=$h;
                                $h=pow(2,8);
                            $arr[8]=$i;
                                $i=pow(2,9);
                            $arr[9]=$j;
                                $j=pow(2,10);

                            print_r($array);

                            $aleatorio=array_rand($arr,1);
                            echo "<h1>¿El número es $aleatorio?</h1>";
                        Break;
                        case $intentos==16;
                            $aleatorio=rand(1,65536);
                            echo "<h1>¿El número es $aleatorio?</h1>";
                        Break;
                        case $intentos==20;
                            $aleatorio=rand(1,1048576);
                            echo "<h1>¿El número es $aleatorio?</h1>";
                        Break;
                    }       
                }
                if (isset($_POST[jugar])){ 

                    while(!$numero="igual"){

                        switch ($numero) {
                            case $numero=="mayor";
                                
                                do{
                                    $aleatorio=rand(1,1024);
                                    echo "<h1>¿El número es $aleatorio?</h1>";
                                }
                                while($numero=="mayor");
                                Break;
                            case $numero=="menor";
                                $aleatorio=rand(1,65536);
                                do{
                                    $aleatorio=rand(1,65536);
                                    echo "<h1>¿El número es $aleatorio?</h1>";
                                }
                                while($numero=="menor");    
                            Break;
                        } 
                    }

                    //--ir a fin.php

                          
                }
            ?>     
            <br />
            
                <p>Jugada $jugada</p>
            <br />           
            <form action="jugar.php" method="POST">
                <div>
                    <fieldset style="width:50%">
                        <legend>Indica cómo es el número que has pensado</legend>
                        <p><input type="radio" name="numero" value="mayor"/>&nbsp;Mayor</p>
                        <p><input type="radio" name="numero" value="menor"/>&nbsp;Menor</p>
                        <p><input type="radio" name="numero" value="igual"/>&nbsp;Igual</p>
                    </fieldset>
                </div>
                <hr>
                <input type="submit" name="jugar" value="jugar"  />
                <input type="reset" value="reiniciar"/>
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