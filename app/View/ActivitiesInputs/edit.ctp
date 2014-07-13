<div class="activitiesInputs form">
<?php echo $this->Form->create('ActivitiesInput'); ?>
	<fieldset>
		<legend><?php echo __('Edit Activities Input'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('activity_id');
		echo $this->Form->input('input_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
