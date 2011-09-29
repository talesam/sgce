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

class DependentesController extends AppController {
	

	function admin_index($familiaId) {
		$this->paginate['conditions'] = array('Dependente.parente_id' => $familiaId, 'Dependente.dependente' => 1);
		$this->set('dependentes', $this->paginate());
		$this->set('familiaId', $familiaId);
	}

	
	function admin_cadastrar($familiaId) {
			if (!empty($this->data)) {
				$this->Dependente->create();
				if ($this->Dependente->save($this->data)) {
					$this->Session->setFlash('Dependente cadastrado', 'flash_success');
					$this->redirect(array('action' => 'index', $familiaId));
				} else {
					$this->Session->setFlash('Dependente não pode ser cadastrado. Por favor, tente novamente.', 'flash_error');
				}
			}
			$this->set('familiaId', $familiaId);
		}

		function admin_editar($id = null) {
			if (!$id && empty($this->data)) {
				$this->Session->setFlash('Dependente inválido.', 'flash_error');
				$this->redirect(array('action' => 'index'));
			}
			if (!empty($this->data)) {
				if ($this->Dependente->save($this->data)) {
					$this->Session->setFlash('Dependente salvo.', 'flash_success');
					$this->redirect(array('action' => 'index', $this->data['Dependente']['parente_id']));
				} else {
					$this->Session->setFlash('Dependente não pode ser salvo. Por favor, tente novamente.', 'flash_error');
				}
			}
			if (empty($this->data)) {
				$this->data = $this->Dependente->read(null, $id);
			}
		}


		public function admin_excluir($id = null) {
			if(!$id) {
				$this->Session->setFlash('Dependente inválido', 'flash_error');
				$this->redirect(array('action'=>'index'));
			}
			if($this->Dependente->delete($id)) {
				$this->Session->setFlash('Dependente removido.', 'flash_success');
				$this->redirect(array('action'=>'index'));
			}
			$this->Session->setFlash('Dependente não pode ser removido.', 'flash_error');
			$this->redirect(array('action' => 'index'));
		}
}
?>
