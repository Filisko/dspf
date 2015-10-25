<?php
class Menu {

    private $_menu = array();

    public function __construct() {
        $this->_menu = [
            [
                'id' => 'home',
                'name' => 'Home',
                'link' => URL
            ],
            [
                'id' => 'about',
                'name' => 'About',
                'link' => URL . 'about'
            ]
        ];
    }

    public function getMenu() {
        $i=0;
        while ($i < count($this->_menu)) {
            if (!isset($this->_menu[$i]['status'])) {
                $this->_menu[$i]['status'] = '';
            }
            $i++;
        }
        return $this->_menu;
    }

    public function selected($id, $class = 'selected') {
        $key = array_search($id, array_column($this->_menu, 'id'));
        $this->_menu[$key]['status'] = ' ' . $class;
    }

}
