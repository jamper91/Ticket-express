<div class="eventsHotels view">
<h2><?php echo __('Events Hotel'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($eventsHotel['EventsHotel']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Event'); ?></dt>
		<dd>
			<?php echo $this->Html->link($eventsHotel['Event']['id'], array('controller' => 'events', 'action' => 'view', $eventsHotel['Event']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hotel'); ?></dt>
		<dd>
			<?php echo $this->Html->link($eventsHotel['Hotel']['id'], array('controller' => 'hotels', 'action' => 'view', $eventsHotel['Hotel']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
