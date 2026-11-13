<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Ma Todo List</title>
    <script src="https://unpkg.com/lucide@latest"></script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">

        <header class="header">
            <div class="header-icon">
                <i class="clipboard-check" data-lucide="clipboard-check"></i>
            </div>

            <div>
                <h1>Ma Todo List</h1>
                <span>Gérez et suivez vos tâches quotidiennes</span>
            </div>
        </header>

    </div>

    <div class="stats">

        <div class="stat-card total">
            <i class="clipboard-check" data-lucide="layers"></i>
            <div>
                <span>Total</span>
                <?php $nombre = count($taches); ?>
                <h2><?= $nombre ?></h2>
                <small>tâches</small>
            </div>
        </div>

        <div class="stat-card completed">
            <i class="clipboard-check" data-lucide="check-circle"></i>
            <div>
                <span>Terminées</span>
                <?php $tachesTerminees = 0; ?>
                <?php foreach ($taches as $tache) : ?>
                    <?php if ($tache['terminee'] === true) : ?>
                        <?php $tachesTerminees = $tachesTerminees + 1; ?>
                    <?php endif; ?>
                <?php endforeach; ?>
                <h2><?= $tachesTerminees ?></h2>
                <small>tâches</small>
            </div>
        </div>

        <div class="stat-card remaining">
            <i class="clipboard-check" data-lucide="clock"></i>
            <div>
                <span>Non terminées</span>
                <?php $tachesRestantes = $nombre - $tachesTerminees; ?>
                <h2><?= $tachesRestantes ?></h2>
                <small>tâches</small>
            </div>
        </div>

    </div>
    <div class="titre">
      <h2><i class="clipboard-check" data-lucide="list-checks"></i> Liste des tâches</h2>
      <span id="ligne">_________________________________________________________________________________</span>
    </div>

    <?php foreach ($taches as $tache) : ?>

        <div class="task-card <?php if($tache['terminee'] === true) : ?>
                <?php echo "vert" ; ?>
                <?php endif;?>">

            <div class="task-check">
                <?php if ($tache['terminee'] === true) : ?>
                    <i data-lucide="square-check"></i>
                <?php else : ?>
                    <i data-lucide="square"></i>
                <?php endif; ?>
            </div>

            <div class="task-content">

                <?php if ($tache['terminee'] === true) : ?>
                    <h3 class="done">
                        <?= htmlspecialchars($tache['titre']) ?>
                    </h3>
                <?php else : ?>
                    <h3>
                        <?= htmlspecialchars($tache['titre']) ?>
                    </h3>
                <?php endif; ?>

                <p>
                    <?= htmlspecialchars(mb_substr($tache['description'], 0, 80)) ?>
                </p>

            </div>

            <div class="task-priority 
            <?php if ($tache['priorite'] === 'Haute') : ?>
    <?php echo "haute"; ?>
<?php elseif ($tache['priorite'] === 'Moyenne') : ?>
    <?php echo "moyenne"; ?>
<?php else : ?>
    <?php echo "basse"; ?>
<?php endif; ?> ">
                <?= htmlspecialchars($tache['priorite']) ?>
            </div>

            <div class="task-date">
                <i data-lucide="calendar-days"></i>
                <?= date('d/m/Y', strtotime($tache['date_limite'])) ?>
            </div>

        </div>

    <?php endforeach; ?>

    <script>
        lucide.createIcons();
    </script>
</body>

</html>