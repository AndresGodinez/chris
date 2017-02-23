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
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('Mode.id')), array(), __('Esta seguro de eliminar?', $this->Form->value('Mode.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Lista Status Empresas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Lista Empresas'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Empresa'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
	</ul>
</div>
