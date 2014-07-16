<div class="deliveryMethodsInputs view">
<h2><?php echo __('Delivery Methods Input'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($deliveryMethodsInput['DeliveryMethodsInput']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Delivery Method'); ?></dt>
		<dd>
			<?php echo $this->Html->link($deliveryMethodsInput['DeliveryMethod']['id'], array('controller' => 'delivery_methods', 'action' => 'view', $deliveryMethodsInput['DeliveryMethod']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Input'); ?></dt>
		<dd>
			<?php echo $this->Html->link($deliveryMethodsInput['Input']['id'], array('controller' => 'inputs', 'action' => 'view', $deliveryMethodsInput['Input']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
