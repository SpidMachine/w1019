<?php

use View\Html\Html;

/** @var int $pageCount Количество страниц
 * @var array $fields Список полей таблицы
 * @var array $comments Комментарии к полям таблицы
 * @var string $type Имя контроллера
 * @var array $table
 */

$ext = pathinfo($table['image'], PATHINFO_EXTENSION);
$value['image'] = "<img class='carDisImg' src='images/products/$table[id].$ext'>";

?>

<div class="container">
    <h1><?= $table['name_of_car'] ?></h1>
    <hr>
    <div id="carDisFlex">
        <div style="position: relative">
            <strong id="carDisPrice"><?= $table['price'] . ' р' ?></strong>
            <span style="opacity: 60%; margin-left: 30px">
                <?php
                    for ($i = 0; $i <= 1; $i++) {
                        echo $i = round($table['price'] / 2.63);
                    }
                ?>
            </span>
            <table style="margin-top: 10px; position: relative" cellpadding="5px">
                <tr>
                    <td>
                        <span style="color: #95999c">Дата выпуска</span>
                    </td>
                    <td style="padding-left: 2rem">
                        <? echo $table['year_of_issue'] . ' г' ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span style="color: #95999c">Состояние</span>
                    </td>
                    <td style="padding-left: 2rem">
                        <? echo $table['condition_car']; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span style="color: #95999c">Пробег</span>
                    </td>
                    <td style="padding-left: 2rem">
                        <? echo $table['mileage'] . ' км' ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span style="color: #95999c">Тип топлива</span>
                    </td>
                    <td style="padding-left: 2rem">
                        <? echo $table['fuel_type'] . ' г' ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span style="color: #95999c">Объем двигателя</span>
                    </td>
                    <td style="padding-left: 2rem">
                        <? echo $table['volume'] . ' см' . '<sup>3</sup>' ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span style="color: #95999c">Цвет</span>
                    </td>
                    <td style="padding-left: 2rem">
                        <? echo $table['color']; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span style="color: #95999c">Трансмиссия</span>
                    </td>
                    <td style="padding-left: 2rem">
                        <? echo $table['transmission'] ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span style="color: #95999c">Тип привода</span>
                    </td>
                    <td style="padding-left: 2rem">
                        <? echo $table['drive_unit']; ?>
                    </td>
                </tr>
            </table>
        </div>
        <?php

        ?>
        <div>
            <?
            echo '<img tabindex="1">' . $value['image'] . '</img>';
            ?>
        </div>
    </div>
</div>
