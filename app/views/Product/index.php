<html>
    <head>
	    <title><?= $name ?> view</title>
	    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </head>

    <body>
        <dt><dd><?= $data->brand ?></dd></dt>
        <dt><dd><?= $data->model ?></dd></dt>
        <dt><dd><?= $data->color ?></dd></dt>
        <dt><dd><?= $data->cost_price ?></dd></dt>
        <dt><dd><?= $data->shape ?></dd></dt>
        <dt><dd><?= $data->size ?></dd></dt>
        <dt><dd><?= $data->optical_sun ?></dd></dt>
        <dt><dd><?= $data->description ?></dd></dt>
        <dt><dd><?= $data->quantity ?></dd></dt>

        <img src='<?= $data->image ?>'>
        
        <form method='post' action=''>
            <input type='submit' value='Add To Cart'>
        </form>

        <a href= '/Review/create'>Make A Review</a> <br>
        <a href= '/Wishlist/add'>Add To Wishlist</a>
    </body>
</html>
