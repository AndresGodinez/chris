<div class="modes form col-md-6">
<?php echo $this->Form->create('Mode'); ?>
	<fieldset>
		<legend><?php echo 'Agregar Status Empresa'; ?></legend>
	<?php
	/*
	modos realacionados con los status de las empresas
	*/
		echo $this->Form->input('name', array('class'=>'form-control', 'label'=>'Nombre del status', 'placeholder'=>'Nombre Status'));
	?>
	</fieldset>
	<br>
<?php echo $this->element('alta-btn'); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Modes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
	</ul>
</div>
