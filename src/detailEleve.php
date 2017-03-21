<?php
    include 'header.php';
    include 'connect.php';
    include 'Eleve.php';

    use wcs\Eleve;
    $pdo = new PDO(DSN, USER, PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $req = "SELECT * FROM eleve WHERE id=:id";
    $prep = $pdo->prepare($req);
    $prep->bindValue(':id', $_GET['id'], PDO::PARAM_INT);

    $prep->execute();

    $res = $prep->fetchAll(PDO::FETCH_CLASS, 'wcs\Eleve');

    if ($res) :
     $eleve = $res[0]; ?>

    <div class="row">

        <h2><?= $eleve->getCivilite().' '.$eleve->getPrenom().' '.$eleve->getNom()?> </h2>
                <p><?= $eleve->getDescription() ?></p>
                <p><?= $eleve->getDateNaissance() ?></p>
                <p><?= $eleve->getType() ?></p>

        <a href="ficheEleve.php?id=<?= $eleve->getId() ?>" class="btn btn-primary">Modifier <?= $eleve->getType() ?></a>

    <?php endif;
    include 'footer.php';
