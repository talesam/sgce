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
class Itemcesta extends AppModel {
	/* Itemcesta tem muitas Cestas e Estoques */
	public $belongsTo = array(
		'Estoque', 'Cesta'
	);
}
?>
