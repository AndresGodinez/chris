<div class="companies form">
<?php echo $this->Form->create('Company'); ?>
	<fieldset>
		<legend><?php echo 'Nueva Empresa'; ?></legend>
		<div class='col-md-6'>
	<?php
		echo $this->Form->input('name', 
			array(
				'class'=>'form-control',
				'label'=>'Nombre',
				'placeholder'=>'Nombre'
				)
			);
		echo $this->Form->input('telephone', 
			array(
				'class'=>'form-control',
				'label'=>'Telefóno 1',
				'placeholder'=>'Telefóno 1'
				)
			);
		echo $this->Form->input('telephone2', 
			array(
				'class'=>'form-control',
				'label'=>'Telefóno 2',
				'placeholder'=>'Telefóno 2'
				)
			);
		echo $this->Form->input('address', 
			array(
				'class'=>'form-control',
				'label'=> 'Dirección',
				'placeholder'=>'Dirección',
				'rows'=>3
				)
			);
		echo $this->Form->input('RFC', 
			array(
				'class'=>'form-control',
				'label'=>'RFC',
				'placeholder'=>'RFC'
				)
			);
		echo $this->Form->input('mandated', 
			array(
				'class'=>'form-control',
				'label'=>'Encargado',
				'placeholder'=>'Encargado'
				)
			);
		echo $this->Form->input('mode_id', 
			array(
				'class'=>'form-control',
				'label'=>'Estado',
				)
			);
	?>
	<br>
	</fieldset>
<?php echo $this->Form->end(
		array(
			'label'=>'Alta',
			'class'=> 'btn btn-success'
			)
		); ?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Companies'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Modes'), array('controller' => 'modes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mode'), array('controller' => 'modes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Payments'), array('controller' => 'payments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payment'), array('controller' => 'payments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Departaments'), array('controller' => 'departaments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Departament'), array('controller' => 'departaments', 'action' => 'add')); ?> </li>
	</ul>
</div>
