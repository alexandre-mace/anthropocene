<?php

namespace App\Controller\Admin;

use App\Domain\Categories\Categories;
use App\Domain\Formats\Formats;
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
        $categories = [];
        foreach (Categories::getAll() as $category) {
            $categories[$category['label']] = $category['label'];
        }
        $formats = [];
        foreach (Formats::getAll() as $format) {
            $formats[$format['label']] = $format['label'];
        }
        return [
            TextField::new('author'),
            TextField::new('title'),
            TextField::new('link'),
            ChoiceField::new('type')->setChoices($formats),
            ChoiceField::new('themes')->setChoices($categories)->setFormTypeOption('multiple', true),
//            TextAreaField::new('imageFile')->setFormType(VichFileType::class, [
//                            'delete_label' => 'supprimer?'
//                        ])->onlyOnForms(),
//            ImageField::new('image')->setBasePath('/files/image')->onlyOnDetail(),
//            TextAreaField::new('imageFile')->setFormType(VichImageType::class)
            TextField::new('imageLink'),
        ];
    }
}
