<div class="torniquetes form">
<?php echo $this->Form->create('Torniquete'); ?>
	<fieldset>
		<legend><?php echo __('Add Torniquete'); ?></legend>
	<?php
		echo $this->Form->input('entrada');
		echo $this->Form->input('salida');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Torniquetes'), array('action' => 'index')); ?></li>
	</ul>
</div>
