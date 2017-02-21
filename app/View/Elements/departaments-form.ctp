<?php 
	echo $this->Form->input('name', 
			array(
				'class'=>'form-control',
				'label'=>'Nombre',
				'placeholder'=>'Nombre'
				)
			);
		echo $this->Form->input('user_id', 
			array(
				'class'=>'form-control',
				'label'=>'Jefe Departamento'
				)
			);
		echo $this->Form->input('company_id', 
			array(
				'class'=>'form-control',
				'label'=>'Empresa'
				)
			);
		
?>