<!-- views/add_equipo.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Añadir Equipo</title>
</head>
<body>
    <h1>Añadir Equipo</h1>
    <form action="../controllers/EquipoController.php" method="POST">
        <label for="nombre_equipo">Nombre del Equipo:</label>
        <input type="text" id="nombre_equipo" name="nombre_equipo" required>
        <input type="submit" value="Añadir">
    </form>
</body>
</html>