<?php

class EntidadEstelar{

    protected $id;//debe ser unico por lo tanto mas adelante usaremos united key
    protected $nombre;
    protected $planetaOrigen;
    protected $nivelEstabilidad;

    public function __construct($id,$nombre,$planetaOrigen,$nivelEstabilidad){
        $this->id=$id;
        $this->nombre=$nombre;
        $this->planetaOrigen=$planetaOrigen;
        $this->nivelEstabilidad=$nivelEstabilidad;
    }

    //Metodos

    public function reaccion(){
        return "Mensaje o Sonido desconocido";
    }

    public function getTipo(){
        return "Tipo Desconocido";
    }
}