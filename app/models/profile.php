<?php
class Profile extends AppModel {

	var $name = 'Profile';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'User' => array(
            'className' => 'User',
            'foreignKey' => 'user_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
		'Position' => array(
            'className' => 'Position',
            'foreignKey' => 'position_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'Office' => array(
            'className' => 'Office',
            'foreignKey' => 'office_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'Volunteering' => array(
            'className' => 'Volunteering',
            'foreignKey' => 'volunteering_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
	);

	var $hasAndBelongsToMany = array(
		'Area' => array(
			'className' => 'Area',
			'joinTable' => 'areas_profiles',
			'foreignKey' => 'profile_id',
			'associationForeignKey' => 'area_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
        'Section' => array(
            'className' => 'Section',
            'joinTable' => 'profiles_sections',
            'foreignKey' => 'profile_id',
            'associationForeignKey' => 'section_id',
            'unique' => true,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'finderQuery' => '',
            'deleteQuery' => '',
            'insertQuery' => ''
        )
	);

}
?>