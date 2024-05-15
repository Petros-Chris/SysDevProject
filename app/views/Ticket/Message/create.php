<html>

<head>
    <title><?= $name ?> view</title>
</head>

<body>
    <div class="login-container">
        <h1>Create Message</h1>
        <form action="" method="POST" name="ermwhatthesigma">
            <textarea type="text" name="message" placeholder="Enter Your Message Here"></textarea>
            <label>Image Link:<input type="text" name="image_link"></label><br>
            <input type="submit" value="Confirm"> <a href="#"
                onclick="history.back();">Cancel</a>
        </form>
    </div>
</body>

</html>