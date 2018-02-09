<?php
$con = mysqli_connect('localhost:3306', 'mamixcoc_aditya', 'mamixco12@#','mamixcoc_sign_up');
if(!$con){
  echo "Error while sending message";
}
if (!mysqli_select_db($con, 'mamixcoc_sign_up')) {
  echo "Something went wrong";
}
$Name = $_POST['username'];
$Email = $_POST['email'];
$Message = $_POST['message'];

$sql = "INSERT INTO user_info (Name, Email, Message) VALUES ('$Name', '$Email', '$Message')";
if (!mysqli_query($con, $sql)) {
  echo "Message not sent";
}else {
  echo 'Thank You!';
}

?>
