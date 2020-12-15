<?php

namespace App\Form\DataTransformer;

use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;

class StringToDateTransformer implements DataTransformerInterface 
{
    public function transform($date)
    {
        if(null === $date) return '';

        return $date->format('d/m/Y');
    }

    public function reverseTransform($date_fr) 
    {
        if (null === $date_fr) throw new TransformationFailedException;

        $date = \DateTime::createFromFormat('d/m/Y', $date_fr);

        if ($date === false) throw new TransformationFailedException;

        return $date;
    }
}