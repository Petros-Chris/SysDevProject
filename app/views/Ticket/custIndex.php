<html>

<head>
<title><?= $name ?> view</title>
	<link rel="stylesheet" type="text/css" href="/app/css/style.scss">
</head>


<body>

    <div class='containerToHoldContainer'>
        <div class='container-infromation'>
            <div class='review-name'>
                <h4><?= $ticketInfo->issue ?></h4>
            </div>
            <div class='review-name'>
                <h2><?= $ticketInfo->issue_title ?></h2>
            </div>
                <p style="text-align: left;"><?= $ticketInfo->issue_description ?></p>
        </div>
    </div>
</body>

</html>