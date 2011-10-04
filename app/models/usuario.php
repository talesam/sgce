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
class Usuario extends AppModel {
	
	public $validate = array(
		'email' => array(
			'email' => array(
					'rule' => 'email',
					'required' => true,
					'message' => 'E-mail inválido',
					'on' => 'create',
				),
			'isUnique' => array(
					'rule' => 'isUnique',
					'message' => 'Já existe este e-mail cadastrado',
				)
			),
		'nome' => array(
			'notEmpty' => array(
				'rule' => 'notEmpty',
				'required' => true,
				'on' => 'create',
				'message' => 'Campo obrigatório',
			)
		),
		'temp_senha' => array(
			'notEmpty' => array(
				'rule' => 'notEmpty',
				'required' => true,
				'on' => 'create',
				'message' => 'Campo obrigatório',
			)
		)
	);
	
	
	


		public $belongsTo = array('Grupo');
		public $actsAs = array('Acl' => array('type' => 'requester'));

		function parentNode() {
		    if (!$this->id && empty($this->data)) {
		        return null;
		    }
		    if (isset($this->data['Usuario']['role_id'])) {
			$groupId = $this->data['Usuario']['role_id'];
		    } else {
		    	$roleId = $this->field('grupo_id');
		    }
		    if (!$roleId) {
			return null;
		    } else {
		        return array('Grupo' => array('id' => $roleId));
		    }
		}

		function bindNode($user) {
		    return array('model' => 'Grupo', 'foreign_key' => $user['Usuario']['grupo_id']);
		}

	
}
?>
