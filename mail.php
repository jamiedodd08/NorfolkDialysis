<?php


//varible setting
 $name= $_REQUEST['name'];
 $email = $_REQUEST['email'];
 $enquiry = $_REQUEST['enquiry'];
 $subject = $_REQUEST['subject'];;

 $to ="jamiedodd08@hotmail.com";  // change receiving email id 
 
 $content = "Name : ". $name. "\r\nContact email : ". $email. "\r\n \r\nMessage : \r\n \r\n".$enquiry ; // name [break] email [break] message
 


// check input fields
if ( empty($name)|| empty($email)|| empty($enquiry))
{
echo"<script type='text/javascript'>alert('Please fill all correct');
    window.history.go(-1);
    </script>";
}
else 
{ mail($to,$subject,$content);

    echo"<script type='text/javascript'>alert('Your message sent succesfully ');
    window.history.go(-1);
    </script>";
}


?>