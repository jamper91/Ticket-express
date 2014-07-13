<div class="companiesEvents view">
<h2><?php echo __('Companies Event'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($companiesEvent['CompaniesEvent']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Company'); ?></dt>
		<dd>
			<?php echo $this->Html->link($companiesEvent['Company']['id'], array('controller' => 'companies', 'action' => 'view', $companiesEvent['Company']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Event'); ?></dt>
		<dd>
			<?php echo $this->Html->link($companiesEvent['Event']['id'], array('controller' => 'events', 'action' => 'view', $companiesEvent['Event']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Role Company'); ?></dt>
		<dd>
			<?php echo $this->Html->link($companiesEvent['RoleCompany']['id'], array('controller' => 'role_companies', 'action' => 'view', $companiesEvent['RoleCompany']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
