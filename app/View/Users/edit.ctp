<div class="users form col-md-6">
<?php echo $this->Form->create('User'); ?>

	<fieldset>
		<legend><?php echo 'Actualizar Usuario'; ?></legend>
	<?php
		echo $this->Form->input('id');
		$variables= array(
			'1'=>'Activo',
			'2'=>'Inactivo'
			);
		echo $this->Form->input('isActive',
			array(
				'class'=>'form-control',
				'label'=>'Activo',
				'options'=>$variables
				)
			);
		echo $this->element('users-form');
	?>
	</fieldset>
<?php 
	echo $this->element('actualizar-btn');
?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('User.id')), array(),'Esta seguro de eliminar '.$this->Form->value('User.name').' con nombre de usuario '. $this->Form->value('User.username').' ?', $this->Form->value('User.id')); ?></li>
		<li><?php echo $this->Html->link(__('Lista Usuarios'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Lista Trabajos'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Trabajo'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
	</ul>
</div>
