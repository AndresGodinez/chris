<div class="works view col-md-12 well">
<h2><?php echo 'Trabajo con folio '.$work['Work']['folio']; ?></h2>
	<div class="col-md-4">
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($work['Work']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Folio'); ?></dt>
		<dd>
			<?php echo h($work['Work']['folio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Cliente'); ?></dt>
		<dd>
			<?php echo h($work['Work']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefóno'); ?></dt>
		<dd>
			<?php echo h($work['Work']['telephone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Proceso'); ?></dt>
		<dd>
			<?php echo $this->Html->link($work['Status']['name'], array('controller' => 'statuses', 'action' => 'view', $work['Status']['id'])); ?>
			&nbsp;
		</dd>
		</dl>
	</div>
	<div class="col-md-4">
	<dl>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($work['Work']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($work['Work']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($work['Work']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Foto'); ?></dt>
		<dd>
			<?php echo h($work['Work']['foto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Foto Dir'); ?></dt>
		<dd>
			<?php echo h($work['Work']['foto_dir']); ?>
			&nbsp;
		</dd>
	</dl>
	</div>

<div class="actions col-md-4">
	<dl><dt><?php echo __('Acciones'); ?></dt></dl>
	
	<ul>
		<li><?php echo $this->Html->link(__('Actualizar Trabajo'), array('action' => 'edit', $work['Work']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Trabajo'), array('action' => 'delete', $work['Work']['id']), array(), __('Esta seguro de liminar el trabajo con folio'.$work['Work']['folio'].' ?', $work['Work']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Trabajos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Trabajo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Estados de Trabajo'), array('controller' => 'statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Estado de Trabajo'), array('controller' => 'statuses', 'action' => 'add')); ?> </li>
	</ul>
</div>
</div>
