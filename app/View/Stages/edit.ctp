<div class="stages form">
<?php echo $this->Form->create('Stage'); ?>
	<fieldset>
		<legend><?php echo __('Edit Stage'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('city_id');
		echo $this->Form->input('esce_nombre');
		echo $this->Form->input('esce_direccion');
		echo $this->Form->input('esce_telefono');
		echo $this->Form->input('esce_mapa');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>