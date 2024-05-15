<?php

namespace RonnyJohn\Site\Controller;

use http\Client\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class MailerController extends AbstractController
{
    #[Route('/mailer', name: 'app_mailer')]
    public static function sendEmail(MailerInterface $mailer, Email $email)
    {
        $mailer->send($email);

        return new Response('Email sent successfully', 200);
    }
}
