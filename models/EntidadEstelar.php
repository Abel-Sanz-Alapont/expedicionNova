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

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nivelEstabilidad
     */
    public function getNivelEstabilidad()
    {
        return $this->nivelEstabilidad;
    }

    /**
     * Set the value of nivelEstabilidad
     */
    public function setNivelEstabilidad($nivelEstabilidad): self
    {
        $this->nivelEstabilidad = $nivelEstabilidad;

        return $this;
    }

    /**
     * Get the value of planetaOrigen
     */
    public function getPlanetaOrigen()
    {
        return $this->planetaOrigen;
    }

    /**
     * Set the value of planetaOrigen
     */
    public function setPlanetaOrigen($planetaOrigen): self
    {
        $this->planetaOrigen = $planetaOrigen;

        return $this;
    }
}