        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Expedición Nova</title>

            <link rel="stylesheet" href="css/estilo.css">
        </head>

        <body>
            <div id="navbar">
                <h1>FORMULARIO PARA AÑADIR ENTIDADES </h1>
                <hr>
            </div>

            <!--Formulario Crear-->
            <div id="containerForm">
                <div class="accionesFormulario">
                    <form method="POST" action="index.php?accion=crear" id="form" ;>
                        <div class="fila-formulario">
                            <label>ID</label>
                            <input type="text" name="id" required><br>
                        </div>
                        <div class="fila-formulario">
                            <label>NOMBRE</label>
                            <input type="text" name="nombre"><br>
                        </div>
                        <div class="fila-formulario">
                            <label>PLANETA ORIGEN:</label>
                            <input type="text" name="planetaOrigen"><br>
                        </div>
                        <div class="fila-formulario">
                            <label>NIVEL ESTABILIDAD:</label>
                            <input type="number" min="1" max="10" name="nivelEstabilidad"><br>
                        </div>
                        <div class="fila-formulario">
                            <label>DIETA (Si es una Forma de Vida):</label>
                            <select name="dieta">
                                <option value="">No es una Forma de vida</option>
                                <option value="Silicio">Silicio</option>
                                <option value="Energia">Energía</option>
                                <option value="Carbono">Carbono</option>
                            </select>
                            <br>
                        </div>
                        <div class="fila-formulario">
                            <label>DUREZA (Si es un Mineral):</label>
                            <select name="dureza">
                                <option value="">No es un Mineral</option>
                                <option value="talco">Talco</option>
                                <option value="yeso">Yeso</option>
                                <option value="calcita">Calcita</option>
                                <option value="fluorita">Fluorita</option>
                                <option value="cuarzo">Cuarzo</option>
                                <option value="topacio">Topacio</option>
                                <option value="corindon">Corindon</option>
                                <option value="diamante">Diamante</option>
                            </select>
                            <br>
                        </div>
                        <div class="fila-formulario">
                            <label>ANTIGUEADAD:</label>
                            <input type="text" name="antiguedad"><br>

                        </div>
                        <div class="botones-formulario">
                            <button type="submit">Agregar</button>
                           
                        </div>
                    </form>
                     <a href="index.php">Volver</a>
                </div>
        </body>
        </div>
        <div id="Footer">

        </div>