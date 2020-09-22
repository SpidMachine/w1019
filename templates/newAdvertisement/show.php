<?php

/** @var int $pageCount Количество страниц
 * @var array $fields Список полей таблицы
 * @var array $comments Комментарии к полям таблицы
 * @var string $type Имя контроллера
 * @var array $table
 * @var int $userId
 */

use View\Html\Html;

$form = Html::create('Form')
    ->setMethod('POST')
    ->setAction("?action=add&type=$type")
    ->setClass('form');

foreach ($fields as $field) {
    if ($field == 'image') {
        $form->addContent(Html::create('Label')
            ->setFor($field)
            ->setInnerText($comments[$field])
            ->html());

        $form->addContent(Html::create('Input')
            ->setName($field)
            ->setId($field)
            ->setType('file')
            ->html());
    } elseif ($field == "users_id") {
        $form->addContent(
            Html::create('Input')
                ->setType('hidden')
                ->setName($field)
                ->setValue($userId)
                ->html()
        );
    } else {
        $form->addContent(Html::create('Label')->setFor($field)
            ->setInnerText($comments[$field])
            ->html());

        $form->addContent(Html::create('Input')
            ->setName($field)
            ->setValue((string) $_SESSION['addData'][$field])
            ->setId($field)
            ->html());
    }
}

$form->addContent(
    Html::create('Input')
        ->setType('submit')
        ->setValue('OK')
        ->html()
);

echo $form->html();