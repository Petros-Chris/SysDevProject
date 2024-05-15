<!DOCTYPE html>
<html lang="en">
<head>
<title><?= $name ?> view</title>
<link rel="stylesheet" type="text/css" href="/app/css/style.scss">
</head>
<body>

<div class="contact-text">
    <h1><?= __('Get in touch') ?></h1>
    <p><?= __('Want to get in touch?') ?></p>
    <p><?= __('We\'d love to hear from you. Here\'s how you can reach us') ?></p>
</div>

<div class="contact-info">
    <div class="email-box">
        <img src="/app/resources/email.png" alt="Email Icon" class = "imgEmail">
        <h3><?= __('Send an Email') ?></h3>
        <p><?= __('Want to contact us by email to ask any questions?') ?>Want to contact us by email to ask any questions?</p>
        <p><?= __('Want to get in touch?') ?>Email to company</p>
        <a href="mailto:MesYeuxTesYeux@gmail.com"><?= __('Want to get in touch?') ?>MesYeuxTesYeux@gmail.com</a>
        <p><?= __('Want to get in touch?') ?>Talk to a representative</p>
        <a href="mailto:PersonCompany@gmail.com"><?= __('Want to get in touch?') ?>PersonCompany@gmail.com</a>
    </div>

    <div class="phone-box">
    <img src="/app/resources/telephone.png" alt="phone Icon" class = "imgPhone">
        <h3>Give us a call</h3>
        <p>Would you like to talk to one of our agents?</p>
        <p>Call our in-store agent</p>
        <a href="tel:514-341-202">514-341-202</a>
        <p>Prefer to book an appointment with one of our doctors?</p>
        <a href="tel:450-xxx-xxx">450-xxx-xxx</a>
    </div>
</div>

</body>
</html>