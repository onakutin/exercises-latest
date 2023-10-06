<?php
$links = [
    '/' => 'Home',
    '/eshop' => 'Eshop',
    '/contact' =>'Contact',
    '?terms' => 'Terms & Conditions'
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inline PHP Exercise</title>
</head>
<body>

<h1>Inline PHP Exercise</h1>

<?php
    // is the current user administrator?
    $user_is_admin = true;
?>


<ul class="menu">

<?php foreach ($links as $name) : ?>
    <li><a href="<?= $url ?>"><?= $name ?></a></li>
        <?php endforeach; ?>

        <?php if ($user_is_admin) : ?>
    
        <li><a href="#">Link just for administrators</a></li>
        <li><a href="#">Another link just for administrators</a></li>
    
    <?php endif; ?>
</ul>

</body>
</html>