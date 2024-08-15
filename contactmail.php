<?php
//start to bilding the mail String
$msg  ="name:   ".$_POST['lname']."\n";
$msg  .="email:   ".$_POST['email']."\n";
$msg  .="message:   ".$_POST['message']."\n";
$msg  .="select:   ".$_POST['select']."\n";

//set up the mail
$recipient = "assefashumie@gmail.com";
$subject = "Contact form";
$mailheaders = "From: My Web Site <mail.abtmweb.com> \n";
$mailheaders .= "Reply-To: ".$_POST['email'];

//Send the mail
mail($recipient, $subject, $msg, $mailheaders);
?>
<DOCTYPE html>
  <html>
    <head>
      <title>Send Mail</title>
    </head>
    <body>
      <p>Thank you, <strong><?php echo $_POST['fname']; ?></strong>,
        for your message.</p>
      <p>Your e-mail address:
        <strong><?php echo $_POST['email']; ?></strong></p>
      <p>Your message: <br/> <?php echo $_POST['message']; ?> </p>
      <p> Return to our <a href="http://www.prototype.abtmweb.com">home page</a>.</p>

    </body>
  </html>
  
  <?php
//start to bilding the mail String
$msg  ="name:   ".$_POST['lname']."\n";
$msg  .="email:   ".$_POST['email']."\n";
$msg  .="message:   ".$_POST['message']."\n";
$msg  .="select:   ".$_POST['select']."\n";

//set up the mail
$recipient = "info@abtmweb.com, assefashumie@gmail.com";
$subject = "Contact form";
$mailheaders = "From: There <mail.abtmweb.com> \n";
$mailheaders .= "Reply-To: ".$_POST['email'];

//Send the mail
mail($recipient, $subject, $msg, $mailheaders);
?>
<DOCTYPE html>
  <html>
    <head>
      <title>Send Mail from the form listing 11.10</title>
    </head>
    <body>
      <p>Hello <strong><?php echo $_POST['fname']; ?></strong>, thank you for
        your message.</p>
      <p>Your e-mail address:
        <strong><?php echo $_POST['email']; ?></strong></p>
      <p>Your message: <br/> <?php echo $_POST['message']; ?> </p>
      <p> Return to our <a href="http://abtmweb.com">home page</a>.</p>

    </body>
  </html>