<div class="modes index">
	<h2><?php echo __('Modes'); ?></h2>
	<table class="table table-striped table-responsive table-bordered">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('Nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('Creado'); ?></th>
			<th><?php echo $this->Paginator->sort('Modificado'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($modes as $mode): ?>
	<tr>
		<td><?php echo h($mode['Mode']['id']); ?>&nbsp;</td>
		<td><?php echo h($mode['Mode']['name']); ?>&nbsp;</td>
		<td><?php echo h($mode['Mode']['created']); ?>&nbsp;</td>
		<td><?php echo h($mode['Mode']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Detalles'), array('action' => 'view', $mode['Mode']['id'])); ?>
			<?php echo $this->Html->link(__('Actualizar'), array('action' => 'edit', $mode['Mode']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $mode['Mode']['id']), array(), __('Esta seguro de eliminar el status '. $mode['Mode']['name'].' ?', $mode['Mode']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<?php echo $this->element('pagination'); ?>
</div>
