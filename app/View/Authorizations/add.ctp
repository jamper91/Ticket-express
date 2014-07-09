<div class="authorizations form">
<?php echo $this->Form->create('Authorization'); ?>
	<fieldset>
		<legend><?php echo __('Add Authorization'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('User');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Authorizations'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Permissions Users'), array('controller' => 'permissions_users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Permissions User'), array('controller' => 'permissions_users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
