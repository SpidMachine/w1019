<?php


namespace Model;


use mysqli;
use TexLab\MyDB\DbEntity;

class UsersModel extends DbEntity
{
    public function __construct(string $tableName, mysqli $mysqli)
    {
        parent::__construct($tableName, $mysqli);
    }

    public function getUsersPage(int $page)
    {
        return $this
            ->reset()
            ->setSelect('`users`.`id`, `users`.`login`, `users`.`password`,  `group`.`name` AS group_id, `users`.`FIO`, `users`.`city`, `users`.`phone`')
            ->setFrom('`users`,`group`')
            ->setWhere('`users`.`group_id` = `group`.`id`')
            ->setOrderBy('`users`.`id`')
            ->getPage($page);
    }

    public function getGroupIdByCode($cod)
    {
        return $this->runSQL("SELECT `id` FROM `group` WHERE `cod` = '$cod'") [0]['id'];
    }

    public function getGroupNames()
    {
        $data = $this->runSQL('SELECT `id`,`name` FROM `group`');
        $result = [];
        foreach ($data as $row) {
            $result[$row['id']] = $row['name'];
        }
        return $result;
    }
}
