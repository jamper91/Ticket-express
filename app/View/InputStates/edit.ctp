<div class="inputStates form">
<?php echo $this->Form->create('InputState'); ?>
	<fieldset>
		<legend><?php echo __('Edit Input State'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('InputState.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('InputState.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Input States'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Inputs'), array('controller' => 'inputs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Input'), array('controller' => 'inputs', 'action' => 'add')); ?> </li>
	</ul>
</div>
