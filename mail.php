<?php
// Where will you get the forms' results?
// define("CONTACT_FORM", 'kimlyndonhowell@gmail.com');
$postData = $_POST;
echo $postData["fullname"];
echo $postData["email"];
echo $postData["subject"];
echo $postData["message"];
//mail("kimlyndonhowell@gmail.com","My subject",$msg);
?>