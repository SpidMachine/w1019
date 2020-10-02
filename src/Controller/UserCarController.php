<?php

namespace Controller;

use View\View;

class UserCarController extends CarController {

    public function __construct(View $view)
    {
        parent::__construct($view);
        $this->view->setFolder('UserProducts');
    }

    public function searchCar() {
        global $Page;
        echo '<form method="POST" action="?action=show/'.$Page.'"><label><input type="text" name="text" placeholder="Поиск автомобилей"></label><input type="submit"></form>';
    }
}
