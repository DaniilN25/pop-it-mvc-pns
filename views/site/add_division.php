<form method="post">
    <div class="new_division_view">
        <label>Название подразделения
        <select>
            <?php
            foreach ($divisionsView as $divisionsVie){
                echo "<option value=\"$divisionsVie->divisions_view_id\">" . $divisionsVie->name . '</option>';
            }
            ?>
        </select>
        </label>
        <button>Добавить</button>
    </div>
</form>