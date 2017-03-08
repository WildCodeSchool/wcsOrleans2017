<?php
    include 'header.php';
    include 'connect.php';
    $bdd = mysqli_connect(SERVER, USER, PASS, DB);
 // Change character set to utf8
    mysqli_set_charset($bdd,"utf8");

    $id=mysqli_real_escape_string($bdd, trim($_GET['id']));
    $req = "SELECT * FROM eleve WHERE id=$id";
    $res = mysqli_query($bdd, $req);


    echo '<div class="row">';
    while($data = mysqli_fetch_assoc($res)) {
        echo '<h2>'.$data['civilite'].' '.$data['prenom'].' '.$data['nom'].'</h2>
                <p>'.$data['description'].'</p>
                <p>'.$data['date_naissance'].'</p>
                <p>'.$data['type'].'</p>';

        echo '<a href="ficheEleve.php?id='.$data['id'].'" class="btn btn-primary">Modifier '.$data['type'].'</a>';

    }

    include 'footer.php';
