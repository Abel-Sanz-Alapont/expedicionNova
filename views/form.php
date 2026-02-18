        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Expedición Nova</title>

            <link rel="stylesheet" href="css/estilo.css">
        </head>
        <h1>FORMULARIO PARA AÑADIR ENTIDADES </h1>
        <hr>
        <!--Formulario Crear-->

        <form method="POST" action="index.php?accion=crear" id="form";>
            ID:
            <input type="text" name="id" required><br>

            NOMBRE:
            <input type="text" name="nombre"><br>

            PLANETA ORIGEN:
            <input type="text" name="planetaOrigen"><br>

            NIVEL ESTABILIDAD:
            <input type="number" min="1" max="10" name="nivelEstabilidad"><br>

            <label>DIETA (Si es una Forma de Vida):</label>
            <select name="dieta">
                <option value="">No es una Forma de vida</option>
                <option value="Silicio">Silicio</option>
                <option value="Energia">Energía</option>
                <option value="Carbono">Carbono</option>
            </select>
            <br>
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

            ANTIGUEADAD:

            <input type="text" name="antiguedad"><br>

            <button type="submit">Agregar</button>

        </form>
        <a href="index.php">Volver</a>