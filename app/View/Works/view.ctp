<div class="works view">
<h2><?php echo __('Work'); ?></h2>
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
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($work['Work']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telephone'); ?></dt>
		<dd>
			<?php echo h($work['Work']['telephone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo $this->Html->link($work['Status']['name'], array('controller' => 'statuses', 'action' => 'view', $work['Status']['id'])); ?>
			&nbsp;
		</dd>
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
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Work'), array('action' => 'edit', $work['Work']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Work'), array('action' => 'delete', $work['Work']['id']), array(), __('Are you sure you want to delete # %s?', $work['Work']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Works'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Work'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Statuses'), array('controller' => 'statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Status'), array('controller' => 'statuses', 'action' => 'add')); ?> </li>
	</ul>
</div>
