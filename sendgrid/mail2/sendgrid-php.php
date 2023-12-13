<?php
/**
 * This file is used to load the Composer autoloader if required.
 */

require 'vendor/autoload.php';



function sendgridApiMail($to, $message, $subject, $from, $fromname)
{
    $fromname = 'tertiaryglobal';
    $sendgrid = new \SendGrid('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');
    $email = new \SendGrid\Mail\Mail();
    $email->setFrom($from, $fromname);
    $email->setSubject($subject);
    $email->addTo($to);
    // $email->addContent("text/plain", "and easy to do anywhere, even with PHP");
    $email->addContent("text/html", $message);
    $response = $sendgrid->send($email);
    return $response;
}

