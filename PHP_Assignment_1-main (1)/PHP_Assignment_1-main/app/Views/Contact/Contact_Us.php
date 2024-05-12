<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

<table>
    <tr>   
        <ul>
            <th>
                <li><a href="../../../public/index.php">Landing page</a></li>
                <li><a href="../../../app/Views/Main/about_us.php">About Us</a></li>
                <li><a href="../../../app/Views/Contact/Contact_us.php">Contact Us</a></li>
                <li><a href="../../../app/Views/Contact/Messages.php">See the messages we get</a></li>
            </th>
            <th>
                <h1>Contact us</h1>
                <p>Wanna reach us? Write your email information and message in the following form and then submit</p>
            </th>
        </ul>
    </tr>
</table>

<?php
//This works but it's in the wrong context
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     // Handle form submission
//     $email = $_POST['email'] ?? ''; // Make sure to handle cases where these values might not be set
//     $message = $_POST['message'] ?? '';
//     $IP = $_SERVER['REMOTE_ADDR'];

//     // Save the message to the JSON file
//     $messageData = json_encode(['email' => $email, 'message' => $message, 'IP' => $IP]);
//     file_put_contents(__DIR__ . '/../../Resources/messages.json', $messageData . PHP_EOL, FILE_APPEND);

//     // Redirect back to the same page with a success message
//     header('Location: Contact_us.php?success=1');
//     exit();
// }
?>

<form action="../app/Controller/MessageController.php" method="post" class="form-inline" >
  <div class="form-group">
    <label>Email:</label>
    <input type="text" name="email" class="form-control" id="exampleInputEmail2" placeholder="Email">
  </div>

  <div class="form-group">
    <label>Message:</label>
    <br>
    <textarea name="message" class="form-control" rows="3" placeholder="Write To Us"></textarea>
  </div>
  <button type="submit" class="btn btn-default">Send</button>
</form>

<?php
if (isset($_GET['success']) && $_GET['success'] == 1) {
    echo '<div class="alert alert-success" role="alert">Message submitted successfully!</div>';
}
?>

</body>

</html>
