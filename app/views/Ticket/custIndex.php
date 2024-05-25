<html>

<head>
    <title><?= $name ?> view</title>
</head>

<body>

    <div class='containerToHoldContainer'>
        <div class='product-container'>
            <div class='review-name'>
                <h4><?= $ticketInfo->issue ?></h4>
            </div>
            <div class='review-name'>
                <h2><?= $ticketInfo->issue_title ?></h2>
            </div>
            <dd>
                <p style="text-align: left;"><?= $ticketInfo->issue_description ?></p>
            </dd>
        </div>
    </div>
</body>

</html>