<?php
// tipo de impressão
$tipo = isset($tipo) ? $tipo : 'html';

// configurando a url pdf
if ($tipo!='pdf') $urlPdf = $this->here.'/pdf'; else $urlPdf = $this->here;

// configa padrão
$config['titulo']		= isset($config['titulo']) 		? $config['titulo'] 		: '';
$config['table']		= isset($config['table']) 		? $config['table'] 			: array();
$config['Campos']		= isset($config['Campos']) 		? $config['Campos']			: array();
$config['listaCampos']	= isset($config['listaCampos']) ? $config['listaCampos']	: array();

// configurações obrigatórias
$config['table']['width']	= isset($config['table']['width']) 	 ? $config['table']['width']   : '100%';
if ($tipo=='html') $config['table']['style']	= isset($config['table']['style']) 	 ? $config['table']['style']: 'background-color: #fff; border: 1px solid #333;';
$config['table']['cellpadding']	= isset($config['table']['cellpadding']) ? $config['table']['cellpadding'] : '0';
$config['table']['cellspacing']	= isset($config['table']['cellspacing']) ? $config['table']['cellspacing'] : '0';

$config['th']['style'] = isset($config['th']['style']) ? $config['th']['style'] : 'border-right: 1px dotted #ddd; background-color: #ccc;';
$config['td']['style'] = isset($config['td']['style']) ? $config['td']['style'] : 'border-right: 1px dotted #ddd; border-bottom: 1px dotted #ddd; padding: 0px 4px 0px 4px';

// iniciando a tabela
$texto = '<table id="rel"';
foreach($config['table'] as $_campo => $_valor) if ($_valor!=null) $texto .= " $_campo='$_valor' ";
$texto .= '>';

// link de impressão
if ($tipo=='html') $texto .= "<tr><td align='center' colspan='".count($config['listaCampos'])."'><a href='$urlPdf'>Imprimir</a></td></tr>";

// título
if (!empty($config['titulo'])) $texto .= "<tr><td align='center' colspan='".count($config['listaCampos'])."'><h2>".$config['titulo']."</h2></td></tr>\n";

// cabeçalho
$texto .= "<tr>\n";
foreach($config['listaCampos'] as $_campo)
{
	$arrCam = explode('.',$_campo);
	$c		= isset($config['Campos'][$arrCam['0']][$arrCam['1']]) ? $config['Campos'][$arrCam['0']][$arrCam['1']] : array();
	$titulo = isset($c['titulo']) ? $c['titulo'] : $_campo;
	$texto .= "\t<th";
	if (isset($config['th'])) foreach($config['th'] as $_campo => $_valor) if ($_valor!=null) $texto .= " $_campo='$_valor' ";
	if (isset($c['th'])) foreach($c['th'] as $_campo => $_valor) if ($_valor!=null) $texto .= " $_campo='$_valor' ";
	$texto .= ">".$titulo;
	$texto .= "</th>\n";
}
$texto .= "</tr>\n";

// linha a linha
foreach($this->data as $_linha => $_arrModel)
{
	$texto .= "<tr";
	if (isset($config['tr'])) foreach($config['tr'] as $_campo => $_valor) if ($_valor!=null) $texto .= " $_campo='$_valor' ";
	$texto .= ">\n";
	foreach($config['listaCampos'] as $_campo)
	{
		$arrCam = explode('.',$_campo);
		$c		= isset($config['Campos'][$arrCam['0']][$arrCam['1']]) ? $config['Campos'][$arrCam['0']][$arrCam['1']] : array();
		$texto .= "\t<td";
		if (isset($config['td'])) foreach($config['td'] as $_campo => $_valor) if ($_valor!=null) $texto .= " $_campo='$_valor' ";
		if (isset($c['td'])) foreach($c['td'] as $_campo => $_valor) if ($_valor!=null) $texto .= " $_campo='$_valor' ";
		$texto .= ">";
		$texto .= !empty($_arrModel[$arrCam['0']][$arrCam['1']]) ? $_arrModel[$arrCam['0']][$arrCam['1']] : '';
		$texto .= "</td>\n";
	}
	$texto .= "</tr>\n";
}

// rodapé do relatório
if (isset($config['rodape'])) $texto .= "<tr><td colspan='".count($config['listaCampos'])."'>".$config['rodape']."</td></tr>\n";

$texto .= '</table>';

echo $texto;

?>
