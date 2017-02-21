<div class="modes form col-md-6">
<?php echo $this->Form->create('Mode'); ?>
	<fieldset>
		<legend><?php echo 'Actualizar Status Empresas'; ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name', array('class'=>'form-control', 'label'=>'Nombre del status', 'placeholder'=>'Nombre Status'));
	?>
	</fieldset>
<?php echo $this->element('actualizar-btn'); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Mode.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Mode.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Modes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
	</ul>
</div>
