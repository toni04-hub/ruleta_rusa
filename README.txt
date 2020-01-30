JUEGO de la ruleta rusa con PHP POO
El consiste en que un numero de 2 a 6 jugadores con un
revolver con una sola bala en el tambor se dispara en la
rodilla (version no mortal ;) )

Las clases a implementar són:
    - Revolver:
        -Atributos: 
            - posicion actual (posisión en la que esta el tambor
            cuando se dispara, puede que este la bala o no)
            - posision bala (la posicion del tambor donde se 
            encuentra la bala).
        Estas dos posicionses se generan aleatoriamente.
        -Metodos:
            - disparar(): devuelve true si la posicion de la 
                bala coincide con la posicion actual
            - siguiente posicion: cambia el tambor a la siguiente posicion
            - info(): muestra la informacion del revolver ( posicion actual y donde esta la bala)

    - Jugador:
        -Atributos:
            -id (representa el numero del jugador, empieza enb 1)
            -nombre (Empezara con Jugador mas su id, "Jugador 1"...)
            -vivo (indica si está vivo o no)
        - Metodos:
            -disparar(Revolver r): el jugador se apunta con el revolver y se dispara, si hay
            bala el jugador muere
    - Juego:
        -Atributos:
            -Jugadores(conjunto de jugadores)
            -Revolver
        -Metodos:
            -fin de juego: cunado un jugador muere
            -ronda():cada jugador se apunta y se dispara, se informa del estado de la partida
            (El jugador se dispara, no ha muerto, etc..)

    El numero de jugadores sera decidido por el usuario  pero debe ser de 2 a 6.
    Si no està en este rango por defecto serà 6.
    En cada turno uno de los jugadores dispara el revolver, si este tien bala el jugador muere
    y el juego termina.
