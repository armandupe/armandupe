<?
if (isset($_POST) && isset($_POST['message']))
{
    $to = "symboli28@gmail.com";
    $subject = "Feedback";
    $msg = htmlspecialchars($_POST['message']);
    mail($to, $subject, $msg);
}
