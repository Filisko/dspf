<?php

class Error extends Controller {

    public function index() {
        $menu = $this->helper('Menu');

        $header = $this->view('templates/header');
        $header->set('title', 'Error 404');
        $header->set('menu', $menu->getMenu());
        $header->render();

        $template = $this->view('error/index');
        $template->render();

        $footer = $this->view('templates/footer');
        $footer->render();
    }

}
