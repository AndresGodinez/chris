<div class="jobs form col-md-6">
<?php echo $this->Form->create('Job'); ?>
	<fieldset>
		<legend><?php echo 'Editar puesto'; ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->element('jobs-form');
	?>
	</fieldset>
	<br>

<?php echo $this->Form->end(
	array(
		'class'=>'btn btn-success',
		'label'=>'Actualizar')
); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Job.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Job.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Jobs'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Departaments'), array('controller' => 'departaments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Departament'), array('controller' => 'departaments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
