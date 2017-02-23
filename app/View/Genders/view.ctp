<div class="genders view well col-md-12">
<h2><?php echo __('Generos'); ?></h2>
	<div class="col-md-6">
		<dl>
			<dt><?php echo __('Id'); ?></dt>
			<dd>
				<?php echo h($gender['Gender']['id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Name'); ?></dt>
			<dd>
				<?php echo h($gender['Gender']['name']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Created'); ?></dt>
			<dd>
				<?php echo h($gender['Gender']['created']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Modified'); ?></dt>
			<dd>
				<?php echo h($gender['Gender']['modified']); ?>
				&nbsp;
			</dd>
		</dl>
	</div>

<div class="actions col-md-6">
	<dl><dt><?php echo __('Acciones'); ?></dt></dl>
	<ul>
		<li><?php echo $this->Html->link(__('Actualizar Genero'), array('action' => 'edit', $gender['Gender']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Genero'), array('action' => 'delete', $gender['Gender']['id']), array(), __('esta seguro de eliminar el genero '.$gender['Gender']['name'].' ?', $gender['Gender']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Generos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Genero'), array('action' => 'add')); ?> </li>
	</ul>
</div>
</div>
<div class="related col-md-12">
	<h3><?php echo 'Usuarios Relacionados'; ?></h3>
	<?php if (empty($gender['User'])){
		echo "Aún no hay usuarios con este genero";
		} ?>
	<?php if (!empty($gender['User'])): ?>
<?php echo $this->element('table'); ?>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Username'); ?></th>
		<th><?php echo __('E-mail'); ?></th>
		<th><?php echo __('Activo'); ?></th>
		<th><?php echo __('Role'); ?></th>
		<th><?php echo __('Telefóno'); ?></th>
		<th><?php echo __('Extensión'); ?></th>
		<th><?php echo __('Puesto'); ?></th>
		<th><?php echo __('Departamento'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($gender['User'] as $user): ?>
		<tr>
			<td><?php echo $user['id']; ?></td>
			<td><?php 
				echo $this->Html->link($user['username'], array('controller'=>'users', 'action'=>'view',$user['id'])); 

			?></td>
			<td><?php echo $user['email']; ?></td>
			<td><?php 

			 if($user['isActive']==1)
			 {
			 	echo "Activo";
			 }
			 else
			 	{echo "Inactivo";}

			  ?></td>
			<td><?php echo $user['role_id']; ?></td>
			<td><?php echo $user['telephone']; ?></td>
			<td><?php echo $user['extension']; ?></td>
			<td><?php 

			foreach($puestos as $puesto)
				if($user['job_id']==$puesto['Job']['id'])	
				{
					echo $this->Html->link($puesto['Job']['name'], array('controller'=>'jobs', 'action'=>'view',$puesto['Job']['id']));
				}
			// echo $user['job_id']; 


			?></td>
			<td><?php 
				foreach($puestos as $puesto)
					if($user['departament_id']==$puesto['Departament']['id'])
					{
						echo $this->Html->link($puesto['Departament']['name'], array('controller'=>'departaments', 'action'=>'view',$puesto['Departament']['id']));

					}


			?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Detalles'), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'users', 'action' => 'delete', $user['id']), array(), __('Are you sure you want to delete # %s?', $user['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
