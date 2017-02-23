<div class="works form col-md-6">
<?php echo $this->Form->create('Work'); ?>
	<fieldset>
		<legend><?php echo __('Agregar Trabajo'); ?></legend>
	<?php
		echo $this->element('works-form');
	?>
	</fieldset>
	<br>
<?php 
	echo $this->element('alta-btn');
 ?>
</div>
