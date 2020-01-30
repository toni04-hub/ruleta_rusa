<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Juego de la ruleta rusa</title>
    <style>
        h1 {
            color: #111;
            font-family: 'Helvetica Neue', sans-serif;
            font-weight: bold;
            letter-spacing: -1px;
            line-height: 1;
            text-align: center;
        }


        h2 {
            color: #111;
            font-family: 'Open Sans', sans-serif;
            font-size: 30px;
            font-weight: 300;
            line-height: 32px;
            margin: 0 0 72px;
            text-align: center;
        }


        body {
            color: #685206;
            font-family: 'Helvetica Neue', sans-serif;
            font-size: 14px;
            line-height: 24px;
            margin: 0 0 24px;
            text-align: center;
            text-justify: inter-word;
        }
    </style>
</head>

<body>


    <h1>Juego de la ruleta rusa en PHP POO</h1>
    <?php
    /*require_once "Revolver.php";
        require_once "Jugador.php";

        $revolver = new Revolver();
        $jugador = new Jugador(1);
        
        for($i =0;$i<6;$i++){
            $revolver->info();
            $jugador->disparar($revolver);
        }*/

    require_once "Juego.php";
    $juego = new Juego(4);
    $juego->play();


    ?>

</body>

</html>