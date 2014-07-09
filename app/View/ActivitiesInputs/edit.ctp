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
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ActivitiesInput.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('ActivitiesInput.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Activities Inputs'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Activities'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Activity'), array('controller' => 'activities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Inputs'), array('controller' => 'inputs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Input'), array('controller' => 'inputs', 'action' => 'add')); ?> </li>
	</ul>
</div>
