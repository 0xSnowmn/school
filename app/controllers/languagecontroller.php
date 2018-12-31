<?php
namespace School\Controllers;


class LanguageController extends AbstractController
{
    public function defaultAction()
    {

        if ($_SESSION['lang'] == 'en') {
            $_SESSION['lang'] = 'ar';
        } elseif ($_SESSION['lang'] == 'ar') {
            $_SESSION['lang'] = 'en';
        }
        var_dump($_SESSION);

    }
}
