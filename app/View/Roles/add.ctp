<div class="roles form">
<?php echo $this->Form->create('Role'); ?>
	<fieldset>
		<legend><?php echo 'Nuevo Role'; ?></legend>
	<?php
		echo $this->Form->input('name', array('class'=>'form-control','label'=>'Nombre', 'placeholder'=>'Nombre'));
	?>
	</fieldset>
<?php echo $this->Form->end(array('label'=>'Agregar', 'class'=>'btn btn-success')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Roles'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
