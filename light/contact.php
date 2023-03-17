<?php $name = $_POST['HRO Marbite'];
    $email = $_POST['hromarbite@gmail.com'];
    $message = $_POST['Hello this mail is from HRO Marnites'];
    // $subject = $_POST['subject'];
    $phone = $_POST['+84 964170063'];
    // $formcontent="From: $name \n Subject: $subject \n Message: $message \n Phone: $phone";
    $formcontent="From: $name \n Message: $message \n Phone: $phone";
    $recipient = "recipientmail@gmail.com";
    $mailheader = "From: $email \r\n";
    mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
    echo "Thank You!";
?>