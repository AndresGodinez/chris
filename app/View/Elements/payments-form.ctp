<?php
		echo $this->Form->input('company_id',
			array(
				'class'=>'form-control',
				'label'=>'Empresa',
				)
			);
		echo $this->Form->input('fecha_pago',
			array(
				'class'=>'form-control',
				'label'=>'Fecha de pago',
				)
			);
		echo $this->Form->input('over',
			array(
				'class'=>'form-control',
				'label'=>'Finaliza',
				)
			);
		echo $this->Form->input('importe',
			array(
				'class'=>'form-control',
				'label'=>'Importe',
				)
			);
?>