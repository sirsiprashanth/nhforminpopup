<?php $name= $_POST["name"]; ?>
<?php $contact= $_POST["contact"]; ?>
<?php $email= $_POST["email"]; ?>

<?php
// the message
$msg = echo "<p>This message was sent usin the pop up form on the nhengineering website</p>"; echo "<br>";
echo "<p>Candidate Name: </p>"; echo $name; echo "<br>";
echo "<p>Candidate Phone number: </p>"; echo $contact ; echo "<br>";
echo "Candidate Email Id: </p>"; $email echo "<br>";


// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("prashanth@anibyte.net","Message from Website Popup Form",$msg);
?>



