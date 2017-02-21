<?php
		echo $this->Form->input('name',
			array(
				'class'=>'form-control',
				'label'=>'Nombre Completo',
				'placeholder'=>'Nombre Completo'
				)
			);
		echo $this->Form->input('username',
			array(
				'class'=>'form-control',
				'label'=>'Nombre de Usuario',
				'placeholder'=>'Nombre de Usuario'
				)
			);
		echo $this->Form->input('email',
			array(
				'class'=>'form-control',
				'label'=>'E-mail',
				'placeholder'=>'Email'

				)
			);

		echo $this->Form->input('role_id',
			array(
				'class'=>'form-control',
				'label'=>'Role'
				)
			);
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
		echo $this->Form->input('gender_id',
			array(
				'class'=>'form-control',
				'label'=>'Genero'
				)
			);
		echo $this->Form->input('address',
			array(
				'class'=>'form-control',
				'label'=>'Dirección',
				'placeholder'=>'Dirección'
				)
			);
		echo $this->Form->input('telephone',
			array(
				'class'=>'form-control',
				'label'=>'Telefóno',
				'placeholder'=>'Telefóno'
				)
			);
		echo $this->Form->input('extension',
			array(
				'class'=>'form-control',
				'label'=>'Extensión',
				'placeholder'=>'Extensión'
				)
			);
		echo $this->Form->input('foto');
		echo $this->Form->input('foto_dir');
		echo $this->Form->input('job_id',
			array(
				'class'=>'form-control',
				'label'=>'Puesto'
				)
			);
		echo $this->Form->input('departament_id',
			array(
				'class'=>'form-control',
				'label'=>'Departamento'
				)
			);
?>