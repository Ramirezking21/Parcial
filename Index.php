<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Permisos</title>
</head>
<body>
    <div class="container">
        <h1>Gestión de Permisos</h1>
        <a href="index.php?action=create" class="btn">Crear Nuevo Permiso</a>

        <?php if (empty($permisos)): ?>
            <p class="empty-message">No hay permisos registrados.</p>
        <?php else: ?>
            <table>
                <thead>
                    <tr>
                        <th>ID Permiso</th>
                        <th>ID Perfil</th>
                        <th>ID Acceso</th>
                        <th>Crear</th>
                        <th>Leer</th>
                        <th>Actualizar</th>
                        <th>Borrar</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($permisos as $permiso): ?>
                        <tr>
                            <td><?= $permiso['Id_permisos'] ?></td>
                            <td><?= $permiso['Id_perfil'] ?></td>
                            <td><?= $permiso['Id_acceso'] ?></td>
                            <td><?= $permiso['Puede_crear'] ? 'Sí' : 'No' ?></td>
                            <td><?= $permiso['Puede_leer'] ? 'Sí' : 'No' ?></td>
                            <td><?= $permiso['Puede_actualizar'] ? 'Sí' : 'No' ?></td>
                            <td><?= $permiso['Puede_borrar'] ? 'Sí' : 'No' ?></td>
                            <td>
                                <a href="index.php?action=edit&id=<?= $permiso['Id_permisos'] ?>" class="btn">Editar</a>
                                <a href="index.php?action=delete&id=<?= $permiso['Id_permisos'] ?>" class="btn" onclick="return confirm('¿Estás seguro de eliminar este permiso?');">Eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
    </div>
</body>
</html>
