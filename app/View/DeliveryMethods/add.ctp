<div class="deliveryMethods form">
<?php echo $this->Form->create('DeliveryMethod'); ?>
	<fieldset>
		<legend><?php echo __('Add Delivery Method'); ?></legend>
	<?php
		echo $this->Form->input('descripcion');
		echo $this->Form->input('Input');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Delivery Methods'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Inputs'), array('controller' => 'inputs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Input'), array('controller' => 'inputs', 'action' => 'add')); ?> </li>
	</ul>
</div>
