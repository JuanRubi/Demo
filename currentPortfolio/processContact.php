
<?php 
    // Getting the user input.
    $name = $_POST["name"];
    $email = $_POST["mail"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Making sure required fields are filled in. 
    if($name != null && $email != null && $message != null)
    {
        $emailContent = "From: $name \n\n $message";
        $sendTo = "juan@jrosales.tech";
        $mailHeader = "From: $email \r\n";

        // Sending the email to myself.
        mail($sendTo, $subject, $emailContent, $mailHeader) or die("An error occurred!");
        echo "<script> alert('Thank You!'); </script>";
        echo "<script> window.history.back(); </script>";
    }
    else     // If required areas aren't filled in, then display alert.
    {
        // alert alternative? 
        echo "<script> alert('Please fill in all required areas.'); </script>";
        echo "<script> window.history.back(); </script>";
    }
?>