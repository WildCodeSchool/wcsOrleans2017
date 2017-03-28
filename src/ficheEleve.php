<?php

    include 'header.php';
    include 'connect.php';
    $bdd = mysqli_connect(SERVER, USER, PASS, DB);
    $textButton = 'Créer';
    $nom = $prenom = $civilite = $date_naissance = $description = $type = $id='';
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $req = "SELECT * FROM eleve WHERE id=$id";
        $res = mysqli_query($bdd, $req);
        while($data = mysqli_fetch_assoc($res)) {
            $civilite = $data['civilite'];
            $prenom = $data['prenom'];
            $nom = $data['nom'];
            $date_naissance = $data['date_naissance'];
            $description = $data['description'];
            $type = $data['type'];
        }
        $textButton = 'Modifier';
    }


// Je teste que mon tableau ne soit pas vide.
if (!empty($_POST)) {
    // je securise mes données
    foreach ($_POST as $key=>$data) {
        $postClean[$key] = mysqli_real_escape_string($bdd, htmlentities(trim($data)));
    }

    // Je valide que le nom soit rempli.
    if (isset($_POST['btnSubmit'])) {
        $civilite = $postClean['civilite'];
        $prenom = $postClean['prenom'];
        $nom = $postClean['nom'];
        $date_naissance = $postClean['date_naissance'];
        $description = $postClean['description'];
        $type = $postClean['type'];
        $id = $postClean['id'];

        if ($id) {
            $req = "UPDATE eleve SET 
                civilite='$civilite', prenom='$prenom', nom='$nom', 
                date_naissance='$date_naissance', description='$description', type='$type' WHERE id=$id";
            echo $req;
        } else {
            $req = "INSERT INTO eleve (civilite, prenom, nom, date_naissance, description, type) VALUES 
                ('$civilite', '$prenom', '$nom', '$date_naissance', '$description', '$type')";
        }

        if (mysqli_query($bdd, $req)) {
            header('Location: index.php');
        }


    }
}

$tabType = ['Eleve'=>'eleve',
            'Formateur'=>'formateur',
            'Campus Manager'=>'manager'
            ];
$tabCivilite = ['Monsieur'=>'m',
                'Madame'=>'mme',
                'Autre'=>'autre'];


echo '<h1>Fiche création élève</h1>';

echo '    <form method="POST" action="ficheEleve.php">
            <div class="form-group">
                <label for="type">Type</label>
                <select class="form-control" name="type" id="type">';

                foreach ($tabType as $label=>$value) {
                    $selected='';
                    if ($type==$value) {
                        $selected = 'selected="selected"';
                    }
                    echo '<option value="'.$value.'" '.$selected.'>'.$label.'</option>';
                }

               echo ' </select>
            </div>

            <div class="form-group">
                <label for="nom">Nom</label>
                <input class="form-control" type="text" value="'.$nom.'" name="nom" placeholder="nom" id="nom"/>
            </div>

            <div class="form-group">
                <label for="prenom">Prénom</label>
                <input class="form-control" type="text"  value="'.$prenom.'"  name="prenom" id="prenom"/>
            </div>

            <div class="form-group">                   
             <label>Civilité</label>
';
            foreach ($tabCivilite as $label=>$value) {
                $checked = '';
                if ($civilite == $value) {
                    $checked = 'checked="checked"';
                }
                echo '<label for="'.$value.'">'.$label.'</label>
                <input class="form-control" required type="radio" name="civilite" value="'.$value.'" id="'.$value.'" '.$checked.'/>
                ';

            }

            echo '</div>

            <div class="form-group">
                 <label for="anniv">Date anniversaire</label>
                 <input class="form-control" type="date"  value="'.$date_naissance.'" name="date_naissance" id="anniv"/>
            </div>

            <div class="form-group">
                <label for="desc">Description</label>
                <textarea class="form-control"  name="description" id="desc">'.$description.'</textarea>
            </div>

        <hr />
        <input type="hidden" name="id" value="'.$id.'"/>
        <input class="btn btn-default" type="reset" name="btnReset" value="Vider" />
        <input class="btn btn-success" type="submit" name="btnSubmit" value="'.$textButton.'" />
    </form>
    <div class="row">
        <a href="index.php" class="btn btn-primary">Retour à l\'accueil</a>
    </div>';

    include 'footer.php';
?>