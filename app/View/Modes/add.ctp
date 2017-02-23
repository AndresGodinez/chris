<div class="modes form col-md-6">
<?php echo $this->Form->create('Mode'); ?>
	<fieldset>
		<legend><?php echo 'Agregar Status Empresa'; ?></legend>
	<?php
	/*
	modos realacionados con los status de las empresas
	*/
		echo $this->Form->input('name', array('class'=>'form-control', 'label'=>'Nombre del status', 'placeholder'=>'Nombre Status'));
	?>
	</fieldset>
	<br>
<?php echo $this->element('alta-btn'); ?>
</div>

