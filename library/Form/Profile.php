<?php

class Form_Profile extends Zend_Form
{

    public function init()
    {
        $this->setName("profile");
        $this->setMethod('post');


		$this->addElement('text', 'name', array(
      'filters'    => array('StringTrim'),
      'validators' => array(
          array('StringLength', false, array(0, 50))
      ),
      'required'   => false,
      'label'      => 'Name:',
  ));

        $this->addElement('text', 'email', array(
            'filters'    => array('StringTrim'),
            'validators' => array(
                array('StringLength', false, array(0, 50)),
				array('EmailAddress')
            ),
            'required'   => true,
            'label'      => 'Email:',
        ));

        $this->addElement('password', 'password', array(
            'filters'    => array('StringTrim'),
            'validators' => array(
                array('StringLength', false, array(0, 50)),
            ),
            'required'   => false,
            'label'      => 'Password:',
        ));

        $this->addElement('submit', 'login', array(
            'class'=>'btn btn-info centered',
            'required' => false,
            'ignore'   => true,
            'label'    => 'Update',
        ));        
    }
}

