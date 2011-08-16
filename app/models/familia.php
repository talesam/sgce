<?php
/**
 *  Model
 * 
 * [Short Description]
 *
 * @package default
 * @author Edinei L. Cipriani
 * @version $Id$
 * @copyright __MyCompanyName__
 **/
class Familia extends AppModel {

	
	/* Familia tem muitas e ou pertence a um Questionário */
	public $hasAndBelongsToMany = array('Questionario');
	
	
	/* Familia tem muitas pesssoas */
	public $hasMany = array('Pessoa');
}
?>