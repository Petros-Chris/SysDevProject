<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <h1>Delete Post</h1>
        <form action="/delete/<?= $post['post_id'] ?>" method="post">
            <div class="form-group">
                <label for="message">Message:</label><br>
                <textarea id="message" class="form-control" name="message" rows="4" cols="50" disabled><?= $post['message'] ?></textarea>
            </div>
            <div class="form-group">
                <label for="password">Password:</label><br>
                <input type="password" id="password" class="form-control" name="password">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-danger" value="Delete Post">
                <a href="/Post/index" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
</body>
</html>
