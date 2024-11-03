<?php
$emailErrormsg = "";
$passwordErrormsg = "";


if (isset($_POST["submit"])) {
    $emailValue = $_POST["emailName"];
    $passwordValue = $_POST["passName"];

 
    if ($emailValue == "") {
        $emailErrormsg = "Email must be filled out!";
    } elseif (preg_match("/\w+(@emsi.ma){1}$/", $emailValue) == 0) {
        $emailErrormsg= "Please enter a valid emsi email!";
    } 
 
    elseif ($passwordValue == "") {
        $passwordErrormsg= "Password must be filled out!";
    } else {
       session_start();
       
       $_SESSION['emailS']=$emailValue;
       $_SESSION['passS']=$passwordValue;
        header("Location:home2.php");
       
    }
}
?>
