<h1>Editar Permiso</h1>
<form method="POST" action="index.php?action=update&id=<?= $permiso['Id_permisos'] ?>">
    <label for="perfil">ID Perfil:</label>
    <input type="number" name="Id_perfil" value="<?= $permiso['Id_perfil'] ?>" required><br>
    <label for="acceso">ID Acceso:</label>
    <input type="number" name="Id_acceso" value="<?= $permiso['Id_acceso'] ?>" required><br>
    <label for="crear">Puede Crear:</label>
    <input type="checkbox" name="Puede_crear" value="1" <?= $permiso['Puede_crear'] ? 'checked' : '' ?>><br>
    <label for="leer">Puede Leer:</label>
    <input type="checkbox" name="Puede_leer" value="1" <?= $permiso['Puede_leer'] ? 'checked' : '' ?>><br>
    <label for="actualizar">Puede Actualizar:</label>
    <input type="checkbox" name="Puede_actualizar" value="1" <?= $permiso['Puede_actualizar'] ? 'checked' : '' ?>><br>
    <label for="borrar">Puede Borrar:</label>
    <input type="checkbox" name="Puede_borrar" value="1" <?= $permiso['Puede_borrar'] ? 'checked' : '' ?>><br>
    <button type="submit">Actualizar</button>
</form>
