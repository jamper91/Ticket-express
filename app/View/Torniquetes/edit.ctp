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
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Torniquete.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Torniquete.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Torniquetes'), array('action' => 'index')); ?></li>
	</ul>
</div>
