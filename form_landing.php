<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST["name"]);
  $mail = htmlspecialchars($_POST["mail"]);
  $phone = htmlspecialchars($_POST["phone"]);
  printf("<div style='
  background:yellow;
  border:solid 1px black;
  position: absolute; 
  top: 50%%;
  left: 50%%;
  transform: translate(-50%%, -50%%);
  width: fit-content;
  padding:30px'>
  The form is submitted by %s,<br>His/Her mail is --%s--,<br> And his/her phone number is --%s--<div>", strtoupper($name), strtolower($mail), ($phone));
  // header("Location:../php/index.php");
  if (empty($name)) {
    exit();
    header("Location:../php/index.php");
  };
} else {
  header("Location:../php/index.php");
};
