<div class="shelves view">
<h2><?php echo __('Shelf'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($shelf['Shelf']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Location'); ?></dt>
		<dd>
			<?php echo $this->Html->link($shelf['Location']['id'], array('controller' => 'locations', 'action' => 'view', $shelf['Location']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Esta Nombre'); ?></dt>
		<dd>
			<?php echo h($shelf['Shelf']['esta_nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Esta Estado'); ?></dt>
		<dd>
			<?php echo h($shelf['Shelf']['esta_estado']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Shelf'), array('action' => 'edit', $shelf['Shelf']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Shelf'), array('action' => 'delete', $shelf['Shelf']['id']), array(), __('Are you sure you want to delete # %s?', $shelf['Shelf']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Shelves'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shelf'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Locations'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Activities'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Activity'), array('controller' => 'activities', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Activities'); ?></h3>
	<?php if (!empty($shelf['Activity'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Event Id'); ?></th>
		<th><?php echo __('Shelf Id'); ?></th>
		<th><?php echo __('Func Nombre'); ?></th>
		<th><?php echo __('Func FechInicio'); ?></th>
		<th><?php echo __('Func FechFinal'); ?></th>
		<th><?php echo __('Func Cortesia'); ?></th>
		<th><?php echo __('Func Estado'); ?></th>
		<th><?php echo __('Func Imagen'); ?></th>
		<th><?php echo __('Func PalaClaves'); ?></th>
		<th><?php echo __('Func CantEntradas'); ?></th>
		<th><?php echo __('Func CantAlerta'); ?></th>
		<th><?php echo __('Func Codigo'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($shelf['Activity'] as $activity): ?>
		<tr>
			<td><?php echo $activity['id']; ?></td>
			<td><?php echo $activity['event_id']; ?></td>
			<td><?php echo $activity['shelf_id']; ?></td>
			<td><?php echo $activity['func_nombre']; ?></td>
			<td><?php echo $activity['func_fechInicio']; ?></td>
			<td><?php echo $activity['func_fechFinal']; ?></td>
			<td><?php echo $activity['func_cortesia']; ?></td>
			<td><?php echo $activity['func_estado']; ?></td>
			<td><?php echo $activity['func_imagen']; ?></td>
			<td><?php echo $activity['func_palaClaves']; ?></td>
			<td><?php echo $activity['func_cantEntradas']; ?></td>
			<td><?php echo $activity['func_cantAlerta']; ?></td>
			<td><?php echo $activity['func_codigo']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'activities', 'action' => 'view', $activity['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'activities', 'action' => 'edit', $activity['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'activities', 'action' => 'delete', $activity['id']), array(), __('Are you sure you want to delete # %s?', $activity['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Activity'), array('controller' => 'activities', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
