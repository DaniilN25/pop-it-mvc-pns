<form method="post" action="/create-chair">
    <label for="name">Название кафедры:</label>
    <input type="text" id="name" name="name" required>
    <br>
    <label for="faculty">Факультет:</label>
    <select id="faculty" name="faculty" required>
        <option value="Экономический">Экономический</option>
        <option value="Математический">Математический</option>
        <option value="Технический">Технический</option>
    </select>
    <br>
    <button type="submit">Создать кафедру</button>
</form>