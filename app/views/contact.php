<!DOCTYPE html>
<html lang="en">
<head>
<title><?= $name ?> view</title>

  <link rel="stylesheet" type="text/css" href="/app/css/style.scss">
  
</head>
<body>

<div class="contact-body">
<div class="contact-content">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2796.138158542128!2d-73.6641412238927!3d45.507297371074735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc918344a65f481%3A0x8c28fdc58a3b4db5!2s2324%20Lucerne%20Rd%2C%20Mount%20Royal%2C%2
    0QC%20H3R%202J8!5e0!3m2!1sen!2sca!4v1715547315465!5m2!1sen!2sca" 
        width="600" height="420" style="border:0;" allowfullscreen=""
            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
   
         </div>

<div class="contact-content">
<div id="contact-form">
<h3 class="contact-h3">Contact us</h3>

<form id="contact-form-id" class="contact-form-class" method="post" action="contact-form-process.php">
    
    <div class="contact-form-group">
        <label for="Name" class="contact-label">Your name</label>
        <div class="contact-input-group">
            <input type="text" id="Name" name="Name" class="contact-form-control" required>
        </div>
    </div>

    <div class="contact-form-group">
        <label for="Email" class="contact-label">Your email address</label>
        <div class="contact-input-group">
            <input type="email" id="Email" name="Email" class="contact-form-control" required>
        </div>
    </div>

    <div class="contact-form-group">
        <label for="Message" class="contact-label">Your message</label>
        <div class="contact-input-group">
            <textarea id="Message" name="Message" class="contact-form-control" rows="6" maxlength="3000" required></textarea>
        </div>
    </div>

    <div class="contact-form-group">
        <button type="submit" id="contact-button" class="contact-btn contact-btn-primary contact-btn-lg contact-btn-block">Send Message</button>
    </div>

    <div class="contact-credit" id="contact-credit">
    </div>

</form>
</div>
    </div>
</div>

</body>
</html>