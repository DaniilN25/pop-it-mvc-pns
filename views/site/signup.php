<div class="register">
<form method="post">
    <h2>Регистрация</h2>
   <label> <input type="text" name="name" placeholder="Имя"></label>
   <label> <input type="text" name="login" placeholder="Логин"></label>
    <label> <input type="password" name="password" placeholder="Пароль"></label>
    <label>Роль <select class="prof" name="prof">
            <option value="0">Сотрудник</option>
            <option value="1">Админ</option> <br> </select>
    </label> <br>
   <button>Зарегистрироваться</button>
</form
</div>

echo '<p class="p">ID вида подразделения:'  . $division_name->division_view_id. '</p> '