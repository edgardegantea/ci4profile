<h2>Crear Usuario</h2>
<form action="/usuarios/store" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" required><br>
    
    <label for="apellidos">Apellidos:</label>
    <input type="text" name="apellidos" required><br>

    <label for="username">Username:</label>
    <input type="text" name="username" required><br>

    <label for="email">Email:</label>
    <input type="email" name="email" required><br>

    <label for="password">Password:</label>
    <input type="password" name="password" required><br>

    <label for="telefono">Teléfono:</label>
    <input type="text" name="telefono"><br>

    <button type="submit">Guardar</button>
</form>
