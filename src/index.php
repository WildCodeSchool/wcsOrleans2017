<?php
    include 'header.php';
    include 'connect.php';
    include 'Eleve.php';

    use wcs\Eleve;
    $pdo = new PDO(DSN, USER, PASS);

    $req = "SELECT id, civilite, prenom, nom, description, date_naissance, type 
            FROM eleve";
    $res = $pdo->query($req);
    $eleves = $res->fetchAll(PDO::FETCH_CLASS, 'wcs\Eleve');


?>
    <h2>Trombinoscope</h2>
    <div class="row">
    <?php foreach ($eleves as $eleve) : ?>
          <div class="col-sm-4">
            <div class="thumbnail">
              <img src="http://placehold.it/200x200" alt="...">
              <div class="caption">
                <h3><a href="detailEleve.php?id=<?= $eleve->getId() ?> ">
                        <?= $eleve->getCivilite().' '.$eleve->getPrenom().' '.$eleve->getNom() ?>
                    </a>
                </h3>
                <p><?= $eleve->getType() ?></p>
                <form method="POST" action="deleteEleve.php">
                    <input type="hidden" name="id" value="<?= $eleve->getId() ?>"/>
                    <input  class="btn btn-danger" type="submit" value="Delete" name="delete"/>
                </form>
              </div>
            </div>
          </div>
        <?php

            $eleve->setDescription('new description');
            $eleve->updateOrInsert($pdo);
        ?>
    <?php endforeach ?>

    </div>

    <a href="ficheEleve.php" class="btn btn-primary">Ajouter un élève</a>
<?php
    include 'footer.php';
?>
