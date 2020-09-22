<?php

namespace Controller;

use View\View;
use TexLab\MyDB\DB;
use TexLab\MyDB\DbEntity;
use Core\Config;
use Model\CarModel;

class CarDisController extends AbstractController
{
    protected  $tableName = "car";
    protected $table;

    public function __construct(View $view)
    {
        parent::__construct($view);
        $this->view->setFolder('carDis');

        $this->table = new CarModel(
            $this->tableName,
            DB::Link([
                'host' => Config::MYSQL_HOST,
                'username' => Config::MYSQL_USER_NAME,
                'password' => Config::MYSQL_PASSWORD,
                'dbname' => Config::MYSQL_DATABASE
            ])
        );
    }

    public function actionShowCar(array $data) {        
        $this
        ->view
        ->setTemplate('showdis')
        ->setData([
            'table' => $this->table->getCar($data['get']['id'])
        ]);
    }
}