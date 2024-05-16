<html>

<head>
    <title><?= $name ?> view</title>
</head>

<body>
    <div class='container'>
            <button type="button" onclick="window.location.href = '/Customer/update'" class="Choice-button">Change Information</button>
            <button type="button" onclick="window.location.href = '/Ticket/create'" class="Choice-button">Create A Ticket</button>
            <button type="button" onclick="window.location.href = '/Ticket/allTickets'" class="Choice-button">View Tickets You Made</button>
            <button type="button" onclick="window.location.href = '/Review/byUser'" class="Choice-button">View Reviews You Made</button>
            <button type="button" onclick="window.location.href = '/Customer/orders'" class="Choice-button">View Previous Orders</button>
    </div>
</body>

</html>

