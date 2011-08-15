<?php
	App::import('Vendor', 'AnalyticsApi');
	$api = new analytics_api();
	if($api->login('phpedinei', 'dakota03')) {


			$semana = $api->data('ga:45392881', 'ga:week', 'ga:visits,ga:pageviews', false,'week');
		pr($semana);
	}
	
?>
<div class="block">

	<div class="block_head">
		<div class="bheadl"></div>
		<div class="bheadr"></div>
		
		<h2>Estatísticas de acesso</h2>
		
		<ul class="tabs">
			<li><a href="#days">Semana</a></li>
			<li><a href="#months">Mês</a></li>
		</ul>
	</div>		<!-- .block_head ends -->
	
	
	
	<div class="block_content tab_content" id="days">
		
		<table class="stats" rel="line" cellpadding="0" cellspacing="0" width="100%">
			<thead>
				<tr>
					<td>&nbsp;</td>
					<?php  foreach ($semana as $d=>$s):   ?>
						
						<th scope="col"><?php echo date('W', strtotime($d)); ?></th>
					<?php endforeach; ?>

				</tr>
			</thead>
			
			<tbody>
			
		
				<tr>
					<th>Visualizações</th>
					<?php  foreach ($semana as $s):  ?>
						<td><?php echo $s['ga:pageviews']; ?></td>
					<?php endforeach; ?>
				</tr>
				
				<tr>
					<th>Visitantes</th>
					<?php  foreach ($semana as $s):  ?>
						<td><?php echo $s['ga:visits']; ?></td>
					<?php endforeach; ?>
				</tr>
			</tbody>
		</table>
		
	</div>		<!-- .block_content ends -->
	
	
	
	
	
	<div class="block_content tab_content" id="months">
		
		<table class="stats" rel="bar" cellpadding="0" cellspacing="0" width="100%">
		
			<thead>
				<tr>
					<td>&nbsp;</td>
					<th scope="col">JAN</th>
					<th scope="col">FEB</th>
					<th scope="col">MAR</th>
					<th scope="col">APR</th>
					<th scope="col">MAY</th>
					<th scope="col">JUN</th>
					<th scope="col">JUL</th>
					<th scope="col">AUG</th>
					<th scope="col">SEP</th>
					<th scope="col">OCT</th>
					<th scope="col">NOV</th>
					<th scope="col">DEC</th>
					<th scope="col">JAN</th>
					<th scope="col">FEB</th>
				</tr>
			</thead>
			
			<tbody>
				<tr>
					<th scope="row">Page views</th>
					<td>1800</td>
					<td>900</td>
					<td>700</td>
					<td>1200</td>
					<td>600</td>
					<td>2800</td>
					<td>3200</td>
					<td>500</td>
					<td>2200</td>
					<td>1000</td>
					<td>1200</td>
					<td>700</td>
					<td>650</td>
					<td>800</td>
				</tr>
				
				<tr>
					<th scope="row">Unique visitors</th>								
					<td>1600</td>
					<td>650</td>
					<td>550</td>
					<td>900</td>
					<td>500</td>
					<td>2300</td>
					<td>2700</td>
					<td>350</td>
					<td>1700</td>
					<td>600</td>
					<td>1000</td>
					<td>500</td>
					<td>400</td>
					<td>700</td>
				</tr>
			</tbody>
		</table>	
	
	</div>		<!-- .block_content ends -->
	
	<div class="bendl"></div>
	<div class="bendr"></div>
</div>		<!-- .block ends -->


