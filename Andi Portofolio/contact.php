<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailFrom = $_POST['mail']; // Perbaiki variabel $mailForm menjadi $mailFrom
    $message = $_POST['message']; // Perbaiki variabel $massage menjadi $message

    $mailTo = "andiyks29@gmail.com";
    $headers = "From: " . $mailFrom;
    $txt = "Anda punya pesan " . $name . ".\n\n" . $message;

    mail($mailTo, $name, $txt, $headers);

    header("Location: index.html?MessageSent");
}
?>
