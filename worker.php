<?php
        $to = $_POST['to'];
        $from = $_POST['from'];
        $email_subject = $_POST['subject'];
        $message = $_POST['message'];
        $headers = "From: ".$from;

        $email_body = $message

        if(mail($to,$email_subject,$email_body,$headers)){
            echo "<script>alert('Yay! Email sent successfully'); location.href='/index.html'</script>";
            
        }
        else{
            echo "<script>alert('Oops! Email not sent. Something went wrong'); location.href='/index.html'</script>";
        };
        

?>