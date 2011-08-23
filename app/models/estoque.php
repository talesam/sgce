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
class Estoque extends AppModel {
	public $belongsTo = array('Mantimento');
}
?>