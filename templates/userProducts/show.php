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
    echo '<div class="nav-item">';
    foreach ($table as $key => $row) {
        echo '<div class="card mb-3" style="max-width: 65%; background-color: gainsboro;">'."\n";
        echo '<div class="row no-gutters">'."\n";
        echo '<div class="col-md-4">'."\n";
        echo '<img class="card-img">'."\n";
        echo $row['image'];
        echo '</div>'."\n";
        echo '<div class="col-md-8">'."\n";
        echo '<div class="card-body">'."\n";
        echo '<h5 class="card-title">'."\n";
        echo '<a href="?action=show&type=car" style="text-decoration: none; color: black;">';
        echo $row['name_of_car'];
        echo '</a>';
        echo '</h5>'."\n";
        echo '<p class="card-text">'."\n";

        foreach ($row as $k => $v) {
            if (!in_array($k,['image','name_of_car','id','users_id','price'])) {
                echo $v . ', ';
            }
        }

        echo '</p>'."\n";
        echo '<h5 style="text-align: right">';
        echo $row['price'];
        echo '</h5>';
        echo '<p class="card-text"><small class="text-muted">';
        echo 'Last updated 3 mins ago'."\n";
        echo '</small></p>'."\n";
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';

        if (($key + 1) % 4 == 0) {
            echo "</div>\n\n\n";
            echo '<div class="nav-item">';
        }
    }
    ?>
</div>

<?php
$form = Html::create('Form')
    ->setMethod('POST')
    ->setAction("?action=add&type=$type")
    ->setClass('form');


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

echo Html::create("Pagination")
    ->setStyle('text-align="centre"')
    ->setClass('pagination')
    ->setControllerType($type)
    ->setPageCount($pageCount)
    ->html();

echo $form->html();
?>
