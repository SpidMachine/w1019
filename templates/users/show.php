<?php

use View\Html\Html;

/** @var int $pageCount Количество страниц
 * @var array $fields Список полей таблицы
 * @var array $comments Комментарии к полям таблицы
 * @var string $type Имя контроллера
 */
// print_r($groupNames);

echo Html::create('TableEdited')
    ->setControllerType($type)
    ->setHeaders($comments)
    ->data($table)
    ->setClass('table')
    ->html();


$form = Html::create('Form')
    ->setMethod('POST')
    ->setAction("?action=add&type=$type")
    ->setClass('form');

foreach ($fields as $field) {
    $form->addContent(Html::create('Label')->setFor($field)->setInnerText($comments[$field])->html());

    if ($field != 'group_id') {
        $form->addContent(Html::create('input')->setName($field)->setId($field)->html());
    } else {
        $form->addContent('<br>');
        $form->addContent((new \TexLab\Html\Select())->setName($field)->setId($field)->setData($groupNames)->html());
        $form->addContent('<br>');
    }
}

if ($pageCount > 1) {
    echo "<div class='contPag'>";
    echo TexLab\Html\Html::pagination()
        ->setPageCount($pageCount)
        ->setCurrentPage($currentPage)
        ->setClass('pagination')
        ->setUrlPrefix("?action=show&type=$type")
        ->html();
    echo "</div>";
}

$form->addContent(
    Html::create('Input')
        ->setType('submit')
        ->setValue('OK')
        ->html()
);

echo $form->html();
