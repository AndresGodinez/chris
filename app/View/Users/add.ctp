<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Add User'); ?></legend>
	<?php
		echo $this->Form->input('username');
		echo $this->Form->input('email');
		echo $this->Form->input('isActive');
		echo $this->Form->input('role_id');
		echo $this->Form->input('fecha_nac', 
			array(
				'label'=>'Fecha Nacimiento',
				'dateFormat'=>'DMY',
				'minYear'=>date('Y')-70,
				'maxYear'=>date('Y')-18,
				'class'=>'form-control',
				'type'=>'date'
			
			)
		);
		echo $this->Form->input('gender_id');
		echo $this->Form->input('address');
		echo $this->Form->input('telephone');
		echo $this->Form->input('extension');
		echo $this->Form->input('foto');
		echo $this->Form->input('foto_dir');
		echo $this->Form->input('job_id');
		echo $this->Form->input('departament_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Roles'), array('controller' => 'roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Role'), array('controller' => 'roles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Genders'), array('controller' => 'genders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Gender'), array('controller' => 'genders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobs'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Departaments'), array('controller' => 'departaments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Departament'), array('controller' => 'departaments', 'action' => 'add')); ?> </li>
	</ul>
</div>
