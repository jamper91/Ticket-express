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
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Activities Input'), array('action' => 'edit', $activitiesInput['ActivitiesInput']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Activities Input'), array('action' => 'delete', $activitiesInput['ActivitiesInput']['id']), array(), __('Are you sure you want to delete # %s?', $activitiesInput['ActivitiesInput']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Activities Inputs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Activities Input'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Activities'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Activity'), array('controller' => 'activities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Inputs'), array('controller' => 'inputs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Input'), array('controller' => 'inputs', 'action' => 'add')); ?> </li>
	</ul>
</div>
