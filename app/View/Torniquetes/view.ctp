<div class="torniquetes view">
<h2><?php echo __('Torniquete'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($torniquete['Torniquete']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Entrada'); ?></dt>
		<dd>
			<?php echo h($torniquete['Torniquete']['entrada']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Salida'); ?></dt>
		<dd>
			<?php echo h($torniquete['Torniquete']['salida']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Torniquete'), array('action' => 'edit', $torniquete['Torniquete']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Torniquete'), array('action' => 'delete', $torniquete['Torniquete']['id']), array(), __('Are you sure you want to delete # %s?', $torniquete['Torniquete']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Torniquetes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Torniquete'), array('action' => 'add')); ?> </li>
	</ul>
</div>
