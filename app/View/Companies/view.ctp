<div class="companies view">
<h2><?php echo __('Company'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($company['Company']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($company['Company']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telephone'); ?></dt>
		<dd>
			<?php echo h($company['Company']['telephone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telephone2'); ?></dt>
		<dd>
			<?php echo h($company['Company']['telephone2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($company['Company']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RFC'); ?></dt>
		<dd>
			<?php echo h($company['Company']['RFC']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mandated'); ?></dt>
		<dd>
			<?php echo h($company['Company']['mandated']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($company['Company']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($company['Company']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mode'); ?></dt>
		<dd>
			<?php echo $this->Html->link($company['Mode']['name'], array('controller' => 'modes', 'action' => 'view', $company['Mode']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Company'), array('action' => 'edit', $company['Company']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Company'), array('action' => 'delete', $company['Company']['id']), array(), __('Are you sure you want to delete # %s?', $company['Company']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Modes'), array('controller' => 'modes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mode'), array('controller' => 'modes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Payments'), array('controller' => 'payments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payment'), array('controller' => 'payments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Departaments'), array('controller' => 'departaments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Departament'), array('controller' => 'departaments', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Payments'); ?></h3>
	<?php if (!empty($company['Payment'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Company Id'); ?></th>
		<th><?php echo __('Fecha Pago'); ?></th>
		<th><?php echo __('Over'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Importe'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($company['Payment'] as $payment): ?>
		<tr>
			<td><?php echo $payment['id']; ?></td>
			<td><?php echo $payment['company_id']; ?></td>
			<td><?php echo $payment['fecha_pago']; ?></td>
			<td><?php echo $payment['over']; ?></td>
			<td><?php echo $payment['created']; ?></td>
			<td><?php echo $payment['modified']; ?></td>
			<td><?php echo $payment['importe']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'payments', 'action' => 'view', $payment['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'payments', 'action' => 'edit', $payment['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'payments', 'action' => 'delete', $payment['id']), array(), __('Are you sure you want to delete # %s?', $payment['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Payment'), array('controller' => 'payments', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Departaments'); ?></h3>
	<?php if (!empty($company['Departament'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Company Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($company['Departament'] as $departament): ?>
		<tr>
			<td><?php echo $departament['id']; ?></td>
			<td><?php echo $departament['name']; ?></td>
			<td><?php echo $departament['user_id']; ?></td>
			<td><?php echo $departament['created']; ?></td>
			<td><?php echo $departament['modified']; ?></td>
			<td><?php echo $departament['company_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'departaments', 'action' => 'view', $departament['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'departaments', 'action' => 'edit', $departament['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'departaments', 'action' => 'delete', $departament['id']), array(), __('Are you sure you want to delete # %s?', $departament['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Departament'), array('controller' => 'departaments', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
