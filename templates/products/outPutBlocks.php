<div class="container">
    <?php
    echo '<div class="nav-item">';
    foreach ($table as $key => $row) {
        echo '<div class="card mb-3" style="max-width: 65%;">'."\n";
        echo '<div class="row no-gutters">'."\n";
        echo '<div class="col-md-4">'."\n";
        echo '<img class="card-img">'."\n";
        echo $row['image'];
        echo '</div>'."\n";
        echo '<div class="col-md-8">'."\n";
        echo '<div class="card-body">'."\n";
        echo '<h5 class="card-title">'."\n";
        echo $row['name_of_car'];
        echo '</h5>'."\n";
        echo '<p class="card-text">'."\n";

        foreach ($row as $k => $v) {
            if (!in_array($k,['image','name_of_car','id','users_id'])) {
                echo $v . ', ';
            }
        }

        echo '</p>'."\n";
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