<div class="departaments form">
<?php echo $this->Form->create('Departament'); ?>
	<div class="col-md-6">
	<fieldset>
		<legend><?php echo 'Actualizar Departamento'; ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->element('departaments-form');
	?>
	</fieldset>
	<br>
<?php echo $this->Form->end(
		array(
			'label'=>'Actualizar',
			'class'=>'btn btn-success'
			)
		); ?>
</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Departament.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Departament.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Departaments'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobs'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
	</ul>
</div>
