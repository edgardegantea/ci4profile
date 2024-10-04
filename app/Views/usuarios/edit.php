<h2>Editar Usuario</h2>
<form action="/usuarios/update/<?= $usuario['id'] ?>" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" value="<?= $usuario['nombre'] ?>" required><br>

    <label for="apellidos">Apellidos:</label>
    <input type="text" name="apellidos" value="<?= $usuario['apellidos'] ?>" required><br>

    <label for="username">Username:</label>
    <input type="text" name="username" value="<?= $usuario['username'] ?>" required><br>

    <label for="email">Email:</label>
    <input type="email" name="email" value="<?= $usuario['email'] ?>" required><br>

    <label for="password">Password (déjalo en blanco si no deseas cambiarlo):</label>
    <input type="password" name="password"><br>

    <label for="telefono">Teléfono:</label>
    <input type="text" name="telefono" value="<?= $usuario['telefono'] ?>"><br>

    <button type="submit">Actualizar</button>
</form>
