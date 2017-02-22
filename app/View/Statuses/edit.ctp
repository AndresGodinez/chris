<div class="statuses form col-md-6">
<?php echo $this->Form->create('Status'); ?>
	<fieldset>
		<legend><?php echo 'Actualizar estado de trabajo'; ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name', array(
			'class'=>'form-control',
			'label'=>'nombre',
			'placeholder'=>'Nombre'
			));
	?>
	</fieldset>
	<br>
<?php echo $this->Form->end(array('class'=>'btn btn-success', 'label'=>'Actualizar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Status.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Status.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Statuses'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Works'), array('controller' => 'works', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Work'), array('controller' => 'works', 'action' => 'add')); ?> </li>
	</ul>
</div>
