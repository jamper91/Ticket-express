<div class="eventsPayments view">
<h2><?php echo __('Events Payment'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($eventsPayment['EventsPayment']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Payment'); ?></dt>
		<dd>
			<?php echo $this->Html->link($eventsPayment['Payment']['id'], array('controller' => 'payments', 'action' => 'view', $eventsPayment['Payment']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Event'); ?></dt>
		<dd>
			<?php echo $this->Html->link($eventsPayment['Event']['id'], array('controller' => 'events', 'action' => 'view', $eventsPayment['Event']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
