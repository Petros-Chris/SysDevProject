<html>

<head>
	<title><?= __('Create Review') ?></title>
	<link rel="stylesheet" type="text/css" href="/app/css/style.scss">
</head>

<body>
	<div class='containerFields'>
		<form method='post'>
			<h1><?= __('Create A Review') ?></h1>
			<div class="form">
				<label id="labelForStar"><?= __('How Much Would You Rate This Product On A Scale Of 1 To 5') ?>?
				</label>
				<br>
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
				<textarea type="text" id="form-description" name="description" placeholder="<?= __('Description') ?>"
					maxlength="500"></textarea> <br>
				<span><?= __('Remaining characters') ?>: <span id='remainingCharacter'>500</span></span>
			</div>
			<input type='Submit' value='<?= __('Submit') ?>' name='create_review' id="submitReview1">
			<a href="#" onclick="history.back();"><input type='Submit' value='<?= __('Back') ?>' name='create_review'
					id="submitReview2"></a>
		</form>

	</div>
</body>

<script>
	characterLimit();
</script>

</html>