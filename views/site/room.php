<div>
    <?php
    foreach ($room as $room){
        echo '<div class="room">';
        echo '<p class="p">Room_id:' . $room->room_id. '</p>';
        echo '<p class="p">Room_name:' . $room->name. '</p>';
        echo '<p class="p">Division_id:' . $room->square. '</p>';
        echo '<p class="p">Room_id:' . $room->room_view_id. '</p>';
        echo '<button>Удалить</button>';
        echo '</div>';
    }
    ?>
</div>
