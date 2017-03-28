<h2>Trombinoscope</h2>
    <div class="row">
    <?php foreach ($eleves as $eleve) : ?>
    <div class="col-sm-4">
        <div class="thumbnail">
            <img src="http://placehold.it/200x200" alt="...">
            <div class="caption">
                <h3><a href="../public/index.php?route=showEleve&id="<?= $eleve->getId() ?> ">
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
    ?>
<?php endforeach ?>

</div>

<a href="ficheEleve.php" class="btn btn-primary">Ajouter un élève</a>