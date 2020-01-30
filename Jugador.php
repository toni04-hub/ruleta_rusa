<?php
/**  
* @author toniuep
*/


Class Jugador{
    //propiedades
    private $_id;
    private $_nombre;
    private $_isVivo;

    /** métodos*/
    public function __construct($id){
        $this->_id = $id;
        $this->_nombre = "Jugagor $id";
        $this->_isVivo = true;
    }
    /**
     * El jugador dispara el revolver
     * @param Revolver $r
     * @return boolean $isvivo
     */
    
    public function disparar($r){
        echo "El {$this->_nombre} se apunta con el revolver <br>";
        //el jugador se apunta y...
        $resultado = $r->disparar();
        
        if($resultado){
            $this->_isVivo = false;
            echo "<b>La has palmado chaval!!!</b><br>";
        }else{
            echo "Te has librado, puedes seguir jugando...<br>";
        }
        return $this->_isVivo;   
    }

    public function isVivo(){
        return $this->_isVivo;
    }
}