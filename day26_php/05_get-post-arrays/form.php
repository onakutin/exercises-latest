'Here is the form'

<form action="" method="post">
    <?php foreach ($items as $i => $text): ?>
        <input type="text" name="items[<?= $i ?>]" value="<?= htmlspecialchars($text) ?>">
    <?php endforeach ?>
    <input type="text" name="items[<?= count($items) ?>]" value="">
    <button type="submit">Add</button>
</form>