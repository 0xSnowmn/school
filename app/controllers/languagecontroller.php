<?php
namespace School\Controllers;

use School\Core\Helpers;

class LanguageController extends AbstractController
{
    use Helpers;
    public function defaultAction()
    {
        if ($this->session->lang == 'ar') {
            $this->session->lang = 'en';
        } elseif ($this->session->lang == 'en') {
            $this->session->lang = 'ar';
        }
        $path = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '/';
        $this->route($path);
    }
}
