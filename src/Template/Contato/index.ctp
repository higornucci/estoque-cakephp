<h1>Formulario de contato</h1>
<?php
echo $this->Form->create($contato);
echo $this->Form->input('nome');
echo $this->Form->input('email');
echo $this->Form->input('msg');
echo $this->Form->button('enviar');
echo $this->Form->end();
?>