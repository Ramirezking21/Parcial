<h1>Crear Nuevo Permiso</h1>
<form method="POST" action="index.php?action=store">
    <label for="perfil">ID Perfil:</label>
    <input type="number" name="Id_perfil" required><br>
    <label for="acceso">ID Acceso:</label>
    <input type="number" name="Id_acceso" required><br>
    <label for="crear">Puede Crear:</label>
    <input type="checkbox" name="Puede_crear" value="1"><br>
    <label for="leer">Puede Leer:</label>
    <input type="checkbox" name="Puede_leer" value="1"><br>
    <label for="actualizar">Puede Actualizar:</label>
    <input type="checkbox" name="Puede_actualizar" value="1"><br>
    <label for="borrar">Puede Borrar:</label>
    <input type="checkbox" name="Puede_borrar" value="1"><br>
    <button type="submit">Guardar</button>
</form>
