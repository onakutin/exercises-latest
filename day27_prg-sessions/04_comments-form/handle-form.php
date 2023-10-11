<?php

require_once 'lib/DBBlackbox.php';
require_once 'Comment.php';

$comment = new Comment;

$comment->text = $_POST['text'] ?? $comment->text;

$id = insert($comment);

header('Location: index.php');
exit();