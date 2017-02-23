<div class="users form col-md-6">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo 'Nuevo Usuario'; ?></legend>
	<?php
		echo $this->element('users-form');
		echo $this->Form->input('isActive',
			array(
				'class'=>'form-control',
				'label'=>'Activo',
				'type'=>'hidden',
				'value'=>1
				)
			);
	?>
	</fieldset>
	<br>
<?php 
	echo $this->element('alta-btn');
 ?>
</div>
