<?php

namespace Controller;

use View\View;

class UserCarController extends CarController {

    public function __construct(View $view)
    {
        parent::__construct($view);
        $this->view->setFolder('UserProducts');
    }
    
}