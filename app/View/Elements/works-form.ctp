<?php
		echo $this->Form->input('folio',
			array(
				'class'=>'form-control',
				'label'=>'Folio',
				'placeholder'=>'Folio'
				));
		echo $this->Form->input('name',
			array(
				'class'=>'form-control',
				'label'=>'Nombre Cliente',
				'placeholder'=>'Nombre Cliente'
				));
		echo $this->Form->input('telephone',
			array(
				'class'=>'form-control',
				'label'=>'Telefóno',
				'placeholder'=>'Telefóno'
				));
		echo $this->Form->input('description',
			array(
				'class'=>'form-control',
				'label'=>'Descripción',
				'placeholder'=>'Descripción',
				'rows'=>3
				));
		echo $this->Form->input('status_id', array('class'=>'form-control', 'label'=>'Estatus'));
		
		echo $this->Form->input('foto');
		echo $this->Form->input('foto_dir');
?>