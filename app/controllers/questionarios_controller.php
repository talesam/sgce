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

class QuestionariosController extends AppController {

	public $opcoes = array('multiple' => 'Multipla Escolha', 'select' => 'Seleção', 'text' => 'Texto', 'obs' => 'Observação');

	function admin_index() {
		$this->set('questionarios', $this->paginate());
		$this->set('opcoes', $this->opcoes);
	}

	function admin_cadastrar() {
			if (!empty($this->data)) {
				$this->Questionario->create();
				if ($this->Questionario->save($this->data)) {
					$this->Session->setFlash('Questionario cadastrado', 'flash_success');
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash('Questionario não pode ser cadastrado. Por favor, tente novamente.', 'flash_error');
				}
			}
			
			$this->set('opcoes', $this->opcoes);
		}

		function admin_editar($id = null) {
			if (!$id && empty($this->data)) {
				$this->Session->setFlash('Questionario inválido.', 'flash_error');
				$this->redirect(array('action' => 'index'));
			}
			if (!empty($this->data)) {
				if ($this->Questionario->save($this->data)) {
					$this->Session->setFlash('Questionario salvo.', 'flash_success');
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash('Questionario não pode ser salvo. Por favor, tente novamente.', 'flash_error');
				}
			}
			if (empty($this->data)) {
				$this->data = $this->Questionario->read(null, $id);
			}
			$this->set('opcoes', $this->opcoes);
		}

		public function admin_move_down($id){
			$this->Questionario->moveDown($this->Questionario->id, 1);
			$this->Session->setFlash('Questionario movido para baixo.', 'flash_success');
			$this->redirect($this->referer());
		}
		
		public function admin_move_up($id){
			$this->Questionario->moveUp($this->Questionario->id, 1);
			$this->Session->setFlash('Questionario movido para cima.', 'flash_success');
			$this->redirect($this->referer());
		}

		public function admin_excluir($id = null) {
			if(!$id) {
				$this->Session->setFlash('Questionario inválido', 'flash_error');
				$this->redirect(array('action'=>'index'));
			}
			if($this->Questionario->delete($id)) {
				$this->Session->setFlash('Questionario removido.', 'flash_success');
				$this->redirect(array('action'=>'index'));
			}
			$this->Session->setFlash('Questionario não pode ser removido.', 'flash_error');
			$this->redirect(array('action' => 'index'));
		}
}
?>
