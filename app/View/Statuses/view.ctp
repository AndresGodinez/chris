<div class="statuses view col-md-12 well">
	<h2><?php echo __('Estados de Trabajo'); ?></h2>

	<div class="col-md-6">
		<dl>
			<dt><?php echo __('Id'); ?></dt>
			<dd>
				<?php echo h($status['Status']['id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Nombre'); ?></dt>
			<dd>
				<?php echo h($status['Status']['name']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Creado'); ?></dt>
			<dd>
				<?php echo h($status['Status']['created']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Modificado'); ?></dt>
			<dd>
				<?php echo h($status['Status']['modified']); ?>
				&nbsp;
			</dd>
		</dl>
	</div>
	<div class="actions col-md-6">
	<dl><dt>Acciones</dt></dl>
	<ul>
		<li><?php echo $this->Html->link(__('Actualizar Estado de Trabajo'), array('action' => 'edit', $status['Status']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Estado de Trabajo'), array('action' => 'delete', $status['Status']['id']), array(), __('Esta seguro de eliminar el estado de trabajo '.$status['Status']['name']. ' ?', $status['Status']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Estados de Trabajo'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Estado de Trabajo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Trabajos'), array('controller' => 'works', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Trabajo'), array('controller' => 'works', 'action' => 'add')); ?> </li>
	</ul>
</div>
</div>

<div class="related col-md-12">
	<h3><?php echo __('Trabajos en este estado'); ?></h3>
	<?php if (empty($status['Work'])){
		echo "No hay trabajo en este estado";
		} ?>
	<?php if (!empty($status['Work'])): ?>
		<?php echo $this->element('table'); ?>	
		<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Folio'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Teléfono'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($status['Work'] as $work): ?>
		<tr>
			<td><?php echo $work['id']; ?></td>
			<td><?php echo $work['folio']; ?></td>
			<td><?php echo $work['name']; ?></td>
			<td><?php echo $work['telephone']; ?></td>
			<td><?php echo $this->Time->format('d-M-y H:i:s ',$work['created']); ?></td>
			<td><?php echo $this->Time->format('d-M-y H:i:s',$work['modified']); ?></td>
			<td><?php echo $work['description']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Detalles'), array('controller' => 'works', 'action' => 'view', $work['id'])); ?>
				<?php echo $this->Html->link(__('Actualizar'), array('controller' => 'works', 'action' => 'edit', $work['id'])); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'works', 'action' => 'delete', $work['id']), array(), __('Esta seguro de eliminar el Trabajo con número de folio '.$work['folio'].' ?', $work['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

</div>
