<?php

namespace App\Controller\Admin;

use App\Entity\Ressource;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class RessourceCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Ressource::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('author'),
            TextField::new('title'),
            TextField::new('link'),
            ChoiceField::new('type')->setChoices([
                'Interview' => 'Interview',
                'Video' => 'Video',
                'Infographie' => 'Infographie',
                'Article' => 'Article',
            ])
        ];
    }
}
