<html>

<head>
    <title><?= $name ?> view</title>
</head>

<body>
    <div class='container'>
        <form method='post' action=''>
            <div class="form-group">
                <label>Rating: <?= $data->rating ?></label>
            </div>

            <div class="form-group">
                <label>Description: <?= $data->description ?></label>
            </div>

            <div class="form-group">
                <label>Add An Image: <?= $data->image_link ?></label>
            </div>
            <input type='Submit' value='Delete' name='create_review'>
            <a href="/Product/index?id=<?= $_SESSION['product_id'] ?>">Cancel</a>
        </form>
    </div>
</body>

</html>