
 <?php
echo $this->Form->create('Individual');

echo $this->Form->input('nombres',array(
    'type' => 'text',
    'label' => 'Nombres',
    'class' => 'xxy'
));

echo $this->Form->input('documento',array(
    'type' => 'text',
    'label' => 'Documento'
));


echo $this->Form->end('Crear Individuo');
?>