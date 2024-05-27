<!DOCTYPE html>
<html>
<head>
	<title><?= $name ?> view</title>
	<link rel="stylesheet" type="text/css" href="/app/css/style.scss">
</head>
    <body>
        <h1 class ="admin"> Admin Control </h1>
    <button class="Choice-buttonadmin" onclick="location.href='/Admin/create'"><?=__('Add A New Product')?></button>
        <button class="Choice-buttonadmin" onclick="location.href='/Admin/productListing'"><?=__('Modify A Product')?></button>
        <button class="Choice-buttonadmin" onclick="location.href='/Admin/customerList'"><?=__('Disable/Enable User Account')?></button>
        <button class="Choice-buttonadmin" onclick="location.href='/Ticket/ongoing'"><?=__('View All Ongoing Tickets')?></button>
        <button class="Choice-buttonadmin" onclick="location.href='/Employee/creation'"><?=__('Create A New Employee')?></button>
        <button class="Choice-buttonadmin" onclick="location.href='/Admin/orders'"><?=__('View All Orders')?></button>
    </body>
</html>
