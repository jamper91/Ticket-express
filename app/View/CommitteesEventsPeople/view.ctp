<div class="committeesEventsPeople view">
<h2><?php echo __('Committees Events Person'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($committeesEventsPerson['CommitteesEventsPerson']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Person'); ?></dt>
		<dd>
			<?php echo $this->Html->link($committeesEventsPerson['Person']['id'], array('controller' => 'people', 'action' => 'view', $committeesEventsPerson['Person']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Committees Event'); ?></dt>
		<dd>
			<?php echo $this->Html->link($committeesEventsPerson['CommitteesEvent']['id'], array('controller' => 'committees_events', 'action' => 'view', $committeesEventsPerson['CommitteesEvent']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
