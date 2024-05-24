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
				<label id="labelForStar">How Much Would You Rate This Product On A Scale Of 1 To 5? </label>
				<div class="rate">
					<input type="radio" id="star5" name="rating" value="5" checked />
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
			<div id="descriptionBox">
				<textarea type="text" id="form-description" name="description" placeholder="Description"
					maxlength="500"></textarea> <br>
				<span id='remainingCharacter'>Remaining characters: 500</span>
			</div>
			<input type='Submit' value='Submit' name='create_review' id="submitReview1">
			<a href="#" onclick="history.back();"><input type='Submit' value='Back' name='create_review'
					id="submitReview2"></a>
		</form>

	</div>
</body>

<script>
	document.getElementById('form-description').addEventListener('input', function () {
		var maxLength = 500;
		var currentLength = this.value.length;
		var remainingC = document.getElementById('remainingCharacter');
		remainingC.textContent = "Remaining characters: " + (maxLength - currentLength);
	});
</script>

</html>