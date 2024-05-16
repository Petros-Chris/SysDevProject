<html>

<head>
    <title><?= $name ?> view</title>
</head>

<body>
    <div class='container'>
        <form method='post'>
            <h2>Submit A Ticket</h2>
            <label>Whats Your Issue Today? <select name="issue" class="form-control">
                    <option value="Order Issue">Order Issue</option>
                    <option value="Product Issue">Product Issue</option>
                </select></label>

            <label>Tell Us More About Your Issue: <textarea class="form-control textarea" name="issue_description" required></textarea></label>

            <div class="form-group">
                <input type="submit" name="action" value="Submit" />
                <a href="javascript:history.back()">Cancel</a>
            </div>
        </form>
    </div>
</body>

</html>