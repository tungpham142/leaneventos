<main>
    <div style="text-align: center;">
        <h3><?php echo form_error('correo'); ?></h3>
        <h3><?php echo form_error('contrasena'); ?></h3>
        <h3><?php echo form_error('nombre'); ?></h3>
        <h3><?php echo form_error('apellido'); ?></h3>
        <a href="<?php echo base_url(). $redirect; ?>">Go Back To Previous Page</a>
    </div>
</main>