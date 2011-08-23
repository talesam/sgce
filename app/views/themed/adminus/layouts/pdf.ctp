<?php
	require_once(APP.'vendors' . DS . 'dompdf' . DS . 'dompdf_config.inc.php');
	
	$dompdf = new DOMPDF();
	
	$dompdf->set_base_path(APP . DS . 'webroot' . DS . 'img' . DS . 'pdf' . DS);
	$html  = $this->element('pdf/cabecalho');
	$html .= '<div id="conteudo">';
	$html .= $content_for_layout;
	$html .= '</div>';
	$html .= $this->element('pdf/rodape');
	
	//$dompdf->set_paper('A4'); 
	$dompdf->load_html($html);
	
	
	
	$dompdf->render();
	$dompdf->stream($file.".pdf");
?>