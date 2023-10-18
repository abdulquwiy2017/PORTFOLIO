<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // Send email to yourself
  $to = "abdulquwiy2017@gmail.com";
  $subject = "New Contact Form Submission";
  $headers = "From: $email\r\n";
  $message = "Name: $name\r\nEmail: $email\r\nMessage: $message\r\n";

  mail($to, $subject, $message, $headers);

  // Send a response to the client
  $response = array("success" => true);
  echo json_encode($response);
} else {
  // Handle other requests or direct access to this script
  header("HTTP/1.1 403 Forbidden");
  echo "Access forbidden";
}
?>
