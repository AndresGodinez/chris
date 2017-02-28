<?php 
   $this->Paginator->options(array(
      'update' => '#contenedor-pagos',
      'before' => $this->Js->get("#procesando")->effect('fadeIn', array('buffer' => false)),
      'complete' => $this->Js->get("#procesando")->effect('fadeOut', array('buffer' => false))
   ));
?>
<div id="contenedor-pagos">
	<?php echo $this->element('progress'); ?>
	<div class="payments index col-md-12">
		<h2><?php echo 'Pagos'; echo $this->Html->link('Agregar Pago', array('controller'=>'payments', 'action'=>'add'), array('class'=>'btn btn-success btn-small pull-right'));?></h2>
			<?php echo $this->element('table'); ?>
		<thead>
		<tr>
				<th><?php echo $this->Paginator->sort('id'); ?></th>
				<th><?php echo $this->Paginator->sort('Empresa'); ?></th>
				<th><?php echo $this->Paginator->sort('fecha_pago'); ?></th>
				<th><?php echo $this->Paginator->sort('Finaliza'); ?></th>
				<th><?php echo $this->Paginator->sort('importe'); ?></th>
				<th class="actions"><?php echo __('Acciones'); ?></th>
		</tr>
		</thead>
		<tbody>
		<?php foreach ($payments as $payment): ?>
		<tr>
			<td><?php echo h($payment['Payment']['id']); ?>&nbsp;</td>
			<td>
				<?php echo $this->Html->link($payment['Company']['name'], array('controller' => 'companies', 'action' => 'view', $payment['Company']['id'])); ?>
			</td>
			<td><?php echo h($payment['Payment']['fecha_pago']); ?>&nbsp;</td>
			<td><?php echo h($payment['Payment']['over']); ?>&nbsp;</td>
			<td><?php echo h($payment['Payment']['importe']); ?>&nbsp;</td>
			<td class="actions">
				<?php echo $this->Html->link(__('Detalles'), array('action' => 'view', $payment['Payment']['id'])); ?>
				<?php echo $this->Html->link(__('Actualizar'), array('action' => 'edit', $payment['Payment']['id'])); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $payment['Payment']['id']), array(), __('Esta seguro de eliminar el pago con id '.$payment['Payment']['id'].' de la empresa '.$payment['Company']['id'].' con fecha '.$payment['Payment']['fecha_pago'].' ?', $payment['Payment']['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
		</tbody>
		</table>
		<?php echo $this->element('pagination'); ?>
	</div>
	<?php echo $this->Js->writeBuffer(); ?>
</div>
