<form method="post">
    <div class="new_room">
        <input type="text" name="roomname" placeholder="Название помещения">
        <input type="text" name="square" placeholder="Площадь">
        <label>Тип помещения
            <select name="roomviewid">
                <?php
                foreach ($roomView as $roomVie){
                    echo "<option value=\"$roomVie->roomviewid\">" . $roomVie->name . '</option>';
                    }
                ?>
            </select>
        </label>
        <button>Добавить</button>
    </div>
</form>