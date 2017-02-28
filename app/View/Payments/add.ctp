<div class="payments form col-md-6">
<?php echo $this->Form->create('Payment'); ?>
	<fieldset>
		<legend><?php echo 'Agregar Pago'; ?></legend>
	<?php
		echo $this->element('payments-form')
	?>
	</fieldset>
	<br>
<?php echo $this->Form->end(array('label'=>'Alta', 'class'=>'btn btn-success')); ?>
</div>
