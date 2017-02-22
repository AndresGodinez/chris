<div class="companies view well col-md-12">
<h2><?php echo h($company['Company']['name']); ?></h2>
<div class="col-md-4">
	<dl>
		<dt><?php echo 'Id'; ?></dt>
		<dd>
			<?php echo h($company['Company']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo 'Nombre'; ?></dt>
		<dd>
			<?php echo h($company['Company']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo 'Telefóno 1'; ?></dt>
		<dd>
			<?php echo h($company['Company']['telephone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo 'Telefóno 2'; ?></dt>
		<dd>
			<?php echo h($company['Company']['telephone2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo 'Dirección'?></dt>
		<dd>
			<?php echo h($company['Company']['address']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="col-md-4">
	<dl>
		
		<dt><?php echo 'RFC'; ?></dt>
		<dd>
			<?php echo h($company['Company']['RFC']); ?>
			&nbsp;
		</dd>
		<dt><?php echo 'Encargado'; ?></dt>
		<dd>
			<?php echo h($company['Company']['mandated']); ?>
			&nbsp;
		</dd>
		<dt><?php echo 'Creada'; ?></dt>
		<dd>
			<?php echo h($company['Company']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo 'Modificada'; ?></dt>
		<dd>
			<?php echo h($company['Company']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo 'Estado'; ?></dt>
		<dd>
			<?php echo $this->Html->link($company['Mode']['name'], array('controller' => 'modes', 'action' => 'view', $company['Mode']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
	</div>

<div class="actions col-md-4">
	<dl>
		<dt>
		<?php echo 'Acciones'; ?>
		</dt>
	</dl>
	<ul>
		<li><?php echo $this->Html->link(__('Actualizar Empresa'), array('action' => 'edit', $company['Company']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Empresa'), array('action' => 'delete', $company['Company']['id']), array(), __('Esta seguro de eliminar '.$company['Company']['name'].' ?', $company['Company']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Lista empresas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Empresa'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Modos Empresa'), array('controller' => 'modes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Modo Empresa'), array('controller' => 'modes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista de Pagos'), array('controller' => 'payments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Pago'), array('controller' => 'payments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Departamentos'), array('controller' => 'departaments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Departamento'), array('controller' => 'departaments', 'action' => 'add')); ?> </li>
	</ul>
</div>
</div>
<div class="related">
	<h3><?php echo 'Pagos Realizados'; ?></h3>
	<?php if (empty($company['Payment'])){
		echo "No se han realizado pagos de esta empresa";
		}?>
	<?php if (!empty($company['Payment'])): ?>
	<table class="table table-striped table-responsive table-bordered">
	<tr>
		<th><?php echo __('Fecha Pago'); ?></th>
		<th><?php echo __('Finaliza'); ?></th>
		<th><?php echo __('Creado'); ?></th>
		<th><?php echo __('Modificado'); ?></th>
		<th><?php echo __('Importe'); ?></th>
		<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	<?php foreach ($company['Payment'] as $payment): ?>
		<tr>
			<td><?php echo $payment['fecha_pago']; ?></td>
			<td><?php echo $payment['over']; ?></td>
			<td><?php echo $payment['created']; ?></td>
			<td><?php echo $payment['modified']; ?></td>
			<td><?php echo '$'.$payment['importe']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Detalles'), array('controller' => 'payments', 'action' => 'view', $payment['id'])); ?>
				<?php echo $this->Html->link(__('Actualizar'), array('controller' => 'payments', 'action' => 'edit', $payment['id'])); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'payments', 'action' => 'delete', $payment['id']), array(), __('Esta seguro de eliminar el pago de '.$company['Company']['name'].' por la cantidad de '.$payment['importe'], $payment['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>


</div>
<div class="related">
	<h3><?php echo 'Departamentos de la Empresa'; ?></h3>
	<?php if (empty($company['Departament'])){
		'La empresa aún no tiene departamentos registrados.';
		} ?>
	<?php if (!empty($company['Departament'])): ?>
	<table class="table table-striped table-responsive table-bordered">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Creado'); ?></th>
		<th><?php echo __('Modificado'); ?></th>
		<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	<?php foreach ($company['Departament'] as $departament): ?>
		<tr>
			<td><?php echo $departament['id']; ?></td>
			<td><?php echo $departament['name']; ?></td>
			<td><?php echo $departament['created']; ?></td>
			<td><?php echo $departament['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Detalles'), array('controller' => 'departaments', 'action' => 'view', $departament['id'])); ?>
				<?php echo $this->Html->link(__('Actualizar'), array('controller' => 'departaments', 'action' => 'edit', $departament['id'])); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'departaments', 'action' => 'delete', $departament['id']), array(), __('Esta seguro de eliminar el departamento '.$departament['name'].' ?', $departament['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

</div>
