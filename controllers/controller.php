<?php

class EntidadesController
{

    private $gestor;

    public function __construct($gestor)
    {
        $this->gestor = $gestor;
    }

    public function index()
    {    
        //Calculos para el Paginador de Formas de Vida
        $formaVida = $this->gestor->listarEntidades();
        $totalFormaVida=count($formaVida);
        $formaVidaPorPaginas=5;
        $totalPaginasFormas=ceil($totalFormaVida/$formaVidaPorPaginas);
        $paginaActualFormas=($_GET['pActualFormas'] ?? 1);
        $formasVidaAcortadas=array_slice($formaVida,($paginaActualFormas-1)*$formaVidaPorPaginas,$formaVidaPorPaginas);

        //Calculos para el Paginador de Formas de Mineral
        $mineral = $this->gestor->listarMinerales();
        $totalMineral=count($mineral);
        $mineralPorPaginas=5;
        $totalMineral=ceil($totalMineral/$mineralPorPaginas);
        $paginaActualMineral=($_GET['pActualMinerales'] ?? 1);
        $mineralVidaAcortadas=array_slice($mineral,($paginaActualMineral-1)*$mineralPorPaginas,$mineralPorPaginas);


        //Calculos para el Paginador de Antiguedades
        $antiguedad = $this->gestor->listarAntiguedades();
        $totalAntiguedades=count($antiguedad);
        $antiguedadesPorPaginas=3;
        $totalPaginasAntiguedades=ceil($totalAntiguedades/$antiguedadesPorPaginas);
        $paginaActualAntiguedades=($_GET['pActualAntiguedades'] ?? 1);
        $antiguedadesAcortadas=array_slice($antiguedad,($paginaActualAntiguedades-1)*$antiguedadesPorPaginas,$antiguedadesPorPaginas);
        include "views/listar.php";
    }

    //metodos para crear editar y eliminar 

    public function crear()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_POST['id'];
            if ($_POST['dieta'] != null) {
                $dieta = $_POST['dieta'];
                $nombre = $_POST['nombre'];
                $planetaOrigen=$_POST['planetaOrigen'];
                $nivelEstabilidad=$_POST['nivelEstabilidad'];

                $formaVida = new FormadeVida($id,$nombre,$planetaOrigen,$nivelEstabilidad,$dieta);

            } elseif($_POST['dureza']!=null) {
                $dureza = $_POST['dureza'];
                $nombre = $_POST['nombre'];
                $planetaOrigen=$_POST['planetaOrigen'];
                $nivelEstabilidad=$_POST['nivelEstabilidad'];
                
                $mineral = new MineralRaro($id,$nombre,$planetaOrigen,$nivelEstabilidad,$dureza);
            }else {
                $antiguedad = $_POST['antiguedad'];
                $nombre = $_POST['nombre'];
                $planetaOrigen=$_POST['planetaOrigen'];
                $nivelEstabilidad=$_POST['nivelEstabilidad'];
                $antiguedades= new ArtefactoAntiguo($id,$nombre,$planetaOrigen,$nivelEstabilidad,$antiguedad);
                
            }
            $this->gestor->anyadir($formaVida);
            $this->gestor->anyadir($mineral);
            $this->gestor->anyadir($antiguedad);
            header("Location: index.php");
            exit();
        }

        include "views/crear.php";
    }
    public function editarEntidad(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $this->gestor->actualizarEntidad($_POST['nombre'], $_POST['planetaOrigen'], $_POST['nivelEstabilidad'],$_POST['dieta']);

            header("Location: index.php");
            exit();
        }
    }
    public function editarMineral(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {


            $this->gestor->actualizarMoto($_POST['nombre'], $_POST['planetaOrigen'], $_POST['nivelEstabilidad'],$_POST['dureza']);
            header("Location: index.php");
            exit();
        }
    }
    public function editarAntiguedad(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $this->gestor->actualizarEntidad($_POST['nombre'], $_POST['planetaOrigen'], $_POST['nivelEstabilidad'],$_POST['antiguedad']);

            header("Location: index.php");
            exit();
        }
    }
    

    public function eliminar()
    {
        
            $this->gestor->eliminar($_GET['id']);
            header("Location: index.php");
            exit();
        
    }
}
