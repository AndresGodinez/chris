<div class="modes view">
<h2><?php echo __('Mode'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($mode['Mode']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($mode['Mode']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($mode['Mode']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($mode['Mode']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Mode'), array('action' => 'edit', $mode['Mode']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Mode'), array('action' => 'delete', $mode['Mode']['id']), array(), __('Are you sure you want to delete # %s?', $mode['Mode']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Modes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mode'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Companies'); ?></h3>
	<?php if (!empty($mode['Company'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Telephone'); ?></th>
		<th><?php echo __('Telephone2'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('RFC'); ?></th>
		<th><?php echo __('Mandated'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Mode Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($mode['Company'] as $company): ?>
		<tr>
			<td><?php echo $company['id']; ?></td>
			<td><?php echo $company['name']; ?></td>
			<td><?php echo $company['telephone']; ?></td>
			<td><?php echo $company['telephone2']; ?></td>
			<td><?php echo $company['address']; ?></td>
			<td><?php echo $company['RFC']; ?></td>
			<td><?php echo $company['mandated']; ?></td>
			<td><?php echo $company['created']; ?></td>
			<td><?php echo $company['modified']; ?></td>
			<td><?php echo $company['mode_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'companies', 'action' => 'view', $company['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'companies', 'action' => 'edit', $company['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'companies', 'action' => 'delete', $company['id']), array(), __('Are you sure you want to delete # %s?', $company['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
