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

//  echo Html::create('TableEdited')
//      ->setControllerType($type)
//      ->setHeaders($comments)
//      ->data($table)
//      ->setClass('table')
//      ->html();
?>

    <div class="container">
        <?php
        $sup = '<sup>3</sup>';
    foreach ($table as $key => $row) {
        echo "<div class='card'>";
        echo "<h5 class='card-header'>";
        echo $row['name_of_car'];
        foreach ($row as $k => $v) {
            if (!in_array($k, ['image', 'name_of_car', 'id', 'users_id', 'price'])) {
                switch ($k) {
                    case "year_of_issue" :
                        echo $v . ' г, ';
                        break;
                    case "condition_car":
                        echo $v . ', ';
                        break;
                    case "mileage" :
                        echo $v . ' км , ';
                        break;
                    case "volume" :
                        echo $v . ' см' . $sup . '... ';
                }
            }
        }
        echo "</h5>";
        echo "</div>";
    }
        ?>
    </div>

<?php


//foreach ($fields as $field) {
//    if ($field == 'image') {
//        $form->addContent(Html::create('Label')->setFor($field)->setInnerText($comments[$field])->html());
//        $form->addContent(Html::create('input')->setName($field)->setId($field)->setType('file')->html());
//    } else {
//        $form->addContent(Html::create('Label')->setFor($field)->setInnerText($comments[$field])->html());
//        $form->addContent(Html::create('input')->setName($field)->setId($field)->html());
//    }
//}
//
//$form->addContent(
//    Html::create('Input')
//        ->setType('submit')
//        ->setValue('OK')
//        ->html()
//);


?>