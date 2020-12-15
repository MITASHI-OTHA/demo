<?php

namespace App\Services;

use App\Entity\AdMessages;
use Doctrine\ORM\EntityManagerInterface;

class FindAdAuthor 
{
    private $em;

    public function __construct(EntityManagerInterface $em) 
    {
        $this->em = $em;
    }

    /**
     * This method verify if the user connected is not the message ad's author
     *
     * @param [type] $appUser
     * @return boolean
     */
    public function isAdAuthor($appUser):bool 
    {
        $ads_authors = [];
        
        foreach($this->em->getRepository(AdMessages::class)->findAll() as $key => $adMessage) 
        {
            $ads_authors[$key] = $adMessage->getAds()->getAuthor();
            foreach($ads_authors as $author) 
            {
                if($author !== $appUser) 
                {
                    return true;
                }

                return false;
            }
        }
    }
}