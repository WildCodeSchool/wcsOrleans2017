<?php
/**
 * Created by PhpStorm.
 * User: sylvain
 * Date: 28/03/17
 * Time: 10:59
 */

namespace wcs\controller;

use wcs\DB;
use wcs\Form\EleveFilter;
use wcs\Form\EleveForm;

/**
 * Class EleveController
 * Controlleur permettant de gérer les élèves
 * @package wcs\controller
 */
class EleveController extends Controller
{
    /**
     * récupération de tous les élèves et affichage sur une page sous forme de vignettes
     * @return string
     */
    public function listAll()
    {
        // connection à la bdd
        $db = new DB();
        // requete sql pour récupérer tous les élèves dans un tableau d'objets Eleve
        $eleves = $db -> findAll('eleve');
        // affichage de la vue HTML
        return $this->render('eleve/listAllEleve.php', ['eleves'=>$eleves]);
    }

    /**
     * récupération de l'élève correspondant à l'id $id et affichage des informations de cet élève uniquement
     * @param $id
     * @return string
     */
    public function show($id)
    {
        $db = new DB();
        $eleve = $db -> findOne('eleve', $id);
        return $this->render('eleve/showEleve.php', ['eleve'=>$eleve]);

    }

    /**
     * j'ajoute un élève
     */
    public function add() {
        $form = new EleveForm();

        if (isset($_POST['GO'])) {
            $filter = new EleveFilter();
            $form->setInputFilter($filter);
            $form->setData($_POST);

            if ($form->isValid()) {
                echo 'Le form est valide';
            } else {
                var_dump($form->getMessages());
            }
        }

        return $this->render('eleve/addEleve.php', ['form'=>$form]);
    }

    /**
     *
     */
    public function update() {

    }

    /**
     *
     */
    public function delete() {

    }



}