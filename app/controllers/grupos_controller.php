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

class GruposController extends AppController {
	

	function admin_index() {
		$this->set('grupos', $this->paginate());
	}

	
	function admin_cadastrar() {
			if (!empty($this->data)) {
				$this->Grupo->create();
				if ($this->Grupo->save($this->data)) {
					$this->Session->setFlash('Grupo cadastrado', 'flash_success');
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash('Grupo não pode ser cadastrado. Por favor, tente novamente.', 'flash_error');
				}
			}
		}

		function admin_editar($id = null) {
			if (!$id && empty($this->data)) {
				$this->Session->setFlash('Grupo inválido.', 'flash_error');
				$this->redirect(array('action' => 'index'));
			}
			if (!empty($this->data)) {
				if ($this->Grupo->save($this->data)) {
					$this->Session->setFlash('Grupo salvo.', 'flash_success');
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash('Grupo não pode ser salvo. Por favor, tente novamente.', 'flash_error');
				}
			}
			if (empty($this->data)) {
				$this->data = $this->Grupo->read(null, $id);
			}
		}


		public function admin_excluir($id = null) {
			if(!$id) {
				$this->Session->setFlash('Grupo inválido', 'flash_error');
				$this->redirect(array('action'=>'index'));
			}
			if($this->Grupo->delete($id)) {
				$this->Session->setFlash('Grupo removido.', 'flash_success');
				$this->redirect(array('action'=>'index'));
			}
			$this->Session->setFlash('Grupo não pode ser removido.', 'flash_error');
			$this->redirect(array('action' => 'index'));
		}
}
?>
