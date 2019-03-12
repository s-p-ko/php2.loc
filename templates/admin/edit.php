<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0,
           maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit article</title>
</head>
<body>
<h1>Edit the article</h1>
    <form method="post">
        <p>Title</p>
        <input type='hidden' name="id" value="<?php echo $data->id; ?>">
        <input type="text" size="60" maxlength="250" name="title"
               value="<?php echo $data->title; ?>">
        <p>Content</p>
        <textarea name="content" id="" cols="60" rows="10" ><?php echo
            $data->content; ?></textarea>
        <br><br>
        <button formaction="/App/controllers/admin/rewrite.php" type="submit">
            Rewrite the article</button>
        <button formaction="/App/controllers/admin/add.php" type="submit">
            Save as new article</button>
        <button formaction="/App/controllers/admin/canceledit.php" type="submit">
            Cancel</button>
    </form>
</body>
</html>