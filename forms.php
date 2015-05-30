<?php

$EmailFrom = "signupform@redrocklife.com";
$EmailTo = "signup@redrocklife.com";
$Subject = "Sign Up details";
$Name = Trim(stripslashes($_POST['Name'])); 
$phone = Trim(stripslashes($_POST['Phone'])); 
$Email = Trim(stripslashes($_POST['Email'])); 
$Password = Trim(stripslashes($_POST['Password'])); 
$Message = Trim(stripslashes($_POST['Message'])); 

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Phone: ";
$Body .= $phone;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Password: ";
$Body .= $Password;
$Body .= "\n";


// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=index.php\">";
}
else{
  echo '<p>You answered the anti-spam question incorrectly!</p>';
}
?>