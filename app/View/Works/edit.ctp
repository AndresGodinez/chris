<div class="works form col-md-6">
<?php echo $this->Form->create('Work'); ?>
	<fieldset>
		<legend><?php echo 'Actualizar Trabajo'; ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->element('works-form');
	?>
	</fieldset>
	<br>
<?php echo $this->Form->end(array('label'=>'Actualizar', 'class'=>'btn btn-success')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Work.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Work.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Works'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Statuses'), array('controller' => 'statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Status'), array('controller' => 'statuses', 'action' => 'add')); ?> </li>
	</ul>
</div>
