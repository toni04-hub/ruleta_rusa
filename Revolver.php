<?php
/**
 * @author toniuep
 * Clase que representa un revolver del juego ruleta_rusa
 */
Class Revolver{
    /** @var integer $posicionActual Representa la posicion del tambor del 0 al 5  */
    private $posicionActual;
    /** @var integer $posiconBla Representa la posicion la bala del 0 al 5  */
    private $posicionBala;

    public function __construct(){
        $this->posicionActual = rand(0,5);
        $this->posicionBala = rand(0,5);
    }

    //Metodos..
    public function disparar(){
        $exito = false;
        if($this->posicionActual == $this->posicionBala){
            $exito = true;//Alguien la va a palmar...
        }
        $this->siguientePos();
           
        return $exito;
    }

    private function siguientePos(){
        if($this->posicionActual == 5){
            $this->posicionActual = 0;
        }else{
            $this->posicionActual++;
        }
    }
    
    public function info(){
        echo "<hr>Posicion del Tambor {$this->posicionActual}<br>".
             "Posicion Bala {$this->posicionBala}<br>";
    }
}