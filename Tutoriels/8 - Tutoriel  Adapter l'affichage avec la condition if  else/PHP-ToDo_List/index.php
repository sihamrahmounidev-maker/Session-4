<?php

$taches = [
    [
        'id' => 1,
        'titre' => 'Créer la structure HTML',
        'description' => 'Réaliser la structure HTML de la page d\'accueil.',
        'date_limite' => '2026-11-15',
        'priorite' => 'Haute',
        'terminee' => true
    ],
    [
        'id' => 2,
        'titre' => 'Intégrer les styles CSS',
        'description' => 'Appliquer les couleurs et les espacements.',
        'date_limite' => '2026-11-17',
        'priorite' => 'Moyenne',
        'terminee' => false
    ],
    [
        'id' => 3,
        'titre' => 'Créer les fonctions PHP',
        'description' => 'Organiser les traitements de la Todo List.',
        'date_limite' => '2026-11-10',
        'priorite' => 'Haute',
        'terminee' => true
    ],
    [
        'id' => 4,
        'titre' => 'Tester l\'application',
        'description' => 'Vérifier le bon fonctionnement et corriger les erreurs.',
        'date_limite' => '2026-11-20',
        'priorite' => 'Basse',
        'terminee' => false
    ],
    [
        'id' => 5,
        'titre' => 'Préparer la collection des tâches',
        'description' => 'Créer un tableau multidimensionnel avec 8 tâches.',
        'date_limite' => '2026-11-12',
        'priorite' => 'Moyenne',
        'terminee' => true
    ],
    [
        'id' => 6,
        'titre' => 'Afficher les statistiques',
        'description' => 'Calculer et afficher le total, les tâches terminées et non terminées.',
        'date_limite' => '2026-11-21',
        'priorite' => 'Haute',
        'terminee' => false
    ],
    [
        'id' => 7,
        'titre' => 'Organiser les fichiers du projet',
        'description' => 'Créer un dossier pour le projet et y placer les fichiers.',
        'date_limite' => '2026-11-22',
        'priorite' => 'Basse',
        'terminee' => false
    ],
    [
        'id' => 8,
        'titre' => 'Vérifier l\'affichage des tâches',
        'description' => 'Tester tous les cas et corriger le style.',
        'date_limite' => '2026-11-24',
        'priorite' => 'Moyenne',
        'terminee' => false
    ]
];

require "template.php";
?>