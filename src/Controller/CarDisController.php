<?php

namespace Controller;

use View\View;

class CarDisController extends AbstractTableController
{
    protected  $tableName = "car";

    public function __construct(View $view)
    {
        parent::__construct($view);
        $this->view->setFolder('carDis');
    }

}