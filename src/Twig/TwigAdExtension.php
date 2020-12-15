<?php

namespace App\Twig;

use Twig\TwigFilter;
use Twig\Extension\AbstractExtension;

class TwigAdExtension extends AbstractExtension 
{
    public function getFilters() 
    {
        return 
        [
            new TwigFilter('line_break_content', [$this, 'lineBreakContent'], ['is_safe' => ['html']]),
        ];
    }

    public function lineBreakContent($content) 
    {
        return nl2br($content);
    }

}
