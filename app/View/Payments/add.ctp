<div class="payments form col-md-6">
<?php echo $this->Form->create('Payment'); ?>
	<fieldset>
		<legend><?php echo 'Agregar Pago'; ?></legend>
	<?php
		echo $this->element('payments-form')
	?>
	</fieldset>
	<br>
<?php echo $this->Form->end(array('label'=>'Alta', 'class'=>'btn btn-success')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Payments'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
	</ul>
</div>
