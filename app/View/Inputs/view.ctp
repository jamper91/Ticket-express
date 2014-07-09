<div class="inputs view">
<h2><?php echo __('Input'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($input['Input']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Input State'); ?></dt>
		<dd>
			<?php echo $this->Html->link($input['InputState']['id'], array('controller' => 'input_states', 'action' => 'view', $input['InputState']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Person'); ?></dt>
		<dd>
			<?php echo $this->Html->link($input['Person']['id'], array('controller' => 'people', 'action' => 'view', $input['Person']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Entr Imagen'); ?></dt>
		<dd>
			<?php echo h($input['Input']['entr_imagen']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Entr Titulo'); ?></dt>
		<dd>
			<?php echo h($input['Input']['entr_titulo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Entr FuenTitulo'); ?></dt>
		<dd>
			<?php echo h($input['Input']['entr_fuenTitulo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Entr TamaTitulo'); ?></dt>
		<dd>
			<?php echo h($input['Input']['entr_tamaTitulo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Entr Fecha'); ?></dt>
		<dd>
			<?php echo h($input['Input']['entr_fecha']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Entr FuenFecha'); ?></dt>
		<dd>
			<?php echo h($input['Input']['entr_fuenFecha']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Entr TamaFecha'); ?></dt>
		<dd>
			<?php echo h($input['Input']['entr_tamaFecha']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Entr FuenCliente'); ?></dt>
		<dd>
			<?php echo h($input['Input']['entr_fuenCliente']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Entr TamaCliente'); ?></dt>
		<dd>
			<?php echo h($input['Input']['entr_tamaCliente']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Entr Direccion'); ?></dt>
		<dd>
			<?php echo h($input['Input']['entr_direccion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Entr FuenDireccion'); ?></dt>
		<dd>
			<?php echo h($input['Input']['entr_fuenDireccion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Entr TamaDireccion'); ?></dt>
		<dd>
			<?php echo h($input['Input']['entr_tamaDireccion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Entr Codigo'); ?></dt>
		<dd>
			<?php echo h($input['Input']['entr_codigo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Entr Identificador'); ?></dt>
		<dd>
			<?php echo h($input['Input']['entr_identificador']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Entr Impreso'); ?></dt>
		<dd>
			<?php echo h($input['Input']['entr_impreso']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Events Registration Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($input['EventsRegistrationType']['id'], array('controller' => 'events_registration_types', 'action' => 'view', $input['EventsRegistrationType']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Input'), array('action' => 'edit', $input['Input']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Input'), array('action' => 'delete', $input['Input']['id']), array(), __('Are you sure you want to delete # %s?', $input['Input']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Inputs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Input'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Input States'), array('controller' => 'input_states', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Input State'), array('controller' => 'input_states', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Events Registration Types'), array('controller' => 'events_registration_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Events Registration Type'), array('controller' => 'events_registration_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Activities'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Activity'), array('controller' => 'activities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Delivery Methods'), array('controller' => 'delivery_methods', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Delivery Method'), array('controller' => 'delivery_methods', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Activities'); ?></h3>
	<?php if (!empty($input['Activity'])): ?>
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
	<?php foreach ($input['Activity'] as $activity): ?>
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
<div class="related">
	<h3><?php echo __('Related Delivery Methods'); ?></h3>
	<?php if (!empty($input['DeliveryMethod'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($input['DeliveryMethod'] as $deliveryMethod): ?>
		<tr>
			<td><?php echo $deliveryMethod['id']; ?></td>
			<td><?php echo $deliveryMethod['descripcion']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'delivery_methods', 'action' => 'view', $deliveryMethod['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'delivery_methods', 'action' => 'edit', $deliveryMethod['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'delivery_methods', 'action' => 'delete', $deliveryMethod['id']), array(), __('Are you sure you want to delete # %s?', $deliveryMethod['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Delivery Method'), array('controller' => 'delivery_methods', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
