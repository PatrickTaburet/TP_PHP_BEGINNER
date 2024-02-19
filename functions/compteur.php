<?php


function ajouterVue (): void{
    $fichier = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . "compteur";
    $fichier_journalier = $fichier . "-" . date('Y-m-d');
    incrementer_compteur($fichier);
    incrementer_compteur($fichier_journalier);
}

function incrementer_compteur( string $fichier) : void{
    $compteur = 1;
    if (file_exists($fichier)){
        $compteur = (int)file_get_contents($fichier);
        $compteur ++;
    }
    file_put_contents($fichier, $compteur);
}

function nombre_vues(): string {
    $compteur = 1;
    $fichier = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . "compteur";
        return file_get_contents($fichier);

}

function nbrVueMois (int $annee, int $mois) : int{
    $mois = str_pad($mois, 2, '0', STR_PAD_LEFT);
    $fichier = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . "compteur-" . $annee . "-" . $mois . "-". "*";
    $fichiers = glob($fichier);
    $total = 0;
    foreach ($fichiers as $fichier){
        $total +=  (int)file_get_contents($fichier);
    }
    return $total;
}

function nbrVueDetailMois (int $annee, int $mois) : array{
    $mois = str_pad($mois, 2, '0', STR_PAD_LEFT);
    $fichier = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . "compteur-" . $annee . "-" . $mois . "-". "*";
    $fichiers = glob($fichier);
    $visites = [];
    foreach ($fichiers as $fichier){
        $parties = explode ('-', basename($fichier));
        $visites[] = [
            'annee' => $annee,
            'mois' => $mois,
            'jour' => $parties[3],
            'visites' => file_get_contents($fichier)
        ];
       
    }
    return $visites;
}





?>