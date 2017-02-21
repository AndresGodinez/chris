<div class="works index">
	<h2><?php echo __('Works'); ?></h2>
	<table class="table table-striped table-responsive table-bordered">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('Folio'); ?></th>
			<th><?php echo $this->Paginator->sort('Nombre Cliente'); ?></th>
			<th><?php echo $this->Paginator->sort('Telefóno'); ?></th>
			<th><?php echo $this->Paginator->sort('Staus'); ?></th>
			<th><?php echo $this->Paginator->sort('Descripción'); ?></th>
			<th><?php echo $this->Paginator->sort('foto'); ?></th>
			<th><?php echo $this->Paginator->sort('foto_dir'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($works as $work): ?>
	<tr>
		<td><?php echo h($work['Work']['id']); ?>&nbsp;</td>
		<td><?php echo h($work['Work']['folio']); ?>&nbsp;</td>
		<td><?php echo h($work['Work']['name']); ?>&nbsp;</td>
		<td><?php echo h($work['Work']['telephone']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($work['Status']['name'], array('controller' => 'statuses', 'action' => 'view', $work['Status']['id'])); ?>
		</td>
		<td><?php echo h($work['Work']['description']); ?>&nbsp;</td>
		<td><?php echo h($work['Work']['foto']); ?>&nbsp;</td>
		<td><?php echo h($work['Work']['foto_dir']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Detalles'), array('action' => 'view', $work['Work']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $work['Work']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $work['Work']['id']), array(), __('Está seguro de eliminar el trabajo con folio '.$work['Work']['folio'].' ?', $work['Work']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Work'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Statuses'), array('controller' => 'statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Status'), array('controller' => 'statuses', 'action' => 'add')); ?> </li>
	</ul>
</div>
