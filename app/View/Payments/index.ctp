<div class="payments index">
	<h2><?php echo 'Pagos'; ?></h2>
	<table class="table table-striped table-responsive table-bordered">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('Empresa'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_pago'); ?></th>
			<th><?php echo $this->Paginator->sort('Finaliza'); ?></th>
			<th><?php echo $this->Paginator->sort('importe'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($payments as $payment): ?>
	<tr>
		<td><?php echo h($payment['Payment']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($payment['Company']['name'], array('controller' => 'companies', 'action' => 'view', $payment['Company']['id'])); ?>
		</td>
		<td><?php echo h($payment['Payment']['fecha_pago']); ?>&nbsp;</td>
		<td><?php echo h($payment['Payment']['over']); ?>&nbsp;</td>
		<td><?php echo h($payment['Payment']['importe']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Detalles'), array('action' => 'view', $payment['Payment']['id'])); ?>
			<?php echo $this->Html->link(__('Actualizar'), array('action' => 'edit', $payment['Payment']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $payment['Payment']['id']), array(), __('Esta seguro de eliminar el pago con id '.$payment['Payment']['id'].' de la empresa '.$payment['Company']['id'].' con fecha '.$payment['Payment']['fecha_pago'].' ?', $payment['Payment']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Payment'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
	</ul>
</div>
