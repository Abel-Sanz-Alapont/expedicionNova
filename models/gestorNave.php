<?php

class gestorNave{

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
    //Añadimos la Funcion de listar Forma de Vida
    public function listarEntidades()
    {
        $entidad=[];
        for ($i=0; $i <count($_SESSION['entidades']) ; $i++) { 
            if(isset($_SESSION['entidades'][$i]) && get_class($_SESSION['entidades'][$i])=="FormadeVida"){
                $entidad[]=$_SESSION['entidades'][$i];
            }
        }
        return $entidad;
    }
    //Funciones de Actualizar

    //Añadimos la Funcion de listar Mineral
    public function listarMinerales()
    {
        $minerales=[];
        for ($i=0; $i <count($_SESSION['entidades']) ; $i++) { 
            if(isset($_SESSION['entidades'][$i]) && get_class($_SESSION['entidades'][$i])=="MineralRaro"){
                $minerales[]=$_SESSION['entidades'][$i];
            }
        }
        return $minerales;
    }
    //Añadimos la Funcion de listar Artefacto
    public function listarAntiguedades()
    {
        $antiguedades=[];
        for ($i=0; $i <count($_SESSION['entidades']) ; $i++) { 
            if(isset($_SESSION['entidades'][$i]) && get_class($_SESSION['entidades'][$i])=="ArtefactoAntiguo"){
                $antiguedades[]=$_SESSION['entidades'][$i];
            }
        }
        return $antiguedades;
    }

    //Listamos Entidades
    public function listar()
    {
        return $_SESSION['entidades'];
    }

    //Funcion de Buscar
    public function buscar($id)
    {
        foreach ($_SESSION['entidades'] as $entidad) {
            if (($entidad instanceof EntidadEstelar)&& $entidad->getId() == $id) {
                return $entidad;
            }
        }
    }
    
    //Funcion de actualizar Forma de Vida
    public function actualizarEntidad($id,$nombre,$planetaOrigen,$nivelEstabilidad,$dieta)
    {

        foreach ($_SESSION['entidades'] as $i => $entidad) {
            if (get_class($entidad)=="FormadeVida"&& $entidad->getId() == $id) {
                $_SESSION['entidades'][$i]->setNombre($nombre);
                $_SESSION['entidades'][$i]->setPlanetaOrigen($planetaOrigen);
                $_SESSION['entidades'][$i]->setNivelEstabilidad($nivelEstabilidad);
                $_SESSION['entidades'][$i]->setDieta($dieta);
                break;    
            }
        }
    }
    //Funcion de actualizar Mineral
    public function actualizarMineral($id,$nombre,$planetaOrigen,$nivelEstabilidad,$dureza)
    {

        foreach ($_SESSION['entidades'] as $i => $entidad) {
            if (get_class($entidad)=="MineralRaro" &&$entidad->getId() == $id) {
                $_SESSION['entidades'][$i]->setNombre($nombre);
                $_SESSION['entidades'][$i]->setPlanetaOrigen($planetaOrigen);
                $_SESSION['entidades'][$i]->setNivelEstabilidad($nivelEstabilidad);
                $_SESSION['entidades'][$i]->setDureza($dureza);
                break;          
            }
        }
    }
    //Funcion de actualizar Antiguedad
    public function actualizarAntiguedad($id,$nombre,$planetaOrigen,$nivelEstabilidad,$antiguedad)
    {

        foreach ($_SESSION['entidades'] as $i => $entidad) {
            if (get_class($entidad)=="ArtefactoAntiguo"&&$entidad->getId() == $id) {
                $_SESSION['entidades'][$i]->setNombre($nombre);
                $_SESSION['entidades'][$i]->setPlanetaOrigen($planetaOrigen);
                $_SESSION['entidades'][$i]->setNivelEstabilidad($nivelEstabilidad);
                $_SESSION['entidades'][$i]->setAntiguedad($antiguedad);
                break;    
            }
        }
    }
    //Funcion de Eliminar
    public function eliminar($id)
    {
        foreach ($_SESSION['entidades'] as  $i => $entidad) {
            if (($entidad instanceof EntidadEstelar)&&$entidad->getId() == $id) {
                unset($_SESSION['entidades'][$i]);
                $_SESSION['entidades'] = array_values($_SESSION['entidades']);
            }
        }
    }
}