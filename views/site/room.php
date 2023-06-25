<div>
    <?php
    foreach ($room as $room){
        echo '<div class="workers">';
      //  echo '<p class="p">ID помещения:' . $room->roomID. '</p>';
        echo '<p class="p">Название помещения:' . $room->room_name. '</p>';
        echo '<p class="p">Площадь:' . $room->square. '</p>';
       // echo '<p class="p">ID вида помещения:' . $room->room_view_id. '</p>';
        echo '<button>Удалить</button>';
        echo '</div>';
    }
    ?>
</div>