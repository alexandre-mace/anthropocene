<?php

namespace App\Controller\Admin;

use App\Entity\Ressource;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use Vich\UploaderBundle\Form\Type\VichFileType;
use Vich\UploaderBundle\Form\Type\VichImageType;

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
                'Fait' => 'Fait',
                'Livre' => 'Livre',
            ]),
            TextAreaField::new('imageFile')->setFormType(VichFileType::class, [
                            'delete_label' => 'supprimer?'
                        ])->onlyOnForms(),
            ImageField::new('image')->setBasePath('/files/image')->onlyOnDetail(),
            TextAreaField::new('imageFile')->setFormType(VichImageType::class)
        ];
    }
}
