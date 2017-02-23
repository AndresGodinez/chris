<div class="departaments view well col-md-12">
<h2><?php echo 'Departamento '.$departament['Departament']['name'].' de '.$departament['Company']['name']; ?></h2>
	<div class="col-md-4">
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($departament['Departament']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($departament['Departament']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Jefe Departamento'); ?></dt>
		<dd>
			<?php echo $this->Html->link($departament['User']['username'], array('controller' => 'users', 'action' => 'view', $departament['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
	</div>
	<div class="col-md-4">
	<dl>
		<dt><?php echo __('Creado'); ?></dt>
		<dd>
			<?php echo h($departament['Departament']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modificado'); ?></dt>
		<dd>
			<?php echo h($departament['Departament']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Empresa'); ?></dt>
		<dd>
			<?php echo $this->Html->link($departament['Company']['name'], array('controller' => 'companies', 'action' => 'view', $departament['Company']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
	</div>

	<div class="actions col-md-4">
		<dl>
		<dt>Acciones</dt>
		</dl>
		<ul>
			<li><?php echo $this->Html->link(__('Editar departamento'), array('action' => 'edit', $departament['Departament']['id'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('Eliminar Departamento'), array('action' => 'delete', $departament['Departament']['id']), array(), __('Are you sure you want to delete # %s?', $departament['Departament']['id'])); ?> </li>
			<li><?php echo $this->Html->link(__('Lista Departamentos'), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('Nuevo Departamento'), array('action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('Lista Puestos'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('Nuevo Puesto'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
		</ul>
		</div>
</div>
<div class="related col-md-6">
	<h3><?php echo __('Puestos del Departamento'); ?></h3>
	<?php if (empty($departament['Job'])){ echo "No hay puestos Relacionados";} ?>
	<?php if (!empty($departament['Job'])): ?>
<?php echo $this->element('table'); ?>	
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php 
				echo __('Nombre'); ?></th>
		<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	<?php foreach ($departament['Job'] as $job): ?>
		<tr>
			<td><?php echo $job['id']; ?></td>
			<td><?php 
				echo $this->Html->link($job['name'], array('controller' => 'jobs', 'action' => 'view', $job['id']));
			 ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Detalles'), array('controller' => 'jobs', 'action' => 'view', $job['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'jobs', 'action' => 'edit', $job['id'])); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'jobs', 'action' => 'delete', $job['id']), array(), __('Esta seguro de eliminar el puesto de trabajo'.$job['name'].' del departamento'.$departament['Departament']['name'], $job['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

</div>
<div class="related col-md-12">
	<h3><?php echo __('Usuarios del Departamento'); ?></h3>
	<?php if (empty($departament['User'])){echo "Aún no hay Usuarios en el departamento";} ?>
	<?php if (!empty($departament['User'])): ?>
	<?php echo $this->element('table'); ?>	
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Username'); ?></th>
		<th><?php echo __('E-mail'); ?></th>
		<th><?php echo __('Activo'); ?></th>
		<th><?php echo __('Telefóno'); ?></th>
		<th><?php echo __('Extensión'); ?></th>
		<th><?php echo __('Puesto'); ?></th>
		<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	<?php foreach ($departament['Users'] as $user): ?>
		<tr>
			<td><?php echo $user['id']; ?></td>
			<td><?php echo $user['name']; ?></td>
			<td><?php 
			echo $this->Html->link($user['username'], array('controller' => 'users', 'action' => 'view', $user['id']))
			 ?></td>
			<td><?php echo $user['email']; ?></td>
			<td>
			<?php 
			if($user['isActive']==1)
			{
				echo 'Activo'; 
			}
			else
			{
				echo "Inactivo";
			}
				?> 
			
			
				
			</td>
			<td><?php echo $user['telephone']; ?></td>
			<td><?php echo $user['extension']; ?></td>
			<td>
				<?php 
				foreach($departament['Job'] as $job)
				{
					if($user['job_id']==$job['id']) 
					{
						echo $this->Html->link($job['name'], array('controller' => 'jobs', 'action' => 'view', $job['id']));
					}
				}
				?>
					
			</td>
			<td class="actions">
				<?php echo $this->Html->link(__('Detalles'), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'users', 'action' => 'delete', $user['id']), array(), __('Esta seguro de eliminar al usuario'.$user['name'], $user['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

</div>
