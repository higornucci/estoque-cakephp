<h1>Cadastrar usuário</h1>
<?php
echo $this->Form->create($user,['action' => 'salvar']);
echo $this->Form->input('username');
echo $this->Form->input('password');
echo $this->Form->button('Cadastrar');
echo $this->Form->end();
?>