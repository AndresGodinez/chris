<?php 
   $this->Paginator->options(array(
      'update' => '#contenedor-puestos',
      'before' => $this->Js->get("#procesando")->effect('fadeIn', array('buffer' => false)),
      'complete' => $this->Js->get("#procesando")->effect('fadeOut', array('buffer' => false))
   ));
?>
<div id="contenedor-puestos">
	<?php echo $this->element('progress'); ?>

	<div class="jobs index">
		<h2><?php echo 'Puestos de Trabajo'; ?></h2>
	<?php echo $this->element('table'); ?>	
	<thead>
		<tr>
				<th><?php echo $this->Paginator->sort('id'); ?></th>
				<th><?php echo $this->Paginator->sort('Nombre'); ?></th>
				<th><?php echo $this->Paginator->sort('Departamento'); ?></th>
				<th class="actions"><?php echo __('Actions'); ?></th>
		</tr>
		</thead>
		<tbody>
		<?php foreach ($jobs as $job): ?>
		<tr>
			<td><?php echo h($job['Job']['id']); ?>&nbsp;</td>
			<td><?php echo h($job['Job']['name']); ?>&nbsp;</td>
			<td>
				<?php echo $this->Html->link($job['Departament']['name'], array('controller' => 'departaments', 'action' => 'view', $job['Departament']['id'])); ?>
			</td>
			<td class="actions">
				<?php echo $this->Html->link(__('Detalles'), array('action' => 'view', $job['Job']['id'])); ?>
				<?php echo $this->Html->link(__('Actualizar'), array('action' => 'edit', $job['Job']['id'])); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $job['Job']['id']), array(), __('Esta seguro de eliminar el puesto '.$job['Departament']['name'].'?', $job['Job']['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
		</tbody>
		</table>
		<?php echo $this->element('pagination'); ?>
	</div>
	<?php echo $this->Js->writeBuffer(); ?>
</div>
