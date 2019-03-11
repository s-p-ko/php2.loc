<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0,
          maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The last News</title>
</head>
<body>
<h1>The last news</h1>
<h3><a href="App/controllers/admin/">Go to the admin panel</a></h3>
<div>
    <?php foreach ($data as $article ): ?>
        <article>
            <h2><a href="/App/controllers/article.php?id=<?php echo
                $article->id; ?>"><?php echo $article->title; ?></a></h2>
            <p><?php echo $article->content; ?></p>
        </article>
    <?php endforeach; ?>
</div>
</body>
</html>