<?php

class Controller
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
        $totalPaginasMineral=ceil($totalMineral/$mineralPorPaginas);
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
            $nombre = $_POST['nombre'];
            $planetaOrigen=$_POST['planetaOrigen'];
            $nivelEstabilidad=$_POST['nivelEstabilidad'];

            $nuevaEntidad = null;
            if ($_POST['dieta'] != null) {

                $dieta=$_POST['dieta'];
                $nuevaEntidad = new FormadeVida($id,$nombre,$planetaOrigen,$nivelEstabilidad,$dieta);

            } elseif($_POST['dureza']!=null) {

                $dureza = $_POST['dureza'];
                $nuevaEntidad = new MineralRaro($id,$nombre,$planetaOrigen,$nivelEstabilidad,$dureza);
            }else {

                $antiguedad = $_POST['antiguedad'];
                $nuevaEntidad   = new ArtefactoAntiguo($id,$nombre,$planetaOrigen,$nivelEstabilidad,$antiguedad);
                
            }
            if ($nuevaEntidad!=null) {
                $this->gestor->anyadir($nuevaEntidad);
            }
            header("Location: index.php");
            exit();
        }

        include "views/form.php";
    }
    public function editarEntidad(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $this->gestor->actualizarEntidad($_POST['id'],$_POST['nombre'], $_POST['planetaOrigen'], $_POST['nivelEstabilidad'],$_POST['dieta']);

            header("Location: index.php");
            exit();
        }
    }
    public function editarMineral(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {


            $this->gestor->actualizarMineral($_POST['id'],$_POST['nombre'], $_POST['planetaOrigen'], $_POST['nivelEstabilidad'],$_POST['dureza']);
            header("Location: index.php");
            exit();
        }
    }
    public function editarAntiguedad(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $this->gestor->actualizarAntiguedad($_POST['id'],$_POST['nombre'], $_POST['planetaOrigen'], $_POST['nivelEstabilidad'],$_POST['antiguedad']);

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
