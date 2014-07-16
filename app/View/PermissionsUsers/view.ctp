<div class="permissionsUsers view">
<h2><?php echo __('Permissions User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($permissionsUser['PermissionsUser']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($permissionsUser['User']['id'], array('controller' => 'users', 'action' => 'view', $permissionsUser['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Authorization'); ?></dt>
		<dd>
			<?php echo $this->Html->link($permissionsUser['Authorization']['id'], array('controller' => 'authorizations', 'action' => 'view', $permissionsUser['Authorization']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado'); ?></dt>
		<dd>
			<?php echo h($permissionsUser['PermissionsUser']['estado']); ?>
			&nbsp;
		</dd>
	</dl>
</div>