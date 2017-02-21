<div class="departaments index ">
	<h2><?php echo 'Departamentos'; ?></h2>
	<table class="table table-striped table-bordered">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('Nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('Encargado'); ?></th>
			<th><?php echo $this->Paginator->sort('Empresa'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($departaments as $departament): ?>
	<tr>
		<td><?php echo h($departament['Departament']['id']); ?>&nbsp;</td>
		<td><?php echo h($departament['Departament']['name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($departament['User']['username'], array('controller' => 'users', 'action' => 'view', $departament['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($departament['Company']['name'], array('controller' => 'companies', 'action' => 'view', $departament['Company']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Detalles'), array('action' => 'view', $departament['Departament']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $departament['Departament']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $departament['Departament']['id']), array(), __('Esta seguro de elminar '.$departament['Departament']['name'].' ?', $departament['Departament']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Departament'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobs'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
	</ul>
</div>
