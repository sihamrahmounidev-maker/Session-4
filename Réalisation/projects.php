<?php

// PROJECTS STATUS AND DESCRIPTION

$totalProjects = count($projects);
$inProgress = 0;
$pending = 0;
$completed = 0;

foreach ($projects as $project) {

    if ($project["status"] == "En cours") {
        $inProgress++;

    } elseif ($project["status"] == "En attente") {
        $pending++;

    } elseif ($project["status"] == "Terminé") {
        $completed++;
    }
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>CausiVue - Projets</title>

    <link rel="stylesheet" href="../CSS/global.css">
    <link rel="stylesheet" href="../CSS/shared.css">
    <link rel="stylesheet" href="../CSS/projects.css">
</head>

<body>

    <!-- HEADER -->

    <header>

        <div id="logo">
            <a href="../index.php">Causi<span>Vue</span></a>
        </div>

        <nav>
            <a href="../landing.html">Accueil</a>
            <a href="projects.php">Projets</a>
            <a href="processes.php">Processus</a>
            <a href="tasks.php">Tâches</a>
            <a href="problems.php">Problèmes</a>
            <a href="history.php">Historique</a>
        </nav>

    </header>


    <main>

        <!-- PAGE INTRODUCTION -->

        <section class="projects-intro">

            <h1>Mes projets</h1>

            <p>
                Retrouvez tous vos projets, suivez leur avancement
                et consultez les informations importantes.
            </p>

        </section>


        <!-- PROJECTS STATISTICS -->

        <section class="projects-stats">

            <h2>Vue d'ensemble</h2>

            <div class="stats-container">

                <article class="stat-card">
                    <h3>Total des projets</h3>
                    <p><?= $totalProjects ?></p>
                </article>

                <article class="stat-card">
                    <h3>En cours</h3>
                    <p><?= $inProgress ?></p>
                </article>

                <article class="stat-card">
                    <h3>En attente</h3>
                    <p><?= $pending ?></p>
                </article>

                <article class="stat-card">
                    <h3>Terminés</h3>
                    <p><?= $completed ?></p>
                </article>

            </div>

        </section>


        <!-- ALL PROJECTS -->

        <section class="all-projects">

            <h2>Liste des projets</h2>

            <div class="cards-container">

                <?php foreach ($projects as $project): ?>

                    <?php

                    $statusClass = "";

                    if ($project["status"] == "En cours") {
                        $statusClass = "status-progress";

                    } elseif ($project["status"] == "En attente") {
                        $statusClass = "status-pending";

                    } elseif ($project["status"] == "Terminé") {
                        $statusClass = "status-completed";
                    }

                    $description = $project["description"];

                    if (mb_strlen($description, "UTF-8") > 80) {
                        $description = mb_substr(
                            $description,
                            0,
                            80,
                            "UTF-8"
                        ) . "...";
                    }

                    ?>

                    <article class="project-card">

                        <div class="card-header">

                            <h3>
                                <?= htmlspecialchars($project["name"]) ?>
                            </h3>

                            <span class="status <?= $statusClass ?>">
                                <?= htmlspecialchars($project["status"]) ?>
                            </span>

                        </div>

                        <p>
                            <?= htmlspecialchars($description) ?>
                        </p>

                        <p>
                            Début :
                            <?= htmlspecialchars($project["start"]) ?>
                        </p>

                        <p>
                            Deadline :
                            <?= htmlspecialchars($project["deadline"]) ?>
                        </p>

                        <p>
                            Tâches : <?= (int) $project["tasks"] ?>
                        </p>

                        <p>
                            Problèmes : <?= (int) $project["problems"] ?>
                        </p>

                        <a
                            href="project-details.php?id=<?= (int) $project["id"] ?>"
                            class="right"
                        >
                            Voir le projet →
                        </a>

                    </article>

                <?php endforeach; ?>

            </div>

        </section>

    </main>


    <!-- FOOTER -->

    <footer>

        <div class="footer-container">

            <div class="footer-brand">

                <a href="../index.php">Causi<span>Vue</span></a>

                <p>
                    Comprendre les projets, suivre les tâches et identifier
                    les problèmes, leurs causes et leurs impacts.
                </p>

            </div>

            <nav class="footer-nav">

                <h3>Navigation</h3>

                <a href="../index.php">Accueil</a>
                <a href="projects.php">Projets</a>
                <a href="tasks.php">Tâches</a>
                <a href="problems.php">Problèmes</a>

            </nav>

        </div>

        <p class="copyright">
            © CausiVue — Tous droits réservés.
        </p>

    </footer>

</body>
</html>