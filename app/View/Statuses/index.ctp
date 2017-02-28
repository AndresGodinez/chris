<?php 
   $this->Paginator->options(array(
      'update' => '#contenedor-estados',
      'before' => $this->Js->get("#procesando")->effect('fadeIn', array('buffer' => false)),
      'complete' => $this->Js->get("#procesando")->effect('fadeOut', array('buffer' => false))
   ));
?>
<div id="contenedor-estados">
  <?php echo $this->element('progress'); ?>
	<div class="statuses index col-md-12">
		<h2><?php echo 'Estados de Trabajo'; ?></h2>
		<?php echo $this->element('table'); ?>
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
		<?php foreach ($statuses as $status): ?>
		<tr>
			<td><?php echo h($status['Status']['id']); ?>&nbsp;</td>
			<td><?php echo h($status['Status']['name']); ?>&nbsp;</td>
			<td><?php echo h($status['Status']['created']); ?>&nbsp;</td>
			<td><?php echo h($status['Status']['modified']); ?>&nbsp;</td>
			<td class="actions">
				<?php echo $this->Html->link(__('Detalles'), array('action' => 'view', $status['Status']['id'])); ?>
				<?php echo $this->Html->link(__('Actualizar'), array('action' => 'edit', $status['Status']['id'])); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $status['Status']['id']), array(), __('Esta seguro de eliminar el status '.$status['Status']['name'].'?', $status['Status']['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
		</tbody>
		</table>
		<?php echo $this->element('pagination'); ?>
	</div>
   <?php echo $this->Js->writeBuffer(); ?>

</div>