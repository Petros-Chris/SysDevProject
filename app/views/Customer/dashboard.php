<html>

<head>
    <title><?= $name ?> view</title>
</head>

<body>
    <div class='container'>
            <button type="button" onclick="window.location.href = '/Customer/update'" class="signup-button">Change Information</button>
            <button type="button" onclick="window.location.href = '/Ticket/create'" class="signup-button">Create A Ticket</button>
            <button type="button" onclick="window.location.href = '/Ticket/allTickets'" class="signup-button">View Tickets You Made</button>
            <button type="button" onclick="window.location.href = '/Review/byUser'" class="signup-button">View Reviews You Made</button>
            <button type="button" onclick="window.location.href = '/Customer/orders'" class="signup-button">View Previous Orders</button>
    </div>
</body>

</html>

