<html>
    <head>
	    <title><?= $name ?> view</title>
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
