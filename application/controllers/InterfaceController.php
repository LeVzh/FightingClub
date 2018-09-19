<?php

namespace application\controllers;
use application\core\Controller;

class InterfaceController extends Controller {
    
    public function areaAction() {
        $this->view->render('Бойцовский переулок');
}
public function characterAction() {
        $this->view->render('Ваш персонаж');
}
public function shopAction() {
        $this->view->render('Рыночная площадь');
}
public function arenaAction() {
        $this->view->render('Арена');
}
    
}