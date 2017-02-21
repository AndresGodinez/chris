<div class="statuses form col-md-6">
<?php echo $this->Form->create('Status'); ?>
	<fieldset>
		<legend><?php echo __('Agregar Status'); ?></legend>
	<?php
		echo $this->Form->input('name', array(
			'class'=>'form-control',
			'label'=>'nombre',
			'placeholder'=>'Nombre'
			)
		);
	?>
	</fieldset>
<?php echo $this->Form->end(array('label'=>'alta', 'class'=>'btn btn-success')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Statuses'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Works'), array('controller' => 'works', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Work'), array('controller' => 'works', 'action' => 'add')); ?> </li>
	</ul>
</div>
