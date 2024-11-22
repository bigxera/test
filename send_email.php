<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    //get form input
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);

    //services
    $painting = htmlspecialchars($_POST['painting']);
    $refinishing = htmlspecialchars($_POST['refinishing']);
    $projects = htmlspecialchars($_POST['projects']);
    $washing = htmlspecialchars($_POST['washing']);
    $staining = htmlspecialchars($_POST['staining']);
    $repairs = htmlspecialchars($_POST['repairs']);

    //get comments
    $comments = htmlspecialchars($_POST['comments']);

    //form email
    $to = "alexnutterschool@gmail.com";
    $subject = "test message esn painting from $name";

    $body = "this is a test message to see if everything works in the form
    \nthis is the name:\n $name\n this is the email:\n $email
    \n this is the painting variable:\n $painting\n
    this is the refinishing var:\n $refinishing\n
    this is the projects var:\n $projects\n
    this is the washing var:\n $washing\n
    this is the staining var:\n $staining\n
    this is the repairs var:\n $repairs\n\n
    
    here are the comments:\n\n $comments";

    $headers = "From: esn_paint@mail.com";

    //send mail
    if (mail($to, $subject, $body, $headers))
    {
        echo "message sent";
    }
    else
    {
        echo "failed send";
    }
}
?>