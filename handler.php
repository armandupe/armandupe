<?
if (isset($_POST))
{
    $to = "symboli28@gmail.com";
    $subject = "Feedback";
    $msg = htmlspecialchars($_POST['message']);
    mail($to, $subject, $msg);
}
