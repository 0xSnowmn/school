<?php

namespace School\Core;

class Template
{

    protected $tpl_parts;

    protected $view;
    protected $data;


    public function __construct($parts)
    {
        $this->tpl_parts = $parts;
    }

    public function setView($view)
    {
        $this->view = $view;
    }

    public function setData($dat)
    {
        $this->data = $dat;
    }

    public function EditTpl($edit)
    {
        $this->tpl_parts['tpl'] = $edit;
    }

    private function tpl_start()
    {
        extract($this->data);
        require TEMPLATE_PATH . 'tpl_start.php';
    }

    private function tpl_end()
    {
        extract($this->data);
        require TEMPLATE_PATH . 'tpl_end.php';
    }

    private function startBody()
    {
        extract($this->data);
        require TEMPLATE_PATH . 'b_start.php';
    }

    public function renderTemplate()
    {
        $tpl = $this->tpl_parts['tpl'];
        if ($tpl != '') {
            extract($this->data);
            foreach ($tpl as $tp => $path) {
                if ($tp === ':view') {
                    if (file_exists($this->view)) {
                        require $this->view;
                    }
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
        @$footer = $this->tpl_parts['F_srcs'];
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
        $this->renderTemplate();
        echo $this->renderFooter();
        $this->tpl_end();
        ob_get_contents();
        ob_flush();
    }

}