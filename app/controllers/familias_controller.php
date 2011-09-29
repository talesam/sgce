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

class FamiliasController extends AppController {

	function admin_index() {
			if(!empty($this->data)){
				$ids = array();
			 	foreach($this->data['Familia']['id'] as $k => $v){
					if($v == 1){
						$ids[$k] = $k;
					}
				}
				if(empty($ids)){
					$this->Session->setFlash('Marque as familias que deseja excluir.', 'flash_warning');
				}else{
					if($this->Familia->deleteAll(array('Familia.id' => $ids))){
						$this->Session->setFlash('Familias removidas.', 'flash_success');
					}else{
						$this->Session->setFlash('Familias não removidas. Por favor, tente novamente.', 'flash_error');
					}
				}
			}

			$this->Familia->recursive = 1;
			$this->paginate['conditions'] = array('Familia.parente_id' => null);
			$familias = $this->paginate();

			$this->set('familias', $familias);

		}


	private function _questionarios(){

			$questionarios = ClassRegistry::init('Questionario')->find('all');
			
			
		
			$this->set('questionarios', $questionarios);
	}
		
	
	function admin_cadastrar() {
			if (!empty($this->data)) {
				$this->Familia->create();
				if ($this->Familia->save($this->data)) {
					$this->Session->setFlash('Família cadastrada', 'flash_success');
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash('Família não pode ser cadastrada. Por favor, tente novamente.', 'flash_error');
				}
			}

			$this->_questionarios();
			$this->set('escolaridades', $this->Familia->escolaridades);
		}

		function admin_editar($id = null) {
			if (!$id && empty($this->data)) {
				$this->Session->setFlash('Família inválida.', 'flash_error');
				$this->redirect(array('action' => 'index'));
			}
			if (!empty($this->data)) {
				if ($this->Familia->save($this->data)) {
					$this->Session->setFlash('Família salva.', 'flash_success');
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash('Família não pode ser salva. Por favor, tente novamente.', 'flash_error');
				}
			}
			if (empty($this->data)) {
				$this->data = $this->Familia->read(null, $id);
			}
		
			$this->_questionarios();
			$this->set('respostas', ClassRegistry::init('Resposta')->find('all', array('conditions' => array('Resposta.familia_id' => $id))));
			$this->set('escolaridades', $this->Familia->escolaridades);
		}


		public function admin_excluir($id = null) {
			if(!$id) {
				$this->Session->setFlash('Família inválida', 'flash_error');
				$this->redirect(array('action'=>'index'));
			}
			if($this->Familia->delete($id)) {
				$this->Session->setFlash('Família removida.', 'flash_success');
				$this->redirect(array('action'=>'index'));
			}
			$this->Session->setFlash('Família não pode ser removida', 'flash_error');
			$this->redirect(array('action' => 'index'));
		}
}
?>
