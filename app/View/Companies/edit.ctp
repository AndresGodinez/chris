<div class="companies form col-md-6">
<?php echo $this->Form->create('Company'); ?>
	<fieldset>
		<legend><?php echo 'Actualizar Empresa'; ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->element('companies_form');
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
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Company.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Company.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Companies'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Modes'), array('controller' => 'modes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mode'), array('controller' => 'modes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Payments'), array('controller' => 'payments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payment'), array('controller' => 'payments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Departaments'), array('controller' => 'departaments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Departament'), array('controller' => 'departaments', 'action' => 'add')); ?> </li>
	</ul>
</div>
