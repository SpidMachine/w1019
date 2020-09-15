<?php

use View\Html\Html;

/** @var int $pageCount Количество страниц
 * @var array $fields Список полей таблицы
 * @var array $comments Комментарии к полям таблицы
 * @var string $type Имя контроллера
 * @var array $table
 */




foreach ($table as &$value) {
    $ext = pathinfo($value['image'], PATHINFO_EXTENSION);
    $value['image'] = "<img class='img' src='images/products/$value[id].$ext'>";
}


//        echo Html::create('TableEdited')
//        ->setControllerType($type)
//        ->setHeaders($comments)
//        ->data($table)
//        ->setClass('table')
//        ->html();

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
   if ($field == 'image') {
       $form->addContent(Html::create('Label')->setFor($field)->setInnerText($comments[$field])->html());
       $form->addContent(Html::create('input')->setName($field)->setId($field)->setType('file')->html());
   } else {
       $form->addContent(Html::create('Label')->setFor($field)->setInnerText($comments[$field])->html());
       $form->addContent(Html::create('input')->setName($field)->setId($field)->html());
   }
}

$form->addContent(
   Html::create('Input')
       ->setType('submit')
       ->setValue('OK')
       ->html()
);

echo Html::create("Pagination")
    ->setStyle('text-align="centre"')
    ->setClass('pagination')
    ->setControllerType($type)
    ->setPageCount($pageCount)
    ->html();

echo $form->html();
?>
