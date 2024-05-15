<!DOCTYPE html>
<html lang="en">

<head>
	<title><?= $name ?> view</title>
	<link rel="stylesheet" type="text/css" href="/app/css/style.scss">
</head>

<body>
	<div class="header">
		<h1><?= __('About us') ?></h1>
		<p><?= __('The story behind Mes Yeux Tes yeux') ?></p>
	</div>

	<div class="story-container">
		<div class="story-content">
			<div class="story-image">
				<img src="/app/resources/email.png" alt="Image description" height="100%" ; width="100%" ;>
			</div>

			<div class="story-text">
				<h3>From optician to designer</h3>
				<p>Optician, entrepreneur and designer, Marie-Sophie Dion (MSD) is the founder of the Mes Yeux Tes yeux
					concept, where the customer lets himself be served like a king. Since entering the field in 1992,
					she quickly made known her talent as a curator for creative and avant-garde frames, all over the
					world. 300 distinct models are offered in 28 colors and are available exclusively at our 5
					boutiques.</p>
			</div>
		</div>
		<br>

		<div class="story-content2">
			<div class="story-text-left">
				<h3><?= __('Second content heading') ?></h3>
				<p>orem Ipsum is simply dummy text of the printing and
					typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
					when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has
					survived not only five centuries, but also the leap into electronic typesetting, remaining
					essentially unchanged. It was popularised
					in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
					and ecently with ds PageMaker including versions of Lorem Ipsum.</p>
			</div>
			<div class="story-image-left">
				<img src="/app/resources/manonwall.png" alt="Image description" height="100%" ; width="100%" ;>
			</div>
		</div>
	</div>
</body>

</html>