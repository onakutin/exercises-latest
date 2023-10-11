<?php

require_once 'lib/DBBlackbox.php';
require_once 'Comment.php';

$comment = new Comment;

$comments = select(0, 0, 'Comment');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Disney buys Star Wars maker Lucasfilm from George Lucas | BBC News</title>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <article>

        <div class="img">
            <img src="img/article.jpg" alt="Disney buys Star Wars maker Lucasfilm from George Lucas">
        </div>

        <h1>Disney buys Star Wars maker Lucasfilm from George Lucas</h1>

        <p class="story">Disney is buying Lucasfilm, the company behind the Star Wars films, from its chairman and
            founder George Lucas for $4.05bn (£2.5bn).</p>

        <p>Mr Lucas said: "It's now time for me to pass Star Wars on to a new generation of film-makers."</p>

        <p>In a statement announcing the purchase, Disney said it planned to release a new Star Wars film, episode
            seven, in 2015.</p>

        <p>That will be followed by episodes eight and nine and then one new movie every two or three years, the company
            said.</p>

    </article>

    <div class="comments">
        <h2>Comment below:</h2>

        <form action="handle-form.php" method="post">
            <textarea name="text" cols="30" rows="10" value="<? htmlspecialchars((string) $comment->text) ?>"
                placeholder=" Type your comment"></textarea>
            <button type="submit">Send</button>
        </form>

        <ul>
            <?php foreach ($comments as $comment): ?>
                <li>
                    <?= $comment->text ?>
                </li>
            <?php endforeach ?>
        </ul>

    </div>

</body>

</html>