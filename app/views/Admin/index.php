<html>
    <head>
	    <title><?= $name ?> view</title>
	</head>
    
    <body>
    <button class="Choice-button" onclick="location.href='/Admin/create'"><?=__('Add A New Product')?></button>
        <button class="Choice-button" onclick="location.href='/Admin/productListing'"><?=__('Modify A Product')?></button>
        <button class="Choice-button" onclick="location.href='/Admin/customerList'"><?=__('Disable/Enable User Account')?></button>
        <button class="Choice-button" onclick="location.href='/Ticket/ongoing'"><?=__('View All Ongoing Tickets')?></button>
        <button class="Choice-button" onclick="location.href='/Employee/creation'"><?=__('Create A New Employee')?></button>
        <button class="Choice-button" onclick="location.href='/Admin/orders'"><?=__('View All Orders')?></button>
    </body>
</html>
