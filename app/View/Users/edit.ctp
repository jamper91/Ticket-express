<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Edit User'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('usuario');
		echo $this->Form->input('password');
		echo $this->Form->input('estado');
		echo $this->Form->input('person_id');
		echo $this->Form->input('type_user_id');
		echo $this->Form->input('Authorization');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
