<?php

class gestorNave
{

    public function __construct()
    {
        if (!isset($_SESSION['entidades'])) {
            $_SESSION['entidades'] = [];
        }
    }

    public function anyadir($entidad)
    {
        $_SESSION['entidades'][] = $entidad;
    }
    //Añadimos la Funcion de listar forma de vida
    public function listarEntidades()
    {
        $entidad=[];
        for ($i=0; $i <count($_SESSION['entidades']) ; $i++) { 
            if(get_class($_SESSION['entidades'][$i])=="entidad"){
                $entidad[]=$_SESSION['entidades'][$i];
            }
        }
        return $entidad;
    }
    //Añadimos la Funcion de listar mineral
    public function listarMinerales()
    {
        $minerales=[];
        for ($i=0; $i <count($_SESSION['entidades']) ; $i++) { 
            if(get_class($_SESSION['entidades'][$i])=="mineral"){
                $motos[]=$_SESSION['entidades'][$i];
            }
        }
        return $minerales;
    }
    //Añadimos la Funcion de listar mineral
    public function listarAntiguedades()
    {
        $antiguedades=[];
        for ($i=0; $i <count($_SESSION['entidades']) ; $i++) { 
            if(get_class($_SESSION['entidades'][$i])=="antiguedades"){
                $motos[]=$_SESSION['entidades'][$i];
            }
        }
        return $antiguedades;
    }
    public function listar()
    {
        return $_SESSION['entidades'];
    }

    public function buscar($id)
    {
        foreach ($_SESSION['entidades'] as $exposicion) {
            if ($id->getId() == $id) {
                return $exposicion;
            }
        }
    }

    public function actualizarEntidad($id,$nombre,$planetaOrigen,$nivelEstabilidad,$dieta)
    {

        foreach ($_SESSION['entidades'] as $i => $id) {
            if ($id->getId() == $id) {
                $_SESSION['entidades'][$i]->setNombre($nombre);
                $_SESSION['entidades'][$i]->setPlanetaOrigen($planetaOrigen);
                $_SESSION['entidades'][$i]->setNivelEstabilidad($nivelEstabilidad);
                $_SESSION['entidades'][$i]->setDieta($dieta);
            }
        }
    }
    public function actualizarMineral($id,$nombre,$planetaOrigen,$nivelEstabilidad,$dureza)
    {

        foreach ($_SESSION['entidades'] as $i => $id) {
            if ($id->getId() == $id) {
                $_SESSION['entidades'][$i]->setNombre($nombre);
                $_SESSION['entidades'][$i]->setPlanetaOrigen($planetaOrigen);
                $_SESSION['entidades'][$i]->setNivelEstabilidad($nivelEstabilidad);
                $_SESSION['entidades'][$i]->setDureza($dureza);
            }
        }
    }
    public function actualizarAntiguedad($id,$nombre,$planetaOrigen,$nivelEstabilidad,$antiguedad)
    {

        foreach ($_SESSION['entidades'] as $i => $id) {
            if ($id->getId() == $id) {
                $_SESSION['entidades'][$i]->setNombre($nombre);
                $_SESSION['entidades'][$i]->setPlanetaOrigen($planetaOrigen);
                $_SESSION['entidades'][$i]->setNivelEstabilidad($nivelEstabilidad);
                $_SESSION['entidades'][$i]->setAntiguedad($antiguedad);
            }
        }
    }
    public function actualizarMoto($matricula, $marca, $cilindrada)
    {

        foreach ($_SESSION['entidades'] as $i => $exposicion) {
            if ($exposicion->getMatricula() == $matricula) {
                $_SESSION['entidades'][$i]->setMarca($marca);
                $_SESSION['entidades'][$i]->setCilindrada($cilindrada);
            }
        }
    }

    public function eliminar($id)
    {
        foreach ($_SESSION['entidades'] as  $i => $exposicion) {
            if ($exposicion->getId() == $id) {
                unset($_SESSION['entidades'][$i]);
                $_SESSION['entidades'] = array_values($_SESSION['entidades']);
            }
        }
    }
}