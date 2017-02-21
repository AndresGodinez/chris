<div class="works form">
<?php echo $this->Form->create('Work'); ?>
	<fieldset>
		<legend><?php echo __('Add Work'); ?></legend>
	<?php
		echo $this->Form->input('folio');
		echo $this->Form->input('name');
		echo $this->Form->input('telephone');
		echo $this->Form->input('status_id');
		echo $this->Form->input('description');
		echo $this->Form->input('foto');
		echo $this->Form->input('foto_dir');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Works'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Statuses'), array('controller' => 'statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Status'), array('controller' => 'statuses', 'action' => 'add')); ?> </li>
	</ul>
</div>
