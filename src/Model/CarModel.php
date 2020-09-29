<?php


namespace Model;


use TexLab\MyDB\DbEntity;

class CarModel extends DbEntity
{
    public function getCar(int $id)
    {
        return $this
            ->reset()
            ->setSelect('*')
            ->setFrom('`car`')
            ->setWhere("`car`.`id` = $id")
            ->get()[0];
    }

    public function getCar(int $id)
    {
        return $this
            ->reset()
            ->setSelect('*')
            ->setFrom('`car`')
            ->setWhere("`car`.`id` = $id")
            ->get()[0];
    }
}