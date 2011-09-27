<style>table  { width: 100%; margin: 0px; padding: 0px; table td, table th { margin: 0px; padding; 0px; } table th { background: #ccc; } table tr { border-top: 1px solid black;}</style>
        <table>
        <tr>
                <th>Situação</th>
                <th>Nome do Representante</th>
                <th>Vencimento da matrícula</th>
 
        </tr>
			<?php // foreach($matriculas as $matricula): ?> 
                <tr>
                        <td>
                                <?php echo $vencimento_matricula['Pessoa']['status']; ?>
                        </td>
                        
                        <td>
                                <?php echo $vencimento_matricula['Pessoa']['nome']; ?>
                        </td>
                        
                        <td> <!-- A matrícula vence em 12 meses -->
                                <?php echo $vencimento_matricula['Pessoa']['data atual+12 meses']; ?>
                        </td>
                </tr>
                <?php // endforeach; ?>
        </table>
