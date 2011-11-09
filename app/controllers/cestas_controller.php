<?php
/**
 * CestasController
 * 
 * [Short Description]
 *
 * @package default
 * @author Rafael Malatesta e Tales Mendonça
 * @version $Id$
 * @copyright __MyCompanyName__
 **/

class CestasController extends AppController {
	
	public function beforeRender()
	{
		$config = isset($this->viewVars['config']) ? $this->viewVars['config'] : array();
		$config['Familia']['nome']['titulo'] 		= 'Família';
		$config['Cesta']['data_gerada']['titulo'] 	= 'Data Gerada';
		$config['Cesta']['data_saida']['titulo'] 	= 'Data Saída';
		$config['Itemcesta']['0']['titulo'] 		= 'Produto (Qtde)';
		$this->set(compact('config'));
	}
	
	/**
	 * 
	 */
	public function admin_index()
	{
		$this->set('cestas', $this->paginate());
	}
	
	public function admin_editar($id){
	
			if (!$id && empty($this->data)) {
				$this->Session->setFlash('Cesta inválida.', 'flash_error');
				$this->redirect(array('action' => 'index'));
			}
			if (!empty($this->data)) {
				if ($this->Cesta->save($this->data)) {
					$this->Session->setFlash('Cesta doada com sucesso.', 'flash_success');
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash('Cesta não pode ser doada. Por favor, tente novamente.', 'flash_error');
				}
			}
			if (empty($this->data)) {
				$this->data = $this->Cesta->read(null, $id);
			}
		
		$this->set('familias', ClassRegistry::init('Familia')->find('list', array('conditions' => array('Familia.parente_id' => null, 'Familia.situacao' => 1), 'order' => 'Familia.nome')));
	}
	
	public function admin_gerar_cestas(){
		$defCesta 		= ClassRegistry::init('Definicoescesta');
		$estoqueCesta 	= ClassRegistry::init('Estoque');
		$estoqueCesta->recursive = -1;
		$cestas 		= 0;
		$ok 			= true;
		$dataItemCesta	= array();
		$defCesta->hasMany['Estoque']['conditions'] = 'Estoque.quantidade>0';
		$itDefCesta 	= $defCesta->find('all');
		//debug($itDefCesta);

		while($ok){
			/* Pego todas as definições da cesta  */
			foreach($itDefCesta as $def){
				/*$estoqueParam = array(
					array('AND' => array (
						'conditions' =>  array(
							'Estoque.definicoescesta_id' => $def['Definicoescesta']['id']), 
							'Estoque.data_vencimento >= ' => 'Date(Now())'),
						'order' => array('Estoque.data_vencimento' => 'ASC')
					)
				);*/
				$estoqueParam = array();
				$estoqueParam['conditions'] = null;
				$estoqueParam['conditions']['Estoque.definicoescesta_id'] 	= $def['Definicoescesta']['id'];
				$estoqueParam['conditions']['Estoque.data_vencimento >='] 	= date('Y/m/d');
				$estoqueParam['order']['Estoque.data_vencimento'] = 'ASC';
				$estoque = $estoqueCesta->find('all', $estoqueParam);
				//debug($estoque);
				
				if (empty($estoque)) {
					$ok = false;
					break;
				}
				
				$qtde = 0;
				foreach($estoque as $itemEstoque){
					$qtde += $itemEstoque['Estoque']['quantidade'] * $itemEstoque['Estoque']['complemento_qt'];
				}

				if ($qtde < $def['Definicoescesta']['quantidade']) {
					$ok = false;
					break;
				}
			}

			// Se nao houver todos os itens que compoem a cesta, finaliza.
			if (!$ok)break;

			// Abatendo os itens do estoque.
			$cont = 0;
			foreach($itDefCesta as $def)
			{
				$estoqueParam = array();
				$estoqueParam['conditions'] = null;
				$estoqueParam['conditions']['Estoque.quantidade>0'];
				$estoqueParam['conditions']['Estoque.definicoescesta_id'] 	= $def['Definicoescesta']['id'];
				$estoqueParam['conditions']['Estoque.data_vencimento >='] 	= date('Y/m/d');
				$estoqueParam['order']['Estoque.data_vencimento'] = 'ASC';
				$estoque = $estoqueCesta->find('all', $estoqueParam);
				debug($estoque);
				$qtdeTotal 	= $def['Definicoescesta']['quantidade'];
				foreach ($estoque as $itemEstoque)
				{
					if ($itemEstoque['Estoque']['quantidade'])
					{
						$dataItemCesta[$cont]['estoque_id'] = $itemEstoque['Estoque']['id'];
						$dataItemCesta[$cont]['quantidade'] = $itemEstoque['Estoque']['quantidade'];
						$cont++;
					}
					$undNecessaria 	= $qtdeTotal / $itemEstoque['Estoque']['complemento_qt'];
					$undDisponivel 	= $itemEstoque['Estoque']['quantidade'];
					$undUtilizada  	= $undNecessaria;
					if ($undUtilizada > $undDisponivel) $undUtilizada = $undDisponivel;					
					$qtdeItem 		= $undUtilizada * $itemEstoque['Estoque']['complemento_qt'];
					$qtdeTotal 		-= $qtdeItem;
					$novaQtde 		= $undDisponivel - $undUtilizada;
					$result 		= $estoqueCesta->save(array('id' => $itemEstoque['Estoque']['id'], 'quantidade' => $novaQtde));
					if ($qtdeTotal == 0) break;
				}
			}			
			$cestas++;			
		}
		
		if($cestas > 0)
		{
			for($i=0; $i < $cestas; $i++)
			{
				$this->Cesta->create();
				$this->Cesta->save(array('data_gerada' => date('Y-m-d H:i:s')));
			}
			// incluindo itemcesta
			foreach($dataItemCesta as $_linha => $_arrCampos) $dataItemCesta[$_linha]['cesta_id'] = $this->Cesta->getLastInsertID();
			if (!$this->Cesta->Itemcesta->saveAll($dataItemCesta)) exit('Erro ao atualiar Item da Cesta !!!');
			debug($dataItemCesta);
			$this->Session->setFlash($cestas . ' cestas geradas.', 'flash_success');
		}else
		{
			$this->Session->setFlash('Não foi possível gerar nenhuma cesta.', 'flash_error');
		}
		
		// Removendo do estoque os itens vazios.
		/*foreach($estoque as $itemEstoque){
			if ($itemEstoque['Estoque']['quantidade'] == 0) {
				$estoqueCesta->deleteAll(array('Estoque.id' => $itemEstoque['Estoque']['id']));
			}
		} */
		
		$this->redirect('index');	
	}

	/**
	 * Exibe a consulta de Cestas
	 * 
	 * @return	void
	 */
	public function admin_consultar($id=null)
	{
		$this->loadModel('Estoque');
		$Estoque	= new Estoque();
		$this->data = $this->Cesta->find('all',array('conditions'=>array('Cesta.id'=>$id)));
		foreach($this->data as $_linha => $_arrModel)
		{
			if (empty($this->data[$_linha]['Familia']['nome'])) $this->data[$_linha]['Familia']['nome'] = '<span style="color: red;">NENHUMA FAMÍLIA FOI CONTEMPLADA AINDA</span>';
			$this->data[$_linha]['Cesta']['data_gerada'] = date('d/m/Y', strtotime($this->data[$_linha]['Cesta']['data_gerada']));
			$this->data[$_linha]['Cesta']['data_saida']  = date('d/m/Y', strtotime($this->data[$_linha]['Cesta']['data_saida']));
			if ($this->data[$_linha]['Cesta']['data_saida']=='31/12/1969') $this->data[$_linha]['Cesta']['data_saida'] = '-';
			foreach($_arrModel['Itemcesta'] as $_item => $_arrCampos)
			{
				$dataEstoque = $Estoque->find('all',array('conditions'=>array('Estoque.id'=>$_arrCampos['estoque_id'])));
				foreach($dataEstoque as $_itemE => $_arrModelE)
				{
					$this->data[$_linha]['Itemcesta'][$_item]['produto'] = $_arrModelE['Definicoescesta']['nome'].' ('.round($_arrModelE['Definicoescesta']['quantidade']).') ';
				}
			}
		}
		$listaCampos 	= array('Familia.nome','Cesta.data_gerada','Cesta.data_saida','Itemcesta.0.produto');
		$titulo			= 'Cestas';
		$this->set(compact('listaCampos','titulo'));
		$this->render('../padrao/admin_consultar');
	}

	/**
	 * Exibe o relatório cestas
	 * 
	 * @return	void
	 */
	public function admin_rel_cestas()
	{
		$this->data 	= $this->Cesta->find('all',array('conditions'=>array('Cesta.familia_id'=>null)));
		$_arrData = $this->data;
		foreach($_arrData as $_linha => $_arrModel)
		{
			$this->data[$_linha]['Cesta']['nome'] 			= 'Cesta disponível para doação';
			$this->data[$_linha]['Cesta']['data_gerada'] 	= date('d/m/Y',strtotime($this->data[$_linha]['Cesta']['data_gerada']));
			$this->data[$_linha]['Cesta']['data_saida'] 	= date('d/m/Y',strtotime($this->data[$_linha]['Cesta']['data_saida']));
		}

		// descobrindo o tipo do relatório
		$tipo = isset($this->params['pass']['0']) ? $this->params['pass']['0'] : 'html';
		if ($tipo=='pdf') $this->layout = 'pdf';
		
		// config da view
		$config['titulo'] 		= 'Relatório de Cestas Disponíveis';
		$config['rodape'] 		= 'Total de Cestas: '.count($this->data);
		$config['listaCampos']	= array('Cesta.nome','Cesta.data_gerada');
		$config['Campos']['Cesta']['nome']['titulo'] 			= 'Cestas Disponíveis';
		$config['Campos']['Cesta']['data_gerada']['titulo'] 	= 'Data Gerada';
		$config['Campos']['Cesta']['data_gerada']['td']['align']= 'center';

		$this->set(compact('config','tipo'));
		$this->render('../padrao/rel_lista');
	}

	/**
	 * Exibe o relatório de itens pendentes
	 * 
	 * @return	void
	 */
	public function admin_rel_itens_pendentes()
	{
		$this->data = $this->Cesta->find('all');

		// descobrindo o tipo do relatório
		$tipo = isset($this->params['pass']['0']) ? $this->params['pass']['0'] : 'html';
		if ($tipo=='pdf') $this->layout = 'pdf';

		// config da view
		$config['titulo'] 		= 'Relatório de Itens Pendentes';
		$config['listaCampos']	= array('Familia.nome','Estoque.quantidade','Estoque.complemento_qt');
		$config['Campos']['Familia']['nome']['titulo'] 			= 'Mantimento';
		$config['Campos']['Estoque']['quantidade']['titulo'] 	= 'Quantidade';
		$config['Campos']['Estoque']['complemento_qt']['titulo']= 'Complemento';

		$this->set(compact('config','tipo'));
		$this->render('../padrao/rel_lista');
	}
}
?>
