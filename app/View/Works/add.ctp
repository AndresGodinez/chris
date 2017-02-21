<div class="works form col-md-6">
<?php echo $this->Form->create('Work'); ?>
	<fieldset>
		<legend><?php echo __('Agregar Trabajo'); ?></legend>
	<?php
		echo $this->element('works-form');
	?>
	</fieldset>
	<br>
<?php echo $this->Form->end(
	array('class'=>'btn btn-success',
		'label'=>'Alta')
	); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Works'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Statuses'), array('controller' => 'statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Status'), array('controller' => 'statuses', 'action' => 'add')); ?> </li>
	</ul>
</div>
