<?php
/**
 * Application model for Cake.
 *
 * This file is application-wide model file. You can put all
 * application-wide model-related methods here.
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.app
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

/**
 * Application model for Cake.
 *
 * Add your application-wide methods in the class below, your models
 * will inherit them.
 *
 * @package       cake
 * @subpackage    cake.app
 */
class AppModel extends Model {
	
	public function beforeSave(){
		if(isset($this->data['Familia'])){
			$this->data['Familia']['nascimento'] = date('Y-m-d', strtotime($this->data['Familia']['nascimento']));
			$this->data['Familia']['renda_familiar'] = str_replace('.', '', $this->data['Familia']['renda_familiar']);
			$this->data['Familia']['renda_percapta'] = str_replace(',', '.', $this->data['Familia']['renda_percapta']);
		}
		
		
		if(isset($this->data['Companheiro'])){
			$this->data['Companheiro']['nascimento'] = date('Y-m-d', strtotime($this->data['Companheiro']['nascimento']));
			$this->data['Companheiro']['renda_familiar'] = str_replace('.', '', $this->data['Companheiro']['renda_familiar']);
			$this->data['Companheiro']['renda_percapta'] = str_replace(',', '.', $this->data['Companheiro']['renda_percapta']);
		}
		
		if(isset($this->data['Dependente'])){
			$this->data['Dependente']['nascimento'] = date('Y-m-d', strtotime($this->data['Dependente']['nascimento']));
			$this->data['Dependente']['renda_familiar'] = str_replace('.', '', $this->data['Dependente']['renda_familiar']);
			$this->data['Dependente']['renda_percapta'] = str_replace(',', '.', $this->data['Dependente']['renda_percapta']);
		}
		
		return true;
	}
}
