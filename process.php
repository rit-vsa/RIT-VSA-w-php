<?php
include("database.php");

//Check if form submitted
if(isset($_POST["submit"])){
  $user = $_POST["user"];
  $message = $_POST["message"];

  //Set timezone
  date_default_timezone_set("America/New_York");
  $time = date("h:i:s a", time());

  //validate input
  if(!isset($user) || $user == "" || !isset($message) || $message == ""){
    $error = "Please fill in both your name and message";
    header("Location: index.php?error=".urlencode($error));
    exit();
  }else{
    $query = "INSERT INTO shouts (user, message, time) VALUES ('$user', '$message','$time')";
    if(!$db->query($query)){
      echo "Data could not be sent to the database.";
      exit;
    }else{
      header("Location: shoutbox.php");
      exit();
    }
  }
}
 ?>
