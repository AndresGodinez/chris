<div class="companies index">
	<h2><?php echo 'Empresas'; ?></h2>
	<table class='table table-striped table-bordered'>
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('Nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('Telefóno 1'); ?></th>
			<th><?php echo $this->Paginator->sort('Telefóno 2'); ?></th>
			<th><?php echo $this->Paginator->sort('Dirección'); ?></th>
			<th><?php echo $this->Paginator->sort('RFC'); ?></th>
			<th><?php echo $this->Paginator->sort('Encargado'); ?></th>
			<th><?php echo $this->Paginator->sort('Estado'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($companies as $company): ?>
	<tr>
		<td><?php echo h($company['Company']['id']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['name']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['telephone']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['telephone2']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['address']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['RFC']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['mandated']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($company['Mode']['name'], array('controller' => 'modes', 'action' => 'view', $company['Mode']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $company['Company']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $company['Company']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $company['Company']['id']), array(), __('Está seguro de eliminar '.$company['Company']['name'].'?', $company['Company']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Company'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Modes'), array('controller' => 'modes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mode'), array('controller' => 'modes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Payments'), array('controller' => 'payments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payment'), array('controller' => 'payments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Departaments'), array('controller' => 'departaments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Departament'), array('controller' => 'departaments', 'action' => 'add')); ?> </li>
	</ul>
</div>
