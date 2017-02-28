<?php
// Je teste que mon tableau ne soit pas vide.
if (!empty($_POST)) {
    // je securise mes données
    $_POST['nom'] =  strip_tags(trim($_POST['nom']));

    // Je valide que le nom soit rempli.
    if (!empty($_POST['nom'])) {
        // je transforme mon tableau en chaine.
        $data = implode("|", $_POST)."\n";

        // J'ecris dans mon fichier texte.
        file_put_contents(__DIR__.'/../eleves/personne.txt',
                            $data,
                            FILE_APPEND);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container">
<h1>Hello, world!</h1>

<ul>
    <li><a href="src/accueil.php">Accueil</a></li>
    <li><a href="src/ecole.php">L'école</a></li>
    <li><a href="src/ficheEleve.php">Fiche élève</a></li>
</ul>

<h1>Fiche création élève</h1>

<div class="row">
    <div class="col-md-12">
        <form method="POST" action="ficheEleve.php">
            <div class="row">
                <div class="col-md-1">
                    <label>Type</label>
                </div>
                <div class="col-md-11">
                    <select name="type">
                        <option value="eleve">Eleve</option>
                        <option value="formateur">Formateur</option>
                        <option value="manager">Campus manager</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-md-1">
                    <label>Nom</label>
                </div>
                <div class="col-md-11">
                <input type="text" name="nom" placeholder="nom" />
                </div>
            </div>

            <div class="row">
                <div class="col-md-1">
            <label>Prénom</label>
                </div>
                <div class="col-md-11">
            <input type="text" name="prenom" />
                </div>
            </div>

            <div class="row">
                <div class="col-md-1">
            <label>Civilité</label>
                </div>
                    <div class="col-md-11">
                        <input type="radio" name="civilite" value="m" />
                        <label>Monsieur</label>
                        <input type="radio" name="civilite" value="mme" />
                        <label>Madame</label>
                        <input type="radio" id="civilite_autre" name="civilite" value="autre" />
                        <label for="civilite_autre">Autre</label>
                    </div>
            </div>
            <div class="row">
                <div class="col-md-1">
                <label>Date anniversaire</label>
                </div>
                <div class="col-md-11">
            <input type="date" name="anniversaire" />
                </div>
            </div>
            <div class="row">
                <div class="col-md-1">
                    <label>Description</label>
                </div>
                <div class="col-md-11">
                <textarea name="description"></textarea>
                </div>
            </div>

            <hr />

            <div class="row">
            <input type="reset" name="btnReset" value="Vider" />
            <input type="submit" name="btnSubmit" value="Créer" />
            </div>
        </form>
    </div>
</div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>