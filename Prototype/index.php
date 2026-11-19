<?php
$projects = [
    [
        "id" => 1,
        "title" => "Site web E-commerce",
        "description" => "Une boutique en ligne permettant de consulter les produits et de passer des commandes.",
        "image" => "images/ecommerce.jpg",
        "technologies" => ["HTML", "CSS", "JavaScript", "PHP"],
        "category" => "Web",
        "status" => "Terminé"
    ],
    [
        "id" => 2,
        "title" => "Application de gestion scolaire",
        "description" => "Une application pour gérer les étudiants, les formateurs et les notes.",
        "image" => "images/school.jpg",
        "technologies" => ["PHP", "MySQL", "Bootstrap"],
        "category" => "Web",
        "status" => "En cours"
    ],
    [
        "id" => 3,
        "title" => "Application météo",
        "description" => "Une application permettant de consulter les prévisions météorologiques.",
        "image" => "images/weather.jpg",
        "technologies" => ["HTML", "CSS", "JavaScript", "API"],
        "category" => "JavaScript",
        "status" => "Terminé"
    ],
    [
        "id" => 4,
        "title" => "Gestionnaire de tâches",
        "description" => "Une application permettant de créer, organiser et suivre les tâches quotidiennes.",
        "image" => "images/tasks.jpg",
        "technologies" => ["Laravel", "MySQL", "Tailwind CSS"],
        "category" => "Web",
        "status" => "Terminé"
    ],
    [
        "id" => 5,
        "title" => "Application de réservation",
        "description" => "Une plateforme de réservation de chambres d'hôtel avec gestion des disponibilités.",
        "image" => "images/booking.jpg",
        "technologies" => ["PHP", "MySQL", "JavaScript"],
        "category" => "Web",
        "status" => "En cours"
    ],
    [
        "id" => 6,
        "title" => "Jeu Memory",
        "description" => "Un jeu de mémoire permettant de retrouver les paires de cartes identiques.",
        "image" => "images/memory.jpg",
        "technologies" => ["HTML", "CSS", "JavaScript"],
        "category" => "JavaScript",
        "status" => "Terminé"
    ],
    [
        "id" => 7,
        "title" => "Application de gestion de stock",
        "description" => "Une application pour gérer les produits, les fournisseurs et les mouvements de stock.",
        "image" => "images/stock.jpg",
        "technologies" => ["Java", "MySQL", "JavaFX"],
        "category" => "Desktop",
        "status" => "En cours"
    ],
    [
        "id" => 8,
        "title" => "Réseau social étudiant",
        "description" => "Une plateforme permettant aux étudiants de partager des publications et d'échanger des messages.",
        "image" => "images/social.jpg",
        "technologies" => ["React", "Node.js", "MongoDB"],
        "category" => "Web",
        "status" => "Terminé"
    ]
];

require "index-template.php";

?>