<?php

namespace App\Services;

use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\Session\Session;

class SenderEmails 
{
    private $mailer;

    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }

    public function notifyReceiver($user, $email_receiver, $subject, $token = null, $url = null, $flash_message, $template, $content = null)
    {
        $session = new Session;

        $email = (new TemplatedEmail())
            ->from('no-reply@welcohome.fr')
            ->to($email_receiver)
            ->subject($subject)

            // path of the Twig template to render
            ->htmlTemplate($template)

            // pass variables (name => value) to the template
            ->context(
            [
                'user' => $user,
                'url' => $url,
                'token' => $token,
                'content' => $content,
            ]);

        $this->mailer->send($email);
        
        if(null !== $flash_message) 
        {
            $session->getFlashBag()->add('success', $flash_message);
        }
    }
}