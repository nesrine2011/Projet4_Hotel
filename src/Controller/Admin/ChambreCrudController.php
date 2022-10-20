<?php

namespace App\Controller\Admin;

use App\Entity\Chambre;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ChambreCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Chambre::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            // TextField::new('titre'),
            // TextareaField::new('descriptionCourte')->hideOnForm(),
            // TextEditorField::new('descriptionCourte')->onlyOnForms(),
            // TextareaField::new('descriptionLongue')->hideOnForm(),
            // TextEditorField::new('descriptionLongue')->onlyOnForms(),
            // TextField::new('photo'),
            // MoneyField::new('prixJournalier')->setCurrency('EUR'),
            // DateTimeField::new('dateEnregistrement')->setFormat('d/M/Y à H:m:s')->hideOnForm(),
            
        ];
    }
    
    // public function createEntity(string $entityFqcn)
    // {
    //     $pr = new $entityFqcn;
    //     $pr->setDateEnregistrement(new \DateTime);
    //     return $pr;
    // }
}


