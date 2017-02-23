<div class="companies form col-md-6">
<?php echo $this->Form->create('Company'); ?>
	<fieldset>
		<legend><?php echo 'Nueva Empresa'; ?></legend>

	<?php
		echo $this->element('companies_form');
	?>
	<br>
	</fieldset>
<?php echo $this->Form->end(
		array(
			'label'=>'Alta',
			'class'=> 'btn btn-success'
			)
		); ?>

</div>

