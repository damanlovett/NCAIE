<?php
class Area extends AppModel {

	var $name = 'Area';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasAndBelongsToMany = array('User');

}
?>