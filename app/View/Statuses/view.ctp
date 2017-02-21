<div class="statuses view">
<h2><?php echo __('Status'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($status['Status']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($status['Status']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($status['Status']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($status['Status']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Status'), array('action' => 'edit', $status['Status']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Status'), array('action' => 'delete', $status['Status']['id']), array(), __('Are you sure you want to delete # %s?', $status['Status']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Statuses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Status'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Works'), array('controller' => 'works', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Work'), array('controller' => 'works', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Works'); ?></h3>
	<?php if (!empty($status['Work'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Folio'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Telephone'); ?></th>
		<th><?php echo __('Status Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Foto'); ?></th>
		<th><?php echo __('Foto Dir'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($status['Work'] as $work): ?>
		<tr>
			<td><?php echo $work['id']; ?></td>
			<td><?php echo $work['folio']; ?></td>
			<td><?php echo $work['name']; ?></td>
			<td><?php echo $work['telephone']; ?></td>
			<td><?php echo $work['status_id']; ?></td>
			<td><?php echo $work['created']; ?></td>
			<td><?php echo $work['modified']; ?></td>
			<td><?php echo $work['description']; ?></td>
			<td><?php echo $work['foto']; ?></td>
			<td><?php echo $work['foto_dir']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'works', 'action' => 'view', $work['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'works', 'action' => 'edit', $work['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'works', 'action' => 'delete', $work['id']), array(), __('Are you sure you want to delete # %s?', $work['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Work'), array('controller' => 'works', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
