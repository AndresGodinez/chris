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
<div class="col-md-1"></div>
<div class="actions col-md-2">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('Company.id')), array(), __('Esta seguro de eliminar la empresa '.$this->request->data['Company']['name'], $this->Form->value('Company.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Lista Empresas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Lista Estatus Empresa'), array('controller' => 'modes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Estatus de Empresa'), array('controller' => 'modes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Pagos'), array('controller' => 'payments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Pago'), array('controller' => 'payments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Departamentos'), array('controller' => 'departaments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Departamento'), array('controller' => 'departaments', 'action' => 'add')); ?> </li>
	</ul>
</div>
