<div class="nazad">
    <a href="<?= app()->route->getUrl('/divisions_view') ?>"><button>НАЗАД</button></a>
    <div class="mat">
        <a href="<?= app()->route->getUrl('/chairs_tex') ?>"><button>КАФЕДРА ФИЗИКИ</button></a></br>
        <a href="<?= app()->route->getUrl('/chairs_mat') ?>"><button>КАФЕДРА МАТЕМАТИКИ</button></a>
    </div>
<div class="chair-ek">
<h2>Кафедра экономики </h2>
<h3><?= $message ?? ''; ?></h3>
    <div class="chair-ek-text">
         <p>Кафедра экономики была создана в 1996 году на базе двух разноплановых кафедр университета:</p>
        <p>общей экономической – кафедры экономики организации производства (ЭиОП). </p>
    </div>
    <div class="chair-img">
       <img src="/pop-it-mvc/public/img/chair-ek.jpg" alt>
    </div>
</div>