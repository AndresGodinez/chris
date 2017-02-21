<div class="payments form col-md-6">
<?php echo $this->Form->create('Payment'); ?>
	<fieldset>
		<legend><?php echo 'Actualizar Pago'; ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->element('payments-form');
	?>
	</fieldset>
<?php echo $this->element('actualizar-btn'); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Payment.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Payment.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Payments'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
	</ul>
</div>
