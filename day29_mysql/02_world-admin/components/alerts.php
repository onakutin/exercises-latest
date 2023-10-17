<?php if ($success_message = session()->get('success_message')): ?>

    <div class="success-message">
        <?= $success_message ?>
    </div>

<?php endif ?>

<?php if ($errors = session()->get('error_messages')): ?>

    <?php foreach ($errors as $error): ?>

        <div class="error-message">
            <?= $error ?>
        </div>
    <?php endforeach; ?>
<?php endif; ?>