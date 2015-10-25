<?php
class Error extends Controller {

    public function index($h, $m) {
        $menu = $this->helper('Menu');

        $header = $this->view('templates/header');
        $header->set('title', $h);
        $header->set('menu', $menu->getMenu());
        $header->render();

        $body = $this->view('error/index');
        $body->set('header', $h);
        $body->set('message', $m);
        $body->render();

        $footer = $this->view('templates/footer');
        $footer->render();
    }
}
