<?php
/**
 * Created by PhpStorm.
 * User: sylvain
 * Date: 21/03/17
 * Time: 17:17
 */

namespace wcs\model;


/**
 * Modèle (entity) correspondant à la table eleve de la base de données. Un objet Eleve est instancié et hydrater automatiquement
 * lors de l'utilisation de pdo fetchAll avec le style FETCH_CLASS
 * @class Eleve
 */
class Eleve
{
    private $id;
    private $civilite;
    private $prenom;
    private $nom;
    private $date_naissance;
    private $description;
    private $type;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getCivilite()
    {
        return $this->civilite;
    }

    /**
     * @param mixed $civilite
     */
    public function setCivilite($civilite)
    {
        $this->civilite = $civilite;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return strtoupper($this->nom);
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getDateNaissance()
    {
        return $this->date_naissance;
    }

    /**
     * @param mixed $date_naissance
     */
    public function setDateNaissance($date_naissance)
    {
        $this->date_naissance = $date_naissance;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }


//    public function updateOrInsert($pdo) {
//        if($this->getId()) {
//            $req = "UPDATE eleve SET
//                civilite=:civilite, prenom=:prenom, nom=:nom,
//                date_naissance=:date_naissance, description=:description, type=:type WHERE id=:id";
//        } else {
//            $req = "INSERT INTO eleve (civilite, prenom, nom, date_naissance, description, type)
//                VALUES
//                (:civilite, :prenom, :nom, :date_naissance, :description, :type)";
//            $args[':id'] = $this->getId();
//       }
//        $prep = $pdo->prepare($req);
//        $args[':civilite'] = $this->getCivilite();
//        $args[':nom'] = $this->getCivilite();
//        $args[':prenom'] = $this->getPrenom();
//        $args[':date_naissance'] = $this->getDateNaissance();
//        $args[':description'] = $this->getDescription();
//        $args[':type'] = $this->getType();
//
//        $prep->execute($args);
//    }

}