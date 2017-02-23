<div class="genders index col.md-12">
	<h2><?php echo 'Generos'; ?></h2>
	<table class="table table-striped table-responsive table-bordered">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('Genero'); ?></th>
			<th><?php echo $this->Paginator->sort('Creado'); ?></th>
			<th><?php echo $this->Paginator->sort('Modificado'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($genders as $gender): ?>
	<tr>
		<td><?php echo h($gender['Gender']['id']); ?>&nbsp;</td>
		<td><?php echo h($gender['Gender']['name']); ?>&nbsp;</td>
		<td><?php echo h($gender['Gender']['created']); ?>&nbsp;</td>
		<td><?php echo h($gender['Gender']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Detalles'), array('action' => 'view', $gender['Gender']['id'])); ?>
			<?php echo $this->Html->link(__('Actualizar'), array('action' => 'edit', $gender['Gender']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $gender['Gender']['id']), array(), __('Esta seguro de eliminar el genero '.$gender['Gender']['name'].' ?' , $gender['Gender']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>

	<?php echo $this->element('pagination'); ?>
</div>

