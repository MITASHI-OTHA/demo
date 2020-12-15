<?php

namespace App\EntityListener;

use App\Entity\User;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mailer\MailerInterface;
use Doctrine\Persistence\Event\LifecycleEventArgs;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;


class NotifyRegistrationConfirmation
{
    private $mailer;
    private $router;

    public function __construct(MailerInterface $mailer, UrlGeneratorInterface $router)
    {
        $this->mailer = $mailer;
        $this->router = $router;
    }

    public function prePersist(User $user, LifecycleEventArgs $event)
    {
        $token = $user->getConfirmationToken();
        $session = new Session;

        if($user instanceof User) 
        {
            $url = $this->router->generate('confirm_account', ['token' => $token], UrlGeneratorInterface::ABSOLUTE_URL);
            
            if (null !== $user->getConfirmationToken()) 
            {
                //On envoi l'email
                $subject = 'Confirmation d\'inscription';
    
                $email = (new TemplatedEmail())
                    ->from('no-reply@welcoom.fr')
                    ->to($user->getEmail())
                    ->subject($subject)
    
                    // path of the Twig template to render
                    ->htmlTemplate('security/registration_brindille.html.twig')
    
                    // pass variables (name => value) to the template
                    ->context(
                    [
                        'user' => $user,
                        'url' => $url,
                        'token' => $token,
                    ]);
    
                $this->mailer->send($email);
                
                $session->getFlashBag()->add('success', '<strong>' . $user->getPrenom() . '</strong>, votre inscription a été validée, vous allez recevoir un email de confirmation pour activer votre compte et pouvoir vous connecter.');
            }
    
        }

    }
}
