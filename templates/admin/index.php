<?php
use App\AdminDataTable;
use App\Models\Article;

$functions = [
    function (Article $article) {
    return $article->id;
    },
    function (Article $article) {
        return $article->title;
    },
    function (Article $article) {
        return $article->content;
    },
    function (Article $article) {
        return $article->author_id;
    }
    ];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0,
          maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin panel</title>
</head>
<body>
<h1>Admin panel</h1>
<div>
    <h3><a href="/">Return to the Main page</a></h3>
</div>
<div>
    <h2>Create a new Article</h2>
    <form action="/admin/add" method="post">
        <p>Title</p>
        <input type="text" size="60" maxlength="250" name="title">
        <p>Content</p>
        <textarea name="content" id="" cols="60" rows="10"></textarea>
        <br>
        <button type="submit">Submit</button>
    </form>
    <b>
        <hr>
    </b>
</div>
<div>
    <h3>Articles</h3>
    <?php foreach ((new AdminDataTable($articles, $functions))->render() as $data): ?>
        <article>
            <h4><?php echo $data[1]; ?></h4>
            <div><?php echo $data[2]; ?></div>
            <?php if (!empty($data[3])) : ?>
                <p><b>Author: <?php echo (Article::findById($data[0])->author);
                ?></b></p>
            <?php endif; ?>
            <br>
            <a href="/admin/edit/<?php echo $data[0]; ?>">
                <button>Edit article</button>
            </a>
            <a href="/admin/delete/<?php echo $data[0]; ?>">
                <button>Delete article</button>
            </a>
        </article>
        <hr>
    <?php endforeach; ?>
</div>
</body>
</html>