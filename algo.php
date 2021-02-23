<?php 

$categories = [
    'mode' => [
        'pantalon' => ['jean', 'jogging', 'chino'],
        'tshirt' => ['blanc', 'basic', 'large'],
        'basket' => ['plateforme', 'fine', 'big foot'],
    ],
    'santé' => [
        'sommeil' => ['melatonine', 'random', 'pilule'],
        'pied' => ['pied droit', 'pied gauche', 'sans pied']
    ],
    'drogue' => [
        'acid' => ['lsd', 'keta', 'ecsta', 'mdma'],
        'douce' => ['weed', 'shit'],
        'dur' => ['pas touché !!'],
    ]
];


function getInfos($input, $categories)
{
    foreach ($categories as $key => $categorie) {
        foreach ($categorie as $keySubCategorie => $subCategorie) {
            foreach ($subCategorie as $keySubSubCategorie => $subSubCategorie) {
                if ($input == $subSubCategorie) {
                    return "SOUS CATEGORIE : " .$keySubCategorie ." CATEGORIE : " .$key; 
                }
            }
        }
    }
}

echo getInfos('melatonine', $categories);