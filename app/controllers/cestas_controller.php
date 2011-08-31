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
	
	public function admin_index(){
	
		
		$this->set('cestas', $this->paginate());
	}
	
	
	public function admin_gerar_cestas(){
		
			/* Instancio a classe ESTOQUE para ser usado durante a execucao deste algoritimo */
			$estoque =& ClassRegistry::init('Estoque');
			
			/* Instancio a classe DEFINICOESCESTA para ser usado durante a execucao deste algoritimo */
			$definicoescesta =& ClassRegistry::init('Definicoescesta');
			
			/* Listo todas as definicoes da cesta para saber o q é necessario para montar a mesma */
			$definicoescestas = $definicoescesta->find('all');
			
			/* Inicio a variavel que será responsável para exibir ao usuario quantas cestas foi possível gerar */
			$totalCestas = 0;
			
			/* Inicio o ok=true para que o sistema entre em loop pelo menos uma vez */
			$ok = true;

			while($ok){
				$cesta = array();
				foreach($definicoescestas as $m){
					/* 
					* Na linha abaixo o sistema procura a quantidade de estoque e se ela é suficiente para compor a cesta 
					* caso contrario não sera possível cadastrar a cesta
					* */
					$t = $estoque->find('first', array('fields' => 'SUM(Estoque.quantidade) as `total`' ,'conditions' => array('Estoque.definicoescesta_id' => $m['Definicoescesta']['id'])));
					
					if($t[0]['total'] >= $m['Definicoescesta']['quantidade']){
						
						/*
						* Listo os estoques cuja data não esteja  e a quantidade seja > 0  em ordem de vencimento
						* os itens com prazo menor para vencimento serão composto na cesta com prioridade
						* */
						$estoques_para_cesta = $estoque->find('all', array(
							'order' => array('Estoque.data_vencimento' => 'asc'),
							'conditions' => array(
								'Estoque.definicoescesta_id' => $m['Definicoescesta']['id'], 
								'Estoque.quantidade >' => 0) 
							)
						);
						
						/* Loop do vetor */
						foreach($estoques_para_cesta as $estoque_para_cesta){
							
							/* 
							* Se a quantidade de complemento de cesta for igual a definição da cesta
							* Ex.: 5 Kilos de arroz, e ter no estoque 1 pacote de arroz de 5kg
							*  */
							if($estoque_para_cesta['Estoque']['complemento_qt'] == $m['Definicoescesta']['quantidade']){
								$cesta['Estoque'][] = array('id' => $estoque_para_cesta['Estoque']['id']);
								$data[] = array(
									'id' =>  $estoque_para_cesta['Estoque']['id'], 
									'quantidade' => $estoque_para_cesta['Estoque']['quantidade'] -1
								);
							}
							/* 
							* Se a quantidade de complemento de cesta for maior, e em pacotes diferentes
							* Ex.: 5 Kilos de arroz, e ter no estoque 5 pacotes de 1kg de arroz
							*  */
							elseif($estoque_para_cesta['Estoque']['complemento_qt'] > $m['Definicoescesta']['quantidade']){
								$cesta['Estoque'][] = array('id' => $estoque_para_cesta['Estoque']['id']);
								$data[] = array(
									'id' =>  $estoque_para_cesta['Estoque']['id'], 
									'quantidade' => $estoque_para_cesta['Estoque']['quantidade'] - $m['Definicoescesta']['quantidade']
								);
							}else{
								
								/* Logica para estoque quebrado
								* Ex.: na definição da cesta precisa de 5Kg de arroz, e no estoque existem mais de um cadastro:
								* 2 Pacotes de 1kg
								* 3 Pacotes de 2kg
								* O sistema precisa entender que vai ter q tirar do estoque 1 pacote de 1kg e  2 de 2kg para compor a cesta
								*  */
								
								
							}
						}
					}else{ 
					    /* Não é possível cadastrar cesta pois não tem estoque suficiente */
						$ok = false;
					}
				}
				
				/* Se ok=true significa que foi possível cadastrar uma cesta */
				if($ok){
					
					/* Data que foi gerada a cesta */
					$cesta['Cesta']['data_gerada'] = date('Y-m-d H:i:s');				
					/* Salva a cesta no banco */
					if($this->Cesta->saveAll($cesta)){
						/* Atualiza o estoque 
						*  de modo que foi tirado itens para compor a cesta.
						* */
						foreach($data as $d){
							$estoque->save(array('id' => $d['id'], 'quantidade' => $d['quantidade']));
						}
						
					}
					
					/* Aqui eu incremento a cesta */
					$totalCestas++;
				}
				
				/* Limpo da memória, para que uma nova cesta possa ser gerada */
				unset($data);

			}
			if($totalCestas > 0){
				$this->Session->setFlash($totalCestas .' nova(s) cesta(s) gerada(s)', 'flash_success');
			}else{
				$this->Session->setFlash('Nenhuma cesta gerada.', 'flash_error');
			}
			$this->redirect($this->referer());
	}
	
}
?>
