
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <header>
        <h3><span>My</span>Portfolio</h3>

        <nav>
            <a href="#">Accueil</a>
            <a href="#" id="Projet">Projet</a>
            <a href="#">Contact</a>
        </nav>
    </header>

    <section class="hero">
        <h1>Mes projets</h1>
        <p>Découvrez mon projet et les idées qui lui donnent vie.</p>

        <?php $ter = 0 ?>
        <?php $cours = 0 ?>

        <?php foreach ($projects as $project) : ?>

            <?php if ($project["status"] == "Terminé") : ?>
                <?php $ter = $ter + 1 ?>
            <?php else : ?>
                <?php $cours = $cours + 1 ?>
            <?php endif; ?>

        <?php endforeach; ?>

        <div class="hero-cards">
            <p>Terminés <br> <span><?= $ter ?></span> <br> projets</p>
            <p>En cours <br> <span><?= $cours ?></span> <br> projets</p>
        </div>
    </section>

    <section class="list">

        <div class="hmg">
            <img src="images/menu.svg" alt="">
            <h2>Liste des projets</h2>
        </div>

        <article>

            <?php foreach ($projects as $project) : ?>

                <div class="card">
                    <img src="<?= $project["image"] ?>" alt="">

                    <div class="content">

                        <?php
                        $categoryClass = "";

                        if ($project["category"] === "Web") {
                            $categoryClass = "web";
                        } elseif ($project["category"] === "JavaScript") {
                            $categoryClass = "javascript";
                        } else {
                            $categoryClass = "desktop";
                        }
                        ?>

                        <span class="<?= $categoryClass ?>">
                            <?= $project["category"] ?>
                        </span>

                        <h3><?= $project["title"] ?></h3>

                        <p><?= $project["description"] ?></p>

                        <p>
                            Les technologies utilisées :
                            <?= implode(", ", $project["technologies"]) ?>
                        </p>

                        <?php
                        $statusClass = "";

                        if ($project["status"] === "Terminé") {
                            $statusClass = "done";
                        } else {
                            $statusClass = "in-progress";
                        }
                        ?>

                        <span class="<?= $statusClass ?>">
                            <?= $project["status"] ?>
                        </span>

                    </div>
                </div>

            <?php endforeach; ?>

        </article>
    </section>




<footer>
    <div class="footer-content">

        <div class="footer-info">
            <h2>My<span>Portfolio</span></h2>
            <p>
                Découvrez mes projets, mes compétences
                et mon parcours dans le développement web.
            </p>
        </div>

        <div class="footer-links">
            <a href="#">Accueil</a>
            <a href="#">Projets</a>
            <a href="#">Contact</a>
        </div>

    </div>

    <hr>

    <p class="copyright">
        &copy; 2026 My Portfolio — Tous droits réservés.
    </p>
</footer>

</body>
</html>
