<html>

<head>
    <title><?= $name ?> view</title>
    <link rel="stylesheet" type="text/css" href="/app/css/style.scss">
</head>

<body>
    <div class='container'>
        <form method='post'>
            <h2>Submit A Ticket</h2>
            <label>Whats Your Issue Today? <br><select name="issue" id="orderIssueSelction">
                    <option value="Order Issue">Order Issue</option>
                    <option value="Product Issue">Product Issue</option>
                </select></label>
                <input type="text" placeholder="Title" id="inputTitle" name="title" required maxlength="50">

            <textarea id="form-description" name="issue_description" placeholder="Description Of Your Issue"
                required maxlength="500"></textarea> <br>
                <span><?= __('Remaining characters') ?>: <span id='remainingCharacter'>500</span></span>

                <input type="submit" name="action" value="Submit" id="submitReview1" /> 
                <a href="#" onclick="history.back();"><input type='button' value='Cancel' name='create_review'
                        id="submitReview2"></a>
        </form>
    </div>
</body>

<script>
    characterLimit();
</script>


</html>