<?php
/**
 * Created by PhpStorm.
 * User: nico
 * Date: 04/04/17
 * Time: 10:49
 */

namespace wcs\Form;


use Zend\Filter\StringToUpper;
use Zend\InputFilter\InputFilter;
use Zend\Validator\EmailAddress;
use Zend\Validator\NotEmpty;
use Zend\Validator\StringLength;

class EleveFilter extends InputFilter
{
    public function __construct()
    {
        $this->add([
            'name' => 'nom',
            'allow_empty' => false,
            'required' => true,
            'validators' => [[
                'name' => NotEmpty::class
            ],
            [
                'name' => StringLength::class,
                'options' =>
                [
                    'min' => 5,
                ]
            ]],
        ]);

        $this->add([
            'name' => 'email',
            'allow_empty' => false,
            'required' => true,
            'validators' => [[
                'name' => NotEmpty::class
            ],
            [
                'name' => EmailAddress::class
            ]]
        ]);
    }
}