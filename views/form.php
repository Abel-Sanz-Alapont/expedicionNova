        <h1>Gestor </h1>
        <hr>
        <!--Formulario Crear-->

        <form method="POST" action="index.php?accion=crear";>
            ID:
            <input type="text" name="id" required><br>

            NOMBRE:
            <input type="text" name="nombre">

            PLANETA ORIGEN:
            <input type="text" name="planetaOrigen"><br>

            NIVEL ESTABILIDAD:
            <input type="number" min="1" max="10" name="nivelEstabilidad">

            DIETA:
            <input type="text" name="dieta"><br>
            DUREZA:
            
            <input type="text" name="dureza"><br>
            ANTIGUEADAD:

            <input type="text" name="antiguedad"><br>

            <button type="submit">Agregar</button>

        </form>
        <a href="index.php">Volver</a>