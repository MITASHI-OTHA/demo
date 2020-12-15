<?php

namespace App\Services;

use Symfony\Component\Security\Core\Security;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

class UploadAvatar 
{
    private $targetDirectory;
    private $slugger;
    private $security;

    public function __construct($targetDirectory, SluggerInterface $slugger, Security $security) 
    {
        $this->targetDirectory = $targetDirectory;
        $this->slugger = $slugger;
        $this->security = $security;
    }
    
    public function uploadFile(UploadedFile $file) : string
    {
        $user = $this->security->getUser();
        $originalFilename = $user->getPrenom() .'_'. $user->getNom();
        $safeFilename = $this->slugger->slug(strtolower($originalFilename));
        $file_name = $safeFilename . '-' . md5(uniqid()) .'.'. $file->guessExtension();
        
        try 
        {
            $file->move($this->getTargetDir(), $file_name);
        } 
        catch (FileException $e) 
        {
            // ... handle exception if something happens during file upload
        }
        
        return $file_name;
    }
    
    private function getTargetDir() 
    {
        return $this->targetDirectory;
    }

    public function removeFile($file)
    {
        if($file) 
        {
            $file_path = $this->getTargetDir().'/'.$file;
            if(file_exists($file_path)) unlink($file_path);
        }
    }

}