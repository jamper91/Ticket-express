<div class="permissionsUsers index">
	<h2><?php echo __('Permissions Users'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('authorization_id'); ?></th>
			<th><?php echo $this->Paginator->sort('estado'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($permissionsUsers as $permissionsUser): ?>
	<tr>
		<td><?php echo h($permissionsUser['PermissionsUser']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($permissionsUser['User']['id'], array('controller' => 'users', 'action' => 'view', $permissionsUser['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($permissionsUser['Authorization']['id'], array('controller' => 'authorizations', 'action' => 'view', $permissionsUser['Authorization']['id'])); ?>
		</td>
		<td><?php echo h($permissionsUser['PermissionsUser']['estado']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $permissionsUser['PermissionsUser']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $permissionsUser['PermissionsUser']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $permissionsUser['PermissionsUser']['id']), array(), __('Are you sure you want to delete # %s?', $permissionsUser['PermissionsUser']['id'])); ?>
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
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
