<?php

class Home extends Controller {

    public function index() {
        $menu = $this->helper('Menu');
        $menu->selected('home');

        $header = $this->view('templates/header');
        $header->set('title', 'Home');
        $header->set('menu', $menu->getMenu());
        $header->render();

        $test = $this->model('Test');
        $template = $this->view('home/index');
        $template->set('someMessage', $test->message());
        $template->render();

        $footer = $this->view('templates/footer');
        $footer->render();
    }

}
