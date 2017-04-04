<?php
/**
 * Created by PhpStorm.
 * User: nico
 * Date: 04/04/17
 * Time: 10:30
 */

namespace wcs\Form;

use Zend\Form\Element\Text;
use Zend\Form\Form;

class EleveForm extends Form
{
    public function __construct($name = null, array $options = [])
    {
        parent::__construct($name, $options);

        $this->add([
            'type'  => Text::class,
            'name' => 'nom',
            'options' => [
                'label' => 'Votre nom',
            ],
        ]);
    }
}