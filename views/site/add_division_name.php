<form method="post">
    <div class="new_division_name">
        <label>Название подразделения
            <select name="division_view_id">
                <?php
                foreach ($divisionsName as $divisionsNam){
                    echo "<option value=\"$divisionsNam->division_id\">" . $divisionsNam->division_view_id . '</option>';
                }
                ?>
            </select>
        </label>
        <button>Добавить</button>
    </div>
</form>