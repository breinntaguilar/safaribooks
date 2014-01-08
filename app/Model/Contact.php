<?php
class Contact extends AppModel {
    var $name = 'Contacts';
    public $useTable = false;  // Not using the database, of course.

    var $validate = array(
        'name' => array(
            'rule' => '/.+/',
            'allowEmpty' => false,
            'required' => true,
        ),
        'email' => array(
            'allowEmpty' => false,
            'required' => true,
        )
    );

    /* function schema() {
        return array (
            'name' => array('type' => 'string', 'length' => 60, 'class' => 'contact input'),
            'email' => array('type' => 'string', 'length' => 60, 'class' => 'contact input'),
            'message' => array('type' => 'text', 'length' => 2000, 'class' => 'contact input'),
        );
    } */

}
?>
