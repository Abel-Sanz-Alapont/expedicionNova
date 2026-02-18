<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expedición Nova</title>

    <link rel="stylesheet" href="css/estilo.css">
</head>
<html>

<head>
    <title>CRUD PHP con POO ARRAYS</title>
</head>

<body>
    <div id="navbar">
        <h1>GESTOR ESPECIES</h1>
        <a href="index.php?accion=crear" class="enlaces">Añadir Especie</a>
        <hr>
    </div>
    <!--LISTADO DE Formas de Vida-->
    <div id="Container">
        <div id="tablaVida" class="Tabla">
            <h3> Forma de Vida
                <table border="1" cellpadding="10">
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Planeta Origen</th>
                        <th>Nivel Estabilidad</th>
                        <th>Tipo de Entidad</th>
                        <th>Dieta</th>
                        <th>Reaccion</th>
                        <th>Accion</th>


                    </tr>
                    <?php foreach ($formasVidaAcortadas as $formasVida): ?>
                        <?php if (get_class($formasVida) == "FormadeVida"): ?>

                            <tr>
                                <td><?= $formasVida->getId() ?></td>
                                <td><?= $formasVida->getNombre() ?></td>
                                <td><?= $formasVida->getPlanetaOrigen() ?></td>
                                <td><?= $formasVida->getNivelEstabilidad() ?></td>
                                <td><?= $formasVida->getTipo() ?></td>
                                <td><?= $formasVida->getDieta() ?></td>
                                <td><?= $formasVida->reaccion() ?></td>
                                <td class="accionesTabla">
                                    <!--Boton Editar-->
                                    <form method="POST" action="index.php?accion=editarVida" style="display:inline;">
                                        <input type="hidden" name="id" value="<?= $formasVida->getId() ?>"><br>
                                        <div class="fila-tabla">
                                            <label>Nombre:</label>
                                            <input type="text" name="nombre" value="<?= $formasVida->getNombre() ?>" required><br>
                                        </div>
                                        <div class="fila-tabla">
                                            <label>Planeta Origen:</label>
                                            <input type="text" name="planetaOrigen" value="<?= $formasVida->getPlanetaOrigen() ?>" required><br>
                                        </div>
                                        <div class="fila-tabla">
                                            <label>Nivel Estabilidad:</label>
                                            <input type="number" name="nivelEstabilidad" value="<?= $formasVida->getNivelEstabilidad() ?>" required><br>
                                        </div>
                                        <div class="fila-tabla">
                                            <label>Dieta:</label>
                                            <input type="text" name="dieta" value="<?= $formasVida->getDieta() ?>"><br>
                                        </div>
                                        <div class="botones-tabla">
                                            <!--Botones Guardar y Eliminar-->
                                            <br><button type="submit">Guardar</button><br>
                                            <br><a href="index.php?accion=eliminar&id=<?= $formasVida->getId() ?>">EVACUAR</a>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </table>
                <!--Paginador de Formas de Vida-->
                Paginador:
                <?php for ($i = 1; $i <= $totalPaginasFormas; $i++): ?>
                    <a href="index.php?accion=index&pActualFormas=<?= $i ?>"><?= $i ." " ?></a>
                <?php endfor; ?>
        </div>
        <!--LISTADO DE Minerales-->
        <div id="tablaMinerales" class="Tabla">
            <h3> Lista de Minerales
                <table border="1" cellpadding="10">
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Planeta Origen</th>
                        <th>Nivel Estabilidad</th>
                        <th>Tipo Entidad</th>
                        <th>Dureza</th>
                        <th>Reaccion</th>
                        <th>Acciones</th>

                    </tr>

                    <?php foreach ($mineralVidaAcortadas as $mineral): ?>
                        <?php if (get_class($mineral) == "MineralRaro"): ?>
                            <tr>
                                <td><?= $mineral->getId() ?></td>
                                <td><?= $mineral->getNombre() ?></td>
                                <td><?= $mineral->getPlanetaOrigen() ?></td>
                                <td><?= $mineral->getNivelEstabilidad() ?></td>
                                <td><?= $mineral->getTipo() ?></td>
                                <td><?= $mineral->getDureza() ?></td>
                                <td><?= $mineral->reaccion() ?></td>
                                <td class="accionesTabla">
                                    <!--Boton Editar-->
                                    <form method="POST" action="index.php?accion=editarMineral" style="display:inline;">
                                        <input type="hidden" name="id" value="<?= $mineral->getId() ?>"><br>
                                        <div class="fila-tabla">
                                            <label>Nombre:</label>
                                            <input type="text" name="nombre" value="<?= $mineral->getNombre() ?>" required><br>
                                        </div>
                                        <div class="fila-tabla">
                                            <label>Planeta Origen:</label>
                                            <input type="text" name="planetaOrigen" value="<?= $mineral->getPlanetaOrigen() ?>" required><br>
                                        </div>
                                        <div class="fila-tabla">
                                            <label>Nivel Estabilidad:</label>
                                            <input type="number" name="nivelEstabilidad" value="<?= $mineral->getNivelEstabilidad() ?>" required><br>
                                        </div>
                                        <div class="fila-tabla">
                                            <label>Dureza:</label>
                                            <input type="text" name="dureza" value="<?= $mineral->getDureza() ?>"><br>

                                        </div>
                                        <div class="botones-tabla">
                                            <!--Botones Guardar y Eliminar-->
                                            <br><button type="submit">Guardar</button><br>
                                            <br><a href="index.php?accion=eliminar&id=<?= $mineral->getId() ?>">EVACUAR</a>

                                        </div>
                                        <div>

                                        </div>
                                    </form>
                                </td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; ?>

                </table>
                <!--Paginador de Minerales-->
                Paginador:
                <?php for ($i = 1; $i <= $totalPaginasMineral; $i++): ?>
                    <a href="index.php?accion=index&pActualMinerales=<?= $i ?>"><?= $i ?></a>
                <?php endfor; ?>
        </div>
        <!--LISTADO DE Antiguedades-->
        <div id="tablaAntiguedades" class="Tabla">
            <h3> Listado de Antiguedades
                <table border="1" cellpadding="10">
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Planeta Origen</th>
                        <th>Nivel Estabilidad</th>
                        <th>Tipo Entidad</th>
                        <th>Antiguedad (Años Luz)</th>
                        <th>Reaccion</th>
                        <th>Acciones</th>

                    </tr>

                    <?php foreach ($antiguedadesAcortadas as $antiguedades): ?>
                        <?php if (get_class($antiguedades) == "ArtefactoAntiguo"): ?>
                            <tr>
                                <td><?= $antiguedades->getId() ?></td>
                                <td><?= $antiguedades->getNombre() ?></td>
                                <td><?= $antiguedades->getPlanetaOrigen() ?></td>
                                <td><?= $antiguedades->getNivelEstabilidad() ?></td>
                                <td><?= $antiguedades->getTipo()  ?></td>
                                <td><?= $antiguedades->getAntiguedad() ?></td>
                                <td><?= $antiguedades->reaccion() ?></td>

                                <td class="accionesTabla">
                                    <!--Boton Editar-->
                                    <form method="POST" action="index.php?accion=editarAntiguedad" style="display:inline;">
                                        <input type="hidden" name="id" value="<?= $antiguedades->getId() ?>"><br>
                                        <div class="fila-tabla">
                                            <label>Nombre:</label>
                                            <input type="text" name="nombre" value="<?= $antiguedades->getNombre() ?>" required><br>
                                        </div>
                                        <div class="fila-tabla">
                                            <label>Planeta Origen:</label>
                                            <input type="text" name="planetaOrigen" value="<?= $antiguedades->getPlanetaOrigen() ?>" required><br>
                                        </div>
                                        <div class="fila-tabla">
                                            <label>Nivel Estabilidad:</label>
                                            <input type="number" name="nivelEstabilidad" value="<?= $antiguedades->getNivelEstabilidad() ?>" required><br>
                                        </div>
                                        <div class="fila-tabla">
                                            <label>Años Antiguedad</label>
                                            <input type="text" name="antiguedad" value="<?= $antiguedades->getAntiguedad() ?>"><br>
                                        </div>
                                        <div class="botones-tabla">
                                            <!--Botones Guardar y Eliminar-->
                                            <br><button type="submit">Guardar</button><br>
                                            <br><a href="index.php?accion=eliminar&id=<?= $antiguedades->getId() ?>">EVACUAR</a>

                                        </div>
                                    </form>
                                </td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; ?>

                </table>
                <!--Paginador de Antiguedades-->
                Paginador:
                <?php for ($i = 1; $i <= $totalPaginasAntiguedades; $i++): ?>

                    <a href="index.php?accion=index&pActualAntiguedades=<?= $i ?>"><?= $i ?></a>
                <?php endfor; ?>
        </div>
    </div>
    <div id="Footer">

    </div>

</body>

</html>