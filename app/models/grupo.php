<?php
class Grupo extends AppModel {
	
	var $actsAs = array('Acl' => array('type' => 'requester'));

	function parentNode() {
	    return null;
	}
	
	public $displayField = 'nome';
	
}
?>