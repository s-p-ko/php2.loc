<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin panel</title>
</head>
<h1>Admin panel</h1>
<div>
    <h3><a href="/">Return to the Main page</a></h3>
</div>
<div>
    <h2>Create a new Article</h2>
        <form action="/App/controllers/admin/add.php" method="post">
            <p>Title</p>
            <input type="text" size="60" maxlength="250" name="title">
            <p>Content</p>
            <textarea name="content" id="" cols="60" rows="10"></textarea>
            <br>
            <button type="submit" name="create" value="create">Submit</button>
        </form>
    <b><hr></b>
</div>
<div>
    <h3>Articles</h3>
        <?php foreach ($data as $article): ?>
            <article>
                <h4><?php echo $article->title; ?></h4>
                <div><?php echo $article->content; ?></div>
                <br>
                <a href="/App/controllers/admin/edit.php?id=<?php echo $article->id;?>"><button>Edit article</button></a>
                 <a href="/App/controllers/admin/delete.php?id=<?php echo
                    $article->id;?>"><button>Delete article</button></a>
            </article>
            <hr>
        <?php endforeach; ?>
</div>
</body>
</html>