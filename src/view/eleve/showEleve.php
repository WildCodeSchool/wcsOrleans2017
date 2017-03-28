<div class="row">

    <h2><?= $eleve->getCivilite().' '.$eleve->getPrenom().' '.$eleve->getNom()?> </h2>
    <p><?= $eleve->getDescription() ?></p>
    <p><?= $eleve->getDateNaissance() ?></p>
    <p><?= $eleve->getType() ?></p>

    <a href="ficheEleve.php?id=<?= $eleve->getId() ?>" class="btn btn-primary">Modifier <?= $eleve->getType() ?></a>
</div>