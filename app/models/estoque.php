<?php
/**
 *  Model
 * 
 * [Short Description]
 *
 * @package default
 * @author Rafael Malatesta e Tales A. Mendonça
 * @version $Id$
 * @copyright __MyCompanyName__
 **/
class Estoque extends AppModel {
	public $belongsTo = array('Definicoescesta');
	
	/**
	 * 
	 */
	public function beforeSave($options = array()) 
	{
		//die(pr($this->data));
		return true;
	}
}
?>
