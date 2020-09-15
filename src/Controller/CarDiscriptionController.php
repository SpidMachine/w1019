<?php

namespace Controller;

use View\View;

class CarDiscriptionController extends AbstractTableController
{

    public function __construct(View $view)
    {
        parent::__construct($view);
        $this->view->setFolder('carDiscription');
    }

}