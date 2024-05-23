<html>

<head>
	<title><?= $name ?> view</title>
	<link rel="stylesheet" type="text/css" href="/app/css/style.scss">
</head>

<body>
	<div class='container'>
		<form method='post' action=''>
			<h1>Create A Review</h1>
			<div class="form-group">
				<label id="labelForStar">How Much Would You Rate This Product On A Scale Of 1 To 5?
					<div class="rate">
						<input type="radio" id="star5" name="rating" value="5" />
						<label for="star5" title="text">5 stars</label>
						<input type="radio" id="star4" name="rating" value="4" />
						<label for="star4" title="text">4 stars</label>
						<input type="radio" id="star3" name="rating" value="3" />
						<label for="star3" title="text">3 stars</label>
						<input type="radio" id="star2" name="rating" value="2" />
						<label for="star2" title="text">2 stars</label>
						<input type="radio" id="star1" name="rating" value="1" />
						<label for="star1" title="text">1 star</label>
					</div>
				</label>
			</div>
				<label>Description:<input type="text" class="form-control" name="description" /></label>
				
			<div class="form-group">
				<label>Add An Image:<input type="text" class="form-control" name="image_link" /></label>
			</div>
			<input type='Submit' value='Submit' name='create_review'>
			<a href="#" onclick="history.back();">Cancel</a>
		</form>

	</div>
</body>

</html>