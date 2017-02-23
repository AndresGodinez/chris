<div class="jobs view col-md-12 well">
<h2><?php echo __('Puesto de Trabajo'); ?></h2>
 <div class="col-md-6">
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($job['Job']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($job['Job']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Departamento'); ?></dt>
		<dd>
			<?php echo $this->Html->link($job['Departament']['name'], array('controller' => 'departaments', 'action' => 'view', $job['Departament']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creado'); ?></dt>
		<dd>
			<?php echo h($job['Job']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modificado'); ?></dt>
		<dd>
			<?php echo h($job['Job']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
  </div>
  	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Actualizar puesto'), array('action' => 'edit', $job['Job']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Puesto'), array('action' => 'delete', $job['Job']['id']), array(), __('Esta seguro de eliminar el puesto '.$job['Job']['name'].' ?', $job['Job']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Puestos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Puesto'), array('action' => 'add')); ?> </li>
	</ul>

</div>


<div class="related col-md-12">
	<h3><?php echo __('Related Users'); ?></h3>
	<?php if (empty($job['User']))
	{
		echo "Aún no hay Usuarios con este puesto";
	} ?>
	<?php if (!empty($job['User'])): ?>
	<?php echo $this->element('table'); ?>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Username'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Activo'); ?></th>
		<th><?php echo __('Telefóno'); ?></th>
		<th><?php echo __('Extensión'); ?></th>

		<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	<?php foreach ($job['User'] as $user): ?>
		<tr>
			<td><?php echo $user['id']; ?></td>
			<td><?php echo $user['name']; ?></td>
			<td><?php 
				echo $this->Html->link($user['username'], array('controller' => 'users', 'action' => 'view', $user['id'])); ?>

			</td>
			<td><?php echo $user['email']; ?></td>
			<td><?php  
			if($user['isActive']==1)
			{	
				echo "Activo";
			}
			else
			{
				echo "Inactivo";
			}
			 ?></td>
			}
			<td><?php echo $user['telephone']; ?></td>
			<td><?php echo $user['extension']; ?></td>

			<td class="actions">
				<?php echo $this->Html->link(__('Detalles'), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'users', 'action' => 'delete', $user['id']), array(), __('Esta seguro de eliminar el usuario de '.$user['name'].' ? con username '.$user['username'], $user['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

</div>
