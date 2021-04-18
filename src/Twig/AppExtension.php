<?php


namespace App\Twig;

use App\Domain\Categories\Categories;
use App\Domain\Formats\Formats;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class AppExtension extends AbstractExtension
{
    public function getFunctions()
    {
        return [
            new TwigFunction('getFormats', [$this, 'getFormats']),
            new TwigFunction('getCategories', [$this, 'getCategories']),
        ];
    }

    public function getFormats()
    {
        return Formats::getAllForUser();
    }

    public function getCategories()
    {
        return Categories::getAllForUser();
    }
}