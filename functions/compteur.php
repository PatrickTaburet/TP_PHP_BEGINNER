<?php


function ajouterVue (){
    $date = date("'d-m-y'");
    $fichier = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . "compteur-$date";
    $compteur = 1;
    if (file_exists($fichier)){
        $compteur = (int)file_get_contents($fichier);
        $compteur ++;
    }
    file_put_contents($fichier, $compteur);
}

function nombre_vues(): string {
    $date = date('d-m-y');
    $fichier = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . "compteur-$date";
    return file_get_contents($fichier);
}
?>