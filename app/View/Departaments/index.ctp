<?php 
   $this->Paginator->options(array(
      'update' => '#contenedor-departamentos',
      'before' => $this->Js->get("#procesando")->effect('fadeIn', array('buffer' => false)),
      'complete' => $this->Js->get("#procesando")->effect('fadeOut', array('buffer' => false))
   ));
?>
<div id="contenedor-departamentos">
	<?php echo $this->element('progress'); ?>

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
			<?php echo $this->element('pagination'); ?>

		</div>
		<?php echo $this->Js->writeBuffer(); ?>

	</div>
</div>

