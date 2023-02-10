<?php

namespace App\Controller\Admin;

use App\Entity\Password;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;

class PasswordCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Password::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            //Field::new('id'),
            Field::new('service'),
            Field::new('username'),
            Field::new('email'),
            Field::new('password'),
        ];
    }

}
