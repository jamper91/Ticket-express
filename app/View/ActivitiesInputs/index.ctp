<div class="activitiesInputs index">
	<h2><?php echo __('Activities Inputs'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('activity_id'); ?></th>
			<th><?php echo $this->Paginator->sort('input_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($activitiesInputs as $activitiesInput): ?>
	<tr>
		<td><?php echo h($activitiesInput['ActivitiesInput']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($activitiesInput['Activity']['id'], array('controller' => 'activities', 'action' => 'view', $activitiesInput['Activity']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($activitiesInput['Input']['id'], array('controller' => 'inputs', 'action' => 'view', $activitiesInput['Input']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $activitiesInput['ActivitiesInput']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $activitiesInput['ActivitiesInput']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $activitiesInput['ActivitiesInput']['id']), array(), __('Are you sure you want to delete # %s?', $activitiesInput['ActivitiesInput']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Activities Input'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Activities'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Activity'), array('controller' => 'activities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Inputs'), array('controller' => 'inputs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Input'), array('controller' => 'inputs', 'action' => 'add')); ?> </li>
	</ul>
</div>
