<div>
    <?php
    foreach ($room as $room){
        echo '<div class="workers">';
        echo '<p class="p">ID помещения:' . $room->roomid. '</p>';
        echo '<p class="p">Название помещения:' . $room->roomname. '</p>';
        echo '<p class="p">Площадь:' . $room->square. '</p>';
        echo '<p class="p">ID вида помещения:' . $room->roomviewid. '</p>';
        echo '<button>Удалить</button>';
        echo '</div>';
    }
    ?>
</div>