<?php
/**
 * Created by PhpStorm.
 * User: nico
 * Date: 04/04/17
 * Time: 10:30
 */

namespace wcs\Form;

use Zend\Form\Element\Csrf;
use Zend\Form\Element\Email;
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

        $this->add([
            'type'  => Email::class,
            'name' => 'email',
            'options' => [
                'label' => 'Votre email',
            ],
        ]);

        $this->add([
            'type'  => Csrf::class,
            'name' => 'csrf',
        ]);
    }
}