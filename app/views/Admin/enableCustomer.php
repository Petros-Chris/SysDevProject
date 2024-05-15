<html>
	<head>
		<title><?= $name ?> view</title>
	</head>

	<body>
		<div class='container'>
        	<h2><?=__('Are You Sure You Want To Enable Customer')?> <?= $data->customer_id ?>?</h2>
			<form method='post' action=''>

				<div class="form-group">
					<label><?=__('Password')?>:<input type="password" class="form-control" name="password"/></label>
				</div>

				<div class="form-group">
					<input type="submit" name="action" value="<?=__('Enable')?>"/> 
					<a href='/Admin/customerList'><?=__('Cancel')?></a>
				</div>
			</form>
		</div>
	</body>
</html>