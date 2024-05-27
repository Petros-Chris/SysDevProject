<!DOCTYPE html>
<html>
<head>
    <title><?= htmlspecialchars($name) ?> view</title>
    <link rel="stylesheet" type="text/css" href="/app/css/style.scss">
</head>
<body>
    <div class='container'>
        <h2><?= __('Are You Sure You Want To Disable Customer') ?> <?= htmlspecialchars($data->customer_id) ?>?</h2>
        
    <div class ="user">
        <p><?= __('Customer Name') ?>: <?= htmlspecialchars($data->first_name) ?> <?= htmlspecialchars($data->last_name) ?></p>
        <p><?= __('Customer Email') ?>: <?= htmlspecialchars($data->email) ?></p>
        <div>
        <form method='post' action='' onsubmit="return confirmDeactivation()">
            <div class="form-group">
                <label><?= __('Password') ?>:<input type="password" class="form-control" name="password" required /></label>
            </div>

            <div class="form-group">
                <label><?= __('Type Customer Name to Confirm') ?>:<input type="text" class="form-control" name="customer_name_confirmation" required /></label>
            </div>

            <div class="form-group">
                <input type="submit" name="action" value="<?= __('Deactivate') ?>" />
                <a href='/Admin/customerList'><?= __('Cancel') ?></a>
            </div>
        </form>
    </div>

    <script>
        function confirmDeactivation() {
            const customerName = "<?= addslashes($data->first_name) ?>"; 
            const enteredName = document.querySelector('input[name="customer_name_confirmation"]').value;

            if (enteredName !== customerName) {
                alert("The entered customer name does not match. Please try again.");
                return false;
            }

            return true;
        }
    </script>
</body>
</html>
