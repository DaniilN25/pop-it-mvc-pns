<div class="nazad">
    <a href="<?= app()->route->getUrl('/divisions_view') ?>"><button>НАЗАД</button></a>
    <div class="mat">
        <a href="<?= app()->route->getUrl('/chairs') ?>"><button>КАФЕДРА ЭКОНОМИКИ</button></a></br>
        <a href="<?= app()->route->getUrl('/chairs_tex') ?>"><button>КАФЕДРА ЭКОНОМИКИ</button></a>
    </div>
<div class="chair-ek">
    <h2>Кафедра математики </h2>
    <h3><?= $message ?? ''; ?></h3>
    <div class="chair-ek-text">
        <p>Состав кафедры был сформирован в основном из молодых специалистов.</p>
        <p> В дальнейшем коллектив кафедры пополнялся как за счёт выпускников мехмата.</p>
        <div class="chair-img">
            <img src="/pop-it-mvc/public/img/chair-mat.jpg" alt>
        </div>
    </div>
