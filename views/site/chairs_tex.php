<div class="nazad">
    <a href="<?= app()->route->getUrl('/divisions_view') ?>"><button>НАЗАД</button></a>
    <div class="mat">
        <a href="<?= app()->route->getUrl('/chairs_mat') ?>"><button>КАФЕДРА МАТЕМАТИКИ</button></a></br>
        <a href="<?= app()->route->getUrl('/chairs') ?>"><button>КАФЕДРА ЭКОНОМИКИ</button></a>
    </div>
<div class="chair-ek">
    <h2>Кафедра физики </h2>
    <h3><?= $message ?? ''; ?></h3>
    <div class="chair-ek-text">
        <p>Кафедра физики образована в 1962 году одновременно с открытием ТИРЭТа.:</p>
        <p>Первый состав включал в себя 6 преподавателей и одного инженера.  </p>
        <div class="chair-img">
            <img src="/pop-it-mvc/public/img/chairs-tex.jpg" alt>
        </div>
    </div>
