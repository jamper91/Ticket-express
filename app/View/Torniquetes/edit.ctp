<div class="torniquetes form">
<?php echo $this->Form->create('Torniquete'); ?>
	<fieldset>
		<legend><?php echo __('Edit Torniquete'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('entrada');
		echo $this->Form->input('salida');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
