<?php 
$title = "Admin Dashboard";
$nav = "dashboard";
require_once __DIR__ . DIRECTORY_SEPARATOR . 'functions' . DIRECTORY_SEPARATOR . 'compteur.php';
$annee = (int)date('Y');
$moiActuel = (int)date('m'); 
$anneeSelection = empty($_GET['annee']) ? null : (int)$_GET['annee'];
$moiSelection = empty($_GET['mois']) ? null : str_pad($_GET['mois'], 2, '0', STR_PAD_LEFT);
$moiActuel = str_pad($moiActuel, 2, '0', STR_PAD_LEFT);

if ( $anneeSelection && $moiSelection){
    $total = nbrVueMois($anneeSelection, $moiSelection);
}else {
    $total = nombre_vues();
}

$mois = [
    '01' => 'Janvier',
    '02' => 'Fevrier',
    '03' => 'Mars',
    '04' => 'Avril',
    '05' => 'Mai',
    '06' => 'Juin',
    '07' => 'Juillet',
    '08' => 'Aout',
    '09' => 'Septembre',
    '10' => 'Octobre',
    '11' => 'Novembre',
    '12' => 'Decembre'
];


require "header.php";

?>



<div class="row">
    <div class="col-md-4">
        <div class="list-group">
            <?php for ($i =0; $i<5; $i++): ?>
                <a href="dashboard.php?annee=<?= $annee - $i ?>" class="list-group-item <?= $annee - $i === $anneeSelection ? 'active' : '' ?>"><?= $annee - $i ?></a>
                <?php if ($annee - $i === $anneeSelection): ?>
                    <div class="list-group">
                        <?php foreach ($mois as $m => $nom):?>
                            <a href="dashboard.php?annee=<?= $anneeSelection?>&mois=<?= $m ?>" class="list-group-item <?= $m === $moiSelection ? 'active' : '' ?>">
                                <?= $nom ?>
                            </a>
                        <?php endforeach ?>
                    </div>
                <?php endif ?>
            <?php endfor ?>
        </div>
    </div>
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <strong style="font-size: 3em;"><?= $total?></strong><br>
                Visite<?= $total>1 ? "s" : '' ?> total
            </div>
        </div>
    </div>
</div>








<?php require "footer.php"?>