<?php

namespace School\Core;

class Template
{

    public $tpl_parts;
    private $view;

    public function __construct($parts)
    {
        $this->tpl_parts = $parts;
    }

    public function setView($view)
    {
        $this->view = $view;
    }

    private function tpl_start()
    {
        require TEMPLATE_PATH . 'tpl_start.php';
    }

    private function tpl_end()
    {
        require TEMPLATE_PATH . 'tpl_end.php';
    }

    private function startBody()
    {
        require TEMPLATE_PATH . 'b_start.php';
    }

    public function renderTempalte()
    {
        $tpl = $this->tpl_parts['tpl'];
        if ($tpl != '') {
            foreach ($tpl as $tp => $path) {
                if ($tp == ':view') {
                    require $this->view;
                } else {
                    require $path;
                }
            }
        }
    }

    public function renderHeader()
    {
        $output = '';
        $header = $this->tpl_parts['H_srcs'];
        if ($header != '') {
            // Css
            $css = $header['CSS'];
            if ($css != '') {
                foreach ($css as $key => $path) {
                    $output .= '<link rel="stylesheet" href="' . $path . '">';
                }
            }
            // Js
            $js = $header['JS'];
            if ($js != '') {
                foreach ($js as $key => $path) {
                    $output .= '<script src="' . $path . '"></script>';
                }
            }
        }

        return $output;
    }

    public function renderFooter()
    {
        $output = '';
        $footer = $this->tpl_parts['F_srcs'];
        if ($footer != '') {
            foreach ($footer as $key => $path) {
                $output .= '<script src="' . $path . '"></script>';
            }
        }

        return $output;
    }

    public function render()
    {
        ob_start();
        $this->tpl_start();
        echo $this->renderHeader();
        $this->startBody();
        $this->renderTempalte();
        echo $this->renderFooter();
        $this->tpl_end();
        ob_get_contents();
        ob_flush();
    }

}