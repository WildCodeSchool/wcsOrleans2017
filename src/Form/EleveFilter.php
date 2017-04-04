<?php
/**
 * Created by PhpStorm.
 * User: nico
 * Date: 04/04/17
 * Time: 10:49
 */

namespace wcs\Form;


use Zend\InputFilter\InputFilter;
use Zend\Validator\NotEmpty;

class EleveFilter extends InputFilter
{
    public function __construct()
    {
        $this->add(
            [
                'name' => 'nom',
                'required' => true,
                'validators' => [
                    ['NotEmpty' => NotEmpty::class]
                ]
            ]
        );
    }
}