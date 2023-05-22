<div class="workers">
    <?php
    foreach ($divisions_name as $division_name){
        echo '<div class="">';
        echo '<p class="p">ID подразделения:' . $division_name->division_id. '</p>' ;
        echo '<p class="p">ID вида подразделения:'  . $division_name->division_view_id. '</p> ' ;
        echo '<button>Удалить</button>';
        echo '</div>';
    }
    ?>
    <a href="<?= app()->route->getUrl('/chairs') ?>">ЭКОНОМИЧЕСКИЙ ФАКУЛЬТЕТ</a>
</div>

