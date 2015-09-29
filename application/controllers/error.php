<?php

class Error extends Controller {

    public function index() {
        $menu = $this->helper('Menu');

        $header = $this->view('templates/header');
        $header->set('title', 'Error 404');
        $header->set('menu', $menu->getMenu());
        $header->render();

        $template = $this->view('error/404');
        $template->render();

        $footer = $this->view('templates/footer');
        $footer->render();
    }

    public function internal($state)
    {
        switch ($state)
        {
            case 1:
                $message = 'Controller file not found';
                break;
            
            case 2:
                $message = 'Controller class not found';
                break;
            
            case 3:
                $message = 'Method not found';
                break;
            
            default:
                $message = 'Unknown error';
        }
        
        $menu = $this->helper('Menu');

        $header = $this->view('templates/header');
        $header->set('title', 'Internal error');
        $header->set('menu', $menu->getMenu());
        $header->render();

        $template = $this->view('error/internal');
        $template->set('message', $message);
        $template->render();

        $footer = $this->view('templates/footer');
        $footer->render();
    }
}
