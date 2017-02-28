<?php 
   $this->Paginator->options(array(
      'update' => '#contenedor-usuarios',
      'before' => $this->Js->get("#procesando")->effect('fadeIn', array('buffer' => false)),
      'complete' => $this->Js->get("#procesando")->effect('fadeOut', array('buffer' => false))
   ));
?>
<div id="contenedor-usuarios">
	<?php echo $this->element('progress'); ?>
	<div class="users index col-md-12">
		<h2><?php echo 'Usuarios'; ?></h2>
		<?php echo $this->element('table'); ?>
		<thead>
		<tr>
				<th><?php echo $this->Paginator->sort('id'); ?></th>
				<th><?php echo $this->Paginator->sort('Nombre'); ?></th>
				<th><?php echo $this->Paginator->sort('Username'); ?></th>
				<th><?php echo $this->Paginator->sort('E-mail'); ?></th>
				<th><?php echo $this->Paginator->sort('Activo'); ?></th>
				<th><?php echo $this->Paginator->sort('Role'); ?></th>
				<th><?php echo $this->Paginator->sort('Telefóno'); ?></th>
				<th><?php echo $this->Paginator->sort('Extensión'); ?></th>
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
			<td><?php echo h($user['User']['telephone']); ?>&nbsp;</td>
			<td><?php echo h($user['User']['extension']); ?>&nbsp;</td>
			<td>
				<?php echo $this->Html->link($user['Job']['name'], array('controller' => 'jobs', 'action' => 'view', $user['Job']['id'])); ?>
			</td>
			<td>
				<?php echo $this->Html->link($user['Departament']['name'], array('controller' => 'departaments', 'action' => 'view', $user['Departament']['id'])); ?>
			</td>
			<td class="actions">
				<?php echo $this->Html->link(__('Detalles'), array('action' => 'view', $user['User']['id'])); ?>
				<?php echo $this->Html->link(__('Actualizar'), array('action' => 'edit', $user['User']['id'])); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $user['User']['id']), array(), __('Esta seguro de eliminar el usuario de '.$user['User']['name'].' con nombre de usuario'. $user['User']['username'].' ?', $user['User']['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
		</tbody>
		</table>

		<?php echo $this->element('pagination'); ?>
	</div>
	<?php echo $this->Js->writeBuffer(); ?>
</div>
