<div class="genders form col-md-6">
<?php echo $this->Form->create('Gender'); ?>
	<fieldset>
		<legend><?php echo 'Actualizar Genero'; ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name', array('class'=>'form-control', 'label'=>'Nombre', 'Placeholder'=>'Genero'));
	?>
	</fieldset>
	<br>
<?php echo $this->Form->end(array('class'=>'btn btn-success', 'label'=>'Actualizar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Gender.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Gender.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Genders'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
