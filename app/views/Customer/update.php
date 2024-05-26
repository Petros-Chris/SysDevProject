<html>

<head>
    <title><?= $name ?> view</title>
</head>

<body>
    <div class='container'>
        <form id="updateForm" method='post' action=''>

            <input type="text" name="first_name" placeholder="First Name" value='<?= $customer->first_name ?>' required />

            <input type="text" name="last_name" placeholder="Last Name" value='<?= $customer->last_name ?>' required />

            <input type="email" name="email" placeholder="Email" value='<?= $customer->email ?>' required />

            <input type="password" id="oldPass" name="oldPassword" placeholder="Old Password" required />

            <input type="password" id="pass" name="password" placeholder="New Password" required />
            <span id="error1" style="color: red; display: none;">*</span>

            <input type="password" id="conPas" name="confirmPassword" placeholder="Confirm New Password" required />

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
    // function validateForm(event) {
    //     event.preventDefault();

    //     var oldPassword = document.getElementById("oldPass").value;
    //     var newPassword = document.getElementById("pass").value;
    //     var confirmPassword = document.getElementById("conPas").value;

    //     // Validate new password and confirm password match
    //     if (newPassword === confirmPassword) {
    //         // Assuming a function to verify the old password using AJAX
    //         verifyOldPassword(oldPassword, function(isValid) {
    //             if (isValid) {
    //                 document.getElementById("updateForm").submit();
    //             } else {
    //                 alert("Old password is incorrect.");
    //             }
    //         });
    //     } else {
    //         alert("New passwords do not match.");
    //     }
    // }

    // function verifyOldPassword(oldPassword, callback) {
       
    //     var isValid = oldPassword === <? $_SESSION['password_hash'] ?>;
    //     callback(isValid);
    // }
</script>
