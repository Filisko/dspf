<?php
class View
{
    private $pageVars = array();
    private $view;

    public function __construct($view)
    {
        $this->view = APP . 'views/' . $view . '.php';
    }

    public function set($var, $val)
    {
        $this->pageVars[$var] = $val;
    }

    public function render()
    {
        extract($this->pageVars);
        ob_start();
        require_once $this->view;
        echo ob_get_clean();
    }
}
