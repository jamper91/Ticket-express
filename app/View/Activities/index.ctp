<div class="activities index">
	<h2><?php echo __('Activities'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('event_id'); ?></th>
			<th><?php echo $this->Paginator->sort('shelf_id'); ?></th>
			<th><?php echo $this->Paginator->sort('func_nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('func_fechInicio'); ?></th>
			<th><?php echo $this->Paginator->sort('func_fechFinal'); ?></th>
			<th><?php echo $this->Paginator->sort('func_cortesia'); ?></th>
			<th><?php echo $this->Paginator->sort('func_estado'); ?></th>
			<th><?php echo $this->Paginator->sort('func_imagen'); ?></th>
			<th><?php echo $this->Paginator->sort('func_palaClaves'); ?></th>
			<th><?php echo $this->Paginator->sort('func_cantEntradas'); ?></th>
			<th><?php echo $this->Paginator->sort('func_cantAlerta'); ?></th>
			<th><?php echo $this->Paginator->sort('func_codigo'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($activities as $activity): ?>
	<tr>
		<td><?php echo h($activity['Activity']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($activity['Event']['id'], array('controller' => 'events', 'action' => 'view', $activity['Event']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($activity['Shelf']['id'], array('controller' => 'shelves', 'action' => 'view', $activity['Shelf']['id'])); ?>
		</td>
		<td><?php echo h($activity['Activity']['func_nombre']); ?>&nbsp;</td>
		<td><?php echo h($activity['Activity']['func_fechInicio']); ?>&nbsp;</td>
		<td><?php echo h($activity['Activity']['func_fechFinal']); ?>&nbsp;</td>
		<td><?php echo h($activity['Activity']['func_cortesia']); ?>&nbsp;</td>
		<td><?php echo h($activity['Activity']['func_estado']); ?>&nbsp;</td>
		<td><?php echo h($activity['Activity']['func_imagen']); ?>&nbsp;</td>
		<td><?php echo h($activity['Activity']['func_palaClaves']); ?>&nbsp;</td>
		<td><?php echo h($activity['Activity']['func_cantEntradas']); ?>&nbsp;</td>
		<td><?php echo h($activity['Activity']['func_cantAlerta']); ?>&nbsp;</td>
		<td><?php echo h($activity['Activity']['func_codigo']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $activity['Activity']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $activity['Activity']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $activity['Activity']['id']), array(), __('Are you sure you want to delete # %s?', $activity['Activity']['id'])); ?>
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

