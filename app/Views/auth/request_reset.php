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

<form action="/send-reset-link" method="post">
    <label for="email">Email:</label>
    <input type="email" name="email" required><br>

    <button type="submit">Enviar enlace de restablecimiento</button>
</form>
