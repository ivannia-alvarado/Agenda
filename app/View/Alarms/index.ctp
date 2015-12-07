<div class="alarms index">
	<h2><span class="glyphicon glyphicon-bell" aria-hidden="true"></span> &nbsp; Alarmas</h2>
	<table class="table" cellpadding="0" cellspacing="0" border="1">

		<tbody>
				<?php foreach ($alarms as $alarm): ?>
						<?php
						if($this->Time->isToday( $alarm['Alarm']['date'], null)&& $alarm['Alarm']['state']=="Activo"){
						?>

							
							<div class="alert alert-success fade in">
							
								<a href="#" class="close" data-dismiss="alert">&times;</a>
								<audio src="<?php echo $this->webroot; ?>files/2.mp3" controls autoplay ="true" hidden > </audio>
								</p>
								<strong>¡Atención!</strong> El evento: "
								
								<?php echo $this->Html->link($alarm['Event']['description'], array('controller' => 'events', 'action' => 'view', $alarm['Event']['id'])); ?>
						
								
								" es hoy.
							</div>
							
							
						<?php	
						}else if($this->Time->isTomorrow( $alarm['Alarm']['date'], null)&& $alarm['Alarm']['state']=="Activo"){
						?>
							<div class="alert alert-danger fade in">
								<a href="#" class="close" data-dismiss="alert">&times;</a>
								<audio src="<?php echo $this->webroot; ?>files/9.mp3" controls autoplay ="true" hidden > </audio>
								</p>
								<strong>¡Atención!</strong> El evento "
								<?php echo $this->Html->link($alarm['Event']['description'], array('controller' => 'events', 'action' => 'view', $alarm['Event']['id'])); ?>
						
								 " es mañana.
							</div>
						<?php		
						} else {
						?>
							<div class="alert alert-info fade in">
								<a href="#" class="close" data-dismiss="alert">&times;</a>
								<audio src="<?php echo $this->webroot; ?>files/8.mp3" controls autoplay ="true" hidden > </audio>
								</p>
								<strong>¡Informo!</strong> Es recomendable preparar el evento "
								<?php echo $this->Html->link($alarm['Event']['description'], array('controller' => 'events', 'action' => 'view', $alarm['Event']['id'])); ?>
						
								 ".
							</div>
						
						
						<?php
						}
						?>
		<?php endforeach; ?>	
			
		</tbody>
	</table>

		</div>
		<div class="actions">
			<div class="panel panel-default" style="width: 30%;">
				<div class="panel-heading">
					<h3>Acciones</h3>
				</div>
				<div class="panel-body">
					<ul>
						<li><?php echo $this->Html->link(__('Agregar Alarma'), array('action' => 'add')); ?></li>
						<li><?php echo $this->Html->link(__('Lista de Eventos'), array('controller' => 'events', 'action' => 'index')); ?> </li>
						<li><?php echo $this->Html->link(__('Nuevo Evento'), array('controller' => 'events', 'action' => 'add')); ?> </li>
					</ul>
				</div>
			</div>

		</div>
						














	