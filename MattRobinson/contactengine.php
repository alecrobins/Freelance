<?php

$EmailFrom = "contact@mattrobinsontunes.com";
$EmailTo = "mattrobinsontunes@gmail.com";
$Subject = "Message from Website";
$Name = Trim(stripslashes($_POST['Name'])); 
$Email = Trim(stripslashes($_POST['Email'])); 
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
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
 print "<meta http-equiv=\"refresh\" content=\"0;URL=http://www.mattrobinsontunes.com/wp-content/themes/MattRobinson/contact-success.php\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=http://www.mattrobinsontunes.com/wp-content/themes/MattRobinson/contact-fail.php\">";
}
?>