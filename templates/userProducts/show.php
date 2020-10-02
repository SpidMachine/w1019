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

?>
<div class="container">
    <?php
    echo '<div class="nav-item">';
    foreach ($table as $key => $row) {
        echo '<div class="card mb-3" style="max-width: 65%; background-color: #fff; border-right: none; border-left: none">'."\n";
        echo '<div class="row no-gutters">'."\n";
        echo '<div class="col-md-4">'."\n";
        echo '<a ><img class="card-img">'."\n";
        echo $row['image'] . '</img></a>';
        echo '</div>'."\n";
        echo '<div class="col-md-8">'."\n";
        echo '<div class="card-body">'."\n";
        echo '<h5 class="card-title">'."\n";
        echo '<a href="?action=&type=carDis&id=' . $row['id'] . '" style="text-decoration: none; color: black;">';
        echo $row['name_of_car'];
        echo '</a>';
        echo '</h5>'."\n";
        echo '<p class="card-text">'."\n";
        $sup = '<sup>3</sup>';
        foreach ($row as $k => $v) {
            if (!in_array($k,['image','name_of_car','id','users_id','price'])) {
                switch ($k) {
                        case "year_of_issue" : echo $v . ' г, ';
                    break;
                        case "condition_car": echo $v . ', ';
                    break;
                        case "mileage" : echo $v . ' км , ';
                    break;
                        case "volume" : echo $v . ' см' . $sup . '... ';
                }
            }
        }
        echo '</p>'."\n";
        echo '<h5 style="text-align: right">';
        echo  $row['price'] . ' руб';
        echo '</h5>';
        echo '<p class="card-text"><small class="text-muted">';
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

echo $form->html();

?>
