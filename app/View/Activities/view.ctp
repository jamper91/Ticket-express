<div class="activities view">
<h2><?php echo __('Activity'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($activity['Activity']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Event'); ?></dt>
		<dd>
			<?php echo $this->Html->link($activity['Event']['id'], array('controller' => 'events', 'action' => 'view', $activity['Event']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Shelf'); ?></dt>
		<dd>
			<?php echo $this->Html->link($activity['Shelf']['id'], array('controller' => 'shelves', 'action' => 'view', $activity['Shelf']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Func Nombre'); ?></dt>
		<dd>
			<?php echo h($activity['Activity']['func_nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Func FechInicio'); ?></dt>
		<dd>
			<?php echo h($activity['Activity']['func_fechInicio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Func FechFinal'); ?></dt>
		<dd>
			<?php echo h($activity['Activity']['func_fechFinal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Func Cortesia'); ?></dt>
		<dd>
			<?php echo h($activity['Activity']['func_cortesia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Func Estado'); ?></dt>
		<dd>
			<?php echo h($activity['Activity']['func_estado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Func Imagen'); ?></dt>
		<dd>
			<?php echo h($activity['Activity']['func_imagen']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Func PalaClaves'); ?></dt>
		<dd>
			<?php echo h($activity['Activity']['func_palaClaves']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Func CantEntradas'); ?></dt>
		<dd>
			<?php echo h($activity['Activity']['func_cantEntradas']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Func CantAlerta'); ?></dt>
		<dd>
			<?php echo h($activity['Activity']['func_cantAlerta']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Func Codigo'); ?></dt>
		<dd>
			<?php echo h($activity['Activity']['func_codigo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Activity'), array('action' => 'edit', $activity['Activity']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Activity'), array('action' => 'delete', $activity['Activity']['id']), array(), __('Are you sure you want to delete # %s?', $activity['Activity']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Activities'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Activity'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Shelves'), array('controller' => 'shelves', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shelf'), array('controller' => 'shelves', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Inputs'), array('controller' => 'inputs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Input'), array('controller' => 'inputs', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Inputs'); ?></h3>
	<?php if (!empty($activity['Input'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Input State Id'); ?></th>
		<th><?php echo __('Person Id'); ?></th>
		<th><?php echo __('Entr Imagen'); ?></th>
		<th><?php echo __('Entr Titulo'); ?></th>
		<th><?php echo __('Entr FuenTitulo'); ?></th>
		<th><?php echo __('Entr TamaTitulo'); ?></th>
		<th><?php echo __('Entr Fecha'); ?></th>
		<th><?php echo __('Entr FuenFecha'); ?></th>
		<th><?php echo __('Entr TamaFecha'); ?></th>
		<th><?php echo __('Entr FuenCliente'); ?></th>
		<th><?php echo __('Entr TamaCliente'); ?></th>
		<th><?php echo __('Entr Direccion'); ?></th>
		<th><?php echo __('Entr FuenDireccion'); ?></th>
		<th><?php echo __('Entr TamaDireccion'); ?></th>
		<th><?php echo __('Entr Codigo'); ?></th>
		<th><?php echo __('Entr Identificador'); ?></th>
		<th><?php echo __('Entr Impreso'); ?></th>
		<th><?php echo __('Events Registration Type Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($activity['Input'] as $input): ?>
		<tr>
			<td><?php echo $input['id']; ?></td>
			<td><?php echo $input['input_state_id']; ?></td>
			<td><?php echo $input['person_id']; ?></td>
			<td><?php echo $input['entr_imagen']; ?></td>
			<td><?php echo $input['entr_titulo']; ?></td>
			<td><?php echo $input['entr_fuenTitulo']; ?></td>
			<td><?php echo $input['entr_tamaTitulo']; ?></td>
			<td><?php echo $input['entr_fecha']; ?></td>
			<td><?php echo $input['entr_fuenFecha']; ?></td>
			<td><?php echo $input['entr_tamaFecha']; ?></td>
			<td><?php echo $input['entr_fuenCliente']; ?></td>
			<td><?php echo $input['entr_tamaCliente']; ?></td>
			<td><?php echo $input['entr_direccion']; ?></td>
			<td><?php echo $input['entr_fuenDireccion']; ?></td>
			<td><?php echo $input['entr_tamaDireccion']; ?></td>
			<td><?php echo $input['entr_codigo']; ?></td>
			<td><?php echo $input['entr_identificador']; ?></td>
			<td><?php echo $input['entr_impreso']; ?></td>
			<td><?php echo $input['events_registration_type_id']; ?></td>
			<td class="actions">
				
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'inputs', 'action' => 'edit', $input['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'inputs', 'action' => 'delete', $input['id']), array(), __('Are you sure you want to delete # %s?', $input['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Input'), array('controller' => 'inputs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
