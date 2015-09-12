<?php
class homeController extends Controller
{
    public function index()
    {
        $test = $this->model('Test');
        $template = $this->view('home/index');
        $template->set('someMessage', $test->message());
        $template->render();
    }
}
