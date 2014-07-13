<div class="activitiesInputs view">
<h2><?php echo __('Activities Input'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($activitiesInput['ActivitiesInput']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Activity'); ?></dt>
		<dd>
			<?php echo $this->Html->link($activitiesInput['Activity']['id'], array('controller' => 'activities', 'action' => 'view', $activitiesInput['Activity']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Input'); ?></dt>
		<dd>
			<?php echo $this->Html->link($activitiesInput['Input']['id'], array('controller' => 'inputs', 'action' => 'view', $activitiesInput['Input']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>

