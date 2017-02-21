<div class="users index">
	<h2><?php echo 'Usuarios'; ?></h2>
	<table class="table table-striped table-bordered table-resposive col-md-12">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('Nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('Username'); ?></th>
			<th><?php echo $this->Paginator->sort('E-mail'); ?></th>
			<th><?php echo $this->Paginator->sort('Activo'); ?></th>
			<th><?php echo $this->Paginator->sort('Role'); ?></th>
			<th><?php echo $this->Paginator->sort('Genero'); ?></th>
			<th><?php echo $this->Paginator->sort('Telefóno'); ?></th>
			<th><?php echo $this->Paginator->sort('Extensión'); ?></th>
			<th><?php echo $this->Paginator->sort('foto'); ?></th>
			<th><?php echo $this->Paginator->sort('foto_dir'); ?></th>
			<th><?php echo $this->Paginator->sort('Puesto'); ?></th>
			<th><?php echo $this->Paginator->sort('Departamento'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($users as $user): ?>
	<tr>
		<td><?php echo h($user['User']['id']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['name']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['username']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['email']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['isActive']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($user['Role']['name'], array('controller' => 'roles', 'action' => 'view', $user['Role']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($user['Gender']['name'], array('controller' => 'genders', 'action' => 'view', $user['Gender']['id'])); ?>
		</td>
		<td><?php echo h($user['User']['telephone']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['extension']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['foto']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['foto_dir']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($user['Job']['name'], array('controller' => 'jobs', 'action' => 'view', $user['Job']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($user['Departament']['name'], array('controller' => 'departaments', 'action' => 'view', $user['Departament']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']), array(), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Roles'), array('controller' => 'roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Role'), array('controller' => 'roles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Genders'), array('controller' => 'genders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Gender'), array('controller' => 'genders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobs'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Departaments'), array('controller' => 'departaments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Departament'), array('controller' => 'departaments', 'action' => 'add')); ?> </li>
	</ul>
</div>
