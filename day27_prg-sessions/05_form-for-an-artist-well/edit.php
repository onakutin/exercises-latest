<?php

session_start();

if (isset($_SESSION['success_message'])) {
    $success_message = $_SESSION['success_message'];
    unset($_SESSION['$success_message']);
}

require_once 'DBBlackbox.php';
require_once 'Artist.php';

$id = $_GET['id'];

$artist = find($id, 'Artist');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .success-message {
            color: green;
        }
    </style>
</head>

<body>
    <a href="list.php">List</a>
    <?php if (!empty($success_message)): ?>
        <div class="success-message">
            <?= $success_message ?>

        </div>
    <?php endif; ?>
    <form action="update.php?id=<?= $id ?>" method="post">

        <!-- display the form prefilled with entity data -->

        <?php $artist->renderForm() ?>

    </form>
</body>

</html>