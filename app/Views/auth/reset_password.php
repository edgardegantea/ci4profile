<h2>Restablecer Contraseña</h2>

<?php if (session()->getFlashdata('error')): ?>
    <div style="color: red;">
        <?= session()->getFlashdata('error') ?>
    </div>
<?php endif; ?>

<?php if (session()->getFlashdata('message')): ?>
    <div style="color: green;">
        <?= session()->getFlashdata('message') ?>
    </div>
<?php endif; ?>

<form action="/update-password" method="post">
    <input type="hidden" name="token" value="<?= $token; ?>">
    
    <label for="password">Nueva Contraseña:</label>
    <input type="password" name="password" required><br>

    <button type="submit">Actualizar Contraseña</button>
</form>
