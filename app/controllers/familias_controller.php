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

	/**
	 * Exibe a página inicial da administração do cadastro de famílias
	 * 
	 * @return	void
	 */
	function admin_index() 
	{
		if (!empty($this->data))
		{
			$ids = array();
			foreach($this->data['Familia']['id'] as $k => $v) if($v == 1) $ids[$k] = $k;

			if (empty($ids))
			{
				$this->Session->setFlash('Marque as familias que deseja excluir.', 'flash_warning');
			} else
			{
				if($this->Familia->deleteAll(array('Familia.id' => $ids)))
				{
					$this->Session->setFlash('Familias removidas.', 'flash_success');
				}else
				{
					$this->Session->setFlash('Familias não removidas. Por favor, tente novamente.', 'flash_error');
				}
			}
		}

		$this->Familia->recursive = 1;
		$this->paginate['conditions'] = array('Familia.parente_id' => null);
		$familias = $this->paginate();
		$this->set('familias', $familias);
	}

	private function _questionarios()
	{
		$questionarios = ClassRegistry::init('Questionario')->find('all');	
		$this->set('questionarios', $questionarios);
	}
		
	public function admin_questionario($id)
	{
		/* Cadastra as respostas */
		if($this->data['Resposta'] && !empty($this->data['Resposta'])){
			foreach($this->data['Resposta'] as $resposta){

				if(is_array($resposta['resposta'])){
					$rr = '';
					foreach($resposta['resposta'] as $r){
						$rr .= $r.', ';
					}
					$rr = substr($rr, 0, strlen($rr)-2);
				}else{
					$rr = $resposta['resposta'];
				}
				$m=ClassRegistry::init('Resposta');
				if(isset($resposta['id'])){
					$n = array('id' => $resposta['id'], 'familia_id' => $this->Familia->id, 'questionario_id' => $resposta['questionario_id'], 'resposta' => $rr);
				}else{
					$n = array( 'familia_id' => $this->Familia->id, 'questionario_id' => $resposta['questionario_id'], 'resposta' => $rr);
					$m->create();
				}
				
				
				
				$m->save($n);
			}
			
				$this->Session->setFlash('Questionário salvo.', 'flash_success');
			$this->redirect('index');
		}


		$this->_questionarios();
		$this->set('respostas', ClassRegistry::init('Resposta')->find('all', array('conditions' => array('Resposta.familia_id' => $id))));
		$this->set('id', $id);

	}
	
	function admin_cadastrar() 
	{
		if (!empty($this->data)) 
		{
			$this->Familia->create();
			if ($this->Familia->save($this->data)) 
			{
				$this->Session->setFlash('Família cadastrada', 'flash_success');
				$this->redirect(array('action' => 'index'));
			} else 
			{
				$this->Session->setFlash('Família não pode ser cadastrada. Por favor, tente novamente.', 'flash_error');
			}
		}
		$this->set('escolaridades', $this->Familia->escolaridades);
	}

	public function admin_editar($id = null) 
	{
		if (!$id && empty($this->data)) 
		{
			$this->Session->setFlash('Família inválida.', 'flash_error');
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) 
		{
			if ($this->Familia->save($this->data)) {
				$this->Session->setFlash('Família salva.', 'flash_success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Família não pode ser salva. Por favor, tente novamente.', 'flash_error');
			}
		}
		if (empty($this->data)) 
		{
			$this->data = $this->Familia->read(null, $id);
			// convertendo a data
			$data = explode('-',$this->data['Familia']['nascimento']);//0123/56/89
			$this->data['Familia']['nascimento'] = $data[2].'/'.$data[1].'/'.$data[0];
			// convertendo a renda
			//if (isset($this->data['Familia']['renda_familiar'])) $this->data['Familia']['renda_familiar'] = str_replace('.',',',$this->data['Familia']['renda_familiar']);
			//if (isset($this->data['Familia']['renda_percapta'])) $this->data['Familia']['renda_percapta'] = str_replace('.',',',$this->data['Familia']['renda_percapta']);
		}
		$this->set('escolaridades', $this->Familia->escolaridades);
	}
	
	public function admin_consultar($id = null) 
	{
		if (!$id && empty($this->data)) 
		{
			$this->Session->setFlash('Consulta família inválida.', 'flash_error');
			$this->redirect(array('action' => 'index'));
		}
		if (empty($this->data)) 
		{
			$this->data = $this->Familia->read(null, $id);
			$data = explode('-',$this->data['Familia']['nascimento']);//0123/56/89
			$this->data['Familia']['nascimento'] = $data[2].'/'.$data[1].'/'.$data[0];
			$this->data['Familia']['renda_familiar']  = number_format($this->data['Familia']['renda_familiar'],2,',','.');
			$this->data['Familia']['renda_percapta']  = number_format($this->data['Familia']['renda_percapta'],2,',','.');
		}
		$this->set('respostas', ClassRegistry::init('Resposta')->find('all', array('conditions' => array('Resposta.familia_id' => $id))));
		$this->set('escolaridades', $this->Familia->escolaridades);
	}


	public function admin_excluir($id = null) 
	{
		if(!$id) 
		{
			$this->Session->setFlash('Família inválida', 'flash_error');
			$this->redirect(array('action'=>'index'));
		}
		if($this->Familia->delete($id)) 
		{
			$this->Session->setFlash('Família removida.', 'flash_success');
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash('Família não pode ser removida', 'flash_error');
		$this->redirect(array('action' => 'index'));
	}

	/**
	 * Exibe o relatório de família aptas
	 * 
	 * @return	void
	 */
	public function admin_rel_aptas()
	{
		$tipo = isset($this->params['pass']['0']) ? $this->params['pass']['0'] : 'html';
		if ($tipo=='pdf') $this->layout = 'pdf';

		$this->data = $this->Familia->find('all',array('conditions'=>array('Familia.situacao'=>1)));
		foreach($this->data as $_linha => $_arrModel)
		{
			$this->data[$_linha]['Familia']['situacao'] = ($_arrModel['Familia']['situacao']==1) ? 'Apta': 'Não Apta';
		}
		
		// configuração da view
		$config['titulo'] = 'Relatório de Famílias Aptas';
		$config['listaCampos'] = array('Familia.situacao','Familia.nome');
		$config['Campos']['Familia']['situacao']['titulo'] 			= 'Situação';
		$config['Campos']['Familia']['situacao']['td']['align'] 	= 'center';
		$config['Campos']['Familia']['nome']['titulo'] 				= 'Representante';

		$this->set(compact('config','tipo'));
		$this->render('../padrao/rel_lista');
	}
	
	/**
	 * Exibe o relatório de vencimento de matriculas
	 * 
	 * @return	void
	 */
	public function admin_rel_venc_matricula()
	{
		$this->data  = $this->Familia->find('all',array('conditions'=>array('Familia.situacao'=>1)));
		foreach($this->data as $_linha => $_arrModel)
		{
			$this->data[$_linha]['Familia']['situacao'] = ($this->data[$_linha]['Familia']['situacao']==1) ? 'Apta' : 'Não Apta';
			$this->data[$_linha]['Cesta']['data_saida'] = isset($this->data[$_linha]['Cesta']['data_saida']) ? date('d/m/Y', strtotime($this->data[$_linha]['Cesta']['data_saida'])) : null;
		}

		// descobrindo o tipo do relatório
		$tipo = isset($this->params['pass']['0']) ? $this->params['pass']['0'] : 'html';
		if ($tipo=='pdf') $this->layout = 'pdf';
		
		// configuração da view
		$config['titulo'] = 'Relatório de Vencimento de Matrículas';
		$config['listaCampos'] = array('Familia.situacao','Familia.nome','Cesta.data_saida');
		$config['Campos']['Familia']['situacao']['titulo'] 			= 'Situação';
		$config['Campos']['Familia']['situacao']['td']['align'] 	= 'center';
		$config['Campos']['Familia']['nome']['titulo'] 				= 'Representante';
		$config['Campos']['Cesta']['data_saida']['titulo'] 			= 'Saída';
		
		$this->set(compact('config','tipo'));
		$this->render('../padrao/rel_lista');
	}
}
?>
