<div class="roles form col-md-6">
<?php echo $this->Form->create('Role'); ?>
	<fieldset>
		<legend><?php echo 'Actualzar Role'; ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name', array('class'=>'form-control','label'=>'Nombre', 'placeholder'=>'Nombre'));
	?>
	</fieldset>
	<br>
<?php echo $this->Form->end(array('label'=>'Actualizar', 'class'=>'btn btn-success')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Role.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Role.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Roles'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
