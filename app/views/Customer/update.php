<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $name ?> view</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css">
    <link rel="stylesheet" type="text/css" href="/app/css/style.scss">
</head>

<body>
    <div id="update-form">
        <form id="updateForm" method='post' action=''>
        <div class="form-input-material">
            <input type="text" name="first_name" class="form-control-material" placeholder="First Name" value='<?= $customer->first_name ?>' required />
            </div>
            <div class="form-input-material">
            <input type="text" name="last_name" class="form-control-material" placeholder="Last Name" value='<?= $customer->last_name ?>' required />
            </div>
            <div class="form-input-material">
            <input type="email" name="email" class="form-control-material" placeholder="Email" value='<?= $customer->email ?>' required />
            </div>
            <div class="form-input-material">
            <input type="password" id="oldPass" class="form-control-material" name="oldPassword" placeholder="Old Password" required />
            </div>
            <div class="form-input-material">
            <input type="password" id="pass"  class="form-control-material" name="password" placeholder="New Password" required />
            <span id="error1" style="color: red; display: none;">*</span>
            </div>
            <div class="form-input-material">
            <input type="password" id="conPas" class="form-control-material" name="confirmPassword" placeholder="Confirm New Password" required />
            </div>
            <?php if ($customer->secret != null): ?>
                <a href="/Customer/disable2fa"><?= __('Disable 2 Factor Authentication') ?></a>
            <?php else: ?>
                <a href="/Customer/setup2fa"><?= __('Enable 2 Factor Authentication') ?></a>
            <?php endif; ?>

            <div class="form-group">
                <input type="submit" name="action" value="Update" />
                <a href='/Customer/dashboard'>Cancel</a>
                <a href='/Customer/deactivate'>Deactivate</a>
            </div>
        </form>
    </div>
</body>

</html>

<script>
    function validateForm(event) {
        event.preventDefault();

        var oldPassword = document.getElementById("oldPass").value;
        var newPassword = document.getElementById("pass").value;
        var confirmPassword = document.getElementById("conPas").value;

        // Validate new password and confirm password match
        if (newPassword === confirmPassword) {
            // Assuming a function to verify the old password using AJAX
            verifyOldPassword(oldPassword, function(isValid) {
                if (isValid) {
                    document.getElementById("updateForm").submit();
                } else {
                    alert("Old password is incorrect.");
                }
            });
        } else {
            alert("New passwords do not match.");
        }
    }

    function verifyOldPassword(oldPassword, callback) {
       
        var isValid = oldPassword === <?$_SESSION['password_hash']?>;
        callback(isValid);
    }
</script>
