<?php
    include 'header.php';
    include 'connect.php';
    $bdd = mysqli_connect(SERVER, USER, PASS, DB);
    echo '<h2>Trombinoscope</h2>';

    $req = "SELECT id, civilite, prenom, nom, description, date_naissance, type 
            FROM eleve";
    $res = mysqli_query($bdd, $req);


    echo '<div class="row">';
    while($data = mysqli_fetch_assoc($res))
    {
        echo '
          <div class="col-sm-4">
            <div class="thumbnail">
              <img src="http://placehold.it/200x200" alt="...">
              <div class="caption">
                <h3><a href="detailEleve.php?id='.$data['id'].'">'.$data['civilite'].' '.$data['prenom'].' '.$data['nom'].'</a></h3>
                <p>'.$data['type'].'</p>
                <form method="POST" action="deleteEleve.php">
                    <input type="hidden" name="id" value="'.$data['id'].'"/>
                    <input  class="btn btn-danger" type="submit" value="Delete" name="delete"/>
                </form>
              </div>
            </div>
          </div>
        ';

    }

    echo '</div>';

    echo '<a href="ficheEleve.php" class="btn btn-primary">Ajouter un élève</a>';

    include 'footer.php';
?>
