<!DOCTYPE html>
<html>

<head>
  <?php
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);

  // validate form fields
    if($name == '' OR $email == '' OR $message == ''){
      $error_message = "You must specify a value for name, email and message.";
    }

  // address field is hidden to prevent bots' spamming, 'normal' customers won't see this field
    if($_POST["address"] != ''){
      $error_message = "Your form submission has a problem.";
    }

    $email_body = "";
    $email_body = $email_body . "Name: " . $name . "\n";
    $email_body = $email_body . "Email: " . $email . "\n";
    $email_body = $email_body . "Message: " . $message . "\n";
    $to = "hnv1002@rit.edu";
    $subject = "New Message from my website";
    $header = "From: ".$name."\n";
    if(!isset($error_message)){
    // send customer form submission to my email
      mail($to,$subject,$email_body,$header);
    // redirect customer to a reponse page after submission
      header("Location: contact.php?status=thanks");
      exit;
    }
  }

  $pageTitle = "Contact";
  include("inc/head.php");
   ?>
</head>

<body>
  <?php include("inc/header.php"); ?>
  <div class="container">
    <div class="page-header">
      <h1 class="text-center">Contact Us</h1>
    </div>
    <?php if(isset($_GET["status"]) && $_GET["status"] == "thanks"){?>
      <p class="alert alert-success">Thanks for the email. We&rsquo;ll be in touch shortly!</p>
    <?php }else{ ?>
      <?php if(!isset($error_message)){
        echo "<p class='text-center'>We&rsquo;d love to hear from you! Complete the form to send us an email.</p>";
      }else{
        echo '<p class="alert alert-warning">'.$error_message."</p>";
      }
    } ?>
    <!-- contact forms -->
    <form class="col-md-6 col-md-offset-3" method="post" action="contact.php">
      <div class="form-group">
        <input name="name" class="form-control" type="text" placeholder="Enter your Name">
      </div>
      <div class="form-group">
        <input name="email" class="form-control" type="email" placeholder="Enter your Email">
      </div>
      <div class="form-group">
        <textarea name="message" class="form-control" rows="10" placeholder="Enter your Message"></textarea>
      </div>
      <div class="form-group">
        <input name="address" class="form-control hidden" type="text" placeholder="Enter your Address">
      </div>
      <div class="form-group">
        <input class="btn btn-success btn-block" type="submit">
      </div>
    </form>
  </div>
</body>
  
</html>
