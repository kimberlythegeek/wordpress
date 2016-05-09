<?php
    $name = $_POST['name'];
    $phone = $_POST['phone']
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: $name'; 
    $to = 'kimberly@acodeabove.com'; 
    $subject = 'A Message for A Code Above';

    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
?>

<?php
if ($_POST['submit']) {
    if (mail ($to, $subject, $body, $from)) { 
        echo '<p>Your message has been sent!</p>';
    } else { 
        echo '<p>Something went wrong, go back and try again!</p>'; 
    }
}
?>