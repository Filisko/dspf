<?php

class About extends Controller {
    
    public function index() {
        $menu = $this->helper('Menu');
        $menu->selected('about');

        $header = $this->view('templates/header');
        $header->set('title', 'About');
        $header->set('menu', $menu->getMenu());
        $header->render();

        $template = $this->view('about/index');
        $template->render();

        $footer = $this->view('templates/footer');
        $footer->render();
        
        //print_r($GLOBALS);
    }

    public function roles()
    {
        $permissions = 1;
        return $permissions;
    }
}
