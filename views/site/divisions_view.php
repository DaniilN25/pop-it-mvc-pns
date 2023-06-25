
<div class="workers">
    <?php
    foreach ($divisions_view as $division_view){
        echo '<div class="">';
        //echo '<p class="p">ID вида подразделения:' . $division_view->division_view_id. '</p>' ;
        echo '<p class="p">Название:'  . $division_view->name. '</p> ' ;
        echo '<a href="' . app()->route->getUrl('/chairs') . '">ЭКОНОМИЧЕСКИЙ ФАКУЛЬТЕТ</a>';
        echo '<a href="' . app()->route->getUrl('/chairs_mat') . '">МАТЕМАТИЧЕСКИЙ ФАКУЛЬТЕТ</a>';
        echo '<a href="' . app()->route->getUrl('/chairs_tex') . '">ТЕХНИЧЕСКИЙ ФАКУЛЬТЕТ</a>';
        echo '<button>Удалить</button>';
        echo '</div>';
    }
    ?>
</div>