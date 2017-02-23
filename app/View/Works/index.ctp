<?php 
   $this->Paginator->options(array(
      'update' => '#contenedor-trabajos',
      'before' => $this->Js->get("#procesando")->effect('fadeIn', array('buffer' => false)),
      'complete' => $this->Js->get("#procesando")->effect('fadeOut', array('buffer' => false))
   ));
?>
<div id="contenedor-trabajos">
	<?php echo $this->element('progress'); ?>

	<div class="works index col-md-12">
		<h2><?php echo __('Trabajos'); ?></h2>
	<?php echo $this->element('table'); ?>	<thead>
		<tr>
				<th><?php echo $this->Paginator->sort('id'); ?></th>
				<th><?php echo $this->Paginator->sort('Folio'); ?></th>
				<th><?php echo $this->Paginator->sort('Nombre Cliente'); ?></th>
				<th><?php echo $this->Paginator->sort('Telefóno'); ?></th>
				<th><?php echo $this->Paginator->sort('Staus'); ?></th>
				<th><?php echo $this->Paginator->sort('Descripción'); ?></th>
				<th class="actions"><?php echo __('Acciones'); ?></th>
		</tr>
		</thead>
		<tbody>
		<?php foreach ($works as $work): ?>
		<tr>
			<td><?php echo h($work['Work']['id']); ?>&nbsp;</td>
			<td><?php echo h($work['Work']['folio']); ?>&nbsp;</td>
			<td><?php echo h($work['Work']['name']); ?>&nbsp;</td>
			<td><?php echo h($work['Work']['telephone']); ?>&nbsp;</td>
			<td>
				<?php echo $this->Html->link($work['Status']['name'], array('controller' => 'statuses', 'action' => 'view', $work['Status']['id'])); ?>
			</td>
			<td><?php echo h($work['Work']['description']); ?>&nbsp;</td>
			<td class="actions">
				<?php echo $this->Html->link(__('Detalles'), array('action' => 'view', $work['Work']['id'])); ?>
				<?php echo $this->Html->link(__('Actualizar'), array('action' => 'edit', $work['Work']['id'])); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $work['Work']['id']), array(), __('Está seguro de eliminar el trabajo con folio '.$work['Work']['folio'].' ?', $work['Work']['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
		</tbody>
		</table>
		<?php echo $this->element('pagination'); ?>
	</div>
</div>
