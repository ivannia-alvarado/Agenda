<br><br><br><br><br><br><br>
<div class="alarms index">
	<h2><span class="glyphicon glyphicon-bell" aria-hidden="true"></span> &nbsp; Alarmas</h2>
	
	<table class="table" cellpadding="0" cellspacing="0" border="1">
		<thead>
			<tr>

				<th style="text-align: center;"><?php echo $this->Paginator->sort('Estado'); ?></th>
				<th style="text-align: center;"><?php echo $this->Paginator->sort('Fecha'); ?></th>
				<th style="text-align: center;"><?php echo $this->Paginator->sort('Evento'); ?></th>
				<th class="actions" style="text-align: center;"><?php echo __('Vista previa'); ?></th>
				<th class="actions" style="text-align: center;"><?php echo __('Acciones'); ?></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($alarms as $alarm): ?>
				<tr>

					<td><?php echo h($alarm['Alarm']['state']); ?>&nbsp;</td>

					<td><?php echo h($alarm['Alarm']['date']); ?>&nbsp;</td>
					
					<td>
						<?php echo $this->Html->link($alarm['Event']['id'], array('controller' => 'events', 'action' => 'view', $alarm['Event']['id'])); ?>
					</td>
					<td>

				
						<audio src="<?php echo $this->webroot; ?>files/<?php echo ($alarm['Alarm']['sound_id']); ?>.mp3" controls > </audio>
					
					</td>

					<td class="actions" style="text-align: center;">
						<div class="btn-group" role="group" aria-label="...">

							<div class="btn-group" role="group">
								<button type="button" class="btn btn-default">
									<?php echo $this->Html->link(__('Editar'), array('action' => 'cambio', $alarm['Alarm']['id'])); ?>
								</button>
							</div>
							<div class="btn-group" role="group">
								<button type="button" class="btn btn-default">
									<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $alarm['Alarm']['id']), array('confirm' => __('Está segur@ de que desea eliminar la alarma?'))); ?>
								</button>
							</div>
						</div>			
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	<p style="text-align: center;">
		<?php /*
		echo $this->Paginator->counter(array(
			'format' => __('Página {:page} de {:pages}, mostrando {:current} usuarios de {:count} en total, empezando en {:start} y terminando en {:end}')
			)); */
			?>	</p>
			<div class="paging">
				<div class="paging" style="text-align: center;">
					<nav>
						<ul class="pager">
							<li>
								<?php 
								echo $this->Paginator->prev('< ' . __('anterior'), array(), null, array('class' => 'prev disabled'));
								?>
							</li>
							<li>
								<?php 
								echo $this->Paginator->next(__('siguiente') . ' >', array(), null, array('class' => 'next disabled'));
								?>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
		<div class="actions">
			<div class="panel panel-default" style="width: 30%;">
				<div class="panel-heading">
					<h3>Acciones</h3>
				</div>
				<div class="panel-body">
					<ul>
						<li><?php echo $this->Html->link(__('Crear Alarma'), array('action' => 'add')); ?></li>
						<li><?php echo $this->Html->link(__('Crear evento'), array('controller' => 'events', 'action' => 'add')); ?> </li>
					</ul>
				</div>
			</div>

		</div>
		
	
				
						
						
						
						
						
						
						
						
