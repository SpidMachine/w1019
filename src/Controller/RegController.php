<?php


namespace Controller;

class RegController extends UsersController
{

    public function actionShow(array $data)
    {
        $this
            ->view
            ->setFolder('registration') // зашли в соответствующую папку
            ->setTemplate('show') // выбрали в папке registration файл show.php
            ->setLayout('mainLayout') // выбрали layout без менюшки
            ->addData([]);
    }

    public function actionShowEdit(array $data)
    {

    }

    public function actionEdit(array $data)
    {

    }

    public function actionDel(array $data)
    {

    }

    public function actionAdd(array $data)
    {
        if (!empty($data['post']) && ($data['post']['login'] != '') && ($data['post']['password'] != '') && ($data['post']['FIO'] != '')) {
            $data['post']['group_id'] = $this->table->getGroupIdByCode('user');
            $this->table->add($data['post']);
            $this->redirect('?action=loginform&type=auth');
        } else {
            $this->redirect('?action=show&type=reg');
        }
    }
}