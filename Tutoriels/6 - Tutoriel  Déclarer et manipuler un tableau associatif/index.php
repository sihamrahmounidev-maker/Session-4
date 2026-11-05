<?php
$articles = [
    [
        'id' => 1,
        'titre' => 'Comment bien débuter avec Tailwind CSS en 2026 ?',
        'contenu' => 'Découvrez les concepts fondamentaux de Tailwind CSS et pourquoi cette approche utilitaire est devenue le standard de l\'industrie.',
        'image' => 'images/article-example.png',
        'date_creation' => '2026-02-14',
        'categorie_libelle' => 'Développement',
        'categorie_couleur' => 'bleu'
    ],
    
    [
        'id' => 2,
        'titre'=>'Maîtriser les micro-interactions UX',
        'contenu' => 'Une interface belle n\'est pas suffisante. Comprendre comment animer de petites actions peut transformer l\'expérience utilisateur.',
        'image' => 'images/article-example.png',
        'date_creation' => '2026-02-10',
        'categorie_libelle' => 'UI / UX',
        'categorie_couleur' => 'rose'
    ]
];

echo "Article 1 : ". $articles[0]['titre'] . " (". $articles[0]['categorie_libelle'] . ")<br>";
echo "Article 2 : ". $articles[1]['titre'] . " (". $articles[1]['categorie_libelle'] . ")";