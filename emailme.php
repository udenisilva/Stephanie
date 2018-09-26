<?php


if(isset($_POST["submit"])){
//Checking for blank Fields.
if($_POST["vname"]==""||$_POST["vemail"]==""||$_POST["vsubject"]==""||$_POST["vmsg"]==""){
echo ("<span style='color:red'>Fill All Fields</span>");
}else{
// Check if the "Sender's Email" input field is filled out
$email=$_POST['vemail']; 
 
 // Sanitize e-mail address
 $email =filter_var($email, FILTER_SANITIZE_EMAIL);
 
 // Validate e-mail address
 $email= filter_var($email, FILTER_VALIDATE_EMAIL);
 
 if (!$email){
echo ("<span style='color:#9b9999'>Invalid Sender's Email</span>");
 }
 else{
 $subject = $_POST['vsubject'];

 $ebody[] = 'From '.$_POST['vname'].',';
 $ebody[] = $_POST['vmsg'];
 $message = join("\r\n\r\n",$ebody);

 $headers = 'From:'. $email . "\r\n"; // Sender's Email
 $headers .= 'Cc:'. $email . "\r\n"; // Carbon copy to Sender

 // message lines should not exceed 70 characters (PHP rule), so wrap it
 $message = wordwrap($message, 70);

 // Send mail by PHP Mail Function
 mail("manurajkat@gmail.com", $subject, $message, $headers);
 echo '<span style="color:#c38aa9">Your message has been sent successfuly! Thank you</span>';

 }
}
}
?>