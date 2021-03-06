<div class="countries index">
	<h2><?php echo __('Countries'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($countries as $country): ?>
	<tr>
		<td><?php echo h($country['Country']['id']); ?>&nbsp;</td>
		<td><?php echo h($country['Country']['nombre']); ?>&nbsp;</td>
		<td class="actions">
			
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $country['Country']['id'])); ?>
			<?php // echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $country['Country']['id']), array(), __('Are you sure you want to delete # %s?', $country['Country']['id'])); ?>
                    <a href="<?php echo $this->Html->url(array("controller" => "countries", "action" => "delete", $country['Country']['id'] )); ?>" tipo="borrar" redi="<?php echo $this->Html->url(array("controller" => "countries", "action" => "index")); ?>">Eliminar</a>
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

