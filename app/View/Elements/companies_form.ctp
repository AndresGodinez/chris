<?php  
		echo $this->Form->input('name', 
			array(
				'class'=>'form-control',
				'label'=>'Nombre',
				'placeholder'=>'Nombre'
				)
			);
		echo $this->Form->input('telephone', 
			array(
				'class'=>'form-control',
				'label'=>'Telefóno 1',
				'placeholder'=>'Telefóno 1'
				)
			);
		echo $this->Form->input('telephone2', 
			array(
				'class'=>'form-control',
				'label'=>'Telefóno 2',
				'placeholder'=>'Telefóno 2'
				)
			);
		echo $this->Form->input('address', 
			array(
				'class'=>'form-control',
				'label'=> 'Dirección',
				'placeholder'=>'Dirección',
				'rows'=>3
				)
			);
		echo $this->Form->input('RFC', 
			array(
				'class'=>'form-control',
				'label'=>'RFC',
				'placeholder'=>'RFC'
				)
			);
		echo $this->Form->input('mandated', 
			array(
				'class'=>'form-control',
				'label'=>'Encargado',
				'placeholder'=>'Encargado'
				)
			);
		echo $this->Form->input('mode_id', 
			array(
				'class'=>'form-control',
				'label'=>'Estado',
				)
			);
?>