<?php
require_once "Jugador.php";
require_once "Revolver.php";

Class Juego{
    private $jugadores;
    private $revolver;

    /**
     * Se crea un juego con los jugadores que pasamos al constructor
     * Inicianlizamos todas las propiedades:
     * - Guaradamos el numero de jugadores. Usamos el metodo comprobarNumJugadores
     * para assegurarnos que el numero de jugadores esta entre 2 y 6.
     * - Llamamos a la funcion crearJugadores que se encargara de intarciar un
     * opbjeto de la clase Jugador para cada jugador.
     * - Creamos el Revolver
     */
    public function __construct($numJugadores){
        $this->crearJugadores($numJugadores);
        $this->revolver = new Revolver();
    }

    private function  comprobarNumJugadores($numJugadores){
        if($numJugadores < 2 || $numJugadores > 6){
            $numJugadores = 6;
        }
        return $numJugadores;
    }

    private function crearJugadores($numJugadores){
        $n = $this->comprobarNumJugadores($numJugadores);
        for($i = 0; $i<$n;$i++){
            $this->jugadores[$i] = new Jugador($i+1);
        }
    }

    public function ronda(){
        $nj = count($this->jugadores);
        for($i=0;$i < $nj; $i++){
            $this->jugadores[$i]->disparar($this->revolver);
        }
    }

    public function rondaV2(){
        $nj = count($this->jugadores);
        for($i=0;$i < $nj; $i++){
            $this->jugadores[$i]->disparar($this->revolver);
            if(!$this->jugadores[$i]->isVivo()){
                
                return false;
               
            }
        }
        return true;
    }

    function play(){
        $ronda = 1;
        do {
            echo "<h3>Ronda $ronda START!!</h3>";
            $ronda++;
        } while ($this->rondaV2());
        echo "<h2>fin del juego!!</2>";

    }
}