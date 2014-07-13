<div class="countries form">
<?php echo $this->Form->create('Country'); ?>
	<fieldset>
		<legend><?php echo __('Add Country'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Countries'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Departments'), array('controller' => 'departments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Department'), array('controller' => 'departments', 'action' => 'add')); ?> </li>
	</ul>
</div>
<script>
    $(document).ready(function(){
//        $("#CountryAddForm").submit(function (e){
//            e.preventDefault();
//            alert("llego");
//           //$("#CountryAddForm").ajaxForm({url: '/ticket_express/countries/add', type: 'post'}); 
//           $.post( "/ticket_express/countries/add", $( "#CountryAddForm" ).serialize() );
//        });
        
    });
</script>