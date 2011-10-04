<?php
/**
 * LogsController
 * 
 * [Short Description]
 *
 * @package default
 * @author Rafael Malatesta e Tales Mendonça
 * @version $Id$
 * @copyright __MyCompanyName__
 **/

class CompanheirosController extends AppController {
	

	function admin_index($familiaId) {
		$this->paginate['conditions'] = array('Companheiro.parente_id' => $familiaId, 'Companheiro.companheiro' => 1);
		$this->set('companheiros', $this->paginate());
		$this->set('familiaId', $familiaId);
	}

	
	function admin_cadastrar($familiaId) {
			if (!empty($this->data)) {
				$this->Companheiro->create();
				if ($this->Companheiro->save($this->data)) {
					$this->Session->setFlash('Companheiro cadastrado', 'flash_success');
					$this->redirect(array('action' => 'index', $familiaId));
				} else {
					$this->Session->setFlash('Companheiro não pode ser cadastrado. Por favor, tente novamente.', 'flash_error');
				}
			}
			$this->set('familiaId', $familiaId);
			$this->set('escolaridades', $this->Companheiro->escolaridades);
		}

		function admin_editar($id = null) {
			if (!$id && empty($this->data)) {
				$this->Session->setFlash('Companheiro inválido.', 'flash_error');
				$this->redirect(array('action' => 'index'));
			}
			if (!empty($this->data)) {
				if ($this->Companheiro->save($this->data)) {
					$this->Session->setFlash('Companheiro salvo.', 'flash_success');
					$this->redirect(array('action' => 'index', $this->data['Companheiro']['parente_id']));
				} else {
					$this->Session->setFlash('Companheiro não pode ser salvo. Por favor, tente novamente.', 'flash_error');
				}
			}
			if (empty($this->data)) {
				$this->data = $this->Companheiro->read(null, $id);
			}
			$this->set('escolaridades', $this->Companheiro->escolaridades);
		}
		
				function admin_consultar($id = null) {
			if (!$id && empty($this->data)) {
				$this->Session->setFlash('Consulta companheiro inválida.', 'flash_error');
				$this->redirect(array('action' => 'index'));
			}
			if (empty($this->data)) {
				$this->data = $this->Companheiro->read(null, $id);
			}
		}


		public function admin_excluir($id = null) {
			if(!$id) {
				$this->Session->setFlash('Companheiro inválido', 'flash_error');
				$this->redirect(array('action'=>'index'));
			}
			if($this->Companheiro->delete($id)) {
				$this->Session->setFlash('Companheiro removido.', 'flash_success');
				$this->redirect(array('action'=>'index'));
			}
			$this->Session->setFlash('Companheiro não pode ser removido.', 'flash_error');
			$this->redirect(array('action' => 'index'));
		}
}
?>
