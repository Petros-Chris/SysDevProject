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
				<img src="/app/resources/Models/TF4205U_TF4205U_ST__40x30_M.jpg" alt="Image description" height="100%" ; width="100%" ;>
			</div>

			<div class="story-text">
				<h3><?= __('Welcome to Mes Yeux Tes Yeux') ?></h3>
				<p><?= __('your premier destination for high-end fashion eyewear and cutting-edge optical solutions. Nestled in Mount Royal at 2324 Lucerne Rd, 
					we have proudly served our community for nearly 30 years.
					At Mes Yeux Tes Yeux, we curate an exquisite collection of eyewear from the most coveted fashion brands, offering both optical glasses and sunglasses that epitomize luxury\
					 and innovation. Our commitment to quality and excellence is exemplified by our exclusive retail 
					 partnership with the renowned Japanese optical company, TOKAI. Through this exclusive collaboration, 
					 we provide our customers with access to TOKAI\'s revolutionary neuroscience lenses and advanced progressive lens technology.
					  These lenses feature extraordinary coatings designed to endure the test of time, ensuring superior visual clarity and durability') ?></p>
			</div>
		</div>
		<br>

		<div class="story-content2">
			<div class="story-text-left">
				<h3><?= __('Customer Service') ?></h3>
				
				<p> <?= __('Our experienced team is dedicated to delivering personalized service,
				 helping you find the perfect eyewear to meet your needs and express your unique style. 
				Whether you\'re looking for the latest trends in eyewear fashion or the most advanced optical solutions,
 Mes Yeux Tes Yeux is here to offer you the very best.') ?> </p>
			</div>
			<div class="story-image-left">
				<img src="/app/resources/Models/PRVPR20Z__30x40_M.jpg" alt="Image description" height="100%" ; width="100%" ;>
			</div>
		</div>
	</div>
</body>

</html>