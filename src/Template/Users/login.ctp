<?php
echo $this->Flash->render('auth');
echo $this->Form->create();
echo $this->Form->input('username');
echo $this->Form->input('password');
echo $this->Form->button('Acessar');
echo $this->Form->end();