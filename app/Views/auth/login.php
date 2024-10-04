<h2>Iniciar Sesión</h2>

<?php if (session()->getFlashdata('error')): ?>
    <div style="color: red;">
        <?= session()->getFlashdata('error') ?>
    </div>
<?php endif; ?>

<form action="/login" method="post">
    <label for="username_or_email">Nombre de Usuario o Email:</label>
    <input type="text" name="username_or_email" required><br>

    <label for="password">Contraseña:</label>
    <input type="password" name="password" required><br>

    <button type="submit">Iniciar Sesión</button>
</form>

<p><a href="/reset-password">¿Olvidaste tu contraseña?</a></p>
